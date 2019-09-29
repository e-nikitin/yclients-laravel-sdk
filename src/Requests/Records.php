<?php

namespace nikitin\YClientsSDK\Requests;

use Carbon\Carbon;
use nikitin\YClientsSDK\Requests\Traits\Company;
use nikitin\YClientsSDK\Requests\Traits\Paginated;

class Records extends Request
{
    use Company, Paginated;

    /**
     * @var Carbon
     */
    protected $changedAfter;

    public function setChangedAfter(Carbon $changedAfter)
    {
        $this->params['changed_after'] = $changedAfter->format('Y-m-d\TH:i:s');

        return $this;
    }

    /**
     * @return $this
     */
    public function includeFinanceTransactions()
    {
        $this->params['include_finance_transactions'] = 1;

        return $this;
    }

    protected function request()
    {
        return $this->paginateRequest("records/{$this->company_id}");
    }
}
