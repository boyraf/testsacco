<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
    protected $fillable = ['member_id', 'amount', 'share_type', 'trans_date'];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
