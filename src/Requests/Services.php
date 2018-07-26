<?php

namespace nikitin\YClientsSDK\Requests;


use nikitin\YClientsSDK\Requests\Traits\Company;

class Services extends Request
{
    use Company;

    protected function request()
    {
        return $this->requestApi("services/{$this->company_id}");
    }

}