<?php


namespace nikitin\YClientsSDK\Requests;


use nikitin\YClientsSDK\Requests\Traits\Company;

class Users extends Request
{
    use Company;

    /**
     * @return \Illuminate\Support\Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function request()
    {
        return $this->requestApi("company_users/{$this->company_id}");
    }

}