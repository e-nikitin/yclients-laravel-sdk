<?php


namespace nikitin\YClientsSDK\Requests;


use nikitin\YClientsSDK\Requests\Traits\Company;

class ZReport extends Request
{
    use Company;
    /**
     * @return \Illuminate\Support\Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function request()
    {
        return $this->requestApi("reports/z_report/{$this->company_id}");
    }

}