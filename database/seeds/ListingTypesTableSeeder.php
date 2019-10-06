<?php

use App\ListingType;
use Illuminate\Database\Seeder;

class ListingTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listingTypes = array(
            array('name'  => 'Agricultural'),
            array('name'  => 'Residential'),
            array('name'  => 'Commercial'),
            array('name'  => 'Industrial'),
            array('name'  => 'Mixed-Use'),
            array('name'  => 'Special Purpose'),
        );

        foreach ($listingTypes as $key => $type) {
            ListingType::updateOrCreate(
                ['name' => $type['name']]
            );
        }
    }
}
