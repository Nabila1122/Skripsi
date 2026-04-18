<?php

namespace App\Http\Controllers;

use App\Models\Kondisi;
use Illuminate\Http\Request;

class KondisiController extends Controller
{
    public function index()
{
    $data = Kondisi::with(['siswa', 'gangguan'])->get();

    return response()->json($data);
}

    public function store(Request $request)
    {
        return response()->json(
            Kondisi::create($request->all()),
            201
        );
    }

    public function show($id)
{
    $data = Kondisi::with(['siswa', 'gangguan'])->findOrFail($id);

    return response()->json($data);
}

    public function update(Request $request, $id)
    {
        $data = Kondisi::findOrFail($id);
        $data->update($request->all());

        return response()->json($data);
    }

    public function destroy($id)
    {
        Kondisi::destroy($id);
        return response()->json(['message' => 'Kondisi deleted']);
    }
    public function detail($id)
{
    $data = Kondisi::with(['siswa', 'gangguan'])->findOrFail($id);

    return view('detailkondisi', compact('data'));
}
}
