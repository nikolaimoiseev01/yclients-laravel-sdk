<?php

namespace googlogmob\YClientsSDK\Requests\Traits;

/**
 * @property array $params
 */
trait Master
{

    public function setMasterId($masterId): self
    {
        $this->params['master_id'] = $masterId;
        return $this;
    }

}
