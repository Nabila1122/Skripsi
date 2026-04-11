<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function showForm()
    {
        return view('konsultasi'); // Menampilkan form konsultasi
    }

    public function processForm(Request $request)
    {
        // Ambil data dari inputan form
        $data = $request->all();

        // Lakukan pemeriksaan atau perhitungan berdasarkan data yang diterima
        $results = $this->processIndikasi($data);

        // Kirim hasil konsultasi ke halaman hasil
        return view('hasilkonsultasi', compact('results'));
    }

    private function processIndikasi($data)
    {
        // Logika untuk memproses data dan menentukan hasil konsultasi
        $results = [];
        foreach ($data as $key => $value) {
            if (strpos($key, 'indikasi') !== false && $value == 'YA') {
                $results[] = "Indikasi " . $key . " : Positif";
            }
        }
        return $results;
    }
}