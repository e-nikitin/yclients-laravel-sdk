<?php

namespace nikitin\YClientsSDK\Requests;


use nikitin\YClientsSDK\Requests\Traits\Company;

class Clients extends Request
{
    use Company;

    protected $countOnPage = 300;
    protected $pages = [1];

    public function setCountOnPage(int $countOnPage)
    {
        $this->countOnPage = $countOnPage;
        return $this;
    }

    /**
     * @param array|string $pageNumber
     * @return $this
     */
    public function setPage($pageNumber)
    {
        $this->pages = $pageNumber;
        return $this;
    }

    public function eachAllClients(callable $function)
    {
        while (true) {
            $result = $this->get();
            $data = collect($result->get('data'));
            $nextPage = $result->get('next_page');

            if ($data->isEmpty())
                break;
            $function($data);

            if (empty($nextPage))
                break;

            $this->setPage($nextPage);
        }
    }

    protected function request()
    {
        $params = [];

        if (!is_array($this->pages)) {
            $this->pages = [$this->pages];
        }

        $params['count'] = $this->countOnPage;

        $result = [];
        $result['count'] = 0;
        $result['data'] = [];

        foreach ($this->pages as $page) {
            $params['page'] = $page;
            $url = "clients/{$this->company_id}";

            $tmp = $this->requestApi($url, $params);
            $result['count'] = $tmp->get('count');
            $result['data'][] = $tmp->get('data');
        }

        $result['data'] = collect($result['data'])->collapse()->all();
        $result['next_page'] = $this->countNextData($result['count']);

        return collect($result);
    }

    /**
     * @param int $countClients
     * @return mixed|null
     */
    protected function countNextData($countClients)
    {
        $countPages = (int)round($countClients / $this->countOnPage, 0, PHP_ROUND_HALF_UP);
        $currPage = last($this->pages);

        if ($currPage >= $countPages)
            return null;

        return ++$currPage;

    }

}
