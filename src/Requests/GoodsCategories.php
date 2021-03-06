<?php


namespace googlogmob\YClientsSDK\Requests;


use googlogmob\YClientsSDK\Requests\Traits\Company;

class GoodsCategories extends Request
{
    use Company;

    public function request()
    {
        return $this->requestApi("company/{$this->company_id}/goods_categories");
    }
}