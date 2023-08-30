<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QcFpaDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'qcfpa_id',
        'no_fpa',
        'item',
        'parameter',
        'std_parameter',
        'unit',
        'hasil_analisa',
        'method',
        'status_analisa',
        'qc_analis',
        'tgl_analisa',
        'tgl_input',
    ];

    public function parameterqc()
    {
        return $this->belongsTo(Parameterqc::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
