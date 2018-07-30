<?php

namespace nikitin\YClientsSDK\Facades;

use Illuminate\Support\Facades\Facade;
use nikitin\YClientsSDK\Requests\Authorization;
use nikitin\YClientsSDK\Requests\Clients;
use nikitin\YClientsSDK\Requests\Companies;
use nikitin\YClientsSDK\Requests\Goods;
use nikitin\YClientsSDK\Requests\GoodsTransactions\TransactionsSearch;
use nikitin\YClientsSDK\Requests\Records;
use nikitin\YClientsSDK\Requests\Groups;
use nikitin\YClientsSDK\Requests\ServiceCategory;
use nikitin\YClientsSDK\Requests\Services;
use nikitin\YClientsSDK\Requests\Staff;
use nikitin\YClientsSDK\Requests\Transactions\TransactionsByFilter;
use nikitin\YClientsSDK\Requests\Visits\VisitDetails;
use nikitin\YClientsSDK\Requests\Visits\Visits;

/**
 * Class YClientsSDK
 * @package nikitin\YClientsSDK\Facades
 *
 * @method static Authorization authorization
 * @method static Companies companies
 * @method static Services services
 * @method static Staff staff
 * @method static ServiceCategory serviceCategory
 * @method static Records records
 * @method static Goods goods
 * @method static Clients clients
 * @method static Visits visits
 * @method static VisitDetails visitDetails
 * @method static Groups groups
 * @method static TransactionsByFilter transactionsByFilter
 * @method static TransactionsSearch goodsTransactionsSearch
 */
class YClientsSDK extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \nikitin\YClientsSDK\YClientsSDK::class;
    }

}