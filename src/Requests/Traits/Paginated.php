<?php

namespace nikitin\YClientsSDK\Requests\Traits;


trait Paginated
{
    protected $countOnPage = 300;
    protected $pages = [1];

    /**
     * @param int $countOnPage
     * @return $this
     */
    public function setCountOnPage($countOnPage)
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

    /**
     * @param callable $function
     */
    public function each(callable $function)
    {
        $page = 1;
        while (true) {
            $result = $this->get();
            $data = collect($result->get('data'));

            $nextPage = ++$page;

            if ($data->isEmpty())
                break;

            $function($data);

            $this->setPage($nextPage);
        }
    }

    protected function paginateRequest($url, $params = [], $method='get', $auth=true){

        if (!is_array($this->pages)) {
            $this->pages = [$this->pages];
        }

        $params['count'] = $this->countOnPage;

        $result = [];
        $result['count'] = 0;
        $result['data'] = [];

        foreach ($this->pages as $page) {
            $params['page'] = $page;

            $tmp = $this->requestApi($url, $params, $method, $auth);
            $result['count'] = $tmp->get('count');

            $data = $tmp->get('data');
            if (empty($data))
                $data = $tmp;


            $result['data'][] = $data;
        }

        $result['data'] = collect($result['data'])->collapse()->all();
        $result['next_page'] = $this->countNextData($result['count']);

        return collect($result);
    }

    /**
     * @param int $countAllItems
     * @return mixed|null
     */
    protected function countNextData($countAllItems)
    {
        $countPages = (int)round($countAllItems / $this->countOnPage, 0, PHP_ROUND_HALF_UP);
        $currPage = last($this->pages);

        if ($currPage >= $countPages)
            return null;

        return ++$currPage;

    }

}