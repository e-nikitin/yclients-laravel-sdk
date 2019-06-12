<?php

namespace nikitin\YClientsSDK\Requests\Visits;

use nikitin\YClientsSDK\Requests\Request;

class VisitDetails extends Request
{
    protected $groupId;
    protected $recordId;
    protected $visitId;

    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;

        return $this;
    }

    public function setRecordId($recordId)
    {
        $this->recordId = $recordId;

        return $this;
    }

    public function setVisitId($visitId)
    {
        $this->visitId = $visitId;

        return $this;
    }

    protected function request()
    {
        return $this->requestApi("visit/details/{$this->groupId}/{$this->recordId}/{$this->visitId}");
    }
}
