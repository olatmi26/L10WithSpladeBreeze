<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillManagerComments extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'bill_id',
        'commentBy',
        'commenterReplyBy',
        'commentMsg',
        'replyMsg',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'bill_id' => 'integer',
        'commentBy' => 'integer',
        'commenterReplyBy' => 'integer',
    ];

    public function bill()
    {
        return $this->belongsTo(Bill::class);
    }

    public function commentBy()
    {
        return $this->belongsTo(User::class);
    }

    public function commenterReplyBy()
    {
        return $this->belongsTo(User::class);
    }
}
