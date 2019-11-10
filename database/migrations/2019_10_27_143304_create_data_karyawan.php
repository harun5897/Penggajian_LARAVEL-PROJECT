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

            $table->string('divisi');
            $table->string('jabatan');
            $table->string('gaji_pokok');
            $table->string('bpjs_kes');
            $table->string('bpjs_ket');

            $table->string('jumlah_kasbon');
            $table->string('potongan_perbulan');
            $table->string('sisa_kasbon');
            $table->string('status_kasbon');
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
