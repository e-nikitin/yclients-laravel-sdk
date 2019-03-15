<?php

namespace nikitin\YClientsSDK\Requests;


use nikitin\YClientsSDK\Requests\Traits\Company;
use nikitin\YClientsSDK\Requests\Traits\PaginatedWithoutCount;

class Goods extends Request
{
    use Company, PaginatedWithoutCount;

    protected $goodId;

    public function setGoodId($goodId){
        $this->goodId = $goodId;
        return $this;
    }


    protected function request()
    {
        return $this->paginateRequest("goods/{$this->company_id}/{$this->goodId}");
    }
}