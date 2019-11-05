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
        <div class="card-header">
            <!-- <a href="/data_karyawan/input_karyawan">
                <button type="submit" class="btn btn-info">Tambah Data Baru</button>
            </a> -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
                Tambah Data
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
                        <td>{{$karyawan->nama_depan}}</td>
                        <td>{{$karyawan->tempat_lahir}}</td>
                        <td>{{$karyawan->jenis_kelamin}}</td>
                        <td>{{$karyawan->agama}}</td>
                        <td> <a href="/data_karyawan/{{$karyawan->nip}}/edit" class="btn btn-warning btn-sm">Edit</a> </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="card-footer">
            Footer
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Input Data Karyawan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form role="form" action="/karyawan/create" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">NIK</label>
                                <input name="nik" type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Depan</label>
                                <input name="nama_depan" type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <label for="">Nama Belakang</label>
                                <input name="nama_belakang" type="text" class="form-control" placeholder="Enter ...">
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
                                <input name="agama" type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <label for="">No Telp</label>
                                <input name="no_hp" type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input name="email" type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group">
                                <label for="">alamat</label>
                                <textarea name="alamat" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input name="password" type="text" class="form-control" placeholder="Enter ...">
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->

@endsection
