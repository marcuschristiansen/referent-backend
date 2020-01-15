<?php

namespace App\UseCases\ListingAmenity;

use App\ListingAmenity;

/**
 * Class GetListingAmenitysUseCase.
 */
class GetListingAmenitiesUseCase
{
    /**
     * @param ListingAmenity $listingAmenity
     * @param array  $data
     *
     * @throws \Exception
     *
     * @return ListingAmenity
     */
    public function handle()
    {
        return ListingAmenity::reversed()->get()->toTree();
    }
}