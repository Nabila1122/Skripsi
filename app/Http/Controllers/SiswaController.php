<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return response()->json(Siswa::all());
    }

    public function store(Request $request)
    {
        return response()->json(
            Siswa::create($request->all()),
            201
        );
    }

    public function show($id)
    {
        return response()->json(Siswa::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $data = Siswa::findOrFail($id);
        $data->update($request->all());

        return response()->json($data);
    }

    public function destroy($id)
    {
        Siswa::destroy($id);
        return response()->json(['message' => 'Siswa deleted']);
    }
}
