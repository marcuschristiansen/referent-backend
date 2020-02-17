<?php

namespace App\Policies;

use App\User;
use App\Lease;
use Illuminate\Support\Facades\Log;
use Illuminate\Auth\Access\HandlesAuthorization;

class LeasePolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any leases.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the lease.
     *
     * @param  \App\User  $user
     * @param  \App\Lease  $lease
     * @return mixed
     */
    public function view(User $user, Lease $lease)
    {
        $leaseInvites = Lease::whereHas('lease_invites', function($query) use ($user, $lease) {
            $query->where('email', $user->email)
                  ->where('lease_id', $lease->id);  
        })->exists();
        
        return $lease->belongsToTenant($user) || $lease->belongsToLandlord($user) || $leaseInvites;
    }

    /**
     * Determine whether the user can create leases.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the lease.
     *
     * @param  \App\User  $user
     * @param  \App\Lease  $lease
     * @return mixed
     */
    public function update(User $user, Lease $lease)
    {
        //
    }

    /**
     * Determine whether the user can delete the lease.
     *
     * @param  \App\User  $user
     * @param  \App\Lease  $lease
     * @return mixed
     */
    public function delete(User $user, Lease $lease)
    {
        //
    }

    /**
     * Determine whether the user can restore the lease.
     *
     * @param  \App\User  $user
     * @param  \App\Lease  $lease
     * @return mixed
     */
    public function restore(User $user, Lease $lease)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the lease.
     *
     * @param  \App\User  $user
     * @param  \App\Lease  $lease
     * @return mixed
     */
    public function forceDelete(User $user, Lease $lease)
    {
        //
    }
}
