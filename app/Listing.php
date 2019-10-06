<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Listing extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'listing_type_id',
        'residential_address',
        'unit_number',
        'city_id',
        'state_id',
        'country_id',
        'zip_code'
    ];
}