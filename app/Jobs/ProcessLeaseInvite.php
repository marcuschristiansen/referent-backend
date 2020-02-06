<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Redis;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Notification;
use App\Notifications\InviteNewTenantToLease;

class ProcessLeaseInvite implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $leaseInvite;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($leaseInvite)
    {
        $this->leaseInvite = $leaseInvite;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Allow only 2 emails every 1 second
        Redis::throttle('referent-lease-invites')->allow(2)->every(1)->then(function () {

            Notification::route('mail', $this->leaseInvite->email)->notify(new InviteNewTenantToLease($this->leaseInvite));
            
        }, function () {
            // Could not obtain lock; this job will be re-queued
            return $this->release(2);
        });
    }
}
