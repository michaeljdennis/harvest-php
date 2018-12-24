<?php

namespace Harvest\Models;

class Project extends BaseModel
{
    public $id;

    public $client;

    public $name;

    public $code;

    public $is_active;

    public $is_billable;

    public $is_fixed_fee;

    public $bill_by;

    public $hourly_rate;

    public $budget;

    public $budget_by;

    public $budget_is_monthly;

    public $notify_when_over_budget;

    public $over_budget_notification_percentage;

    public $over_budget_notification_date;

    public $show_budget_to_all;

    public $cost_budget;

    public $cost_budget_include_expenses;

    public $fee;

    public $notes;

    public $starts_on;

    public $ends_on;

    public $created_at;

    public $updated_at;
}
