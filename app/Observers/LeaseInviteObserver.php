<?php

namespace app\Observers;

use App\LeaseInvite;
use App\Jobs\ProcessLeaseInvite;

class LeaseInviteObserver
{
    /**
     * Handle the lease invite "created" event.
     *
     * @param  \App\LeaseInvite  $leaseInvite
     * @return void
     */
    public function created(LeaseInvite $leaseInvite)
    {
        ProcessLeaseInvite::dispatch($leaseInvite);
    }

    /**
     * Handle the lease invite "updated" event.
     *
     * @param  \App\LeaseInvite  $leaseInvite
     * @return void
     */
    public function updated(LeaseInvite $leaseInvite)
    {
        //
    }

    /**
     * Handle the lease invite "deleted" event.
     *
     * @param  \App\LeaseInvite  $leaseInvite
     * @return void
     */
    public function deleted(LeaseInvite $leaseInvite)
    {
        //
    }

    /**
     * Handle the lease invite "restored" event.
     *
     * @param  \App\LeaseInvite  $leaseInvite
     * @return void
     */
    public function restored(LeaseInvite $leaseInvite)
    {
        //
    }

    /**
     * Handle the lease invite "force deleted" event.
     *
     * @param  \App\LeaseInvite  $leaseInvite
     * @return void
     */
    public function forceDeleted(LeaseInvite $leaseInvite)
    {
        //
    }
}
