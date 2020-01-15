<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListingSpace extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
}
