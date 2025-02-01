<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Genre;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penerbit = Penerbit::all();
        $genre = Genre::all();
        return view('buku.create', compact('penerbit', 'genre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
                'nama_buku' => 'required',
                'harga' => 'required',
                'stok' => 'required',
                'image' => 'required',
                'id_penerbit' => 'required',
                'tanggal_penerbit' => 'required',
                'id_genre' => 'required',
            ],);

        $buku = new buku;
        $buku->nama_buku = $request->nama_buku;
        $buku->harga = $request->harga;
        $buku->stok = $request->stok;
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $name = rand(1000,9999).$img->getClientOriginalName();
            $img->move('images/buku', $name);
            $buku->image = $name;
        }
        $buku->id_penerbit = $request->id_penerbit;
        $buku->tanggal_terbit = $request->tanggal_terbit;
        $buku->id_genre = $request->id_genre;
        $buku->save();

        return redirect()->route('buku.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = buku::findOrFail($id);
        $penerbit = penerbit::all();
        $genre = genre::all();

        return view('buku.show', compact('buku', 'penerbit', 'genre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = buku::findOrFail($id);
        $penerbit = penerbit::all();
        $genre = genre::all();
        return view('buku.edit', compact('buku', 'penerbit', 'genre'));

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
        $validateData = $request->validate([
            'nama_buku' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'image' => 'required',
            'id_penerbit' => 'required',
            'tanggal_penerbit' => 'required',
            'id_genre' => 'required',
        ],);
        
        $buku = buku::findOrFail($id);
        $buku->nama_buku = $request->nama_buku;
        $buku->harga = $request->harga;
        $buku->stok = $request->stok;
        if ($request->hasFile('image')) {
            $buku->deleteImage();
            $img = $request->file('image');
            $name = rand(1000,9999).$img->getClientOriginalName();
            $img->move('images/buku', $name);
            $buku->image = $name;
        }
        $buku->id_penerbit = $request->id_penerbit;
        $buku->tanggal_terbit = $request->tanggal_terbit;
        $buku->id_genre = $request->id_genre;
        $buku->save();

        return redirect()->route('buku.index')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = buku::findOrFail($id);
        $buku->delete();
        
        return redirect()->route('buku.index')->with('success', 'Data Berhasil Dihapus');
    }
}
