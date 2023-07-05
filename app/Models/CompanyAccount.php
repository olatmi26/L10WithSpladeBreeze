<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyAccount extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'accountName',
        'bank_id',
        'company_id',
        'AccountNo',
        'accountSwiftCode',
        'balanceCredited',
        'balanceDebited',
        'balance',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'bank_id' => 'integer',
        'company_id' => 'integer',
        'balanceCredited' => 'float',
        'balanceDebited' => 'float',
        'balance' => 'float',
    ];

    public function bank()
    {
        return $this->belongsTo(Bank::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}