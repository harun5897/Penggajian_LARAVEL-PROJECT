@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Data Karyawan</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Data Karyawan</a></li>
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
        <div class="card-body">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- Horizontal Form -->
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Umum</h3>
                        </div>
                        <!-- /.card-header -->
                        <form class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="input" class="col-sm-3 col-form-label">Nik</label>
                                    <div class="col-sm-9">
                                        <input type="nik" class="form-control" id="inputNik" placeholder="Nik">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-3 col-form-label">Npwp</label>
                                    <div class="col-sm-9">
                                        <input type="npwp" class="form-control" id="inputNpwp" placeholder="Npwp">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-3 col-form-label">Nama Depan</label>
                                    <div class="col-sm-9">
                                        <input type="namadepan" class="form-control" id="inputNamaDepan" placeholder="Nama Depan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-3 col-form-label">Nama Belakang</label>
                                    <div class="col-sm-9">
                                        <input type="namabelakang" class="form-control" id="inputNamaBelakang" placeholder="Nama Belakang">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="tempatlahir" class="form-control" id="inputtempatlahir" placeholder="Tempat Lahir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-9">
                                        <input type="tanggallahir" class="form-control" id="inputtanggallahir" placeholder="Tanggal Lahir">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-9">
                                        <input type="jeniskelamin" class="form-control" id="inputjeniskelamin" placeholder="Jenis Kelamin">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-3 col-form-label">Agama</label>
                                    <div class="col-sm-9">
                                        <input type="agama" class="form-control" id="inputagama" placeholder="Agama">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-3 col-form-label">No Telp</label>
                                    <div class="col-sm-9">
                                        <input type="telepon" class="form-control" id="inputtelepon" placeholder="No Telp">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="inputemail" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-3 col-form-label">Alamat</label>
                                    <div class="col-sm-9">
                                        <input type="alamat" class="form-control" id="inputalamat" placeholder="Alamat">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- right column -->
                <div class="col-md-6">
                    <!-- Horizontal Form -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Divisi</h3>
                        </div>
                        <form class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="input" class="col-sm-3 col-form-label">Divisi</label>
                                    <div class="col-sm-9">
                                        <input type="divisi" class="form-control" id="inputdivisi" placeholder="Divisi">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-3 col-form-label">Jabatan</label>
                                    <div class="col-sm-9">
                                        <input type="jabatan" class="form-control" id="inputjabatan" placeholder="Jabatan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-3 col-form-label">Gaji Pokok</label>
                                    <div class="col-sm-9">
                                        <input type="gajipokok" class="form-control" id="inputgajipokok" placeholder="Gaji Pokok">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-3 col-form-label">Tunjangan</label>
                                    <div class="col-sm-9">
                                        <input type="tunjangan" class="form-control" id="inputtunjangan" placeholder="Tunjangan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-3 col-form-label">BPJS Kerja</label>
                                    <div class="col-sm-9">
                                        <input type="bpjskerja" class="form-control" id="inputbpjskerja" placeholder="Bpjs Kerja">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-3 col-form-label">BPJS Kesehatan</label>
                                    <div class="col-sm-9">
                                        <input type="bpjskesehatan" class="form-control" id="inputbpjskesehatan" placeholder="Bpjs Kesehatan">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (right) -->
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->

@endsection
