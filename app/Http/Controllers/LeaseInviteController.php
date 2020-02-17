<?php

namespace App\Http\Controllers;

use App\LeaseInvite;
use Illuminate\Http\Request;
use App\Http\Resources\LeaseInviteResource;
use App\Http\Requests\StoreLeaseInviteRequest;
use App\UseCases\LeaseInvite\GetLeaseInvitesUseCase;
use App\UseCases\LeaseInvite\StoreLeaseInviteUseCase;

class LeaseInviteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetLeaseInvitesUseCase $useCase)
    {
        $leaseInvites = $useCase->handle(auth('api')->user());

        return LeaseInviteResource::collection($leaseInvites);
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
    public function store(StoreLeaseInviteRequest $request, StoreLeaseInviteUseCase $useCase): LeaseInviteResource
    {
        $leaseInvite = $useCase->handle($request->all());

        return new LeaseInviteResource($leaseInvite);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LeaseInvite  $leaseInvite
     * @return \Illuminate\Http\Response
     */
    public function show(LeaseInvite $leaseInvite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LeaseInvite  $leaseInvite
     * @return \Illuminate\Http\Response
     */
    public function edit(LeaseInvite $leaseInvite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LeaseInvite  $leaseInvite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LeaseInvite $leaseInvite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LeaseInvite  $leaseInvite
     * @return \Illuminate\Http\Response
     */
    public function destroy(LeaseInvite $leaseInvite)
    {
        //
    }
}
