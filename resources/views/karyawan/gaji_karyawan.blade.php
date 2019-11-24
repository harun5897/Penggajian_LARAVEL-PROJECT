@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Data Gaji</h3>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>NAMA</th>
                        <th>jABATAN</th>
                        <th>TANGGAL</th>
                        <th>LEMBUR</th>
                        <th>ABSEN</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $karyawan)
                    <tr>
                        <td>{{$karyawan->nip}}</td>
                        <td>{{$karyawan->nama}}</td>
                        <td>{{$karyawan->jabatan}}</td>
                        <td>{{$karyawan->tanggal_transaksi}}</td>
                        <td>{{$karyawan->lembur}}</td>
                        <td>{{$karyawan->absen}}</td>
                        <td> <a href="/transaksi/{{$karyawan->id}}/invoice" class="btn btn-warning btn-md"> Ivoice </a></td>
                    </tr>
                    @endforeach
                </tbody>
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->

@endsection
