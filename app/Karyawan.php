<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'data_karyawan';
    protected $fillable = ['nik', 'nama_depan', 'nama_belakang', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 'status', 'agama', 'no_hp', 'email', 'alamat', 'password'];
    public $timestamps = false;
}
