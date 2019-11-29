<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use OwenIt\Auditing\Contracts\Auditable;

class User extends Authenticatable implements MustVerifyEmail, Auditable
{
    use HasApiTokens, Notifiable, SoftDeletes, HasRoles, \OwenIt\Auditing\Auditable;

    protected $guard_name = 'web';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'active', 'activation_token', 'email_verified_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'activation_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The attributes that should be added to the JSON response
     *
     * @var array
     */
    protected $appends = ['md5_email'];

    /**
     * Convert email address into md5 string
     *
     * @var string
     */
    public function getMd5EmailAttribute()
    {
        return md5(strtolower(trim($this->email)));
    }
}
