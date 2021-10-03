<?php

namespace googlogmob\YClientsSDK\Requests\Traits;

use Carbon\Carbon;

trait DatesPeriod
{
    /**
     * @param Carbon $startDate
     *
     * @return $this
     */
    public function setStartDate(Carbon $startDate)
    {
        $this->params['start_date'] = $startDate->toDateString();

        return $this;
    }

    /**
     * @param Carbon $endDate
     *
     * @return $this
     */
    public function setEndDate(Carbon $endDate)
    {
        $this->params['end_date'] = $endDate->toDateString();

        return $this;
    }

    /**
     * @param Carbon $changedAfter
     * @return $this
     */
    public function setChangedAfter(Carbon $changedAfter)
    {
        $this->params['changed_after'] = $changedAfter->toDateTimeLocalString();

        return $this;
    }

    /**
     * @param Carbon $createdAfter
     * @return $this
     */
    public function setCreatedAfter(Carbon $createdAfter)
    {
        $this->params['created_after'] = $createdAfter->toDateString();

        return $this;
    }

    /**
     * @param Carbon $createdBefore
     * @return $this
     */
    public function setCreatedBefore(Carbon $createdBefore)
    {
        $this->params['created_before'] = $createdBefore->toDateString();

        return $this;
    }
}
