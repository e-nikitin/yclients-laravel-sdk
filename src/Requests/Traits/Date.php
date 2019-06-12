<?php

namespace nikitin\YClientsSDK\Requests\Traits;

use Carbon\Carbon;

trait Date
{
    /**
     * @var string
     */
    protected $date;

    /**
     * @param Carbon $date
     *
     * @return $this
     */
    public function setDate(Carbon $date)
    {
        $this->date = $date->toDateString();

        return $this;
    }
}
