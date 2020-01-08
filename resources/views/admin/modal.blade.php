<!-- modal -->
                        <form role="form" action="/transaksi/{{$karyawan->nip}}/create" method="POST">
                            {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="">Nip</label>
                                            <input name="nip" id="nip" type="number" class="form-control" readonly >
                                    </div>

                                    <div class="form-group">
                                        <label for="">Nama</label>
                                            <input name="nama" id="nama" type="text" class="form-control" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Jabatan</label>
                                            <input name="jabatan" id="jabatan" type="text" class="form-control" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Gaji Pokok</label>
                                            <input name="gaji_pokok" id="gaji_pokok" type="number" class="form-control" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="">TNJ Jabatan</label>
                                            <input name="tnj_jabatan" id="tnj_jabatan" type="number" class="form-control" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="">TNJ Lama Kerja</label>
                                            <input name="tnj_lama_kerja" id="tnj_lama_kerja" type="number" class="form-control" readonly >
                                    </div>

                                    <div class="form-group">
                                        <label for="">Bpjs KT</label>
                                            <input name="bpjs_kt" id="bpjs_kt" type="number" class="form-control" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Bpjs KES</label>
                                            <input name="bpjs_kes" id="bpjs_kes" type="number" class="form-control" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for=""> Pt Kasbon</label>
                                            <input name="potongan_kasbon" id="potongan_perbulan" type="text" class="form-control" placeholder="Rupiah" readonly>
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
                                        <label for="">Potongan Perbulan</label>
                                            <input name="potongan_perbulan" id="potongan" type="text" class="form-control" placeholder="Rupiah"readonly>
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
                                        <label for="">Total Gaji</label>
                                            <input name="total_gaji" id="total_gaji" type="text" class="form-control" placeholder="Rupiah" readonly>
                                    </div>

                                <button type=" submit" class="btn btn-info">Simpan <i class="fas fa-edit"></i></button>
                        </form>
