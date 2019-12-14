<?php

namespace App\UseCases\Profile;

use App\User;
use App\Profile;
use Illuminate\Support\Facades\Log;

/**
 * Class StoreProfileUseCase.
 */
class StoreProfileUseCase
{
    /**
     * @param User $user
     * @param array  $data
     *
     * @throws \Exception
     *
     * @return Profile
     */
    public function handle(User $user, array $data): Profile
    {
        $user->syncRoles($data['status']);

        return $user->profile()->updateOrCreate(
            [
                'user_id'       => $user->id,
            ],
            [
                'first_name'    => $data['first_name'],
                'last_name'     => $data['last_name'],
                'country_id'    => $data['country_id'],
                'id_number'     => $data['id_number'],
                'credit_check'  => $data['credit_check']
            ]
        );
    }
}
