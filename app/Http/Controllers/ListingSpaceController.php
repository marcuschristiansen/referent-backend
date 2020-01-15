<?php

namespace App\Http\Controllers;

use App\ListingSpace;
use Illuminate\Http\Request;
use App\UseCases\ListingSpace\GetListingSpacesUseCase;
use App\Http\Resources\ListingSpacesResourceCollection;

class ListingSpaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GetListingSpacesUseCase $useCase)
    {
        $listingSpaces = $useCase->handle();

        return new ListingSpacesResourceCollection($listingSpaces);
    }
}
