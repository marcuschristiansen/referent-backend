<?php

namespace App\Jobs;

use App\User;
use App\Lease;
use Illuminate\Bus\Queueable;
use Barryvdh\DomPDF\Facade as PDF;
use App\Notifications\LeaseGenerated;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class ProcessLeasePdfGeneration implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $lease;
    public $user;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Lease $lease, User $user)
    {
        $this->lease = $lease;
        $this->user  = $user;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        
        $pdf = PDF::loadView('pdfs.lease', ['lease' => $this->lease]);

        $this->user->notify(new LeaseGenerated($pdf));
        
        return $pdf;
    }
}
