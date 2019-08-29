<?php

namespace nikitin\YClientsSDK\Requests;

use nikitin\YClientsSDK\Requests\Traits\Company;

class Storages extends Request
{
    use Company;

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return \Illuminate\Support\Collection
     */
    public function request()
    {
        return $this->requestApi("storages/{$this->company_id}");
    }
}
