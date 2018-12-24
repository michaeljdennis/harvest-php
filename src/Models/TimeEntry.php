<?php

namespace Harvest\Models;

class TimeEntry extends BaseModel
{
    public $id;

    public $spent_date;

    public $user;

    public $user_assignment;

    public $client;

    public $project;

    public $task;

    public $task_assignment;

    public $external_reference;

    public $invoice;

    public $hours;

    public $notes;

    public $is_locked;

    public $locked_reason;

    public $is_closed;

    public $is_billed;

    public $timer_started_at;

    public $started_time;

    public $ended_time;

    public $is_running;

    public $billable;

    public $budgeted;

    public $billable_rate;

    public $cost_rate;

    public $created_at;

    public $updated_at;
}
