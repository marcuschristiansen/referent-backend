<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class StoreProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name'    => 'required|min:1|max:255',
            'last_name'     => 'required|min:1|max:255',
            'country_id'    => 'required|integer|exists:countries,id',
            'id_number'     => 'required|min:1|max:255',
            'credit_check'  => 'required|boolean',
            'status'        => 'required|array',
        ];
    }
}
