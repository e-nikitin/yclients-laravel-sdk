<?php

namespace nikitin\YClientsSDK\Requests;


use nikitin\YClientsSDK\Requests\Traits\Company;

class Clients extends Request
{
    use Company;

    protected function request()
    {
        return $this->requestApi("records/{$this->company_id}");
    }

}