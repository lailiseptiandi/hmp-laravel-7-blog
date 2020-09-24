<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Jabatan;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
// use App\Http\Resources as AnggotaResource;

class AnggotaController extends Controller
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
        $anggota = Anggota::latest()->paginate(5);
        // dd($anggota);
        return view('admin.anggota.index', compact('anggota'));
        // return view('admin.anggota.index'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan = Jabatan::select('id', 'nama_jabatan')->get();

        return view('admin\anggota\create', compact('jabatan'));
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
            'nama' => 'required|string|max:30',
            'slug' => 'required|string|max:20',
            'alamat' => 'required:string|max:100',
            'jabatan_id' => 'required',
            'angkatan' => 'required',
            'gambar' => 'mimes:png,jpg,jpeg'
        ]);

        $anggota = new Anggota;
        $anggota->nama = $request['nama'];
        $anggota->slug = $request['slug'];
        $anggota->alamat = $request['alamat'];
        $anggota->jabatan_id = $request['jabatan_id'];
        $anggota->angkatan = $request['angkatan'];
        // $anggota->jabatan = $request->jabatan;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $fileName = Str::random(30) . '.' . $gambar->guessClientExtension();
            $gambar->move('image/anggota', $fileName);

            $anggota->gambar = $fileName;
        }
        $anggota->save();
        // return view('admin.anggota.index', compact('anggota'));
        // return redirect()->route('admin.anggota.index', compact('anggota'));
         return redirect(route('anggota.index'))
                ->with(['success' => '<strong>' . $anggota->nama . '</strong> Ditambahkan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jabatan = Jabatan::Select('id', 'nama_jabatan')->get();
        $anggota = Anggota::find($id);

        return view('admin\anggota\edit', compact('anggota', 'jabatan'));
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
        $anggota = Anggota::findOrFail($id);
        $anggota->nama = $request['nama'];
        $anggota->slug = $request['slug'];
        $anggota->alamat = $request['alamat'];
        $anggota->jabatan_id = $request['jabatan_id'];
        $anggota->angkatan = $request['angkatan'];
        if ($request->hasFile('gambar')) {

            $itemImage = public_path("image/anggota/{$anggota->gambar}"); // get previous image from folder
            if (File::exists($itemImage)) { // unlink or remove previous image from folder
                unlink($itemImage);
            }

            $gambar = $request->file('gambar');
            $fileName = Str::random(30) . '.' . $gambar->guessClientExtension();
            $gambar->move('image/anggota', $fileName);

            $anggota->gambar = $fileName;
        }
        $anggota->save();
        return redirect()->route('anggota.index', compact('anggota'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anggota = Anggota::findOrFail($id);

        if (!empty($produk->gambar)) {
            //file akan dihapus dari folder uploads/produk
            $itemImage = public_path("image/anggota/{$anggota->gambar}"); // get previous image from folder
            if (File::exists($itemImage)) { // unlink or remove previous image from folder
                unlink($itemImage);
            }
        }
        // Storage::delete(public_path('/public/image/produk/' . $produk->photo));

        $anggota->delete();
        // return view('admin.anggota.index', compact('anggota'));
       return redirect()->back()->with(['success' => 'Anggota: ' . $anggota->nama . ' Telah Dihapus']);
    }
}
