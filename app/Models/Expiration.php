<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expiration extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'document_id',
        'vehicle_id',
        'ownBy',
        'company_id',
        'dateRenew',
        'expireDate',
        'nextRenewal',
        'notificationPeriod',
        'expirationStatus',
        'enteredBy',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'document_id' => 'integer',
        'vehicle_id' => 'integer',
        'ownBy' => 'integer',
        'company_id' => 'integer',
        'dateRenew' => 'date',
        'expireDate' => 'date',
        'nextRenewal' => 'date',
        'expirationStatus' => 'boolean',
        'enteredBy' => 'integer',
    ];

    public function document()
    {
        return $this->belongsTo(Document::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function ownBy()
    {
        return $this->belongsTo(User::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function enteredBy()
    {
        return $this->belongsTo(User::class);
    }
}
