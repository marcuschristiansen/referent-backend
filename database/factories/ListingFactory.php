<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\City;
use App\State;
use App\Listing;
use App\ListingType;
use Faker\Generator as Faker;

$factory->define(Listing::class, function (Faker $faker) {
    $listingType  = ListingType::all()->random();
    $city         = City::all()->random();
    $state        = State::all()->random();

    return [
        'name'                  => $faker->company,
        'listing_type_id'       => $listingType->id,
        'residential_address'   => $faker->address,
        'unit_number'           => $faker->buildingNumber,
        'city_id'               => $city->id,
        'state_id'              => $state->id,
        'country_id'            => $state->country->id,
        'zip_code'              => $faker->postcode
    ];
});
