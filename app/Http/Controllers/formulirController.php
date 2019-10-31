<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\formulir;
use Session;

class formulirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formulir = formulir::all();
        return view('formulir.index', compact('formulir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formulir = formulir::all();
        return view('formulir.create', compact('formulir'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formulir = new formulir();
        $formulir->periode_penilain = $request->periode_penilain;
        $formulir->nama_penilai = $request->nama_penilai;
        $formulir->tanggal = $request->tanggal;
        $formulir->nama_kar = $request->nama_kar;
        $formulir->jabatan = $request->jabatan;
        $formulir->departemen = $request->departemen;
        $formulir->deskripsi_pekerjaan = $request->deskripsi_pekerjaan;
        $formulir->nilai1 = $request->nilai1;
        $formulir->nilai2 = $request->nilai2;
        $formulir->nilai3 = $request->nilai3;
        $formulir->nilai4 = $request->nilai4;
        $formulir->nilai5 = $request->nilai5;
        $formulir->nilai6 = $request->nilai6;
        $formulir->nilai7 = $request->nilai7;
        $formulir->nilai8 = $request->nilai8;
        $formulir->nilai9 = $request->nilai9;
        $formulir->nilai10 = $request->nilai10;
        $formulir->keterangan1 = $request->keterangan1;
        $formulir->keterangan2 = $request->keterangan2;
        $formulir->keterangan3 = $request->keterangan3;
        $formulir->keterangan4 = $request->keterangan4;
        $formulir->keterangan5 = $request->keterangan5;
        $formulir->keterangan6 = $request->keterangan6;
        $formulir->keterangan7 = $request->keterangan7;
        $formulir->keterangan8 = $request->keterangan8;
        $formulir->keterangan9 = $request->keterangan9;
        $formulir->keterangan10 = $request->keterangan10;
        $formulir->jumlah_nilai = $request->jumlah_nilai;
        $formulir->rangkuman_evaluasi = $request->rangkuman_evaluasi;
        $formulir->rekomendasi = $request->rekomendasi;
        $formulir->save();
        return redirect()->route('formulir.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formulir = formulir::findOrFail($id);
        return view('formulir.show', compact('formulir'));
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
        $formulir = formulir::findOrFail($id);
        $formulir = formulir::findOrFail($id);
        $formulir->delete();
        return redirect()->route('formulir.index')->with('notif', 'Data Berhasil Dihapus');
    }
}
