<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreListingRequest extends FormRequest
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
            'profile.listing_type_id' => 'required',
            'profile.house_share'     => 'boolean',
            'profile.unit_number'     => 'max:255',  
            'residential_address'     => 'required',
        ];
    }
}
