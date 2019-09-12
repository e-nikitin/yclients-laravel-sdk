<?php

namespace nikitin\YClientsSDK\Requests;

use nikitin\YClientsSDK\Requests\Traits\Company;

class Staff extends Request
{
    use Company;

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return \Illuminate\Support\Collection
     */
    protected function request()
    {
        return $this->requestApi("staff/{$this->company_id}");
    }
}
