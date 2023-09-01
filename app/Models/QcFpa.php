<?php

namespace App\Models;

use Spatie\Permission\Traits\HasRoles;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QcFpa extends Model
{
    use HasFactory, HasRoles;

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
