<?php

namespace App\Http\Controllers;

use App\Lease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Resources\LeaseResource;
use App\Http\Requests\StoreLeaseRequest;
use App\UseCases\Lease\GetLeasesUseCase;
use App\UseCases\Lease\StoreLeaseUseCase;

class LeaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetLeasesUseCase $useCase)
    {
        $leases = $useCase->handle(auth('api')->user());

        return LeaseResource::collection($leases);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLeaseRequest $request, StoreLeaseUseCase $useCase): LeaseResource
    {
        $lease = $useCase->handle(auth('api')->user(), $request->all());

        return new LeaseResource($lease);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lease  $lease
     * @return \Illuminate\Http\Response
     */
    public function show(Lease $lease)
    {
        $user = auth('api')->user();
        if($user->can('view', $lease)) {
            return new LeaseResource($lease);
        }
        return response('Unauthorized.', 403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lease  $lease
     * @return \Illuminate\Http\Response
     */
    public function edit(Lease $lease)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lease  $lease
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lease $lease)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lease  $lease
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lease $lease)
    {
        //
    }
}
