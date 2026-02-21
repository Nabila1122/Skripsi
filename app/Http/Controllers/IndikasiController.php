<?php

namespace App\Http\Controllers;

use App\Models\Indikasi;
use Illuminate\Http\Request;

class IndikasiController extends Controller
{
    public function index()
    {
        return response()->json(Indikasi::all());
    }

    public function store(Request $request)
    {
        return response()->json(
            Indikasi::create($request->all()),
            201
        );
    }

    public function show($id)
    {
        return response()->json(Indikasi::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $data = Indikasi::findOrFail($id);
        $data->update($request->all());

        return response()->json($data);
    }

    public function destroy($id)
    {
        Indikasi::destroy($id);
        return response()->json(['message' => 'Indikasi deleted']);
    }
}
