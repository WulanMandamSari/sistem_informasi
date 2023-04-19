<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nisn', 20);
            $table->string('nama_siswa', 100);
            $table->string('kelas', 30);
            $table->enum('jenkel', ['Laki-laki','Perempuan']);
            $table->text('alamat'); 
            $table->string('ttl', 255);
            $table->string('no_handphone', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
}
