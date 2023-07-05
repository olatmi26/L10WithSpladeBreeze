<?php

namespace App\Http\Requests\BusinessEfficiency;

use Illuminate\Foundation\Http\FormRequest;

class EfficiencySetupUpdateRequest extends FormRequest
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
            'department_id' => ['integer', 'exists:departments,id'],
            'company_id' => ['integer', 'exists:companies,id'],
            'setupBy' => [''],
        ];
    }
}