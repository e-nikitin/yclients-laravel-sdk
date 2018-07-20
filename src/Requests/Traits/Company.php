<?php

namespace nikitin\YClientsSDK\Requests\Traits;


trait Company
{
    protected $company_id;


    public function setCompany($company_id){
        $this->company_id = $company_id;
        return $this;
    }
}