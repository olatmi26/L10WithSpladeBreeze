<?php

namespace App\Models\BusinessEfficiency;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainObjective extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'efficiency_setup_id',
        'majorCriterial',
        'totalWeightedPoint',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'efficiency_setup_id' => 'integer',
    ];

    public function efficiencySetup()
    {
        return $this->belongsTo(EfficiencySetup::class);
    }
}
