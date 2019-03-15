<?php

namespace nikitin\YClientsSDK\Requests\Traits;


trait PaginatedWithoutCount
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
        $this->params['count'] = $countOnPage;
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
        $this->setPage($page);
        while (true) {

            try {
                $result = $this->get();
            }catch (\Exception $e){
                $result = $this->get();
            }

            $data = collect($result->get('data'));

            $nextPage = ++$page;

            if ($data->isEmpty())
                break;

            $function($data);

            $this->setPage($nextPage);
        }
    }

    /**
     * @param $url
     * @param string $method
     * @param bool $auth
     * @return \Illuminate\Support\Collection
     */
    protected function paginateRequest($url, $method='get', $auth=true){

        if (!is_array($this->pages)) {
            $this->pages = [$this->pages];
        }
        $this->params['count'] = $this->countOnPage;
        //dd($this->countOnPage);

        $result = [];
        $result['data'] = [];

        foreach ($this->pages as $page) {
            $this->params['page'] = $page;
            $tmp = $this->requestApi($url, $method, $auth);
            
            $result['data'][] = $tmp;
        }

        $result['data'] = collect($result['data'])->collapse()->all();

        return collect($result);
    }

   

}