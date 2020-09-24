<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Resources\Anggota;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function getIndex()
    {
        $jabatan = Jabatan::all();
        // $jabatan_detail= Jabatan::select(['nama_jabatan'])->withCount('comments')->get();

        return view('front', compact('jabatan'));
    }


    public function show(Anggota $anggota)
    {
        $anggota_detail = $anggota;
        $jabatan = Jabatan::withCount('Anggota')->get();

        return view('anggota', compact('jabatan', 'anggota_detail'));
    }

    public function anggota_jabatan(Jabatan $jabats)
    {
        $jabatan = Jabatan::all();
        // $anggota = Anggota::all();

        $jabatanall = $jabats->Anggota()->get();
        $jabatansss = $jabats->Pengurus()->get();

        // $artikelterkait = Artikel::latest()->limit(4)->get();

        return view('anggota', compact('jabatan', 'jabatanall', 'jabatansss'));
    }
}
