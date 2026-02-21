<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gangguan extends Model
{
    protected $table = 'gangguan';
    protected $primaryKey = 'id_gangguan';

    protected $fillable = [
        'kd_gangguan',
        'nama_gangguan',
        'mitigasi',
        'solusi',
        'np_sasaran'
    ];

    // RELASI
    public function basis()
    {
        return $this->hasMany(Basis::class, 'id_gangguan');
    }

    public function kondisi()
    {
        return $this->hasMany(Kondisi::class, 'id_gangguan');
    }
}
