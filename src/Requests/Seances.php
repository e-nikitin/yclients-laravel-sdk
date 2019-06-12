<?php

namespace nikitin\YClientsSDK\Requests;

use nikitin\YClientsSDK\Requests\Traits\Company;
use nikitin\YClientsSDK\Requests\Traits\Date;
use nikitin\YClientsSDK\Requests\Traits\Staff;

class Seances extends Request
{
    use Company, Staff, Date;

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return \Illuminate\Support\Collection
     */
    protected function request()
    {
        return $this->requestApi("timetable/seances/{$this->company_id}/{$this->staffId}/{$this->date}");
    }
}
