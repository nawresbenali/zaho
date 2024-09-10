<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calcul extends Model
{
    use HasFactory;
    protected $fillable = [
        'adrdep',
        'adrarv',
        'kil',
        'price',
        'nom'
    ];

}
