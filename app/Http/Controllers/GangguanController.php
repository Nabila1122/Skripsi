<?php

namespace App\Http\Controllers;

use App\Models\Gangguan;
use Illuminate\Http\Request;

class GangguanController extends Controller
{
    public function index()
    {
        return response()->json(Gangguan::all());
    }

    public function store(Request $request)
    {
        return response()->json(
            Gangguan::create($request->all()),
            201
        );
    }

    public function show($id)
    {
        return response()->json(Gangguan::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $data = Gangguan::findOrFail($id);
        $data->update($request->all());

        return response()->json($data);
    }

    public function destroy($id)
    {
        Gangguan::destroy($id);
        return response()->json(['message' => 'Gangguan deleted']);
    }
}
