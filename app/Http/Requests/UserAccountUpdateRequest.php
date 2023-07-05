<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAccountUpdateRequest extends FormRequest
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
            'user_id' => ['integer', 'exists:users,id'],
            'bank_id' => ['integer', 'exists:banks,id'],
            'accountName' => ['string'],
            'AccountNo' => ['string', 'max:10', 'unique:user_accounts,AccountNo'],
            'balance' => ['numeric', 'between:-999999.99,999999.99'],
            'otherDescription' => ['string'],
        ];
    }
}
