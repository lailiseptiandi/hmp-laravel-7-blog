<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        $jabatan = Jabatan::all();

        return response()->json([
            'message' => true,
            'data' => $jabatan
        ]);
    }

    public function update(Request $request)
    {
        $jabatan = Jabatan::find($id);

        $jabatan->update($request->all());
        return response()->json([
            'message' => true,
            'data' => $jabatan
        ]);
    }
}
