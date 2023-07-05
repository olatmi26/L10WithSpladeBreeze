<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BillDetailStoreRequest extends FormRequest
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
            'bill_id' => ['integer', 'exists:bills,id'],
            'vendor_id' => ['integer', 'exists:vendors,id'],
            'bank_id' => ['integer', 'exists:banks,id'],
            'BankName' => ['string'],
            'AccountNo' => ['string'],
            'Amount' => ['numeric', 'between:-999999.99,999999.99'],
        ];
    }
}