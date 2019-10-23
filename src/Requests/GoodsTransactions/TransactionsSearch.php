<?php

namespace googlogmob\YClientsSDK\Requests\GoodsTransactions;

use googlogmob\YClientsSDK\Requests\Request;
use googlogmob\YClientsSDK\Requests\Traits\Company;
use googlogmob\YClientsSDK\Requests\Traits\DatesPeriod;
use googlogmob\YClientsSDK\Requests\Traits\Document;
use googlogmob\YClientsSDK\Requests\Traits\Paginated;

class TransactionsSearch extends Request
{
    use Company, Paginated, Document, DatesPeriod;

    protected function request()
    {
        return $this->paginateRequest("storages/transactions/{$this->company_id}");
    }
}
