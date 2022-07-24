<?php

namespace googlogmob\YClientsSDK\Requests\Traits;

use Carbon\Carbon;

/**
 * @property array $params
 */
trait DatesPeriod
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

    public function setCreatedAfter(Carbon $createdAfter): self
    {
        $this->params['created_after'] = $createdAfter->toDateString();

        return $this;
    }

    public function setCreatedBefore(Carbon $createdBefore): self
    {
        $this->params['created_before'] = $createdBefore->toDateString();

        return $this;
    }
}
