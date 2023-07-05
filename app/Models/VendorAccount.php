<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorAccount extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vendor_id',
        'bank_id',
        'accountName',
        'AccountNo',
        'balance',
        'otherDescription',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'vendor_id' => 'integer',
        'bank_id' => 'integer',
        'balance' => 'float',
    ];

    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }
}