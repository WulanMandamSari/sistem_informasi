<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajar extends Model
{
    public $timestamps = false;
    protected $table = 'pengajars'; 
    protected $fillable = ['nama_pengajar','no_handphone','jenkel','tugas']; 

    public function kelas()
    {
        return $this->hasMany('App\Kelas');
    }
}
