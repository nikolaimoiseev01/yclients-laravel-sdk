<?php

namespace googlogmob\YClientsSDK\Requests;

use googlogmob\YClientsSDK\Requests\Traits\Company;
use googlogmob\YClientsSDK\Requests\Traits\DatesPeriod;
use googlogmob\YClientsSDK\Requests\Traits\Staff;

class SalaryBalance extends Request
{
    use Company, Staff, DatesPeriod;


    protected function request()
    {
        return $this->requestApi("/company/{$this->company_id}/salary/calculation/staff/{$this->staffId}");
    }
}