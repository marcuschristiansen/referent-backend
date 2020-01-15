<?php

namespace App\UseCases\ListingSpace;

use App\ListingSpace;

/**
 * Class GetListingSpacesUseCase.
 */
class GetListingSpacesUseCase
{
    /**
     * @param ListingSpace $listingSpace
     * @param array  $data
     *
     * @throws \Exception
     *
     * @return ListingSpace
     */
    public function handle()
    {
        return ListingSpace::all();
    }
}