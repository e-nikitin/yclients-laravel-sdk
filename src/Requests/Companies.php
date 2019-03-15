<?php


namespace nikitin\YClientsSDK\Requests;


use nikitin\YClientsSDK\Requests\Traits\PaginatedWithoutCount;

class Companies extends Request
{
    use PaginatedWithoutCount;

    public function setGroupId($groupId){
        $this->params['group_id'] = $groupId;
        return $this;
    }

    protected function request()
    {
        return $this->paginateRequest('companies', 'get', false);
    }
}