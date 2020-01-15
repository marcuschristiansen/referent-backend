<?php

use App\ListingSpace;
use Illuminate\Database\Seeder;

class ListingSpacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listingSpaces = array(
            array('name'  => 'Balcony'),
            array('name'  => 'Lapa'),
            array('name'  => 'Flatlet'),
            array('name'  => 'Kitchen'),
            array('name'  => 'Laundry'),
            array('name'  => 'Study'),
            array('name'  => 'Deck'),
            array('name'  => 'Dining Room'),
            array('name'  => 'Garden Cottage'),
            array('name'  => 'Scullery'),
            array('name'  => 'Walk-in Closet'),
            array('name'  => 'Entrance Hall'),
            array('name'  => 'Patio'),
            array('name'  => 'Lounge'),
            array('name'  => 'Staff Quarters'),
            array('name'  => 'Pantry'),
            array('name'  => 'Ensuite Bathroom'),
            array('name'  => 'Garden'),
        );

        foreach ($listingSpaces as $key => $space) {
            ListingSpace::updateOrCreate(
                ['name' => $space['name']]
            );
        }
    }
}
