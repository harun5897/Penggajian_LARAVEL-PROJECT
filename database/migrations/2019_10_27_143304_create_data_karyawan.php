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
            //tabel data karyawan
            $table->integerIncrements('nip');
            $table->string('user_id')->nullable();
            $table->string('nik');
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('status');
            $table->string('agama');
            $table->string('no_hp');
            $table->char('email');
            $table->char('alamat');
            $table->date('tanggal_join');
            $table->string('lama_kerja')->nullable();
            //tabel data gaji
            $table->string('divisi')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('gaji_pokok')->nullable();
            $table->string('tnj_jabatan')->nullable();
            $table->string('tnj_lama_kerja')->nullable();
            $table->string('bpjs_kes')->nullable();
            $table->string('bpjs_kt')->nullable();
            //tabel data kasbon
            $table->date('tanggal_kasbon')->nullable();
            $table->string('jumlah_kasbon')->nullable();
            $table->string('masa_kasbon')->nullable();
            $table->string('potongan_perbulan')->nullable();
            $table->string('sisa_kasbon')->nullable();
            $table->string('status_kasbon')->nullable();
            $table->string('status_gaji')->nullable();
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
