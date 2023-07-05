<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VendorAccountUpdateRequest extends FormRequest
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
            'vendor_id' => ['integer', 'exists:vendors,id'],
            'bank_id' => ['integer', 'exists:banks,id'],
            'accountName' => ['string'],
            'AccountNo' => ['string', 'max:10'],
            'balance' => ['numeric', 'between:-999999.99,999999.99'],
            'otherDescription' => ['string'],
        ];
    }
}
