<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parameterqc extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'parameter',
        'unit',
        'method',
        'note',
    ];
}
