<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'member_no',
        'first_name',
        'last_name',
        'gender',
        'dob',
        'national_id',
        'phone',
        'email',
        'branch_id',
        'status',
        'joined_at',
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function savingsAccounts()
    {
        return $this->hasMany(SavingsAccount::class);
    }

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    public function shares()
    {
        return $this->hasMany(Share::class);
    }

    public function fullName()
    {
        return "{$this->first_name} {$this->last_name}";
    }
}
