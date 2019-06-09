<?php

namespace nikitin\YClientsSDK\Facades;

use Illuminate\Support\Facades\Facade;
use nikitin\YClientsSDK\Requests\Authorization;
use nikitin\YClientsSDK\Requests\Clients;
use nikitin\YClientsSDK\Requests\Companies;
use nikitin\YClientsSDK\Requests\Documents;
use nikitin\YClientsSDK\Requests\Goods;
use nikitin\YClientsSDK\Requests\GoodsTransactions\TransactionsSearch;
use nikitin\YClientsSDK\Requests\Records;
use nikitin\YClientsSDK\Requests\Groups;
use nikitin\YClientsSDK\Requests\Schedules;
use nikitin\YClientsSDK\Requests\Seances;
use nikitin\YClientsSDK\Requests\ServiceCategory;
use nikitin\YClientsSDK\Requests\Services;
use nikitin\YClientsSDK\Requests\Staff;
use nikitin\YClientsSDK\Requests\Transactions\TransactionsByFilter;
use nikitin\YClientsSDK\Requests\Visits\VisitDetails;
use nikitin\YClientsSDK\Requests\Visits\Visits;
use nikitin\YClientsSDK\Requests\ZReport;

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
 * @method static Documents documents
 * @method static Seances seances
 * @method static Schedules schedules
 * @method static ZReport zReport
 */
class YClientsSDK extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \nikitin\YClientsSDK\YClientsSDK::class;
    }

}