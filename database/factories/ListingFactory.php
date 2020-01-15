<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\City;
use App\User;
use App\State;
use App\Listing;
use App\ListingType;
use Faker\Generator as Faker;

$factory->define(Listing::class, function (Faker $faker) {
    $user         = User::all()->random();
    $listingType  = ListingType::all()->random();
    $city         = City::all()->random();
    $state        = State::all()->random();

    return [
        'user_id'               => $user->id,
        'name'                  => $faker->company,
        'listing_type_id'       => $listingType->id,
        'house_share'           => $faker->boolean(15),
        'residential_address'   => $faker->address,
        'unit_number'           => $faker->buildingNumber,
        'city_id'               => $city->id,
        'zip_code'              => $faker->postcode,
        'rooms'                 => NULL,
        'parking'               => NULL,
    ];
});
