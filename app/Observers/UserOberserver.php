<?php

namespace App\Observers;

use App\User;
use App\Jobs\ProcessNewUserEmails;

class UserObserver
{
    /**
     * Listen to the User created event.
     *
     * @param  User  $user
     * @return void
     */
    public function created(User $user)
    {
        $user->update([
            'activation_token'  => str_random(60)
        ]);

        ProcessNewUserEmails::dispatch($user);
    }
}