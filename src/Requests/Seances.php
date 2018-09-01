<?php

namespace nikitin\YClientsSDK\Requests;


use nikitin\YClientsSDK\Requests\Traits\Company;
use nikitin\YClientsSDK\Requests\Traits\Staff;
use nikitin\YClientsSDK\Requests\Traits\Date;

class Seances extends Request
{
    use Company, Staff, Date;

    /**
     * @return \Illuminate\Support\Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function request()
    {
        return $this->requestApi("timetable/seances/{$this->company_id}/{$this->staffId}/{$this->date}");
    }

}