<?php

namespace App\Http\Controllers;

use App\Lease;
use Illuminate\Http\Request;
use App\Http\Resources\LeaseResource;
use App\Http\Requests\LeaseConfirmRequest;
use App\UseCases\Lease\ConfirmLeaseTenantUseCase;

class LeaseConfirmController extends Controller
{
    /**
     * @param LeaseConfirmRequest $request
     * @param Lease                           $lease
     *
     * @return LeaseResource
     */
    public function __invoke(LeaseConfirmRequest $request, ConfirmLeaseTenantUseCase $useCase, Lease $lease): LeaseResource
    {
        $_lease = $useCase->handle(auth('api')->user(), $lease);

        return new LeaseResource($_lease);
    }
}
