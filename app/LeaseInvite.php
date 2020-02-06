<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaseInvite extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'lease_id',
    ];

    /**
     * Get the lease that owns the invite.
     */
    public function lease()
    {
        return $this->belongsTo(Lease::class);
    }
}
