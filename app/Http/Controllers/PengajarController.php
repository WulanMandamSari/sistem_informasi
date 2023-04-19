<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengajar; 
use App\Kelas;

class PengajarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengajar = Pengajar::all();
        return view('pengajar.index', compact('pengajar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pengajar = Pengajar::all(); 
        return view('pengajar.create', compact('pengajar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_pengajar' => 'required', 
            'no_handphone' => 'required', 
            'jenkel' => 'required', 
            'tugas' => 'required', 
        ]);

        Pengajar::create([
             'nama_pengajar' => $request->nama_pengajar, 
             'no_handphone' => $request->no_handphone, 
             'jenkel' => $request->jenkel, 
             'tugas' => $request->tugas,
        ]);
        
        return redirect()->route('pengajar')->with('Data ditambah','Data berhasil ditambahkan');
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
        $pengajar = Pengajar::where('id',$id)->first(); 
        return view('pengajar.edit', compact('pengajar'));
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
        $this->validate($request,[
            'nama_pengajar' => 'required', 
            'no_handphone' => 'required', 
            'jenkel' => 'required', 
            'tugas' => 'required', 
        ]);

        Pengajar::where('id', $id)->update([
            'nama_pengajar' => $request->nama_pengajar, 
            'no_handphone' => $request->no_handphone,
            'jenkel' => $request->jenkel, 
            'tugas' => $request->tugas, 
        ]); 
        
        return redirect()->route('pengajar')->with('Data diedit','Data berhasil diedit'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pengajar::where('id',$id)->delete(); 
        return redirect()->route('pengajar')->with('Data dihapus', 'Data berhasil dihapus');
    }
}
