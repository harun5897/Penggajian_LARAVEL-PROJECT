<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'transaksi';
    protected $fillable = ['id', 'nip', 'nama', 'jabatan', 'tanggal_transaksi', 'gaji_pokok', 'tnj_jabatan', 'tnj_lama_kerja', 'bpjs_kt', 'bpjs_kes', 'lembur', 'absen', 'total_gaji', 'potongan_perbulan'];
    // public $timestamps = false;
}
