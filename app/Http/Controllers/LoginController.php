<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    // Login via API
    public function apiLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $admin = Admin::where('username', $request->username)->first();

        if($admin && Hash::check($request->password, $admin->password)){
            // Set session admin
            Session::put('admin_id', $admin->id_admin);
            Session::put('admin_name', $admin->nama);

            return response()->json([
                'success' => true,
                'message' => 'Login berhasil',
                'admin' => [
                    'id' => $admin->id_admin,
                    'username' => $admin->username,
                    'nama' => $admin->nama
                ]
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Username atau password salah'
        ], 401);
    }

    // Logout
    public function logout(Request $request)
    {
        Session::flush(); // Hapus session
        return response()->json([
            'success' => true,
            'message' => 'Logout berhasil'
        ]);
    }
}