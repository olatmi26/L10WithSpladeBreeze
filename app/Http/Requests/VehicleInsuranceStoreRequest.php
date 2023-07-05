<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleInsuranceStoreRequest extends FormRequest
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
            'vehicle_id' => ['integer', 'exists:vehicles,id'],
            'certificateNo' => ['string'],
            'naicomId' => ['string'],
            'policyNo' => ['string'],
            'VehicleRegN0' => ['string'],
            'vehicleType' => ['required'],
            'holderNameNo' => ['string'],
            'insurancePeriodStart' => ['date'],
            'insurancePeriodEnd' => ['date'],
            'insuranceCertTemplate' => ['string'],
            'issuedTo' => [''],
            'certificateNo' => ['string'],
            'naicomId' => ['string'],
            'policyNo' => ['string'],
            'vehicle_id' => ['integer', 'exists:vehicles,id'],
            'certificateNo' => ['string'],
            'naicomId' => ['string'],
            'policyNo' => ['string'],
            'VehicleRegN0' => ['string'],
            'vehicleType' => ['required'],
            'holderNameNo' => ['string'],
            'insurancePeriodStart' => ['date'],
            'insurancePeriodEnd' => ['date'],
            'insuranceCertTemplate' => ['string'],
            'issuedTo' => [''],
            'vehicleType' => ['required'],
            'holderNameNo' => ['string'],
            'insurancePeriodStart' => ['date'],
            'insurancePeriodEnd' => ['date'],
            'insuranceCertTemplate' => ['string'],
            'vehicle_id' => ['integer', 'exists:vehicles,id'],
            'certificateNo' => ['string'],
            'naicomId' => ['string'],
            'policyNo' => ['string'],
            'VehicleRegN0' => ['string'],
            'vehicleType' => ['required'],
            'holderNameNo' => ['string'],
            'insurancePeriodStart' => ['date'],
            'insurancePeriodEnd' => ['date'],
            'insuranceCertTemplate' => ['string'],
            'issuedTo' => [''],
        ];
    }
}
