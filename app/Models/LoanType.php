<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoanType extends Model
{
    protected $fillable = ['name', 'max_amount', 'interest_rate', 'description'];

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }
}
