<?php

namespace googlogmob\YClientsSDK\Requests;

use googlogmob\YClientsSDK\Requests\Traits\Company;
use googlogmob\YClientsSDK\Requests\Traits\Paginated;

class Clients extends Request
{
    use Company, Paginated;

    protected function request()
    {
        return $this->paginateRequest("clients/{$this->company_id}");
    }
}
