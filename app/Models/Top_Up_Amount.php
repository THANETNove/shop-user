<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Top_Up_Amount extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount',
    ];
}
