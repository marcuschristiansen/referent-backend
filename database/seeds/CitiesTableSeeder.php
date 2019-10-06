<?php

use App\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment(['local', 'staging'])) {
            factory(City::class, 25)->create();
        } 
    }
}
