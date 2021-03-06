<?php

namespace googlogmob\YClientsSDK\Facades;

use googlogmob\YClientsSDK\Requests\GoodsCategories;
use Illuminate\Support\Facades\Facade;
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

/**
 * Class YClientsSDK.
 *
 * @method static Authorization authorization
 * @method static Companies companies
 * @method static Services services
 * @method static Staff staff
 * @method static ServiceCategory serviceCategory
 * @method static Records records
 * @method static Goods goods
 * @method static GoodsCategories goodsCategories
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
 * @method static Storages storages
 * @method static Users users
 */
class YClientsSDK extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \googlogmob\YClientsSDK\YClientsSDK::class;
    }
}
