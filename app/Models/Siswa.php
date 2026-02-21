<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'usia'
    ];

    // RELASI
    public function kondisi()
    {
        return $this->hasMany(Kondisi::class, 'id_siswa');
    }
}
