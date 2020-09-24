<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Jabatan;
use App\Models\Pengurus;
use Illuminate\Support\Facades\File;

class PengurusController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengurus = Pengurus::latest()->paginate(5);

        return view('admin\pengurus\index', compact('pengurus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = Jabatan::select('id', 'nama_jabatan')->limit(1)->get();

        return view('admin\pengurus\create', compact('jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'slug' => 'required',
            'alamat' => 'required',
            'jabatans_id' => 'required',
            'angkatan' => 'required',
            'gambar' => 'mimes:png,jpg,jpeg'
        ]);

        $pengurus = new Pengurus;
        $pengurus->nama = $request->nama;
        $pengurus->slug = $request->slug;
        $pengurus->alamat = $request->alamat;
        $pengurus->jabatans_id = $request->jabatans_id;
        $pengurus->angkatan = $request->angkatan;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $fileName = Str::random(30) . '.' . $gambar->guessClientExtension();
            $gambar->move('image/pengurus', $fileName);

            $pengurus->gambar = $fileName;
        }
        $pengurus->save();
        // return view('admin.anggota.index', compact('anggota'));
        return redirect(route('pengurus.index'))
            ->with(['success' => '<strong>' . $pengurus->nama . '</strong> Ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jabatan = Jabatan::Select('id', 'nama_jabatan')->get();
        $pengurus = Pengurus::find($id);

        return view('admin\pengurus\edit', compact('pengurus', 'jabatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'slug' => 'required',
            'alamat' => 'required',
            'jabatan' => 'required',
            'angkatan' => 'required',
            'gambar' => 'mimes:png,jpg'
        ]);
        $pengurus = Pengurus::find($id);
        $pengurus->nama = $request['nama'];
        $pengurus->nama = $request['slug'];
        $pengurus->alamat = $request['alamat'];
        $pengurus->jabatans_id = $request['jabatans_id'];
        $pengurus->angkatan = $request['angkatan'];
        if ($request->hasFile('gambar')) {

            $itemImage = public_path("image/pengurus/{$pengurus->gambar}"); // get previous image from folder
            if (File::exists($itemImage)) { // unlink or remove previous image from folder
                unlink($itemImage);
            }

            $gambar = $request->file('gambar');
            $fileName = Str::random(30) . '.' . $gambar->guessClientExtension();
            $gambar->move('image/pengurus', $fileName);

            $pengurus->gambar = $fileName;
        }
        $pengurus->save();
        return redirect()->route('pengurus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengurus = Pengurus::findOrFail($id);
        $pengurus->delete();
        // return view('admin.anggota.index', compact('anggota'));
        return redirect()->route('pengurus.index');
    }
}
