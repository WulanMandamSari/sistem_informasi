<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\User;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        $user = User::all();
        return view('siswa.index', compact('siswa','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();
        return view('siswa.create', compact('siswa'));
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
            'nisn' => 'required', 
            'nama_siswa' => 'required', 
            'email' => 'required',
            'kelas' => 'required', 
            'jenkel' => 'required', 
            'alamat' => 'required',
            'ttl' => 'required', 
            'no_handphone' => 'required', 
        ]);

        Siswa::create([
            'nisn' => $request->nisn, 
            'nama_siswa' => $request->nama_siswa, 
            'email' => $request->email,
            'kelas' => $request->kelas,
            'jenkel' => $request->jenkel, 
            'alamat' => $request->alamat, 
            'ttl' => $request->ttl,
            'no_handphone' => $request->no_handphone, 
       ]);
       
        return redirect()->route('siswa')->with('Data ditambah','Data berhasil ditambahkan');
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
        $siswa = Siswa::where('id',$id)->first(); 
        return view('siswa.edit', compact('siswa'));
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
            'nisn' => 'required', 
            'nama_siswa' => 'required', 
            'kelas' => 'required', 
            'jenkel' => 'required', 
            'alamat' => 'required', 
            'ttl' => 'required', 
            'no_handphone' => 'required', 
            'email' => 'required'
        ]);

        Siswa::where('id', $id)->update([
            'nisn' => $request->nisn, 
            'nama_siswa' => $request->nama_siswa,
            'kelas' => $request->kelas, 
            'jenkel' => $request->jenkel, 
            'alamat' => $request->alamat, 
            'ttl' => $request->ttl,
            'no_handphone' => $request->no_handphone,
            'email' => $request->email
        ]); 
        
        return redirect()->route('siswa')->with('Data diedit','Data berhasil diedit'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Siswa::where('id',$id)->delete(); 
        return redirect()->route('siswa')->with('Data dihapus', 'Data berhasil dihapus');
    }
}
