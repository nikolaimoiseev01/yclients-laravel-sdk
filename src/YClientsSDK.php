<?php

namespace googlogmob\YClientsSDK;

use googlogmob\YClientsSDK\Requests\Authorization;
use googlogmob\YClientsSDK\Requests\Clients;
use googlogmob\YClientsSDK\Requests\Companies;
use googlogmob\YClientsSDK\Requests\Documents;
use googlogmob\YClientsSDK\Requests\Goods;
use googlogmob\YClientsSDK\Requests\GoodsTransactions\TransactionsSearch;
use googlogmob\YClientsSDK\Requests\Groups;
use googlogmob\YClientsSDK\Requests\Records;
use googlogmob\YClientsSDK\Requests\Schedules;
use googlogmob\YClientsSDK\Requests\Seances;
use googlogmob\YClientsSDK\Requests\ServiceCategory;
use googlogmob\YClientsSDK\Requests\Services;
use googlogmob\YClientsSDK\Requests\Staff;
use googlogmob\YClientsSDK\Requests\Storages;
use googlogmob\YClientsSDK\Requests\Transactions\TransactionsByFilter;
use googlogmob\YClientsSDK\Requests\Users;
use googlogmob\YClientsSDK\Requests\Visits\VisitDetails;
use googlogmob\YClientsSDK\Requests\Visits\Visits;
use googlogmob\YClientsSDK\Requests\ZReport;

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

    /**
     * @return Users
     */
    public function users()
    {
        return new Users();
    }
}
