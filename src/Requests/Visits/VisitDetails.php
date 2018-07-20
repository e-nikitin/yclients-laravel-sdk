<?php


namespace nikitin\YClientsSDK\Requests\Visits;

use nikitin\YClientsSDK\Requests\Request;

class VisitDetails extends Request
{
    protected $salonId;
    protected $recordId;
    protected $visitId;

    public function setSalonId($salonId){
        $this->salonId = $salonId;
        return $this;
    }

    public function setRecordId($recordId){
        $this->recordId = $recordId;
        return $this;
    }

    public function setVisitId($visitId){
        $this->visitId = $visitId;
        return $this;
    }

    protected function request()
    {
        return $this->requestApi("visit/details/{$this->salonId}/{$this->recordId}/{$this->visitId}");
    }
}