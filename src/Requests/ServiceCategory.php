<?php

namespace nikitin\YClientsSDK\Requests;

use nikitin\YClientsSDK\Requests\Traits\Company;

class ServiceCategory extends Request
{
    use Company;

    protected function request()
    {
        return $this->requestApi("service_categories/{$this->company_id}");
    }
}
