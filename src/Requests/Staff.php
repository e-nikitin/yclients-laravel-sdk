<?php

namespace nikitin\YClientsSDK\Requests;

use nikitin\YClientsSDK\Requests\Traits\Company;

class Staff extends Request
{
    use Company;

    protected function request()
    {
        return $this->requestApi("staff/{$this->company_id}",[]);
    }

}