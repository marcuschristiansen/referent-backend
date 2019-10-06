<?php

namespace App;

use App\State;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'state_id'
    ];

    /**
     * Get the user that owns the phone.
     */
    public function state()
    {
        return $this->belongsTo(State::class);
    }
}

