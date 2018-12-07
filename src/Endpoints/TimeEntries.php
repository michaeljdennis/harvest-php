<?php

namespace Harvest\Endpoints;

use Harvest\Models\TimeEntry;

class TimeEntries extends BaseEndpoint
{
    public function getPath() : string
    {
        return 'time_entries';
    }

    public function getResponseKey() : string
    {
        return 'time_entries';
    }

    public function getModelClass() : string
    {
        return TimeEntry::class;
    }
}
