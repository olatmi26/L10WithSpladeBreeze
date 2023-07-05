<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleUpdateRequest extends FormRequest
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
            'plateNo' => ['string', 'max:12', 'unique:vehicles,plateNo'],
            'dueStatus' => [''],
            'enteredBy' => [''],
            'chassesN0' => ['string', 'max:120', 'unique:vehicles,chassesN0'],
            'color' => ['string', 'max:50'],
            'type_id' => ['integer', 'exists:types,id'],
        ];
    }
}
