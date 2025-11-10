<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    protected $fillable = [
        'savings_account_id',
        'amount',
        'payment_method',
        'teller_id',
        'trans_date',
    ];

    public function savingsAccount()
    {
        return $this->belongsTo(SavingsAccount::class);
    }

    public function teller()
    {
        return $this->belongsTo(User::class, 'teller_id');
    }
}
