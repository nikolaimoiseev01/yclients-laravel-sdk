<?php

namespace googlogmob\YClientsSDK\Requests;

class Groups extends Request
{
    protected function request()
    {
        return $this->requestApi('groups');
    }
}
