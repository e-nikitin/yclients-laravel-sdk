<?php

namespace nikitin\YClientsSDK\Requests;

use nikitin\YClientsSDK\Requests\Traits\Company;

class Users extends Request
{
    use Company;

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return \Illuminate\Support\Collection
     */
    protected function request()
    {
        return $this->requestApi("company_users/{$this->company_id}");
    }
}
