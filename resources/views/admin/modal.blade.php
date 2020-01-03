<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documeniii</title>
</head>
<body>

    <!-- modal -->
        <div class="modal fade" id="modal-default10">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <h4 class="modal-title">HItung Gaji Karyawan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form role="form" action="/transaksi/{{$karyawan->nip}}/create" method="POST">
                            {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="">Nip</label>
                                            <input name="nip" type="text" class="form-control" placeholder="Nip" value="{{$karyawan->nip}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nama</label>
                                            <input name="nama" type="text" class="form-control" placeholder="Nama" value="{{$karyawan->nama}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jabatan</label>
                                            <input name="jabatan" type="text" class="form-control" placeholder="jabatan" value="{{$karyawan->jabatan}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Gaji Pokok</label>
                                            <input name="gaji_pokok" id="gaji_pokok" type="text" class="form-control" placeholder="Rupiah" value="{{$karyawan->gaji_pokok}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">TNJ Jabatan</label>
                                            <input name="tnj_jabatan" id="tnj_jabatan" type="text" class="form-control" placeholder="Rupiah" value="{{$karyawan->tnj_jabatan}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">TNJ Lama Kerja</label>
                                            <input name="tnj_lama_kerja" id="tnj_lama_kerja" type="text" class="form-control" placeholder="Rupiah" readonly value=@if($karyawan->tnj_lama_kerja == NULL) "0" @endif
                                            {{$karyawan->tnj_lama_kerja}}>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Bpjs KT</label>
                                            <input name="bpjs_kt" id="bpjs_kt" type="text" class="form-control" placeholder="Rupiah" value="{{$karyawan->bpjs_kt}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Bpjs KES</label>
                                            <input name="bpjs_kes" id="bpjs_kes" type="text" class="form-control" placeholder="Rupiah" value="{{$karyawan->bpjs_kes}}" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for=""> Pt Kasbon</label>
                                            <input name="potongan_perbulan" id="potongan_perbulan" type="text" class="form-control" placeholder="Rupiah" readonly value=@if($karyawan->potongan_perbulan == NULL) "0" @endif
                                            {{$karyawan->potongan_perbulan}}>
                                    </div>
                                    <div class="form-group row">
                                        <label for="">Tanggal Transaksi</label>
                                            <input name="tanggal_transaksi" type="date" class="form-control" placeholder="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Lembur</label>
                                            <input name="lembur" id="lembur" type="text" class="form-control" placeholder="Jam">
                                    </div>
                                    <div class="form-group ">
                                        <label for="">Absen</label>
                                            <input name="absen" id="absen" type="text" class="form-control" placeholder="Hari">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Harga Lembur</label>
                                            <input name="harga_lembur" id="harga_lembur" type="text" class="form-control" placeholder="Rupiah"readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Harga Absen</label>
                                            <input name="harga_absen" id="harga_absen" type="text" class="form-control" placeholder="Rupiah"readonly>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Total Gaji</label>
                                            <input name="total_gaji" id="total_gaji" type="text" class="form-control" placeholder="Rupiah" readonly>
                                    </div>

                                <button type=" submit" class="btn btn-info">Simpan <i class="fas fa-edit"></i></button>
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

</body>
</html>
