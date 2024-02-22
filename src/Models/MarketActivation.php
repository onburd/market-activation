<?php

namespace Onburd\MarketActivation\Models;

use Illuminate\Database\Eloquent\Model;

class MarketActivation extends Model
{
    protected $table = "market_activations";
    protected $fillable = [
        'country_flag',
        'country_name',
        'iso_currency',
        'currency_symbol',
        'currency',
        'country_code'
    ];
}
