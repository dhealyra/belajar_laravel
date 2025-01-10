<?php

namespace App\Http\Controllers;

use App\Models\Ppdb;
use Illuminate\Http\Request;

class PpdbsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Ppdb::all();
        return view('ppdb.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ppdb.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $siswa = new Ppdb;
        $siswa->nama_lengkap = $request->nama_lengkap;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->agama = $request->agama;
        $siswa->alamat = $request->alamat;
        $siswa->telepon = $request->telepon;
        $siswa->asal_sekolah = $request->asal_sekolah;
        $siswa->save();

        return redirect()->route('ppdb.index')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Ppdb::findOrFail($id);
        return view('ppdb.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Ppdb::findOrFail($id);
        return view('ppdb.edit', compact('siswa'));
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
     
        $siswa = Ppdb::findOrFail($id);
        $siswa->nama_lengkap = $request->nama_lengkap;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->agama = $request->agama;
        $siswa->alamat = $request->alamat;
        $siswa->telepon = $request->telepon;
        $siswa->asal_sekolah = $request->asal_sekolah;
        $siswa->save();

        return redirect()->route('ppdb.index')->with('success', 'Data Berhasil Diubah');   
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Ppdb::findOrFail($id);
        $siswa->delete();
        
        return redirect()->route('ppdb.index')->with('success', 'Data Berhasil Dihapus');   
    }
}
