<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public $timestamps = false;
    protected $table = 'siswas'; 
    protected $fillable = ['nisn','nama_siswa','kelas','jenkel','alamat','ttl','no_handphone','email']; 
}
