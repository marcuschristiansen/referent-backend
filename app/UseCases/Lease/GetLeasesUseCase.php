<?php

namespace App\UseCases\Lease;

use App\User;
use App\Lease;

/**
 * Class GetLeasesUseCase.
 */
class GetLeasesUseCase
{
    /**
     * @param User $user
     * @param array  $data
     *
     * @throws \Exception
     *
     * @return Leases
     */
    public function handle(User $user)
    {
        return Lease::whereHas('listing', function($query) use ($user) {
            $query->where('user_id', $user->id);
        })->get();
    }
}