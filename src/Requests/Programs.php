<?php

namespace googlogmob\YClientsSDK\Requests;

use googlogmob\YClientsSDK\Requests\Filters\ProgramsFilter;
use googlogmob\YClientsSDK\Requests\Traits\Company;
use Illuminate\Support\Collection;

class Programs extends Request
{
    use Company,
        ProgramsFilter;

    protected function request(): Collection
    {
        return $this->requestApi("company/{$this->company_id}/loyalty/programs/search");
    }
}
