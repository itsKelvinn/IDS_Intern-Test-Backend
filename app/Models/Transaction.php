<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        "productID",
        "productName",
        "customerName",
        "amount",
        "status",
        "createBy",
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'productID', 'id');
    }
}
