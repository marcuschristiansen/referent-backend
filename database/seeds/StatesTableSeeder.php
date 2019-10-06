<?php

use App\State;
use App\Country;
use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countryId = Country::where('name', 'South Africa')->first()->id;

		$states = array(
			array('code' => 'EC', 'name' => 'Eastern Cape', 'country_id' => $countryId),
			array('code' => 'FS', 'name' => 'Free State', 'country_id' => $countryId),
			array('code' => 'GP', 'name' => 'Gauteng', 'country_id' => $countryId),
			array('code' => 'KZN', 'name' => 'Kwa-Zulu Natal', 'country_id' => $countryId),
			array('code' => 'MP', 'name' => 'Mpumalanga', 'country_id' => $countryId),
			array('code' => 'NC', 'name' => 'Northern Cape', 'country_id' => $countryId),
			array('code' => 'NP', 'name' => 'Limpopo', 'country_id' => $countryId),
			array('code' => 'NW', 'name' => 'North West', 'country_id' => $countryId),
			array('code' => 'WC', 'name' => 'Western Cape', 'country_id' => $countryId),
		);
		
		foreach ($states as $key => $state) {
            State::updateOrCreate(
                ['code' => $state['code']],
                [
                    'name'          => $state['name'],
                    'country_id'    => $state['country_id']
                ]
            );
        }
    }
}
