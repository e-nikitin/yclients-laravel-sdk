<?php

namespace nikitin\YClientsSDK\Requests;


use GuzzleHttp\Client;
use GuzzleHttp\Pool;
use function GuzzleHttp\Promise\settle;
use function GuzzleHttp\Promise\unwrap;
use Illuminate\Support\Collection;
use nikitin\YClientsSDK\Exceptions\RequestException;
use Psr\Http\Message\ResponseInterface;

abstract class Request
{

    private $host = 'https://api.yclients.com/api/v1/';

    private $account = 'default';
    // Auth
    private $login;
    private $password;
    private $bearerToken;
    private $userToken;

    protected $params = [];


    public function __construct()
    {
    }

    // Execute request to yclients api
    abstract protected function request();

    /**
     * @return Collection
     * @throws RequestException
     */
    public final function get()
    {
        $this->setAccountSettings();

        try {
            return $this->request();
        } catch (\Exception $e) {
            throw new RequestException($e->getMessage(), $e->getCode());
        }

    }

    /**
     * @param string | array $account
     * @return $this
     * @throws \Exception
     */
    public function on($account)
    {
        if (!is_string($account) || !is_array($account))
            throw new \Exception('Argument account must be string or array');
        $this->account = $account;
        return $this;
    }

    /**
     * @param bool $auth
     * @return Client
     */
    private function getHttpClient($auth = true)
    {

        $authorization = "Bearer {$this->bearerToken}";
        if ($auth)
            $authorization .= ", User {$this->userToken}";

        return new Client([
            'base_uri' => $this->host,
            'headers' => [
                'Authorization' => $authorization,
            ]
        ]);
    }

    /**
     * @param $url
     * @param string $method
     * @param bool $auth
     * @return \Illuminate\Support\Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected final function requestApi($url, $method = 'get', $auth = true)
    {
        $method = strtolower($method);

        $options = [];
        $options['query'] = $this->params;

        //
        if (strtolower($url) == 'auth') {
            $options['form_params'] =
                [
                    'login' => $this->login,
                    'password' => $this->password
                ];
        }

        $client = $this->getHttpClient($auth);
        $r = $client->request($method, $url, $options);

        return collect(json_decode($r->getBody()->getContents(), true));
    }


    /**
     * @throws \Exception
     */
    private function setAccountSettings() : void
    {
        if (is_array($this->account)){
            $this->login = array_get($this->account, 'login');
            $this->password = array_get($this->account, 'password');
            $this->bearerToken = array_get($this->account, 'bearer_token');
            $this->userToken = array_get($this->account, 'user_token');
        }else {
            if (empty(config('yclients-laravel-sdk.accounts.' . $this->account)))
                throw new \Exception('Account ' . $this->account . ' is not exists in configuration');
            //Auth
            $this->login = config('yclients-laravel-sdk.accounts.' . $this->account . '.login');
            $this->password = config('yclients-laravel-sdk.accounts.' . $this->account . '.password');
            $this->bearerToken = config('yclients-laravel-sdk.accounts.' . $this->account . '.bearer_token');
            $this->userToken = config('yclients-laravel-sdk.accounts.' . $this->account . '.user_token');
        }

    }


}
