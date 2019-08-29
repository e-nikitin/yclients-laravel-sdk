<?php


namespace nikitin\YClientsSDK\Requests;


use nikitin\YClientsSDK\Requests\Traits\Company;

class Storages extends Request
{
    use Company;

    /**
     * @return \Illuminate\Support\Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request()
    {
        return $this->requestApi("storages/{$this->company_id}");
    }

}