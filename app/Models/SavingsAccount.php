<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SavingsAccount extends Model
{
    protected $fillable = [
        'member_id',
        'account_no',
        'balance',
        'status',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function deposits()
    {
        return $this->hasMany(Deposit::class);
    }
}
