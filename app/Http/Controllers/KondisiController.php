<?php

namespace App\Http\Controllers;

use App\Models\Kondisi;
use Illuminate\Http\Request;

class KondisiController extends Controller
{
    public function index()
    {
        return response()->json(Kondisi::all());
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
        return response()->json(Kondisi::findOrFail($id));
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
}
