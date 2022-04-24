<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WonPrize extends Model
{
    use HasFactory;
    protected $fillable = [
        'userId',
        'won_prize',
    ];
}
