<?php

use App\Lease;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class LeasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment(['local', 'staging'])) {
            factory(Lease::class, 20)->create();
        } 
    }
}
