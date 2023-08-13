<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    use HasFactory;
    protected $fillable=['customer_id','amount','name'];

    function customer() : BelongsTo {
        return $this->belongsTo(User::class,'customer_id','id');
    }
}
