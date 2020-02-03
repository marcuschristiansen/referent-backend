<?php

namespace App\UseCases\Listing;

use App\User;
use App\Listing;

/**
 * Class GetListingsUseCase.
 */
class GetListingsUseCase
{
    /**
     * @param User $user
     * @param array  $data
     *
     * @throws \Exception
     *
     * @return Listings
     */
    public function handle(User $user)
    {
        return Listing::where('user_id', $user->id)->get();
    }
}