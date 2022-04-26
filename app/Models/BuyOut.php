<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyOut extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'product_name',
        'finished_size',
        'price',
        'back_piece',
        'outgrowth',
        'numberCount',
    ];
}

