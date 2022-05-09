<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankBook extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_bank',
        'name_bank',
        'number_bank'      
    ];
}
