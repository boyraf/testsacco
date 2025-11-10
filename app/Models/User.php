<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Relationships
    public function deposits()
    {
        return $this->hasMany(Deposit::class, 'teller_id');
    }

    public function loanRepayments()
    {
        return $this->hasMany(LoanRepayment::class, 'teller_id');
    }
}
