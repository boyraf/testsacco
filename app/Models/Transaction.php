<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'trans_type',
        'reference_id',
        'member_id',
        'amount',
        'description',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
