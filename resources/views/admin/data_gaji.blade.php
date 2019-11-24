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
                    Reset All
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
                            <a href="/transaksi/{{$karyawan->nip}}/edit" class="btn btn-primary btn-md"> Hitung </a>
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


</section>
<!-- /.content -->

@endsection
