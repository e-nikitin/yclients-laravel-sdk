<?php


namespace nikitin\YClientsSDK\Requests;


class Companies extends Request
{

    protected $salonId;

    public function setSalonId($salonId){
        $this->salonId = $salonId;
        return $this;
    }

    protected function request()
    {
        $params = [];
        if ($this->salonId)
            $params['group_id'] = $this->salonId;

        return $this->requestApi('companies', $params, 'get', false);
    }
}