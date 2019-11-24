@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3>Dashboard</h3>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-body">
            <h1>Selamat Datang !!!</h1>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->


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
                            <input name="nik" type="text" class="form-control" placeholder="Enter ...">
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

</section>
<!-- /.content -->

@endsection
