<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleInsurance extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vehicle_id',
        'certificateNo',
        'naicomId',
        'policyNo',
        'VehicleRegN0',
        'vehicleType',
        'holderNameNo',
        'insurancePeriodStart',
        'insurancePeriodEnd',
        'insuranceCertTemplate',
        'issuedTo',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'vehicle_id' => 'integer',
        'vehicleType' => 'integer',
        'insurancePeriodStart' => 'date',
        'insurancePeriodEnd' => 'date',
        'issuedTo' => 'integer',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function vehicleType()
    {
        return $this->belongsTo(VehicleType::class);
    }

    public function issuedTo()
    {
        return $this->belongsTo(User::class);
    }
}
