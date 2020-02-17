<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lease extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'start_date', 
        'lease_duration_months',
        'lease_termination_notice_months',
        'rental_amount',
        'deposit_amount', 
        'late_fee_amount',
        'bank_details',
        'due_day',
        'electricity_water',
        'sub_letting_allowed',
        'file_name', 
        'listing_id', 
        'tenant_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'bank_details' => 'array',
    ];

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['tenant', 'listing'];

    /**
     * Get the tenant that owns the lease.
     */
    public function tenant()
    {
        return $this->belongsTo(User::class, 'tenant_id');
    }

    /**
     * Get the tenant that owns the lease.
     */
    public function belongsToTenant($tenant)
    {
        return $this->tenant_id == $tenant->id;
    }

    /**
     * Get the tenant that owns the lease.
     */
    public function belongsToLandlord($landlord)
    {
        return $this->listing->user_id == $landlord->id;
    }

    /**
     * Get the listing that owns the lease.
     */
    public function listing()
    {
        return $this->belongsTo(Listing::class);
    }

    /**
     * The lease invites that belong to the lease.
     */
    public function lease_invites()
    {
        return $this->HasMany(LeaseInvite::class);
    }
}
