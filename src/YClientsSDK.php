<?php

namespace googlogmob\YClientsSDK;

use googlogmob\YClientsSDK\Requests\Abonements;
use googlogmob\YClientsSDK\Requests\Authorization;
use googlogmob\YClientsSDK\Requests\Clients;
use googlogmob\YClientsSDK\Requests\Companies;
use googlogmob\YClientsSDK\Requests\Documents;
use googlogmob\YClientsSDK\Requests\Goods;
use googlogmob\YClientsSDK\Requests\GoodsCategories;
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
    public function authorization(): Authorization
    {
        return new Authorization();
    }

    /**
     * @return Companies
     */
    public function companies(): Companies
    {
        return new Companies();
    }

    /**
     * @return Services
     */
    public function services(): Services
    {
        return new Services();
    }

    /**
     * @return Staff
     */
    public function staff(): Staff
    {
        return new Staff();
    }

    /**
     * @return ServiceCategory
     */
    public function serviceCategory(): ServiceCategory
    {
        return new ServiceCategory();
    }

    /**
     * @return Records
     */
    public function records(): Records
    {
        return new Records();
    }

    /**
     * @return Goods
     */
    public function goods(): Goods
    {
        return new Goods();
    }

    /**
     * @return GoodsCategories
     */
    public function goodsCategories(): GoodsCategories
    {
        return new GoodsCategories();
    }

    /**
     * @return Clients
     */
    public function clients(): Clients
    {
        return new Clients();
    }

    /**
     * @return Visits
     */
    public function visits(): Visits
    {
        return new Visits();
    }

    /**
     * @return VisitDetails
     */
    public function visitDetails(): VisitDetails
    {
        return new VisitDetails();
    }

    /**
     * @return Groups
     */
    public function groups(): Groups
    {
        return new Groups();
    }

    /**
     * @return TransactionsByFilter
     */
    public function transactionsByFilter(): TransactionsByFilter
    {
        return new TransactionsByFilter();
    }

    /**
     * @return TransactionsSearch
     */
    public function goodsTransactionsSearch(): TransactionsSearch
    {
        return new TransactionsSearch();
    }

    /**
     * @return Documents
     */
    public function documents(): Documents
    {
        return new Documents();
    }

    /**
     * @return Seances
     */
    public function seances(): Seances
    {
        return new Seances();
    }

    /**
     * @return Schedules
     */
    public function schedules(): Schedules
    {
        return new Schedules();
    }

    /**
     * @return ZReport
     */
    public function zReport(): ZReport
    {
        return new ZReport();
    }

    /**
     * @return Storages
     */
    public function storages(): Storages
    {
        return new Storages();
    }

    /**
     * @return Users
     */
    public function users(): Users
    {
        return new Users();
    }

    /**
     * @return Abonements
     */
    public function abonements(): Abonements
    {
        return new Abonements();
    }
}
