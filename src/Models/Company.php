<?php

namespace Harvest\Models;

class Company extends BaseModel
{
    public $base_uri;

    public $full_domain;

    public $name;

    public $is_active;

    public $week_start_day;

    public $wants_timestamp_timers;

    public $time_format;

    public $plan_type;

    public $clock;

    public $decimal_symbol;

    public $thousands_separator;

    public $color_scheme;

    public $expense_feature;

    public $invoice_feature;

    public $estimate_feature;

    public $approval_feature;
}
