<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BillStoreRequest extends FormRequest
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
            'user_id' => ['integer'],
            'ApprovalId' => ['string', 'unique:bills,ApprovalId'],
            'company_id' => ['integer'],
            'dept_id' => ['integer'],
            'vendor_id' => ['integer', 'exists:vendors,id'],
            'purpose' => ['string'],
            'bill_type_id' => ['integer', 'exists:bill_types,id'],
            'bill_category_id' => ['integer', 'exists:bill_categories,id'],
            'totalAmountOnBill' => ['numeric', 'between:-999999.99,999999.99'],
            'amountPartlyPaid' => ['numeric', 'between:-999999.99,999999.99'],
            'dateDue' => ['date'],
            'overdueDate' => ['date'],
            'pendingWithDept' => [''],
            'pendingWithPerson' => [''],
            'reminderCount' => ['integer'],
            'paymentStatus' => [''],
            'ApprovalId' => ['string', 'unique:bills,ApprovalId'],
            'company_id' => ['integer'],
            'user_id' => ['integer'],
            'ApprovalId' => ['string', 'unique:bills,ApprovalId'],
            'company_id' => ['integer'],
            'dept_id' => ['integer'],
            'vendor_id' => ['integer', 'exists:vendors,id'],
            'purpose' => ['string'],
            'bill_type_id' => ['integer', 'exists:bill_types,id'],
            'bill_category_id' => ['integer', 'exists:bill_categories,id'],
            'totalAmountOnBill' => ['numeric', 'between:-999999.99,999999.99'],
            'amountPartlyPaid' => ['numeric', 'between:-999999.99,999999.99'],
            'dateDue' => ['date'],
            'overdueDate' => ['date'],
            'pendingWithDept' => [''],
            'pendingWithPerson' => [''],
            'reminderCount' => ['integer'],
            'paymentStatus' => [''],
            'user_id' => ['integer'],
            'ApprovalId' => ['string', 'unique:bills,ApprovalId'],
            'company_id' => ['integer'],
            'dept_id' => ['integer'],
            'vendor_id' => ['integer', 'exists:vendors,id'],
            'purpose' => ['string'],
            'bill_type_id' => ['integer', 'exists:bill_types,id'],
            'bill_category_id' => ['integer', 'exists:bill_categories,id'],
            'totalAmountOnBill' => ['numeric', 'between:-999999.99,999999.99'],
            'amountPartlyPaid' => ['numeric', 'between:-999999.99,999999.99'],
            'dateDue' => ['date'],
            'overdueDate' => ['date'],
            'pendingWithDept' => [''],
            'pendingWithPerson' => [''],
            'reminderCount' => ['integer'],
            'paymentStatus' => [''],
            'purpose' => ['string'],
            'bill_type_id' => ['integer', 'exists:bill_types,id'],
            'user_id' => ['integer'],
            'ApprovalId' => ['string', 'unique:bills,ApprovalId'],
            'company_id' => ['integer'],
            'dept_id' => ['integer'],
            'vendor_id' => ['integer', 'exists:vendors,id'],
            'purpose' => ['string'],
            'bill_type_id' => ['integer', 'exists:bill_types,id'],
            'bill_category_id' => ['integer', 'exists:bill_categories,id'],
            'totalAmountOnBill' => ['numeric', 'between:-999999.99,999999.99'],
            'amountPartlyPaid' => ['numeric', 'between:-999999.99,999999.99'],
            'dateDue' => ['date'],
            'overdueDate' => ['date'],
            'pendingWithDept' => [''],
            'pendingWithPerson' => [''],
            'reminderCount' => ['integer'],
            'paymentStatus' => [''],
            'totalAmountOnBill' => ['numeric', 'between:-999999.99,999999.99'],
            'user_id' => ['integer'],
            'ApprovalId' => ['string', 'unique:bills,ApprovalId'],
            'company_id' => ['integer'],
            'dept_id' => ['integer'],
            'vendor_id' => ['integer', 'exists:vendors,id'],
            'purpose' => ['string'],
            'bill_type_id' => ['integer', 'exists:bill_types,id'],
            'bill_category_id' => ['integer', 'exists:bill_categories,id'],
            'totalAmountOnBill' => ['numeric', 'between:-999999.99,999999.99'],
            'amountPartlyPaid' => ['numeric', 'between:-999999.99,999999.99'],
            'dateDue' => ['date'],
            'overdueDate' => ['date'],
            'pendingWithDept' => [''],
            'pendingWithPerson' => [''],
            'reminderCount' => ['integer'],
            'paymentStatus' => [''],
            'user_id' => ['integer'],
            'ApprovalId' => ['string', 'unique:bills,ApprovalId'],
            'company_id' => ['integer'],
            'dept_id' => ['integer'],
            'vendor_id' => ['integer', 'exists:vendors,id'],
            'purpose' => ['string'],
            'bill_type_id' => ['integer', 'exists:bill_types,id'],
            'bill_category_id' => ['integer', 'exists:bill_categories,id'],
            'totalAmountOnBill' => ['numeric', 'between:-999999.99,999999.99'],
            'amountPartlyPaid' => ['numeric', 'between:-999999.99,999999.99'],
            'dateDue' => ['date'],
            'overdueDate' => ['date'],
            'pendingWithDept' => [''],
            'pendingWithPerson' => [''],
            'reminderCount' => ['integer'],
            'paymentStatus' => [''],
            'user_id' => ['integer'],
            'ApprovalId' => ['string', 'unique:bills,ApprovalId'],
            'company_id' => ['integer'],
            'dept_id' => ['integer'],
            'vendor_id' => ['integer', 'exists:vendors,id'],
            'purpose' => ['string'],
            'bill_type_id' => ['integer', 'exists:bill_types,id'],
            'bill_category_id' => ['integer', 'exists:bill_categories,id'],
            'totalAmountOnBill' => ['numeric', 'between:-999999.99,999999.99'],
            'amountPartlyPaid' => ['numeric', 'between:-999999.99,999999.99'],
            'dateDue' => ['date'],
            'overdueDate' => ['date'],
            'pendingWithDept' => [''],
            'pendingWithPerson' => [''],
            'reminderCount' => ['integer'],
            'paymentStatus' => [''],
            'user_id' => ['integer'],
            'ApprovalId' => ['string', 'unique:bills,ApprovalId'],
            'company_id' => ['integer'],
            'dept_id' => ['integer'],
            'vendor_id' => ['integer', 'exists:vendors,id'],
            'purpose' => ['string'],
            'bill_type_id' => ['integer', 'exists:bill_types,id'],
            'bill_category_id' => ['integer', 'exists:bill_categories,id'],
            'totalAmountOnBill' => ['numeric', 'between:-999999.99,999999.99'],
            'amountPartlyPaid' => ['numeric', 'between:-999999.99,999999.99'],
            'dateDue' => ['date'],
            'overdueDate' => ['date'],
            'pendingWithDept' => [''],
            'pendingWithPerson' => [''],
            'reminderCount' => ['integer'],
            'paymentStatus' => [''],
            'user_id' => ['integer'],
            'ApprovalId' => ['string', 'unique:bills,ApprovalId'],
            'company_id' => ['integer'],
            'dept_id' => ['integer'],
            'vendor_id' => ['integer', 'exists:vendors,id'],
            'purpose' => ['string'],
            'bill_type_id' => ['integer', 'exists:bill_types,id'],
            'bill_category_id' => ['integer', 'exists:bill_categories,id'],
            'totalAmountOnBill' => ['numeric', 'between:-999999.99,999999.99'],
            'amountPartlyPaid' => ['numeric', 'between:-999999.99,999999.99'],
            'dateDue' => ['date'],
            'overdueDate' => ['date'],
            'pendingWithDept' => [''],
            'pendingWithPerson' => [''],
            'reminderCount' => ['integer'],
            'paymentStatus' => [''],
            'user_id' => ['integer'],
            'ApprovalId' => ['string', 'unique:bills,ApprovalId'],
            'company_id' => ['integer'],
            'dept_id' => ['integer'],
            'vendor_id' => ['integer', 'exists:vendors,id'],
            'purpose' => ['string'],
            'bill_type_id' => ['integer', 'exists:bill_types,id'],
            'bill_category_id' => ['integer', 'exists:bill_categories,id'],
            'totalAmountOnBill' => ['numeric', 'between:-999999.99,999999.99'],
            'amountPartlyPaid' => ['numeric', 'between:-999999.99,999999.99'],
            'dateDue' => ['date'],
            'overdueDate' => ['date'],
            'pendingWithDept' => [''],
            'pendingWithPerson' => [''],
            'reminderCount' => ['integer'],
            'paymentStatus' => [''],
            'user_id' => ['integer'],
            'ApprovalId' => ['string', 'unique:bills,ApprovalId'],
            'company_id' => ['integer'],
            'dept_id' => ['integer'],
            'vendor_id' => ['integer', 'exists:vendors,id'],
            'purpose' => ['string'],
            'bill_type_id' => ['integer', 'exists:bill_types,id'],
            'bill_category_id' => ['integer', 'exists:bill_categories,id'],
            'totalAmountOnBill' => ['numeric', 'between:-999999.99,999999.99'],
            'amountPartlyPaid' => ['numeric', 'between:-999999.99,999999.99'],
            'dateDue' => ['date'],
            'overdueDate' => ['date'],
            'pendingWithDept' => [''],
            'pendingWithPerson' => [''],
            'reminderCount' => ['integer'],
            'paymentStatus' => [''],
        ];
    }
}
