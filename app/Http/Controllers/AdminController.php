<?php

namespace App\Http\Controllers;

use App\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        $karyawan = \App\Karyawan::all();
        $karyawan_aktif = \App\Karyawan::count();
        $total_karyawan = \App\Karyawan::all()->last();
        $status_gaji = $karyawan->where('status_gaji', 'yes')->count();

        return view('admin.dashboard', ['karyawan_aktif' => $karyawan_aktif, 'status_gaji' => $status_gaji, 'total_karyawan' => $total_karyawan]);
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
        $data_karyawan = \App\Transaksi::all();
        return view('admin.transaksi', ['data_karyawan' => $data_karyawan]);
    }

    public function laporan()
    {
        $data_laporan = \App\Transaksi::all();
        return view('admin.laporan', ['data_laporan' => $data_laporan]);
    }

    public function update_karyawan()
    {
        return view('admin.update_karyawan');
    }

    public function manager()
    {
        return view('manager.manager');
    }


    public function create(Request $request)
    {
        $filter_nik = \App\Karyawan::where('nik','LIKE','%'.$request->nik. '%')->get();

        $cek = (string) $filter_nik;

        if ($cek == '[]') {

            $user = new \App\User;
            $user->role = 'Operator';
            $user->name = $request->nama;
            $user->email = $request->email;
            $user->password = bcrypt('1234');
            $user->save();

            $karyawan = new \App\Karyawan;
            $karyawan->user_id = $user->id;
            $karyawan->nik = $request->nik;
            $karyawan->nama = $request->nama;
            $karyawan->tempat_lahir = $request->tempat_lahir;
            $karyawan->tanggal_lahir = $request->tanggal_lahir;
            $karyawan->tanggal_join = $request->tanggal_join;
            $karyawan->jenis_kelamin = $request->jenis_kelamin;
            $karyawan->status = $request->status;
            $karyawan->agama = $request->agama;
            $karyawan->no_hp = $request->no_hp;
            $karyawan->email = $request->email;
            $karyawan->alamat = $request->alamat;
            $karyawan->potongan_perbulan = 0;
            $karyawan->save();

            $user = \App\User::find($user->id);
            $user->nip = $karyawan->nip;
            $user->update();

            return redirect('/data_karyawan')->with(['cek_berhasil' => 'gagal']);
        } else {
            return redirect('/data_karyawan')->with(['data_ada' => 'gagal']);
        }

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


    //delete bagus
    public function delete($nip)
    {
        $karyawan = \App\Karyawan::find($nip);
        $user = \App\User::find($karyawan->user_id);
        $karyawan->delete();
        $user->delete();
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

        $user = \App\User::find($karyawan->user_id);
        $user->role = $request->jabatan;
        $user->divisi = $request->divisi;
        $user->update();
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
        $karyawan = \App\Karyawan::find($request->nip);

        if ($karyawan->jabatan == 'Pimipinan') {
                if($request->jumlah_kasbon > 8000000) {
                    return redirect('/data_kasbon')->with(['alert1' => 'gagal']);
                } else {
                    $karyawan->update($request->all());
                    return redirect('/data_kasbon');
                }
        }
        else if ($karyawan->jabatan == 'Staff') {
                if($request->jumlah_kasbon > 5000000) {
                    return redirect('/data_kasbon')->with(['alert2' => 'gagal']);
                } else {
                    $karyawan->update($request->all());
                    return redirect('/data_kasbon');
                }
        }
        else if ($karyawan->jabatan == 'Operasional') {
                if($request->jumlah_kasbon > 3000000) {
                    return redirect('/data_kasbon')->with(['alert3' => 'gagal']);
                } else {
                    $karyawan->update($request->all());
                    return redirect('/data_kasbon');
                }
        }
    }

    public function kasbon_input(Request $request)
    {
        $karyawan = \App\Karyawan::find($request->nip);

        if ($karyawan->jabatan == 'Pimipinan') {
                if($request->jumlah_kasbon > 8000000) {
                    return redirect('/data_kasbon')->with(['alert1' => 'gagal']);
                } else {
                    $karyawan->update($request->all());
                    return redirect('/data_kasbon');
                }
        }

        else if ($karyawan->jabatan == 'Staff') {
                if($request->jumlah_kasbon > 5000000) {
                    return redirect('/data_kasbon')->with(['alert2' => 'gagal']);
                } else {
                    $karyawan->update($request->all());
                    return redirect('/data_kasbon');
                }
        }
        if ($karyawan->jabatan == 'Operasional') {
                if($request->jumlah_kasbon > 3000000) {
                    return redirect('/data_kasbon')->with(['alert3' => 'gagal']);
                } else {
                    $karyawan->update($request->all());
                    return redirect('/data_kasbon');
                }
        }
    }

    public function hitung_transaksi()
    {
        return view('admin.hitung_transaksi');
    }

    public function transaksi_edit($nip)
    {

    }

    public function create_transaksi(Request $request, $nip)
    {
        //memasukan hasil transaksi ke database
        \App\Transaksi::create($request->all());
        //menghitung jumlah kasbon dan di update ke tabel data_karyawan
        $karyawan = \App\Karyawan::find($request->nip);
        $kasbon = $karyawan->sisa_kasbon;
        $kasbon = (int) $kasbon;
        $potongan = (int) $request->potongan_kasbon;

        $hasil = $kasbon - $potongan;
        $hasil = (string) $hasil;

        if ($hasil < 0) {
            $hasil = '0';
        }

        $karyawan->status_gaji = 'yes';
        $karyawan->sisa_kasbon = $hasil;
        $karyawan->update();

        $karyawan = \App\Karyawan::find($request->nip);
        if ($hasil == 0) {
            $karyawan->status_kasbon = 'no';
            $karyawan->masa_kasbon = '0';
            $karyawan->potongan_perbulan = '0';
            $karyawan->jumlah_kasbon = '0';
            $karyawan->update();
        }

        return redirect('/transaksi');
    }

    public function transaksi_reset1($nip)
    {
        $karyawan = \App\Karyawan::find($nip);
        $karyawan->status_gaji = 'no';
        $karyawan->update();
        return redirect('/data_gaji');
    }

    public function transaksi_reset2()
    {
        DB::table('data_karyawan')->update(['status_gaji' => 'no']);


        return redirect('/data_gaji');
    }

    public function invoice()
    {

        return view('admin.invoice');
    }

    public function invoice_cetak($id)
    {
        $karyawan = \App\Transaksi::find($id);
        return view('admin.invoice', ['karyawan' => $karyawan]);
    }

    public function lap_manager()
    {

        return view('manager.laporan');
    }

    public function cetak_laporan(Request $request)
    {
        //code untuk filter berdasarkan range

        $cari = \App\Transaksi::all()->where('tanggal_transaksi', '>=', $request->tanggal_awal)->where('tanggal_transaksi', '<=', $request->tanggal_akhir);

        // $cari = \App\Transaksi::whereBetween('tanggal_transaksi', [$request->tanggal_awal, $request->tanggal_akhir])->get();
        return view('manager.laporan', ['cari' => $cari]);

        return redirect('/lap_manager', ['cari' => $cari]);
    }

    public function gaji_karyawan()
    {
        $nip = Auth::user()->nip;
        $data = \App\Transaksi::all()->where('nip', $nip);
        return view('karyawan.gaji_karyawan', ['data' => $data]);
    }

    public function ganti_password(Request $request)
    {
        $password = $request->password;
        $id = Auth::user()->id;
        $user = \App\User::find($id);
        $user->password = bcrypt($password);
        $user->update();
        return redirect('/dashboard');
    }

    public function ResetPass($user_id)
    {
        $id = $user_id;
        $user = \App\User::find($id);
        $user->password = bcrypt('1234');
        $user->update();
        return redirect('/dashboard')->with(['password' => 'Pesan Berhasil']);
    }
}
