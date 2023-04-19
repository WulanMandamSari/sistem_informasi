<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public $timestamps = false;
    protected $table = 'kelas'; 
    protected $fillable = ['id_pengajar','nama_kelas','jumlah_siswa']; 

    public function pengajar()
    {
        return $this->belongsTo('App\Pengajar','id','id');
    }
}
