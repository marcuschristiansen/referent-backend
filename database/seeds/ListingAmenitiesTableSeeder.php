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
                'name'  => 'Internet',
                'children'  => [
                    [
                        'name'  => 'Provier',
                        'children'  => [
                            ['name' => 'WebAfrica'],
                            ['name' => 'Afrihost'],
                            ['name' => 'Cybersmart']
                        ]
                    ],
                    [
                        'name'  => 'Type',
                        'children'  => [
                            ['name' => 'ADSL'],
                            ['name' => 'Fiber'],
                            ['name' => 'LTE']
                        ]
                    ],
                    [
                        'name' => 'Speed',
                        'children' => [
                            ['name' => '10MBs'],
                            ['name' => '20MBs'],
                            ['name' => '50MBs'],
                            ['name' => '100MBs'],
                        ]
                    ]
                ]
            ]
        ];

        foreach($amenities as $amenity)
        {
            ListingAmenity::create($amenity);
        }
    }
}
