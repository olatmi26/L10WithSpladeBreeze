<?php

namespace App\Http\Resources\BusinessEfficiency;

use Illuminate\Http\Resources\Json\JsonResource;

class PerformanceEvaluationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'trackNo' => $this->trackNo,
            'userToEvaluate' => $this->userToEvaluate,
            'monthEvaluated' => $this->monthEvaluated,
            'efficiency_setup_id' => $this->efficiency_setup_id,
            'main_objective_id' => $this->main_objective_id,
            'sub_objective_id' => $this->sub_objective_id,
            'rating' => $this->rating,
            'totalScore' => $this->totalScore,
            'gradedBy' => $this->gradedBy,
            'accessibleTO' => $this->accessibleTO,
            'dateSubmitted' => $this->dateSubmitted,
            'paymentStatus' => $this->paymentStatus,
            'approvalStatus' => $this->approvalStatus,
            'approvedBy' => $this->approvedBy,
        ];
    }
}
