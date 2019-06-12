<?php

namespace nikitin\YClientsSDK\Requests;

class Groups extends Request
{
    protected function request()
    {
        return $this->requestApi('groups');
    }
}
