<?php

namespace App\Models\BusinessEfficiency;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EfficiencySetup extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'department_id',
        'company_id',
        'setupBy',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'department_id' => 'integer',
        'company_id' => 'integer',
        'setupBy' => 'integer',
    ];

    public function subObjectives()
    {
        return $this->hasMany(SubObjective::class);
    }

    public function mainObjectives()
    {
        return $this->hasMany(MainObjective::class);
    }

    public function department()
    {
        return $this->belongsTo(\App\Models\Department::class);
    }

    public function company()
    {
        return $this->belongsTo(\App\Models\Company::class);
    }

    public function setupBy()
    {
        return $this->belongsTo(User::class);
    }
}
