<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminPermission = Permission::query()->firstOrCreate([
            'name' => 'access-admin',
        ]);

        $adminPermission->assignRole('Admin');
    }
}
