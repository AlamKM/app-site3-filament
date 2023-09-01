<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory, HasRoles;

    protected $fillable = [
        'item_code',
        'item_name',
        'category',
        'sub_category',
        'unit',
        'note',
    ];

    public function QcFpa(){
        return $this->hasMany(QcFpa::class);
    }
}
