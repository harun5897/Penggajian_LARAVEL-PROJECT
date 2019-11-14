@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Data Kasbon</h3>
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
                Tambah Data Kasbon
            </button>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
            </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>NIP</th>
                        <th>NAMA</th>
                        <th>KASBON</th>
                        <th>MASA KASBON</th>
                        <th>PERBULAN</th>
                        <th>SISA KASBON</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_karyawan as $karyawan)
                    @if($karyawan->status_kasbon == 'yes')
                    <tr>
                        <td>{{$karyawan->nip}}</td>
                        <td>{{$karyawan->nama}}</td>
                        <td>{{$karyawan->jumlah_kasbon}}</td>
                        <td>{{$karyawan->masa_kasbon}}</td>
                        <td>{{$karyawan->potongan_perbulan}}</td>
                        <td>{{$karyawan->sisa_kasbon}}</td>
                        <td>{{$karyawan->status_kasbon}}</td>
                        <td> <a href="/kasbon/{{$karyawan->nip}}/kasbon" class="btn btn-warning btn-md"> Lihat
                            </a></td>
                    </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card -->


    <!-- modal -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title">Input Data Kasbon</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form role="form" action="/kasbon/input" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="">NIP</label>
                            <input name="nip" type="text" class="form-control" placeholder="NIP">
                        </div>
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input name="nama" type="text" class="form-control" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Kasbon</label>
                            <input name="jumlah_kasbon" id="jumlah_kasbon" type="text" class="form-control" placeholder="Rupiah">
                        </div>

                        <div class="form-group">
                            <label for="">Masa Kasbon</label>
                            <input name="masa_kasbon" id="masa_kasbon" type="text" class="form-control" placeholder="Bulan">
                        </div>
                        <div class="form-group">
                            <label for="">Perbulan</label>
                            <input name="potongan_perbulan" id="potongan_perbulan" type="text" class="form-control" placeholder="Bulan" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Sisa Kasbon</label>
                            <input name="sisa_kasbon" type="text" id="sisa_kasbon" class="form-control" placeholder="Rupiah" readonly>
                        </div>
                        <div class="form-group">
                            <label for=""> Status Kasbon</label>
                            <select name="status_kasbon" class="form-control" id="">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-primary">Simpan <i class="fas fa-save"></i></button>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </div>

</section>
<!-- /.content -->

@endsection
