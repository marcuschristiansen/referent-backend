<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Lease;
use App\Model;
use App\Listing;
use Faker\Generator as Faker;

$factory->define(Lease::class, function (Faker $faker) {
    $listing  = Listing::all()->random();

    return [
        'start_date'                            => $faker->date() , 
        'lease_duration_months'                 => $faker->numberBetween(1, 12),
        'lease_termination_notice_months'       => 1,
        'rental_amount'                         => $faker->numberBetween(4000, 100000),
        'deposit_amount'                        => $faker->numberBetween(4000, 100000), 
        'late_fee_amount'                       => $faker->numberBetween(4000, 100000) ,
        'bank_details'                          => [
            'bank_name'         => $faker->randomElement(['ABSA', 'Capitec Bank', 'First National Bank', 'Nedbank', 'Standard Bank', 'Tyme Bank']),
            'account_number'    => $faker->bankAccountNumber,
            'branch_number'     => $faker->randomNumber(8),
            'title'             => $faker->title(),
            'recipient_name'    => $faker->name(),
            'payment_reference' => $faker->text(20)
        ],
        'due_day'                               => $faker->numberBetween(1, 31),
        'electricity_water'                     => $faker->randomElement(['Billed', 'Included', 'Prepaid']),
        'sub_letting_allowed'                   => $faker->boolean(),
        'file_name'                             => NULL, 
        'listing_id'                            => $listing->id, 
        'tenant_id'                             => NULL
    ];
});
