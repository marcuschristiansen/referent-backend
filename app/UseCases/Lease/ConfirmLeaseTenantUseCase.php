<?php

namespace App\UseCases\Lease;

use App\User;
use App\Lease;
use Carbon\Carbon;

/**
 * Class ConfirmLeaseTenantUseCase.
 */
class ConfirmLeaseTenantUseCase
{
    /**
     * @param Lease $user
     * @param array  $data
     *
     * @throws \Exception
     *
     * @return Lease
     */
    public function handle(User $user, Lease $lease)
    {
        $lease->update(['tenant_id' => $user->id]);

        $lease->lease_invites()->delete();

        return $lease;
    }
}