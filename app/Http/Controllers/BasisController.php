<?php

namespace App\Http\Controllers;

use App\Models\Basis;
use Illuminate\Http\Request;

class BasisController extends Controller
{
    public function index()
    {
        return response()->json(Basis::all());
    }

    public function store(Request $request)
    {
        return response()->json(
            Basis::create($request->all()),
            201
        );
    }

    public function show($id)
    {
        return response()->json(Basis::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $data = Basis::findOrFail($id);
        $data->update($request->all());

        return response()->json($data);
    }

    public function destroy($id)
    {
        Basis::destroy($id);
        return response()->json(['message' => 'Basis deleted']);
    }
}
