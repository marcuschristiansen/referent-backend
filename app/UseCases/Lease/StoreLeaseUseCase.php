<?php

namespace App\UseCases\Lease;

use App\User;
use App\Lease;
use Carbon\Carbon;

/**
 * Class StoreLeaseUseCase.
 */
class StoreLeaseUseCase
{
    /**
     * @param Lease $user
     * @param array  $data
     *
     * @throws \Exception
     *
     * @return Lease
     */
    public function handle(User $user, array $data)
    {
        $startDate = new Carbon($data['timeline']['start_date']);

        return Lease::create(
            [
                'start_date'                        => $startDate,
                'lease_duration_months'             => $data['timeline']['lease_duration_months'],
                'lease_termination_notice_months'   => $data['timeline']['lease_termination_months'],
                'rental_amount'                     => $data['profile']['rental_amount'],
                'deposit_amount'                    => $data['profile']['deposit_amount'],
                'late_fee_amount'                   => $data['timeline']['late_fee_amount'],
                'bank_details'                      => $data['bank_details'],
                'due_day'                           => $data['profile']['due_day'],
                'electricity_water'                 => $data['profile']['electricity_water'],
                'sub_letting_allowed'               => $data['timeline']['sub_letting_allowed'],
                'listing_id'                        => $data['profile']['listing_id'],

            ]
        );
    }
}