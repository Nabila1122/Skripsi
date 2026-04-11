<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    // Tabel
    protected $table = 'siswa';

    // Primary key
    protected $primaryKey = 'id_siswa';
    public $incrementing = true;     // tetap auto-increment
    protected $keyType = 'int';      // integer

    // Fillable → field yang bisa diisi mass assignment
    protected $fillable = [
        'nis',
        'nama',
        'jenis_kelamin',
        'usia'
    ];

    // RELASI ke tabel kondisi
    public function kondisi()
    {
        return $this->hasMany(Kondisi::class, 'id_siswa', 'id_siswa');
    }
}