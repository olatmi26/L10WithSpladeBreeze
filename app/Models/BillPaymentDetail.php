<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillPaymentDetail extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bill_id',
        'vendor_id',
        'debitedAccount',
        'creditedAccount',
        'amountToPay',
        'amountProcessed',
        'balanceToPay',
        'dateProcessed',
        'paidBy',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'bill_id' => 'integer',
        'vendor_id' => 'integer',
        'debitedAccount' => 'integer',
        'creditedAccount' => 'integer',
        'amountToPay' => 'float',
        'amountProcessed' => 'float',
        'balanceToPay' => 'float',
        'dateProcessed' => 'timestamp',
        'paidBy' => 'integer',
    ];

    public function bill()
    {
        return $this->belongsTo(Bill::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function debitedAccount()
    {
        return $this->belongsTo(CompanyAccount::class);
    }

    public function creditedAccount()
    {
        return $this->belongsTo(VendorAccount::class);
    }

    public function paidBy()
    {
        return $this->belongsTo(User::class);
    }
}
