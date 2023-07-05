<?php

namespace App\Http\Requests\BusinessEfficiency;

use Illuminate\Foundation\Http\FormRequest;

class EfficiencyPaymentUpdateRequest extends FormRequest
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
            'performance_evaluation_id' => ['integer', 'exists:performance_evaluations,id'],
            'amountToPay' => ['numeric', 'gt:0', 'between:0,999999.99'],
        ];
    }
}
