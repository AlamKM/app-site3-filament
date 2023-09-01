<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Parameterqc extends Model
{
    use HasFactory, HasRoles;

    protected $fillable = [
        'category',
        'parameter',
        'unit',
        'method',
        'note',
    ];

    public function QcFpa(){
        return $this->hasMany(QcFpa::class);
    }
}
