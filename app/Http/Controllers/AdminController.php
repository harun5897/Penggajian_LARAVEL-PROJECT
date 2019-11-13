<?php

namespace App\Http\Controllers;

use App\Karyawan;
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
        $data_karyawan = \App\Karyawan::all();
        return view('admin.data_gaji', ['data_karyawan' => $data_karyawan]);
    }

    public function data_kasbon()
    {
        $kasbon = \App\Karyawan::all();
        return view('admin.data_kasbon', ['data_karyawan' => $kasbon]);
    }

    public function transaksi()
    {
        $data_karyawan = \App\Karyawan::all();
        return view('admin.transaksi', ['data_karyawan' => $data_karyawan]);
    }

    public function laporan()
    {
        return view('admin.laporan');
    }

    public function update_karyawan()
    {
        return view('admin.update_karyawan');
    }

    public function create(Request $request)
    {
        \App\Karyawan::create($request->all());
        return redirect('/data_karyawan');
    }

    public function edit($nip)
    {
        $karyawan = \App\Karyawan::find($nip);
        return view('admin.update_karyawan', ['karyawan' => $karyawan]);
    }

    public function update(Request $request, $nip)
    {
        $karyawan = \App\Karyawan::find($nip);
        $karyawan->update($request->all());
        return redirect('/data_karyawan');
    }

    public function delete($nip)
    {
        $karyawan = \App\Karyawan::find($nip);
        $karyawan->delete($karyawan);
        return redirect('/data_karyawan');
    }

    public function update_gaji()
    {
        return view('admin.update_gaji');
    }

    public function edit_gaji($nip)
    {
        $karyawan = \App\Karyawan::find($nip);
        return view('admin.update_gaji', ['karyawan' => $karyawan]);
    }

    public function gaji_update(Request $request, $nip)
    {
        $karyawan = \App\Karyawan::find($nip);
        $karyawan->update($request->all());
        return redirect('/data_gaji');
    }


    public function kasbon()
    {
        return view('admin.kasbon');
    }

    public function edit_kasbon($nip)
    {
        $karyawan = \App\Karyawan::find($nip);
        return view('admin.kasbon', ['karyawan' => $karyawan]);
    }

    public function kasbon_update(Request $request, $nip)
    {
        $karyawan = \App\Karyawan::find($nip);
        $karyawan->update($request->all());
        return redirect('/data_kasbon');
    }

    public function kasbon_input(Request $request)
    {
        $karyawan = \App\Karyawan::find($request->nip);
        $karyawan->update($request->all());
        return redirect('/data_kasbon');
    }

    public function hitung_transaksi()
    {
        return view('admin.hitung_transaksi');
    }

    public function transaksi_edit($nip)
    {
        $karyawan = \App\Karyawan::find($nip);
        return view('admin.hitung_transaksi', ['karyawan' => $karyawan]);
    }

    public function create_transaksi(Request $request)
    {
        \App\Transaksi::create($request->all());
        return redirect('/transaksi');
    }
}
