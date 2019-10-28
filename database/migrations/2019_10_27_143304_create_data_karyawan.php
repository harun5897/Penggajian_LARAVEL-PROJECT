<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKaryawan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_karyawan', function (Blueprint $table) {
            $table->integerIncrements('nip');
            $table->float('nik');
            $table->float('npwp');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->string('jenis_kelamin');
            $table->string('gol_darah');
            $table->string('status');
            $table->string('agama');
            $table->char('alamat');
            $table->float('no_hp');
            $table->char('email');
            $table->char('divisi');
            $table->char('jabatan');
            $table->date('tgl_join');
            $table->char('password');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_karyawan');
    }
}
