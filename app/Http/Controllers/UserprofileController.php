<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Userprofile;

class UserprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $user_profile = User::where('id', $user->id)->get();
        return view('userprofile.index', compact('user','user_profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $user = User::find($id);
            //dd($user);
            $user->update([
                // dd($request)
                'nisn'              => $request->nisn == null ? $user->nisn : $request->nisn,
                'name'              => $request->name == null ? $user->name : $request->name,
                'email'             => $request->email == null ? $user->email : $request->email,	
                'no_telepon'        => $request->no_telepon == null ? $user->no_telepon : $request->no_telepon,
                'tempat_lahir'	    => $request->tempat_lahir == null ? $user->tempat_lahir : $request->tempat_lahir,
                'tgl_lahir'         => $request->tgl_lahir == null ? $user->tgl_lahir : $request->tgl_lahir,
                'alamat'            => $request->alamat == null ? $user->alamat : $request->alamat,
                'jenkel'            => $request->jenkel == null ? $user->jenkel : $request->jenkel,
                'hobi'              => $request->hobi == null ? $user->hobi : $request->hobi,	
            ]);
    
            return redirect(route('user_profile'))->with('Data diedit','Data berhasil diedit');
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
