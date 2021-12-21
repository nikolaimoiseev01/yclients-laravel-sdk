<?php

namespace googlogmob\YClientsSDK\Requests;

use googlogmob\YClientsSDK\Requests\Filters\RecordsFilter;
use googlogmob\YClientsSDK\Requests\Traits\Company;
use googlogmob\YClientsSDK\Requests\Traits\Paginated;
use Illuminate\Support\Collection;

class Records extends Request
{
    use Company,
        Paginated,
        RecordsFilter;

    protected function request(): Collection
    {
        return $this->paginateRequest("records/{$this->company_id}");
    }
}
