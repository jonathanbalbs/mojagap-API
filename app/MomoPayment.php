<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MomoPayment extends Model
{
    protected $fillable = [
        'sender_number',
        'sender_id',
        'reason',
        'application',
    ];
}
