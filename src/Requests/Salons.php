<?php

namespace nikitin\YClientsSDK\Requests;


class Salons extends Request
{
    protected function request()
    {
        return $this->requestApi("groups");
    }
}