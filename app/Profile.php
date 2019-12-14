<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'first_name', 'last_name', 'country_id', 'id_number', 'credit_check'
    ];

    /**
     * Convert to true or false.
     *
     * @var int
     */
    public function getCreditCheckAttribute($value)
    {
        return $value == 1 ? true : false;
    }

    /**
     * Get the user that owns the profile.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
