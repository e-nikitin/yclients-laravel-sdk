<?php

namespace nikitin\YClientsSDK\Requests\Traits;

use Carbon\Carbon;

trait DatesPeriod
{
    /**
     * @param Carbon $startDate
     *
     * @return $this
     */
    public function setStartDate(Carbon $startDate)
    {
        $this->params['start_date'] = $startDate->toDateString();

        return $this;
    }

    /**
     * @param Carbon $endDate
     *
     * @return $this
     */
    public function setEndDate(Carbon $endDate)
    {
        $this->params['end_date'] = $endDate->toDateString();

        return $this;
    }
}
