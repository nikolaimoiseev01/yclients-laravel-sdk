<?php

namespace googlogmob\YClientsSDK\Requests;

use googlogmob\YClientsSDK\Requests\Traits\Company;
use googlogmob\YClientsSDK\Requests\Traits\DatesPeriod;
use googlogmob\YClientsSDK\Requests\Traits\Staff;

class SalaryPeriod extends Request
{
    use Company, Staff, DatesPeriod;

    protected function request()
    {
        return $this->requestApi("/company/{$this->company_id}/salary/period/staff/{$this->staffId}");
    }
}