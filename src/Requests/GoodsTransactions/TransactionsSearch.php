<?php

namespace nikitin\YClientsSDK\Requests\GoodsTransactions;


use nikitin\YClientsSDK\Requests\Request;
use nikitin\YClientsSDK\Requests\Traits\Company;
use nikitin\YClientsSDK\Requests\Traits\DatesPeriod;
use nikitin\YClientsSDK\Requests\Traits\Document;
use nikitin\YClientsSDK\Requests\Traits\Paginated;

class TransactionsSearch extends Request
{
    use Company, Paginated, Document, DatesPeriod;

    protected function request()
    {
        return $this->paginateRequest("storages/transactions/{$this->company_id}");
    }

}