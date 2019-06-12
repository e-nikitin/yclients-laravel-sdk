<?php

namespace nikitin\YClientsSDK\Requests;

use nikitin\YClientsSDK\Requests\Traits\Company;
use nikitin\YClientsSDK\Requests\Traits\Paginated;

class Clients extends Request
{
    use Company, Paginated;

    protected function request()
    {
        return $this->paginateRequest("clients/{$this->company_id}");
    }
}
