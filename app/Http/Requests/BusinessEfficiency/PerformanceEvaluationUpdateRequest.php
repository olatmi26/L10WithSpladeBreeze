<?php

namespace App\Http\Requests\BusinessEfficiency;

use Illuminate\Foundation\Http\FormRequest;

class PerformanceEvaluationUpdateRequest extends FormRequest
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
            'trackNo' => ['string', 'unique:performance_evaluations,trackNo'],
            'userToEvaluate' => [''],
            'monthEvaluated' => [''],
            'efficiency_setup_id' => ['integer', 'exists:efficiency_setups,id'],
            'main_objective_id' => ['integer', 'exists:main_objectives,id'],
            'sub_objective_id' => ['integer', 'exists:sub_objectives,id'],
            'rating' => ['integer'],
            'totalScore' => ['integer'],
            'gradedBy' => [''],
            'accessibleTO' => ['string'],
            'dateSubmitted' => [''],
            'paymentStatus' => [''],
            'approvalStatus' => [''],
            'approvedBy' => [''],
        ];
    }
}
