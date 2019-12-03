<?php

use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = array(
			array('name' => 'Landlord', 'guard_name' => 'web'),
			array('name' => 'Tenant', 'guard_name' => 'web'),
        );
        
        foreach ($roles as $key => $role) {
            Role::updateOrCreate(
                ['name' => $role['name']],
                [
                    'name'          => $role['name'],
                    'guard_name'    => $role['guard_name']
                ]
            );
        }
    }
}
