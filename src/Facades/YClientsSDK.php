<?php

namespace nikitin\YClientsSDK\Facades;

use Illuminate\Support\Facades\Facade;
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

/**
 * Class YClientsSDK
 * @package nikitin\YClientsSDK\Facades
 *
 * @method static Authorization authorization
 * @method static Companies getCompanies
 * @method static Services getServices
 * @method static Staff getStaff
 * @method static ServiceCategory getServiceCategory
 * @method static Records getRecords
 * @method static Goods getGoods
 * @method static Clients getClients
 * @method static Visits getVisits
 * @method static Salons getSalons
 */
class YClientsSDK extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \nikitin\YClientsSDK\YClientsSDK::class;
    }

}