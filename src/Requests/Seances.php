<?php

namespace googlogmob\YClientsSDK\Requests;

use googlogmob\YClientsSDK\Requests\Traits\Company;
use googlogmob\YClientsSDK\Requests\Traits\Date;
use googlogmob\YClientsSDK\Requests\Traits\Staff;

class Seances extends Request
{
    use Company, Staff, Date;

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @return \Illuminate\Support\Collection
     */
    protected function request()
    {
        return $this->requestApi("timetable/seances/{$this->company_id}/{$this->staffId}/{$this->date}");
    }
}
