<?php

namespace nikitin\YClientsSDK\Requests\Transactions;


use nikitin\YClientsSDK\Requests\Request;
use nikitin\YClientsSDK\Requests\Traits\Company;
use nikitin\YClientsSDK\Requests\Traits\Paginated;

class TransactionsByFilter extends Request
{
    use Company, Paginated;


    protected function request()
    {
        $params = [];

        return $this->paginateRequest("transactions/{$this->company_id}");
    }

}