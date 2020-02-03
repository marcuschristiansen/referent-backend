<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeaseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'profile.deposit_amount'            => 'required',
            'profile.rental_amount'             => 'required',
            'profile.due_day'                   => 'required',
            'profile.electricity_water'         => 'required',
            'profile.listing_id'                => 'required',
            'timeline.start_date'               => 'required',
            'timeline.lease_duration_months'    => 'required',
            'timeline.sub_letting_allowed'      => 'required',
            'timeline.lease_termination_months' => 'required',
            'timeline.late_fee_amount'          => 'required',
            'bank_details.bank_name'            => 'required',
            'bank_details.account_number'       => 'required',
            'bank_details.branch_number'        => 'required',
            'bank_details.title'                => 'required',
            'bank_details.recipient_name'       => 'required',
            'bank_details.payment_reference'    => 'required',
        ];
    }
}