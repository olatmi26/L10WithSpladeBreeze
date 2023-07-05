<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BillManagerCommentUpdateRequest extends FormRequest
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
            'bill_id' => ['integer', 'exists:bills,id'],
            'commentBy' => [''],
            'commenterReplyBy' => [''],
            'commentMsg' => ['string'],
            'replyMsg' => ['string'],
        ];
    }
}
