@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Data Karyawan</h3>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
@if ($message = Session::get('data_ada'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Gagal !!! Nik yang anda input sudah terdaftar</strong>
    </div>
@endif

@if ($message = Session::get('cek_berhasil'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Data Berhasil disimpan</strong>
    </div>
@endif

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
            <b>Tambah Data</b>
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
                        <th>NIK</th>
                        <th>NAMA</th>
                        <th>TEMPAT LAHIR</th>
                        <th>JENIS KELAMIN</th>
                        <th>AGAMA</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data_karyawan as $karyawan)
                    <tr>
                        <td>{{$karyawan->nip}}</td>
                        <td>{{$karyawan->nik}}</td>
                        <td>{{$karyawan->nama}}</td>
                        <td>{{$karyawan->tempat_lahir}}</td>
                        <td>{{$karyawan->jenis_kelamin}}</td>
                        <td>{{$karyawan->agama}}</td>
                        <td> <a href="/data_karyawan/{{$karyawan->nip}}/edit" class="btn btn-warning btn-md"> Lihat</a>
                            <a href="/data_karyawan/{{$karyawan->nip}}/delete" class="btn btn-danger">Hapus <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- modal -->
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title">Input Data Karyawan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form role="form" action="/karyawan/create" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">NIK</label>
                                <input name="nik" type="number" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input name="nama" type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <label for="">Tempat Lahir</label>
                                <input name="tempat_lahir" type="text" class="form-control" placeholder="Enter ...">
                            </div>

                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input name="tanggal_lahir" type="date" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Kontrak</label>
                                <input name="tanggal_join" type="date" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control" id="">
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" class="form-control" id="">
                                    <option value="B">Belum Menikah</option>
                                    <option value="S">Menikah </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Agama</label>
                                <select name="agama" class="form-control" id="">
                                    <option value="islam"> Islam</option>
                                    <option value="protestan"> Protestan</option>
                                    <option value="katolik">Katolik</option>
                                    <option value="hindu"> Hindu</option>
                                    <option value="buddha"> Buddha</option>
                                    <option value="kong hu cu"> Kong Hu Cu</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">No Telp</label>
                                <input name="no_hp" type="number" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input name="email" type="email" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <label for="">alamat</label>
                                <textarea name="alamat" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="submit" class="btn btn-primary">Simpan <i class="fas fa-save"></i></button>
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

    </div>
    <!-- /.card -->

</section>
<!-- /.content -->

@endsection
