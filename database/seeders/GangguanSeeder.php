<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gangguan;

class GangguanSeeder extends Seeder
{
    public function run()
    {
        $gangguanData = [
            [
                'kd_gangguan' => 'G001',
                'nama_gangguan' => 'Kecemasan',
                'mitigasi' => 'Mengidentifikasi pemicu, melatih relaksasi, mengelola waktu dengan baik',
                'solusi' => 'Untuk mengatasi kecemasan, penting untuk mengatur pola hidup, relaksasi, dan konsultasi psikolog',
                'np_sasaran' => 0.3
            ],
            [
                'kd_gangguan' => 'G002',
                'nama_gangguan' => 'Stres',
                'mitigasi' => 'Relaksasi mandiri, olahraga teratur, mengelola tekanan kerja atau sekolah',
                'solusi' => 'Stres dapat dikelola dengan teknik relaksasi, manajemen waktu, dan aktivitas fisik',
                'np_sasaran' => 0.2
            ],
            [
                'kd_gangguan' => 'G003',
                'nama_gangguan' => 'Depresi',
                'mitigasi' => 'Mengenali nilai diri, aktivitas positif, relaksasi, dukungan sosial',
                'solusi' => 'Mengatasi depresi membutuhkan pengelolaan emosi, konseling, dan aktivitas yang mendukung kebahagiaan',
                'np_sasaran' => 0.2
            ],
            // Tambahkan semua baris lain sesuai file Gangguan.xlsx
        ];

        foreach ($gangguanData as $data) {
            Gangguan::create($data);
        }
    }
}