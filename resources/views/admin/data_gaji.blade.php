@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Data Gaji Karyawan</h3>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <a href="/transaksi/reset">
                <button type="button" class="btn btn-danger">
                <b> Reset All</b>
                </button>
            </a>

        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>NAMA</th>
                        <th>DIVISI</th>
                        <th>JABATAN</th>
                        <th>GAJI POKOK</th>
                        <th>BPJS_KES</th>
                        <th>BPJS_KET</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_karyawan as $karyawan)
                    <tr>
                        <td>{{$karyawan->nip}}</td>
                        <td>{{$karyawan->nama}}</td>
                        <td>
                            @if($karyawan->divisi != NULL) {{$karyawan->divisi}}
                            @endif

                            @if($karyawan->divisi == NULL)
                            <span class="badge badge-danger">Belum Lengkap</span>
                            @endif
                        </td>
                        <td>
                            @if($karyawan->jabatan != NULL) {{$karyawan->jabatan}}
                            @endif

                            @if($karyawan->jabatan == NULL)
                            <span class="badge badge-danger">Belum Lengkap</span>
                            @endif
                        </td>
                        <td>
                            @if($karyawan->gaji_pokok != NULL) {{$karyawan->gaji_pokok}}
                            @endif

                            @if($karyawan->gaji_pokok == NULL)
                            <span class="badge badge-danger">Belum Lengkap</span>
                            @endif
                        </td>
                        <td>
                            @if($karyawan->bpjs_kes != NULL) {{$karyawan->bpjs_kes}}
                            @endif

                            @if($karyawan->bpjs_kes == NULL)
                            <span class="badge badge-danger">Belum Lengkap</span>
                            @endif
                        </td>
                        <td>
                            @if($karyawan->bpjs_kt != NULL) {{$karyawan->bpjs_kt}}
                            @endif

                            @if($karyawan->bpjs_kt == NULL)
                            <span class="badge badge-danger">Belum Lengkap</span>
                            @endif
                        </td>

                        <td>
                            @if($karyawan->status_gaji == 'yes')
                            <span class="badge badge-warning">succes</span>
                            @endif
                            @if($karyawan->status_gaji == 'no')
                            <span class="badge badge-danger">pending</span>
                            @endif
                            @if($karyawan->status_gaji == NULL)
                            <span class="badge badge-danger">pending</span>
                            @endif
                        </td>
                        <td> <a href="/gaji/{{$karyawan->nip}}/gaji" class="btn btn-warning btn-md"> Lihat
                            </a>
                            @if($karyawan->status_gaji == 'no')
                            <!-- <a href="" value="{{ action('AdminController@transaksi_edit',['nip'=>$karyawan->nip]) }}" data-toggle="modal" data-target="#modal-default9" class="btn btn-primary btn-md"> Hitung </a> -->
                            <a href="/transaksi/{{$karyawan->nip}}/edit" data-toggle="modal" data-target="#modal-default11" class="btn btn-primary btn-md"> Hitung </a>
                            @endif

                            @if($karyawan->status_gaji == NULL)
                            <a href="/transaksi/{{$karyawan->nip}}/edit" class="btn btn-primary btn-md"> Hitung </a>
                            @endif

                            @if($karyawan->status_gaji == 'yes')
                            <a href="/transaksi/{{$karyawan->nip}}/reset" class="btn btn-danger btn-md"> Reset</a>
                            @endif

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>

    <!-- modal -->
        <div class="modal fade" id="modal-default11">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title">HItung Gaji Karyawan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form role="form" action="/transaksi/{{$karyawan->nip}}/create" method="POST">
                            {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="">Nip</label>
                                            <input name="nip" type="text" class="form-control" placeholder="Nip" value="{{$karyawan->nip}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                            <input name="nama" type="text" class="form-control" placeholder="Nama" value="{{$karyawan->nama}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jabatan</label>
                                            <input name="jabatan" type="text" class="form-control" placeholder="jabatan" value="{{$karyawan->jabatan}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Gaji Pokok</label>
                                            <input name="gaji_pokok" id="gaji_pokok" type="text" class="form-control" placeholder="Rupiah" value="{{$karyawan->gaji_pokok}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">TNJ Jabatan</label>
                                            <input name="tnj_jabatan" id="tnj_jabatan" type="text" class="form-control" placeholder="Rupiah" value="{{$karyawan->tnj_jabatan}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">TNJ Lama Kerja</label>
                                            <input name="tnj_lama_kerja" id="tnj_lama_kerja" type="text" class="form-control" placeholder="Rupiah" readonly value=@if($karyawan->tnj_lama_kerja == NULL) "0" @endif
                                            {{$karyawan->tnj_lama_kerja}}>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Bpjs KT</label>
                                            <input name="bpjs_kt" id="bpjs_kt" type="text" class="form-control" placeholder="Rupiah" value="{{$karyawan->bpjs_kt}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Bpjs KES</label>
                                            <input name="bpjs_kes" id="bpjs_kes" type="text" class="form-control" placeholder="Rupiah" value="{{$karyawan->bpjs_kes}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for=""> Pt Kasbon</label>
                                            <input name="potongan_kasbon" id="potongan_perbulan" type="text" class="form-control" placeholder="Rupiah" readonly value=@if($karyawan->potongan_perbulan == NULL) "0" @endif
                                            {{$karyawan->potongan_perbulan}}>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Harga Lembur</label>
                                            <input name="harga_lembur" id="harga_lembur" type="text" class="form-control" placeholder="Rupiah"readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Potongan Absen</label>
                                            <input name="harga_absen" id="harga_absen" type="text" class="form-control" placeholder="Rupiah"readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Potongan Perbulan</label>
                                            <input name="potongan_perbulan" id="potongan" type="text" class="form-control" placeholder="Rupiah"readonly>
                                    </div>
                                    <div class="form-group row">
                                        <label for="">Tanggal Transaksi</label>
                                            <input name="tanggal_transaksi" type="date" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Lembur</label>
                                            <input name="lembur" id="lembur" type="text" class="form-control" placeholder="Jam">
                                    </div>
                                    <div class="form-group ">
                                        <label for="">Absen</label>
                                            <input name="absen" id="absen" type="text" class="form-control" placeholder="Hari">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Total Gaji</label>
                                            <input name="total_gaji" id="total_gaji" type="text" class="form-control" placeholder="Rupiah" readonly>
                                    </div>

                                <button type=" submit" class="btn btn-info">Simpan <i class="fas fa-edit"></i></button>
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

@endsection
