<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WonPrize extends Model
{
    use HasFactory;
    protected $fillable = [
        'time_number',
        'won_prize',
        'won_prize1',
    ];
}
