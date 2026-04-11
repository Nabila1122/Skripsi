<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Basis extends Model
{
    protected $table = 'basis';
    protected $primaryKey = 'id_basis';

    protected $fillable = [
        'kd_gangguan',
        'kd_indikasi',
        'bobot'
    ];

    public function gangguan()
    {
        return $this->belongsTo(Gangguan::class, 'kd_gangguan', 'kd_gangguan');
    }

    public function indikasi()
    {
        return $this->belongsTo(Indikasi::class, 'kd_indikasi', 'kd_indikasi');
    }
}