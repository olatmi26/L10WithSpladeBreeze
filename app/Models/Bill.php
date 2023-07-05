<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'ApprovalId',
        'company_id',
        'dept_id',
        'vendor_id',
        'purpose',
        'bill_type_id',
        'bill_category_id',
        'totalAmountOnBill',
        'amountPartlyPaid',
        'dateDue',
        'overdueDate',
        'pendingWithDept',
        'pendingWithPerson',
        'reminderCount',
        'paymentStatus',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'vendor_id' => 'integer',
        'bill_type_id' => 'integer',
        'bill_category_id' => 'integer',
        'totalAmountOnBill' => 'float',
        'amountPartlyPaid' => 'float',
        'dateDue' => 'date',
        'overdueDate' => 'date',
        'pendingWithDept' => 'integer',
        'pendingWithPerson' => 'integer',
        'paymentStatus' => 'boolean',
    ];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function billType()
    {
        return $this->belongsTo(BillType::class);
    }

    public function billCategory()
    {
        return $this->belongsTo(BillCategory::class);
    }

    public function pendingWithDept()
    {
        return $this->belongsTo(Department::class);
    }

    public function pendingWithPerson()
    {
        return $this->belongsTo(User::class);
    }
}
