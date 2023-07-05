<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyAccountStoreRequest extends FormRequest
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
            'accountName' => ['string'],
            'bank_id' => ['integer', 'exists:banks,id'],
            'AccountNo' => ['string', 'max:10'],
            'accountName' => ['string'],
            'bank_id' => ['integer', 'exists:banks,id'],
            'AccountNo' => ['string', 'max:10'],
            'accountSwiftCode' => ['string'],
            'balanceCredited' => ['numeric', 'between:-999999.99,999999.99'],
            'balanceDebited' => ['numeric', 'between:-999999.99,999999.99'],
            'balance' => ['numeric', 'between:-999999.99,999999.99'],
            'accountName' => ['string'],
            'bank_id' => ['integer', 'exists:banks,id'],
            'AccountNo' => ['string', 'max:10'],
            'accountSwiftCode' => ['string'],
            'balanceCredited' => ['numeric', 'between:-999999.99,999999.99'],
            'balanceDebited' => ['numeric', 'between:-999999.99,999999.99'],
            'balance' => ['numeric', 'between:-999999.99,999999.99'],
            'accountName' => ['string'],
            'bank_id' => ['integer', 'exists:banks,id'],
            'AccountNo' => ['string', 'max:10'],
            'accountSwiftCode' => ['string'],
            'balanceCredited' => ['numeric', 'between:-999999.99,999999.99'],
            'balanceDebited' => ['numeric', 'between:-999999.99,999999.99'],
            'balance' => ['numeric', 'between:-999999.99,999999.99'],
            'accountName' => ['string'],
            'bank_id' => ['integer', 'exists:banks,id'],
            'AccountNo' => ['string', 'max:10'],
            'accountSwiftCode' => ['string'],
            'balanceCredited' => ['numeric', 'between:-999999.99,999999.99'],
            'balanceDebited' => ['numeric', 'between:-999999.99,999999.99'],
            'balance' => ['numeric', 'between:-999999.99,999999.99'],
        ];
    }
}
