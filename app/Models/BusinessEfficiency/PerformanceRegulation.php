<?php

namespace App\Models\BusinessEfficiency;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerformanceRegulation extends Model
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
        'comment',
        'regulatedBy',
        'approvalStatus',
        'approvedBy',
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
        'regulatedBy' => 'integer',
        'approvalStatus' => 'boolean',
        'approvedBy' => 'integer',
    ];

    public function performanceEvaluations()
    {
        return $this->belongsToMany(PerformanceEvaluation::class);
    }

    public function performanceEvaluation()
    {
        return $this->belongsTo(PerformanceEvaluation::class);
    }

    public function mainObjective()
    {
        return $this->belongsTo(MainObjective::class);
    }

    public function regulatedBy()
    {
        return $this->belongsTo(User::class);
    }

    public function approvedBy()
    {
        return $this->belongsTo(User::class);
    }
}
