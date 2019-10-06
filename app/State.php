<?php

namespace App;

use App\Country;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'code', 'country_id'
    ];

    /**
     * Get the user that owns the phone.
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
