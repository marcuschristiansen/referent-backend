<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UseCases\ListingType\GetListingTypesUseCase;
use App\Http\Resources\ListingTypesResourceCollection;

class ListingTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetListingTypesUseCase $useCase)
    {
        $listingTypes = $useCase->handle();

        return new ListingTypesResourceCollection($listingTypes);
    }
}
