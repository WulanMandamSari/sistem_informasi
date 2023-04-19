<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profile::all();
        return view('profile.index', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profile = Profile::all(); 
        return view('profile.create', compact('profile'));
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
            'npsn' => 'required', 
            'nama_sekolah' => 'required', 
            'jurusan' => 'required', 
            'kepsek' => 'required', 
            'alamat' => 'required', 
            'no_telepon' => 'required', 
            'email' => 'required', 
            'website' => 'required', 
            'status' => 'required', 
        ]);

        Profile::create([
             'npsn' => $request->npsn, 
             'nama_sekolah' => $request->nama_sekolah, 
             'jurusan' => $request->jurusan, 
             'kepsek' => $request->kepsek,
             'alamat' => $request->alamat, 
             'no_telepon' => $request->no_telepon,
             'email' => $request->email, 
             'website' => $request->website,
             'status' => $request->status, 
        ]);
        
        return redirect()->route('profile')->with('Data ditambah','Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = Profile::where('id',$id)->first(); 
        return view('profile.show',compact('profile')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profile = Profile::where('id',$id)->first(); 
        return view('profile.edit', compact('profile'));
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
            'npsn' => 'required', 
            'nama_sekolah' => 'required', 
            'jurusan' => 'required', 
            'kepsek' => 'required', 
            'alamat' => 'required', 
            'no_telepon' => 'required', 
            'email' => 'required', 
            'website' => 'required', 
            'status' => 'required',
        ]);

        Profile::where('id', $id)->update([
            'npsn' => $request->npsn, 
            'nama_sekolah' => $request->nama_sekolah,
            'jurusan' => $request->jurusan,
            'kepsek' => $request->kepsek, 
            'alamat' => $request->alamat, 
            'no_telepon' => $request->no_telepon, 
            'email' => $request->email, 
            'website' => $request->website, 
            'status' => $request->status, 
        ]); 
        
        return redirect()->route('profile')->with('Data diedit','Data berhasil diedit'); 
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
