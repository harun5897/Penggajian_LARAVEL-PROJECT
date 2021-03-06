@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->



    <div class="card">
        <div class="card-body ">
            <div class="row float-center">

                <div class="col-md-8 ">
                    <!-- general form elements disabled -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Data Kasbon</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form" action="/kasbon/{{$karyawan->nip}}/kasbon_update" method="POST">
                                {{csrf_field()}}
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nip</label>
                                    <div class="col-sm-10">
                                        <input name="nip" type="nip" class="form-control" placeholder="Nip" value="{{$karyawan->nip}}" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input name="nama" type="nama" class="form-control" placeholder="Nama" value="{{$karyawan->nama}}" disabled>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Kasbon</label>
                                    <div class="col-sm-10">
                                        <input name="jumlah_kasbon" type="jumlahkasbon" class="form-control" placeholder="Kasbon" value="{{$karyawan->jumlah_kasbon}}">
                                    </div>
                                </div>

                                <div class=" form-group row">
                                    <label class="col-sm-2 col-form-label">Masa Kasbon</label>
                                    <div class="col-sm-10">
                                        <input name="masa_kasbon" type="number" class="form-control" placeholder="Perbulan" value="{{$karyawan->masa_kasbon}}">
                                    </div>
                                </div>

                                <div class=" form-group row">
                                    <label class="col-sm-2 col-form-label">Perbulan</label>
                                    <div class="col-sm-10">
                                        <input name="potongan_perbulan" type="number" class="form-control" placeholder="Perbulan" value="{{$karyawan->potongan_perbulan}}">
                                    </div>
                                </div>

                                <div class=" form-group row">
                                    <label class="col-sm-2 col-form-label">Sisa Kasbon</label>
                                    <div class="col-sm-10">
                                        <input name="sisa_kasbon" type="sisakasbon" class="form-control" placeholder="Sisa Kasbon" value="{{$karyawan->sisa_kasbon}}">
                                    </div>
                                </div>

                                <div class=" form-group row">
                                    <label class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-10">
                                        <input name="status_kasbon" type="statuskasbon" class="form-control" placeholder="Status" value="{{$karyawan->status_kasbon}}">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-info">Simpan<i class="fas fa-edit"></i></button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>


</section>
<!-- /.content -->

@endsection
