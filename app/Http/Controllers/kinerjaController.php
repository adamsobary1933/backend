<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kinerja;
use Session;
//salah

class kinerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kinerja = kinerja::all();
        return view('kinerja.index', compact('kinerja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kinerja = kinerja::all();
        return view('kinerja.create', compact('kinerja'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kinerja = new kinerja();
        $kinerja->periode_penilaian = $request->periode_penilaian;
        $kinerja->nama_penilai = $request->nama_penilai;
        $kinerja->tanggal = $request->tanggal;
        $kinerja->nama_karyawan = $request->nama_karyawan;
        $kinerja->jabatan = $request->jabatan;
        $kinerja->departemen = $request->departemen;
        $kinerja->deskripsi_pekerjaan = $request->deskripsi_pekerjaan;
        $kinerja->keterangan = $request->keterangan;
        $kinerja->save();
        return redirect()->route('kinerja.index');
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
        //
    }
}
