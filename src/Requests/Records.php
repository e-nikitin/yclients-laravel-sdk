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

    public function setChangedAfter(Carbon $changedAfter){
         $this->changedAfter = $changedAfter->format('Y-m-d\TH:i:s');
         return $this;
    }


    protected function request()
    {
        $params = [];
        if ($this->changedAfter)
            $params['changed_after'] = $this->changedAfter;

        return $this->paginateRequest("records/{$this->company_id}", $params);
    }
}