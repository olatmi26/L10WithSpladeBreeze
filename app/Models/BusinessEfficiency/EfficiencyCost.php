<?php

namespace App\Models\BusinessEfficiency;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EfficiencyCost extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_id',
        'TotalCost',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'company_id' => 'integer',
        'TotalCost' => 'float',
    ];

    public function companies()
    {
        return $this->belongsToMany(\App\Models\Company::class);
    }

    public function company()
    {
        return $this->belongsTo(\App\Models\Company::class);
    }
}
