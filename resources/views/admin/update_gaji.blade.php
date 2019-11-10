@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Data Gaji Karyawan</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Data Gaji Karyawam</a></li>
                    <li class="breadcrumb-item active">Blank Page</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Title</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-body ">
                    <div class="row float-center">

                        <div class="col-md-8 ">
                            <!-- general form elements disabled -->
                            <div class="card card-warning">
                                <div class="card-header">
                                    <h3 class="card-title">General Elements</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form role="form" action="/gaji/{{$karyawan->nip}}/update_gaji" method="POST">
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
                                            <label class="col-sm-2 col-form-label">Divisi</label>
                                            <div class="col-sm-10">
                                                <input name="divisi" type="divisi" class="form-control" placeholder="Divisi" value="{{$karyawan->divisi}}">
                                            </div>
                                        </div>

                                        <div class=" form-group row">
                                            <label class="col-sm-2 col-form-label">Jabatan</label>
                                            <div class="col-sm-10">
                                                <input name="jabatan" type="jabatan" class="form-control" placeholder="Jabatan" value="{{$karyawan->jabatan}}">
                                            </div>
                                        </div>

                                        <div class=" form-group row">
                                            <label class="col-sm-2 col-form-label">Gaji Pokok</label>
                                            <div class="col-sm-10">
                                                <input name="gaji_pokok" type="gajipokok" class="form-control" placeholder="Gaji Pokok" value="{{$karyawan->gaji_pokok}}">
                                            </div>
                                        </div>

                                        <div class=" form-group row">
                                            <label class="col-sm-2 col-form-label">BPJS KES</label>
                                            <div class="col-sm-10">
                                                <input name="bpjs_kes" type="bpjskes" class="form-control" placeholder="Bpjs Kes" value="{{$karyawan->bpjs_kes}}">
                                            </div>
                                        </div>

                                        <div class=" form-group row">
                                            <label class="col-sm-2 col-form-label">BPJS KET</label>
                                            <div class="col-sm-10">
                                                <input name="bpjs_ket" type="bpjsket" class="form-control" placeholder="Bpjs Ket" value="{{$karyawan->bpjs_ket}}">
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
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
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
