<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentStoreRequest extends FormRequest
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
            'name' => ['string'],
            'slug' => ['string'],
            'code' => ['string'],
            'description' => ['string'],
            'enteredBy' => [''],
            'name' => ['string'],
            'slug' => ['string'],
            'code' => ['string'],
            'description' => ['string'],
            'enteredBy' => [''],
            'name' => ['string'],
            'slug' => ['string'],
            'code' => ['string'],
            'description' => ['string'],
            'enteredBy' => [''],
            'name' => ['string'],
            'slug' => ['string'],
            'code' => ['string'],
            'description' => ['string'],
            'enteredBy' => [''],
        ];
    }
}
