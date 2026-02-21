<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kondisi extends Model
{
    protected $table = 'kondisi';
    protected $primaryKey = 'id_kondisi';

    protected $fillable = [
        'id_siswa',
        'id_gangguan',
        'tanggal'
    ];

    // RELASI
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'id_siswa');
    }

    public function gangguan()
    {
        return $this->belongsTo(Gangguan::class, 'id_gangguan');
    }
}
