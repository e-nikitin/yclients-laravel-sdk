<?php

namespace nikitin\YClientsSDK\Requests\Traits;

trait Company
{
    protected $company_id;

    /**
     * @param $company_id
     *
     * @return $this
     */
    public function setCompany($company_id)
    {
        $this->company_id = $company_id;

        return $this;
    }
}
