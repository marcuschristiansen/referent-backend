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
            if($user->hasRole('Landlord')) {
                return $query->where('user_id', $user->id);
            }

            if($user->hasRole('Tenant')) {
                return $query->where('tenant_id', $user->id);
            }

            return $query;
        })->get();
    }
}