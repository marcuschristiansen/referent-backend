<?php

namespace App\Providers;

use App\User;
use App\LeaseInvite;
use App\Observers\UserObserver;
use App\Observers\LeaseInviteObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // User::observe(UserObserver::class);
        LeaseInvite::observe(LeaseInviteObserver::class);
    }
}
