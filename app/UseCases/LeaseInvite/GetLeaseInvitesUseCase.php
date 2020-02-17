<?php

namespace App\UseCases\LeaseInvite;

use App\User;
use App\LeaseInvite;

/**
 * Class GetLeasesUseCase.
 */
class GetLeaseInvitesUseCase
{
    /**
     * @param User $user
     * @param array  $data
     *
     * @throws \Exception
     *
     * @return LeaseInvites
     */
    public function handle(User $user)
    {
        return LeaseInvite::where('email', $user->email)->get();
    }
}