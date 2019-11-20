<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $primaryKey = 'nip';
    protected $table = 'data_karyawan';
    protected $fillable = ['nip', 'nik', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'status', 'agama',    'no_hp', 'email', 'alamat', 'tanggal_join', 'lama_kerja', 'divisi', 'jabatan', 'gaji_pokok', 'tnj_jabatan', 'tnj_lama_kerja', 'bpjs_kes', 'bpjs_kt', 'tanggal_kasbon', 'jumlah_kasbon', 'masa_kasbon', 'potongan_perbulan', 'sisa_kasbon', 'status_kasbon', 'user_id', 'status_gaji'];
    public $timestamps = false;
}
