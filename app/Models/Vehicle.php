<?php

namespace App\Models;

use App\Models\User;
use App\Models\VehicleType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vehicle extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'plateNo',
        'dueStatus',
        'enteredBy',
        'chassesN0',
        'color',
        'vehicle_type_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'dueStatus' => 'boolean',
        'enteredBy' => 'integer',
        'type_id' => 'integer',
    ];

    public function enteredBy()
    {
        return $this->belongsTo(User::class);
    }

    public function type()
    {
        return $this->belongsTo(VehicleType::class);
    }
}