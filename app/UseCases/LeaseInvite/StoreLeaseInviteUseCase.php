<?php

namespace App\UseCases\LeaseInvite;

use App\LeaseInvite;

/**
 * Class StoreLeaseInviteUseCase.
 */
class StoreLeaseInviteUseCase
{
    /**
     * @param LeaseInvite $user
     * @param array  $data
     *
     * @throws \Exception
     *
     * @return LeaseInvite
     */
    public function handle(array $data)
    {
        return LeaseInvite::create(
            [
                'lease_id'  => $data['lease_id'],
                'email'     => $data['email'],
            ]
        );
    }
}