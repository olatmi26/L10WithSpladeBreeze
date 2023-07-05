<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VendorStoreRequest extends FormRequest
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
            'name' => ['string'],
            'name' => ['string'],
            'phoneN0' => ['string', 'max:12'],
            'location' => ['string'],
            'Address' => ['string'],
            'state_id' => ['integer', null],
            'country_id' => ['integer', null]
        ];
    }
}