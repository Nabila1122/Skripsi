<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return response()->json(Admin::all());
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|unique:admin,username',
            'password' => 'required|min:6',
            'email'    => 'required|email|unique:admin,email',
            'no_telp'  => 'nullable',
            'nama'     => 'required'
        ]);

        $data['password'] = Hash::make($data['password']);

        $admin = Admin::create($data);

        return response()->json($admin, 201);
    }

    public function show($id)
    {
        return response()->json(Admin::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);
        $admin->update($request->all());

        return response()->json($admin);
    }

    public function destroy($id)
    {
        Admin::destroy($id);
        return response()->json(['message' => 'Admin deleted']);
    }
}
