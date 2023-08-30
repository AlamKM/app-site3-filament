<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QcFpa extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'no_fpa',
        'item',
        'status_item',
        'create_by',
        'qcanalis_by',
        'status_fpa',
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
    
    
}
