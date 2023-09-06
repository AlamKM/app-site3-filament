<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'No PR',
        'No PO',
        'Item Code',
        'Description',
        'Qty',
        'Unit',
        'Note',

    ];

    public function Purchase(): HasMany
    {
        return $this->hasMany(QcFpa::class);
    }
}
