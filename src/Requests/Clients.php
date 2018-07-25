<?php

namespace nikitin\YClientsSDK\Requests;


use nikitin\YClientsSDK\Requests\Traits\Company;
use nikitin\YClientsSDK\Requests\Traits\Paginated;

class Clients extends Request
{
    use Company, Paginated;


    protected function request()
    {
        $params = [];

        if (!is_array($this->pages)) {
            $this->pages = [$this->pages];
        }

        $params['count'] = $this->countOnPage;
        $url = "clients/{$this->company_id}";

        return $this->paginateRequest($url, $params);
    }



}
