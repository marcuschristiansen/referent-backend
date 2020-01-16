<?php

use App\Country;
use GuzzleHttp\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Fetch all countries from https://restcountries.eu/rest/v2/all API
        $client = new Client();
        $result = $client->get('https://restcountries.eu/rest/v2/all');

        if($result->getStatusCode() == 200) {
            $countries = (string) $result->getBody();
            foreach (json_decode($countries) as $key => $country) {
                $newCountry = Country::updateOrCreate(
                    ['name' => $country->name],
                    [
                        'code' => $country->alpha2Code
                    ]
                );

                if($country->name == 'United States of America') {
                    $newCountry->update(['name' => 'United States']);
                }
            }
        }
    }
}
