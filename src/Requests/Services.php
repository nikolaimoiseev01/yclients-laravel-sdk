<?php

namespace googlogmob\YClientsSDK\Requests;

use googlogmob\YClientsSDK\Requests\Traits\Company;
use googlogmob\YClientsSDK\Requests\Traits\Paginated;

class Services extends Request
{
    use Company,
        Paginated;

    protected function request()
    {
        return $this->paginateRequest("services/{$this->company_id}");
    }
}
