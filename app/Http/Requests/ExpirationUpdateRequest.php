<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExpirationUpdateRequest extends FormRequest
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
            'document_id' => ['integer', 'exists:documents,id'],
            'vehicle_id' => ['integer', 'exists:vehicles,id'],
            'ownBy' => [''],
            'company_id' => ['integer', 'exists:companies,id'],
            'dateRenew' => ['date'],
            'expireDate' => ['date'],
            'nextRenewal' => ['date'],
            'notificationPeriod' => ['required', 'integer'],
            'expirationStatus' => [''],
            'enteredBy' => [''],
        ];
    }
}
