<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\City;
use App\State;
use Faker\Generator as Faker;

$factory->define(City::class, function (Faker $faker) {
    $state = State::all()->random();

    return [
        'name'      => $faker->city,
        'state_id'  => $state->id,
    ];
});
