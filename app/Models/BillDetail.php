<?php

namespace App\Models;

use App\Models\Bank;
use App\Models\Bill;
use App\Models\Vendor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BillDetail extends Model
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
        'bank_id',
        'BankName',
        'AccountNo',
        'Amount',
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
        'bank_id' => 'integer',
        'Amount' => 'float',
    ];

    public function bill()
    {
        return $this->belongsTo(Bill::class);
    }

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }
}