<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\karyawan;
use Session;

class karyawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = karyawan::all();
        return view('karyawan.index', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $karyawan = karyawan::all();
        return view('karyawan.create', compact('karyawan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $karyawan = new karyawan();
        $karyawan->nama_karyawan = $request->nama_karyawan;
        $karyawan->alamat = $request->alamat;
        $karyawan->jabatan = $request->jabatan;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->email = $request->email;
        $karyawan->umur = $request->umur;
        $karyawan->tanggal_mulai_kontrak = $request->tanggal_mulai_kontrak;
        $karyawan->tanggal_akhir_kontrak = $request->tanggal_akhir_kontrak;
        $karyawan->save();
        return redirect()->route('karyawan.index')->with('pesan', 'Berhasil Memasukan Data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawan = karyawan::findOrFail($id);
        return view('karyawan.show', compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karyawan = karyawan::findOrFail($id);
        return view('karyawan.edit', compact('karyawan'));
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
        $karyawan = karyawan::findOrFail($id);
        $karyawan->nama_karyawan = $request->nama_karyawan;
        $karyawan->tanggal_mulai_kontrak = $request->tanggal_mulai_kontrak;
        $karyawan->tanggal_akhir_kontrak = $request->tanggal_akhir_kontrak;
        $karyawan->save();
        return redirect()->route('karyawan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawan = karyawan::findOrFail($id);
        $karyawan = karyawan::findOrFail($id);
        $karyawan->delete();
        return redirect()->route('karyawan.index')->with('notif', 'Data Berhasil Dihapus');
    }
}