<?php

namespace googlogmob\YClientsSDK\Requests\Filters;

use Carbon\Carbon;

/**
 * @property array $params
 */
trait RecordsFilter
{
    public function setStartDate(Carbon $startDate): self
    {
        $this->params['start_date'] = $startDate->toDateString();

        return $this;
    }

    public function setEndDate(Carbon $endDate): self
    {
        $this->params['end_date'] = $endDate->toDateString();

        return $this;
    }

    public function setCreatedAfter(Carbon $createdAfter): self
    {
        $this->params['c_start_date'] = $createdAfter->toDateString();

        return $this;
    }

    public function setCreatedBefore(Carbon $createdBefore): self
    {
        $this->params['c_end_date'] = $createdBefore->toDateString();

        return $this;
    }

    public function setChangedAfter(Carbon $changedAfter): self
    {
        $this->params['changed_after'] = $changedAfter->toDateTimeLocalString();

        return $this;
    }

    public function setChangedBefore(Carbon $changedBefore): self
    {
        $this->params['changed_before'] = $changedBefore->toDateTimeLocalString();

        return $this;
    }

    public function includeFinanceTransactions(): self
    {
        $this->params['include_finance_transactions'] = 1;

        return $this;
    }

    public function withDeleted(): self
    {
        $this->params['with_deleted'] = 1;

        return $this;
    }

}
