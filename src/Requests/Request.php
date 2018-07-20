<?php

namespace nikitin\YClientsSDK\Requests;


use GuzzleHttp\Client;
use Illuminate\Support\Collection;
use nikitin\YClientsSDK\Exceptions\RequestException;

abstract class Request
{

    protected $host = 'https://api.yclients.com/api/v1/';

    protected $account = 'default';
    // Auth
    protected $login;
    protected $password;
    protected $bearerToken;
    protected $userToken;


    public function __construct(){}

    // Execute request to yclients api
    abstract protected function request();

    /**
     * @return Collection
     * @throws RequestException
     */
    public function get()
    {
        $this->setAccountSettings();

        try {
            return $this->request();
        } catch (\Exception $e) {
            throw new RequestException($e->getMessage(), $e->getCode());
        }

    }

    /**
     * @param string $account
     * @return $this
     */
    public function on(string $account){
        $this->account = $account;
        return $this;
    }


    /**
     * @return Client
     */
    protected final function getHttpClient($auth = true)
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
     * @param array $params
     * @param string $method
     * @param bool $auth
     * @return \Illuminate\Support\Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected final function requestApi($url, $params = [], $method = 'get', $auth = true)
    {
        $method = strtolower($method);

        $options = [];
        $options['query'] = $params;

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
    protected final function setAccountSettings(){

        if (empty(config('yclients-laravel-sdk.accounts.'.$this->account)))
            throw new \Exception('Account '.$this->account.' is not exists in configuration');
        //Auth
        $this->login = config('yclients-laravel-sdk.accounts.'.$this->account.'.login');
        $this->password = config('yclients-laravel-sdk.accounts.'.$this->account.'.password');
        $this->bearerToken = config('yclients-laravel-sdk.accounts.'.$this->account.'.bearer_token');
        $this->userToken = config('yclients-laravel-sdk.accounts.'.$this->account.'.user_token');
    }


}