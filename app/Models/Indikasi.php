<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Indikasi extends Model
{
    protected $table = 'indikasi';
    protected $primaryKey = 'id_indikasi';

    protected $fillable = [
        'kd_indikasi',
        'nama_indikasi'
    ];

    // RELASI
    public function basis()
    {
        return $this->hasMany(Basis::class, 'id_indikasi');
    }
}
