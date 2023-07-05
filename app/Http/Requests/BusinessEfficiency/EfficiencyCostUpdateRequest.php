<?php

namespace App\Http\Requests\BusinessEfficiency;

use Illuminate\Foundation\Http\FormRequest;

class EfficiencyCostUpdateRequest extends FormRequest
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
            'company_id' => ['integer', 'exists:companies,id'],
            'TotalCost' => ['numeric', 'gt:0', 'between:0,999999.99'],
        ];
    }
}
