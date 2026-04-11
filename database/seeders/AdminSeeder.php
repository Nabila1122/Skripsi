<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        Admin::create([
            'username' => 'admin1',
            'password' => Hash::make('admin123'), // password default
            'nama' => 'Admin Utama',
            'email' => 'admin1@example.com',
            'no_telp' => '081234567890',
        ]);

        Admin::create([
            'username' => 'admin2',
            'password' => Hash::make('pass123'),
            'nama' => 'Admin Kedua',
            'email' => 'admin2@example.com',
            'no_telp' => '081298765432',
        ]);
    }
}