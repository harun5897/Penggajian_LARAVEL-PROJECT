<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function data_karyawan()
    {
        $data_karyawan = \App\Karyawan::all();
        return view('admin.data_karyawan', ['data_karyawan' => $data_karyawan]);
    }

    public function data_gaji()
    {
        return view('admin.data_gaji');
    }

    public function transaksi()
    {
        return view('admin.transaksi');
    }

    public function laporan()
    {
        return view('admin.laporan');
    }

    public function input_karyawan()
    {
        return view('admin.input_karyawan');
    }

    public function input_data_gaji()
    {
        return view('admin.input_data_gaji');
    }

    public function create(Request $request)
    {
        \App\Karyawan::create($request->all());
        return redirect('/data_karyawan');
    }
}
