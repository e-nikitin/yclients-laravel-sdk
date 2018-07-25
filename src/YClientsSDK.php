<?php

namespace nikitin\YClientsSDK;


use Illuminate\Http\Request;
use nikitin\YClientsSDK\Requests\Authorization;
use nikitin\YClientsSDK\Requests\Clients;
use nikitin\YClientsSDK\Requests\Companies;
use nikitin\YClientsSDK\Requests\Goods;
use nikitin\YClientsSDK\Requests\Records;
use nikitin\YClientsSDK\Requests\Salons;
use nikitin\YClientsSDK\Requests\ServiceCategory;
use nikitin\YClientsSDK\Requests\Services;
use nikitin\YClientsSDK\Requests\Staff;
use nikitin\YClientsSDK\Requests\Visits\VisitDetails;
use nikitin\YClientsSDK\Requests\Visits\Visits;

class YClientsSDK extends AbstractYClientsSDK
{
    /**
     * @return Authorization
     */
    public function authorization(){
        return new Authorization;
    }

    /**
     * @return Companies
     */
    public function companies(){
        return new Companies;
    }

    /**
     * @return Services
     */
    public function services(){
        return new Services;
    }

    /**
     * @return Staff
     */
    public function staff(){
        return new Staff;
    }

    /**
     * @return ServiceCategory
     */
    public function serviceCategory(){
        return new ServiceCategory;
    }

    /**
     * @return Records
     */
    public function records(){
        return new Records;
    }

    /**
     * @return Goods
     */
    public function goods(){
        return new Goods;
    }

    /**
     * @return Clients
     */
    public function clients(){
        return new Clients;
    }

    /**
     * @return Visits
     */
    public function visits(){
        return new Visits;
    }

    /**
     * @return VisitDetails
     */
    public function visitDetails(){
        return new VisitDetails();
    }

    /**
     * @return Salons
     */
    public function salons(){
        return new Salons;
    }

}