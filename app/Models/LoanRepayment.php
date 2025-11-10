<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoanRepayment extends Model
{
    protected $fillable = [
        'loan_id',
        'amount_paid',
        'payment_date',
        'payment_method',
        'teller_id',
        'remarks',
    ];

    public function loan()
    {
        return $this->belongsTo(Loan::class);
    }

    public function teller()
    {
        return $this->belongsTo(User::class, 'teller_id');
    }
}
