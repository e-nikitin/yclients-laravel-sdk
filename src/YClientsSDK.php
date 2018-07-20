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
    public function getCompanies(){
        return new Companies;
    }

    /**
     * @return Services
     */
    public function getServices(){
        return new Services;
    }

    /**
     * @return Staff
     */
    public function getStaff(){
        return new Staff;
    }

    /**
     * @return ServiceCategory
     */
    public function getServiceCategory(){
        return new ServiceCategory;
    }

    /**
     * @return Records
     */
    public function getRecords(){
        return new Records;
    }

    /**
     * @return Goods
     */
    public function getGoods(){
        return new Goods;
    }

    /**
     * @return Clients
     */
    public function getClients(){
        return new Clients;
    }

    /**
     * @return Visits
     */
    public function getVisits(){
        return new Visits;
    }

    /**
     * @return Salons
     */
    public function getSalons(){
        return new Salons;
    }

}