<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class karyawanController extends Controller
{
    public function index ()
    {
        $data_karyawan = \App\karyawan::all();
        return view('karyawan.index', ['data_karyawan' => $data_karyawan]);
    }
}
