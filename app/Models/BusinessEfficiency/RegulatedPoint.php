<?php

namespace App\Models\BusinessEfficiency;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegulatedPoint extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'performance_evaluation_id',
        'main_objective_id',
        'regulatedPoint',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'performance_evaluation_id' => 'integer',
        'main_objective_id' => 'integer',
    ];

    public function performanceEvaluation()
    {
        return $this->belongsTo(PerformanceEvaluation::class);
    }

    public function mainObjective()
    {
        return $this->belongsTo(MainObjective::class);
    }
}
