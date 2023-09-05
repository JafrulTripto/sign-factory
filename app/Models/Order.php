<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['client_id', 'number', 'details', 'status' , 'total_price', 'shipping_price'];

    public function client() : BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

}
