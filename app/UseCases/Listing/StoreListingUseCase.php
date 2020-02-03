<?php

namespace App\UseCases\Listing;

use App\City;
use App\User;
use App\State;
use App\Country;
use App\Listing;

/**
 * Class StoreListingUseCase.
 */
class StoreListingUseCase
{
    /**
     * @param Listing $user
     * @param array  $data
     *
     * @throws \Exception
     *
     * @return Listing
     */
    public function handle(User $user, array $data)
    {
        $country = Country::where('name', $data['residential_address']['country'])->first();
        $state = State::firstOrCreate(
            [
                'name' => $data['residential_address']['state']
            ],
            [
                'country_id' => $country->id
            ]
        );
        $city = City::firstOrCreate(
            [
                'name' => $data['residential_address']['city']
            ],
            [
                'state_id' => $state->id
            ]
        );

        $listing = Listing::create(
            [
                'user_id'               => $user->id,        
                'name'                  => $data['profile']['name'],
                'listing_type_id'       => $data['profile']['listing_type_id'],
                'house_share'           => $data['profile']['houseShare'],
                'residential_address'   => $data['residential_address']['formatted_address'],
                'unit_number'           => $data['profile']['unit_number'],
                'city_id'               => $city->id,
                'zip_code'              => $data['residential_address']['zip_code'],
                'rooms'                 => $data['profile']['rooms'],
                'parking'               => $data['spacesContinued'],
            ]
        );

        $listing->amenities()->sync($data['extras']);
        $listing->spaces()->sync($data['spaces']);

        return $listing;
    }
}