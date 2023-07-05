<?php

namespace App\Models\BusinessEfficiency;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerformanceEvaluation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'trackNo',
        'userToEvaluate',
        'monthEvaluated',
        'efficiency_setup_id',
        'main_objective_id',
        'sub_objective_id',
        'rating',
        'totalScore',
        'gradedBy',
        'accessibleTO',
        'dateSubmitted',
        'paymentStatus',
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
        'userToEvaluate' => 'integer',
        'monthEvaluated' => 'datetime',
        'efficiency_setup_id' => 'integer',
        'main_objective_id' => 'integer',
        'sub_objective_id' => 'integer',
        'gradedBy' => 'integer',
        'dateSubmitted' => 'datetime',
        'paymentStatus' => 'boolean',
        'approvalStatus' => 'boolean',
        'approvedBy' => 'integer',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function userToEvaluate()
    {
        return $this->belongsTo(User::class);
    }

    public function efficiencySetup()
    {
        return $this->belongsTo(EfficiencySetup::class);
    }

    public function mainObjective()
    {
        return $this->belongsTo(MainObjective::class);
    }

    public function subObjective()
    {
        return $this->belongsTo(SubObjective::class);
    }

    public function gradedBy()
    {
        return $this->belongsTo(User::class);
    }

    public function approvedBy()
    {
        return $this->belongsTo(User::class);
    }
}
