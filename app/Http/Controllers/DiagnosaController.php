<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Basis;
use App\Models\Gangguan;
use App\Models\Kondisi;
use App\Models\Siswa;

class DiagnosaController extends Controller
{
    public function index()
    {
        return view('konsultasi');
    }

    public function proses(Request $request)
{
    $jawaban = $request->input('jawaban', []);

    $indikasiYa = [];

    foreach ($jawaban as $kd_indikasi => $nilai) {
        if ($nilai === 'YA') {
            $indikasiYa[] = $kd_indikasi;
        }
    }

    $basis = Basis::whereIn('kd_indikasi', $indikasiYa)->get();

    $hasil = [];

foreach ($basis as $data) {
    $kd_gangguan = $data->kd_gangguan;
    $bobot = $data->bobot;

    // kalau belum ada, set 0 dulu
    if (!isset($hasil[$kd_gangguan])) {
        $hasil[$kd_gangguan] = 0;
    }

    // jumlahkan bobot
    $hasil[$kd_gangguan] += $bobot;
}

$maxNilai = max($hasil);
$kdGangguanTerpilih = array_search($maxNilai, $hasil);

$gangguan = Gangguan::where('kd_gangguan', $kdGangguanTerpilih)->first();

$nis = $request->input('nis');

$siswa = Siswa::where('nis', $nis)->first();

if (!$siswa) {
    dd('Siswa tidak ditemukan');
}
Kondisi::create([
    'id_siswa' => $siswa->id_siswa,
    'id_gangguan' => $gangguan->id_gangguan,
    'tanggal' => now()
]);
return view('hasilkonsultasi', [
    'gangguan' => $gangguan,
    'nilai' => $maxNilai,
    'siswa' => $siswa
]);
}
}