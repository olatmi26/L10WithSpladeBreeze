<?php

namespace App\Http\Requests\BusinessEfficiency;

use Illuminate\Foundation\Http\FormRequest;

class PerformanceRegulationStoreRequest extends FormRequest
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
            'main_objective_id' => ['integer', 'exists:main_objectives,id'],
            'regulatedPoint' => ['integer'],
            'comment' => ['string'],
            'regulatedBy' => [''],
            'approvalStatus' => [''],
            'approvedBy' => [''],
        ];
    }
}
