<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Basis extends Model
{
    protected $table = 'basis';
    protected $primaryKey = 'id_basis';

    protected $fillable = [
        'id_gangguan',
        'id_indikasi',
        'bobot'
    ];

    // RELASI
    public function gangguan()
    {
        return $this->belongsTo(Gangguan::class, 'id_gangguan');
    }

    public function indikasi()
    {
        return $this->belongsTo(Indikasi::class, 'id_indikasi');
    }
}
