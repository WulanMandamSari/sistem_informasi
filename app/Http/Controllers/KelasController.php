<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Pengajar;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengajar = \App\Pengajar::all();
        $kelas = Kelas::all();
        return view('kelas.index', compact('pengajar','kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = \App\Kelas::all();
        $pengajar = Pengajar::all();
        return view('kelas.create', compact('kelas','pengajar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request,[
            'id_pengajar' => 'required', 
            'nama_kelas' => 'required', 
            'jumlah_siswa' => 'required', 
        ]);

        Kelas::create([
             'id_pengajar' => $request->id_pengajar, 
             'nama_kelas' => $request->nama_kelas, 
             'jumlah_siswa' => $request->jumlah_siswa, 
        ]);
        
        return redirect()->route('kelas')->with('Data ditambah','Data berhasil ditambahkan');
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
        $pengajar = \App\Pengajar::all();
        $kelas = Kelas::where('id',$id)->first(); 
        return view('kelas.edit', compact('kelas','pengajar'));
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
        // dd($request);
        $this->validate($request,[
            'id_pengajar' => 'required', 
            'nama_kelas' => 'required', 
            'jumlah_siswa' => 'required', 
        ]);

        Kelas::where('id', $id)->update([
            'id_pengajar' => $request->id_pengajar, 
            'nama_kelas' => $request->nama_kelas,
            'jumlah_siswa' => $request->jumlah_siswa, 
        ]); 
        
        return redirect()->route('kelas')->with('Data diedit','Data berhasil diedit'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kelas::where('id',$id)->delete(); 
        return redirect()->route('kelas')->with('Data dihapus', 'Data berhasil dihapus');
    }
}
