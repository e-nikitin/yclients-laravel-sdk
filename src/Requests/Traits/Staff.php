<?php

namespace nikitin\YClientsSDK\Requests\Traits;


trait Staff
{
    /**
     * @var int
     */
    protected $staffId;

    /**
     * @param int $staffId
     * @return $this
     */
    public function setStaffId($staffId){
        $this->staffId = $staffId;
        return $this;
    }

}