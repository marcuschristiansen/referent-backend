<?php

namespace App\Http\Controllers;

use App\Lease;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Notifications\LeaseGenerated;
use App\Jobs\ProcessLeasePdfGeneration;

class LeasePdfController extends Controller
{
    public function __invoke(Lease $lease)
    {
        $user = auth()->user();

        $pdf = ProcessLeasePdfGeneration::dispatch($lease, $user);

        return response()->json(202);
    }
}
