@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">

</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-body">
            <div class="card-body ">
                <div class="row float-center">

                    <div class="col-md-8 ">
                        <!-- general form elements disabled -->
                        <div class="card card-warning">
                            <div class="card-header">
                                <h3 class="card-title">Hitung Gaji karyawan</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form role="form" action="/transaksi/{{$karyawan->nip}}/create" method="POST">
                                    {{csrf_field()}}
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nip</label>
                                        <div class="col-sm-10">
                                            <input name="nip" type="text" class="form-control" placeholder="Nip" value="{{$karyawan->nip}}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-10">
                                            <input name="nama" type="text" class="form-control" placeholder="Nama" value="{{$karyawan->nama}}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Jabatan</label>
                                        <div class="col-sm-10">
                                            <input name="jabatan" type="text" class="form-control" placeholder="jabatan" value="{{$karyawan->jabatan}}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Gaji Pokok</label>
                                        <div class="col-sm-10">
                                            <input name="gaji_pokok" id="gaji_pokok" type="text" class="form-control" placeholder="Rupiah" value="{{$karyawan->gaji_pokok}}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">TNJ Jabatan</label>
                                        <div class="col-sm-10">
                                            <input name="tnj_jabatan" id="tnj_jabatan" type="text" class="form-control" placeholder="Rupiah" value="{{$karyawan->tnj_jabatan}}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">TNJ Lama Kerja</label>
                                        <div class="col-sm-10">
                                            <input name="tnj_lama_kerja" id="tnj_lama_kerja" type="text" class="form-control" placeholder="Rupiah" readonly value=@if($karyawan->tnj_lama_kerja == NULL) "0" @endif
                                            {{$karyawan->tnj_lama_kerja}}>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Bpjs KT</label>
                                        <div class="col-sm-10">
                                            <input name="bpjs_kt" id="bpjs_kt" type="text" class="form-control" placeholder="Rupiah" value="{{$karyawan->bpjs_kt}}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Bpjs KES</label>
                                        <div class="col-sm-10">
                                            <input name="bpjs_kes" id="bpjs_kes" type="text" class="form-control" placeholder="Rupiah" value="{{$karyawan->bpjs_kes}}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Pt Kasbon</label>
                                        <div class="col-sm-10">
                                            <input name="potongan_perbulan" id="potongan_perbulan" type="text" class="form-control" placeholder="Rupiah" readonly value=@if($karyawan->potongan_perbulan == NULL) "0" @endif
                                            {{$karyawan->potongan_perbulan}}>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Tanggal Transaksi</label>
                                        <div class="col-sm-10">
                                            <input name="tanggal_transaksi" type="date" class="form-control" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Lembur</label>
                                        <div class="col-sm-10">
                                            <input name="lembur" id="lembur" type="text" class="form-control" placeholder="Rupiah">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Absen</label>
                                        <div class="col-sm-10">
                                            <input name="absen" id="absen" type="text" class="form-control" placeholder="Rupiah">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Total Gaji</label>
                                        <div class="col-sm-10">
                                            <input name="total_gaji" id="total_gaji" type="text" class="form-control" placeholder="Rupiah" readonly>
                                        </div>
                                    </div>

                                    <button type=" submit" class="btn btn-info">Simpan<i class="fas fa-edit"></i></button>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->

@endsection
