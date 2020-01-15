<?php

use App\ListingAmenity;
use Illuminate\Database\Seeder;

class ListingAmenitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $amenities = [
            [
                'name'  => 'Furnished',
                'type'  => 'checkbox'
            ],
            [
                'name'  => 'Airconditioning',
                'type'  => 'checkbox'
            ],
            [
                'name'  => 'Pool',
                'type'  => 'checkbox'
            ],
            [
                'name'  => 'Elevator',
                'type'  => 'checkbox'
            ],
            [
                'name'  => 'Access Gate',
                'type'  => 'checkbox'
            ],
            [
                'name'  => 'Alarm',
                'type'  => 'checkbox'
            ],
            [
                'name'  => 'Built-in Stove',
                'type'  => 'checkbox'
            ],
            [
                'name'  => 'Ceiling Fan',
                'type'  => 'checkbox'
            ],
            [
                'name'  => 'Braai Facilities',
                'type'  => 'checkbox'
            ],
            [
                'name'  => 'Visitor Parking',
                'type'  => 'checkbox'
            ],
            [
                'name'  => 'Security Guard',
                'type'  => 'checkbox'
            ],
            [
                'name'  => 'Electric Fence',
                'type'  => 'checkbox'
            ],
            [
                'name'  => 'Store Room',
                'type'  => 'checkbox'
            ],
            [
                'name'  => 'Fire Place',
                'type'  => 'checkbox'
            ],
            [
                'name'  => 'Gym',
                'type'  => 'checkbox'
            ],
            [
                'name'  => 'Washing Line',
                'type'  => 'checkbox'
            ],
            [
                'name'  => 'Intercom',
                'type'  => 'checkbox'
            ],
            [
                'name'  => 'Smoking Allowed',
                'type'  => 'checkbox'
            ],
            [
                'name'  => 'Internet',
                'type'  => 'checkbox',
            ],
            [
                'name'  => 'Cleaner',
                'type'  => 'checkbox',
            ],
            [
                'name'  => 'Gardener',
                'type'  => 'checkbox',
            ],
            [
                'name'  => 'Handyman',
                'type'  => 'checkbox',
            ]
        ];

        foreach($amenities as $amenity)
        {
            ListingAmenity::create($amenity);
        }
    }
}
