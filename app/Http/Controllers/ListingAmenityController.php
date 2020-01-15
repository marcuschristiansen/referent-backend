<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ListingAmenitiesResourceCollection;
use App\UseCases\ListingAmenity\GetListingAmenitiesUseCase;

class ListingAmenityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetListingAmenitiesUseCase $useCase)
    {
        $listingAmenities = $useCase->handle();

        return new ListingAmenitiesResourceCollection($listingAmenities);
    }
}
