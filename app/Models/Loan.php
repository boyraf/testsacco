<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = [
        'member_id',
        'loan_type_id',
        'principal_amount',
        'interest_rate',
        'duration_months',
        'status',
        'approved_at',
        'disbursed_at',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function loanType()
    {
        return $this->belongsTo(LoanType::class);
    }

    public function repayments()
    {
        return $this->hasMany(LoanRepayment::class);
    }

    public function totalRepaid()
    {
        return $this->repayments()->sum('amount_paid');
    }

    public function balance()
    {
        $total = $this->principal_amount + ($this->principal_amount * ($this->interest_rate / 100));
        return $total - $this->totalRepaid();
    }
}
