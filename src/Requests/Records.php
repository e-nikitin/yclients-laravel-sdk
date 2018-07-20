<?php

namespace nikitin\YClientsSDK\Requests;

use Carbon\Carbon;
use nikitin\YClientsSDK\Requests\Traits\Company;

class Records extends Request
{
    use Company;

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

        return $this->requestApi("records/{$this->company_id}", $params);
    }
}