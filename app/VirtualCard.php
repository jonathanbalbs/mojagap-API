<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VirtualCard extends Model
{
    protected $fillable = [
        'card_number',
        'card_type',
        'card_category',
        'card_state',
        'last_state_change',
        'card_owner',
        'card_balance',
        'card_limit',
        'expiry_date',
    ];
}
