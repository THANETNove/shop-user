<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddMoneyUsers extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'money',
        'bonus',
        'status_bonus',
        'status_upImage',
    ];
}
