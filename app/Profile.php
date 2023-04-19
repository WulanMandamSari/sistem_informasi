<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $timestamps = false;
    protected $table = 'profiles'; 
    protected $fillable = ['npsn','nama_sekolah','jurusan','kepsek','alamat','no_telepon','email','website','status']; 
}
