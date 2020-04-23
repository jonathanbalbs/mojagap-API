<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'amount',
        'transaction_type',
        'transaction_state',
        'source',
        'card_number',
        'destination',
    ];
}
