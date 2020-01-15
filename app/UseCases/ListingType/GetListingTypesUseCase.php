<?php

namespace App\UseCases\ListingType;

use App\ListingType;

/**
 * Class GetListingTypesUseCase.
 */
class GetListingTypesUseCase
{
    /**
     * @param ListingType $listingType
     * @param array  $data
     *
     * @throws \Exception
     *
     * @return ListingType
     */
    public function handle()
    {
        return ListingType::all();
    }
}