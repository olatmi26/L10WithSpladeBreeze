<?php

namespace App\Http\Requests\BusinessEfficiency;

use Illuminate\Foundation\Http\FormRequest;

class MainObjectiveStoreRequest extends FormRequest
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
            'efficiency_setup_id' => ['integer', 'exists:efficiency_setups,id'],
            'majorCriterial' => ['string'],
            'totalWeightedPoint' => ['integer'],
        ];
    }
}
