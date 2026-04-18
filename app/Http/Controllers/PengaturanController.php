<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class PengaturanController extends Controller
{
    public function index()
    {
        $adminId = session('admin_id');

        if (!$adminId) {
            return redirect()->route('login_admin');
        }

        $admin = Admin::where('id_admin', $adminId)->first();

        if (!$admin) {
            abort(404, 'Admin tidak ditemukan');
        }

        return view('pengaturan', compact('admin'));
    }

    public function update(Request $request)
    {
        $adminId = session('admin_id');

        $admin = Admin::where('id_admin', $adminId)->first();

        if (!$admin) {
            return back()->with('error', 'Admin tidak ditemukan');
        }

        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'no_telp' => 'required',
            'password' => 'nullable|min:6'
        ]);

        $admin->nama = $request->nama;
        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->no_telp = $request->no_telp;

        if ($request->password) {
            $admin->password = Hash::make($request->password);
        }

        $admin->save();

        return back()->with('success', 'Data berhasil diperbarui');
    }
}