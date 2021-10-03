<?php

namespace googlogmob\YClientsSDK\Requests;

use googlogmob\YClientsSDK\Requests\Traits\DatesPeriod;
use googlogmob\YClientsSDK\Requests\Traits\PaginatedWithoutCount;

class Abonements extends Request
{
    use PaginatedWithoutCount,
        DatesPeriod;

    protected $chainId;

    public function setChainId($chainId)
    {
        $this->chainId = $chainId;
        return $this;
    }

    protected function request()
    {
        return $this->paginateRequest("chain/{$this->chainId}/loyalty/abonements");
    }
}
