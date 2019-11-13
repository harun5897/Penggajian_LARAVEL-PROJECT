<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('nip');
            $table->string('nama');
            $table->string('jabatan');
            $table->date('tanggal_transaksi');
            $table->string('gaji_pokok');
            $table->string('tnj_jabatan');
            $table->string('tnj_lama_kerja');
            $table->string('bpjs_kt');
            $table->string('bpjs_kes');
            $table->string('lembur');
            $table->string('absen');
            $table->string('total_gaji');
            $table->string('potongan_perbulan');
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
        Schema::dropIfExists('transaksi');
    }
}
