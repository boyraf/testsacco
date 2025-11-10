<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $fillable = ['name', 'location', 'manager'];

    public function members()
    {
        return $this->hasMany(Member::class);
    }
}
