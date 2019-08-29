<?php

namespace nikitin\YClientsSDK;

use nikitin\YClientsSDK\Requests\Authorization;
use nikitin\YClientsSDK\Requests\Clients;
use nikitin\YClientsSDK\Requests\Companies;
use nikitin\YClientsSDK\Requests\Documents;
use nikitin\YClientsSDK\Requests\Goods;
use nikitin\YClientsSDK\Requests\GoodsTransactions\TransactionsSearch;
use nikitin\YClientsSDK\Requests\Groups;
use nikitin\YClientsSDK\Requests\Records;
use nikitin\YClientsSDK\Requests\Schedules;
use nikitin\YClientsSDK\Requests\Seances;
use nikitin\YClientsSDK\Requests\ServiceCategory;
use nikitin\YClientsSDK\Requests\Services;
use nikitin\YClientsSDK\Requests\Staff;
use nikitin\YClientsSDK\Requests\Storages;
use nikitin\YClientsSDK\Requests\Transactions\TransactionsByFilter;
use nikitin\YClientsSDK\Requests\Visits\VisitDetails;
use nikitin\YClientsSDK\Requests\Visits\Visits;
use nikitin\YClientsSDK\Requests\ZReport;

class YClientsSDK extends AbstractYClientsSDK
{
    /**
     * @return Authorization
     */
    public function authorization()
    {
        return new Authorization();
    }

    /**
     * @return Companies
     */
    public function companies()
    {
        return new Companies();
    }

    /**
     * @return Services
     */
    public function services()
    {
        return new Services();
    }

    /**
     * @return Staff
     */
    public function staff()
    {
        return new Staff();
    }

    /**
     * @return ServiceCategory
     */
    public function serviceCategory()
    {
        return new ServiceCategory();
    }

    /**
     * @return Records
     */
    public function records()
    {
        return new Records();
    }

    /**
     * @return Goods
     */
    public function goods()
    {
        return new Goods();
    }

    /**
     * @return Clients
     */
    public function clients()
    {
        return new Clients();
    }

    /**
     * @return Visits
     */
    public function visits()
    {
        return new Visits();
    }

    /**
     * @return VisitDetails
     */
    public function visitDetails()
    {
        return new VisitDetails();
    }

    /**
     * @return Groups
     */
    public function groups()
    {
        return new Groups();
    }

    /**
     * @return TransactionsByFilter
     */
    public function transactionsByFilter()
    {
        return new TransactionsByFilter();
    }

    /**
     * @return TransactionsSearch
     */
    public function goodsTransactionsSearch()
    {
        return new TransactionsSearch();
    }

    /**
     * @return Documents
     */
    public function documents()
    {
        return new Documents();
    }

    /**
     * @return Seances
     */
    public function seances()
    {
        return new Seances();
    }

    /**
     * @return Schedules
     */
    public function schedules()
    {
        return new Schedules();
    }

    /**
     * @return ZReport
     */
    public function zReport()
    {
        return new ZReport();
    }

    /**
     * @return Storages
     */
    public function storages()
    {
        return new Storages();
    }
}
