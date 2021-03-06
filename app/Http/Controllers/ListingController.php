<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ListingResource;
use App\Http\Requests\StoreListingRequest;
use App\UseCases\Listing\GetListingsUseCase;
use App\UseCases\Listing\StoreListingUseCase;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetListingsUseCase $useCase)
    {
        $listings = $useCase->handle(auth('api')->user());

        return ListingResource::collection($listings);
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
     * @param $useCase
     * @return \Illuminate\Http\Response
     */
    public function store(StoreListingRequest $request, StoreListingUseCase $useCase): ListingResource
    {
        $listing = $useCase->handle(auth('api')->user(), $request->all());

        return new ListingResource($listing);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
