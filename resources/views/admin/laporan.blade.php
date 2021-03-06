@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Laporan</h3>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                <b> Cetak Laporan </b>
            </button>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>NAMA</th>
                        <th>JABATAN</th>
                        <th>TANGGAL</th>
                        <th>GAJI POKOK</th>
                        <th>TNJ JABATAN</th>
                        <th>TNJ LAMA KERJA</th>
                        <th>BPJS TK</th>
                        <th>BPJS KES</th>
                        <th>ABSEN</th>
                        <th>LEMBUR</th>
                        <th>POTONGAN</th>
                        <th>TOTAL</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_laporan as $karyawan)
                    <tr>
                        <td>{{$karyawan->nip}}</td>
                        <td>{{$karyawan->nama}}</td>
                        <td>{{$karyawan->jabatan}}</td>
                        <td>{{$karyawan->tanggal_transaksi}}</td>
                        <td>{{$karyawan->gaji_pokok}}</td>
                        <td>{{$karyawan->tnj_jabatan}}</td>
                        <td>{{$karyawan->tnj_lama_kerja}}</td>
                        <td>{{$karyawan->bpjs_kt}}</td>
                        <td>{{$karyawan->bpjs_kes}}</td>
                        <td>{{$karyawan->absen}}</td>
                        <td>{{$karyawan->lembur}}</td>
                        <td>{{$karyawan->potongan_perbulan}}</td>
                        <td>{{$karyawan->total_gaji}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->


    <!-- modal -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title">Cetak Laporan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" action="/laporan/lap_manager" method="POST">
                        {{csrf_field()}}
                        <label for="">Tanggal Awal</label>
                        <input name="tanggal_awal" type="date" class="form-control" placeholder="Enter ...">

                        <label for="">Tanggal Akhir</label>
                        <input name="tanggal_akhir" type="date" class="form-control" placeholder="Enter ...">
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-primary"> Cetak</button>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>

</section>
<!-- /.content -->

@endsection
