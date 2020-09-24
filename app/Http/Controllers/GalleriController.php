<?php

namespace App\Http\Controllers;

use App\Models\Galleri;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
// use Illuminate\Http\File;
use Illuminate\Support\Facades\File;

class GalleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galleri::all();

        return view('admin.gallery.index', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
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
            'gambar' => 'mimes:png,jpg'
        ]);
        $galeri = new Galleri;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $fileName = Str::random(30) . '.' . $gambar->guessClientExtension();
            $gambar->move('image/galleri', $fileName);

            $galeri->gambar = $fileName;
        }
        $galeri->save();
        return redirect()->route('gallery.index', compact('galeri'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri = Galleri::find($id);
        $itemImage = public_path() . 'image/galleri/' . $galeri->gambar; // get previous image from folder
        unlink($itemImage);
        // if (File::exists($itemImage)) { // unlink or remove previous image from folder
        // }
        $galeri->delete();
        return redirect()->route('gallery.index');
    }
}
