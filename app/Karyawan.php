<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $primaryKey = 'nip';
    protected $table = 'data_karyawan';
    protected $fillable = ['nip', 'nik', 'nama', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'status', 'agama',    'no_hp', 'email', 'alamat', 'divisi', 'jabatan', 'gaji_pokok', 'bpjs_kes', 'bpjs_ket', 'jumlah_kasbon', 'potongan_perbulan', 'sisa_kasbon', 'status_kasbon'];
    public $timestamps = false;
}
