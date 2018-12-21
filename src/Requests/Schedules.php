<?php

namespace nikitin\YClientsSDK\Requests;

use Carbon\Carbon;
use nikitin\YClientsSDK\Requests\Traits\Company;
use nikitin\YClientsSDK\Requests\Traits\Staff;


class Schedules extends Request
{
    use Company, Staff;

    protected $startDate;
    protected $endDate;

    /**
     * @param Carbon $start
     * @return $this
     */
    public function setStartDate(Carbon $start){
        $this->startDate = $start->toDateString();
        return $this;
    }

    /**
     * @param Carbon $end
     * @return $this
     */
    public function setEndDate(Carbon $end){
        $this->endDate = $end->toDateString();
        return $this;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    protected function request()
    {
        return $this->requestApi("schedule/{$this->company_id}/{$this->staffId}/{$this->startDate}/{$this->endDate}");
    }

}