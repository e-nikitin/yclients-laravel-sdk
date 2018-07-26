<?php

namespace nikitin\YClientsSDK\Requests;


use nikitin\YClientsSDK\Requests\Traits\Company;

class Goods extends Request
{
    use Company;

    protected $goodId;

    public function setGoodId($goodId){
        $this->goodId = $goodId;
        return $this;
    }


    protected function request()
    {
        return $this->requestApi("goods/{$this->company_id}/{$this->goodId}");
    }
}