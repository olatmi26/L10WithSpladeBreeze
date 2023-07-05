<?php

namespace App\Models\BusinessEfficiency;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EfficiencyPayment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'performance_evaluation_id',
        'amountToPay',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'performance_evaluation_id' => 'integer',
        'amountToPay' => 'float',
    ];

    public function companies()
    {
        return $this->belongsToMany(\App\Models\Company::class);
    }

    public function performanceEvaluation()
    {
        return $this->belongsTo(PerformanceEvaluation::class);
    }
}
