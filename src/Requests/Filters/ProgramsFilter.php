<?php

namespace googlogmob\YClientsSDK\Requests\Filters;

use Carbon\Carbon;

/**
 * @property array $params
 */
trait ProgramsFilter
{
    public function setInclude(Carbon $startDate): self
    {
        $this->params['include'] = $startDate->toDateString();

        return $this;
    }

    public function setType(string $type): self
    {
        $this->params['type'] = $type;

        return $this;
    }
}
