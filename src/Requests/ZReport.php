<?php

namespace googlogmob\YClientsSDK\Requests;

use googlogmob\YClientsSDK\Requests\Traits\Company;
use googlogmob\YClientsSDK\Requests\Traits\DatesPeriod;
use googlogmob\YClientsSDK\Requests\Traits\Master;
use Illuminate\Support\Collection;

class ZReport extends Request
{
    use Company,
        DatesPeriod,
        Master;


    /**
     * @return Collection
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    protected function request(): Collection
    {
        return $this->requestApi("reports/z_report/{$this->company_id}");
    }
}
