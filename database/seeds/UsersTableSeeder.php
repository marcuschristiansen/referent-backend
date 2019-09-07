<?php

use App\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Laravel\Nova\Tests\Fixtures\Post;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Administrators ***/
        $admins = [
            [
                'name'              => env('ADMIN_NAME', 'John Doe'),
                'email'             => env('ADMIN_EMAIL', 'hello@test.com'),
                'email_verified_at' => now(),
                'password'          => bcrypt(env('ADMIN_PASSWORD', 'secret')),
                'remember_token'    => Str::random(10),
                'active'            => 1,
                'created_at'        => now(),
            ],
        ];

        $adminRole = Role::findOrCreate('Admin');

        collect($admins)->each(function($admin) use ($adminRole) {

            /** @var User $user */
            if (!$user = User::query()
                    ->where('email', $admin['email'])
                    ->first()
            ) {
                $user = factory(User::class)->create($admin);
            }

            $user->assignRole($adminRole);
        });
    }
}
