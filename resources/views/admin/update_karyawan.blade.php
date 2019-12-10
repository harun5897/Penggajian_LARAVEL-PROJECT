@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-body">
            <div class="row">

                <div class="col-md-10">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Data Karyawan</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form role="form" action="/data_karyawan/{{$karyawan->nip}}/update" method="POST">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>NIK</label>
                                            <input name="nik" type="text" class="form-control" placeholder="Enter ..." value="{{$karyawan->nik}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input name="nama" type="text" class="form-control" placeholder="Enter ..." value="{{$karyawan->nama}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input name="tempat_lahir" type="text" class="form-control" placeholder="Enter ..." value="{{$karyawan->tempat_lahir}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input name="tanggal_lahir" type="date" class="form-control" placeholder="Enter ..." value="{{$karyawan->tanggal_lahir}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Tanggal Kontrak</label>
                                            <input name="tanggal_join" type="date" class="form-control" placeholder="Enter ..." value="{{$karyawan->tanggal_join}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select name="jenis_kelamin" class="form-control" id="">
                                                <option value="L" @if($karyawan->jenis_kelamin == 'L') selected @endif>Laki-Laki</option>
                                                <option value="P" @if($karyawan->jenis_kelamin == 'P') selected @endif>Perempuan </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select name="status" class="form-control" id="">
                                                <option value="B" @if($karyawan->status == 'B') selected @endif>Belum Menikah</option>
                                                <option value="S" @if($karyawan->status == 'S') selected @endif>Menikah
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Agama</label>
                                            <input name="agama" type="text" class="form-control" placeholder="Enter ..." value="{{$karyawan->agama}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>No Hp</label>
                                            <input name="no_hp" type="text" class="form-control" placeholder="Enter ..." value="{{$karyawan->no_hp}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" placeholder="Enter ..." value="{{$karyawan->email}}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="alamat" class="form-control" rows="3" placeholder="Enter ...">{{$karyawan->alamat}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Lama Kerja</label>
                                            <select name="tnj_lama_kerja" class="form-control" id="">
                                                <option value="0" @if($karyawan->tnj_lama_kerja == NULL) selected @endif>0 Tahun</option>
                                                <option value="100000" @if($karyawan->tnj_lama_kerja == '100000') selected @endif>1 Tahun
                                                </option>
                                                <option value="300000" @if($karyawan->tnj_lama_kerja == '300000') selected @endif> 3 Tahun
                                                </option>
                                                <option value="500000" @if($karyawan->tnj_lama_kerja == '500000') selected @endif> 5 Tahun +
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-info">Update <i class="fas fa-edit"></i></button>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->

@endsection
