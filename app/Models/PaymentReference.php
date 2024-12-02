<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentReference extends Model
{
    //
    protected $fillable = [
        'reference_id', 'user_id', 'status', 'amount', 'meta_data'
    ];
}
