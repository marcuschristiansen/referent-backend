<?php

use App\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class ListingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment(['local', 'staging'])) {
            factory(Listing::class, 150)->create();
        }  
    }
}
