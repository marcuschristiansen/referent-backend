<?php

namespace App\Providers;

use App\Lease;
use App\Profile;
use App\Policies\LeasePolicy;
use Laravel\Passport\Passport;
use App\Policies\ProfilePolicy;
use App\Policies\PermissionPolicy;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Permission::class => PermissionPolicy::class,
        Profile::class => ProfilePolicy::class,
        Lease::class => LeasePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();
    }
}
