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
                    <li class="breadcrumb-item"><a href="#">Data Gaji Karyawan</a></li>
                    <li class="breadcrumb-item active">Blank Page</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <!-- Horizontal Form -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Divisi</h3>
                        </div>
                        <form class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">Nip</label>
                                    <div class="col-sm-10">
                                        <input type="nip" class="form-control" id="inputnip" placeholder="Nip">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">Divisi</label>
                                    <div class="col-sm-10">
                                        <input type="divisi" class="form-control" id="inputdivisi" placeholder="Divisi">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">Jabatan</label>
                                    <div class="col-sm-10">
                                        <input type="jabatan" class="form-control" id="inputjabatan" placeholder="Jabatan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">Gaji Pokok</label>
                                    <div class="col-sm-10">
                                        <input type="gajipokok" class="form-control" id="inputgajipokok" placeholder="Gaji Pokok">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">Tunjangan</label>
                                    <div class="col-sm-10">
                                        <input type="tunjangan" class="form-control" id="inputtunjangan" placeholder="Tunjangan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">BPJS Kerja</label>
                                    <div class="col-sm-10">
                                        <input type="bpjskerja" class="form-control" id="inputbpjskerja" placeholder="Bpjs Kerja">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input" class="col-sm-2 col-form-label">BPJS Kesehatan</label>
                                    <div class="col-sm-10">
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
