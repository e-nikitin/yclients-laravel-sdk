<?php

namespace nikitin\YClientsSDK\Requests;

use nikitin\YClientsSDK\Requests\Traits\PaginatedWithoutCount;

class Companies extends Request
{
    use PaginatedWithoutCount;

    public function __construct()
    {
        $this->params['my'] = 1;
        $this->params['show_groups'] = 1;
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return \Illuminate\Support\Collection
     */
    protected function request()
    {
        return $this->paginateRequest('companies', 'get', true);
    }
}
