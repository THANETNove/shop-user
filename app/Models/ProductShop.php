<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductShop extends Model
{
    use HasFactory;

    protected $fillable = [
        'store',
        'picture',
        'Product code',      
        'price',
        'Warranty',      
        'total amount',
        'percent',      
        'income',
        'payment status',      
        'status user',
        'Out of stock user'      
    ];
}

