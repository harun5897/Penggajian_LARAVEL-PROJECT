<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Penggajian</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/adminlte/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->

    <link rel="stylesheet" href="/adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href="/adminlte/plugins/toastr/toastr.min.css">
    <!-- Theme style -->

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto" <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-user"> | {{auth()->user()->name}} </i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-default1">
                            <i class="fas fa-lock mr-2"></i> Change Password
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="/logout" class="dropdown-item">
                            <i class="fas fa-power-off mr-2"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/dashboard" class="brand-link">
                <img src="/adminlte/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"> <b>Aplikasi</b> Penggajian</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <!-- @if(auth()->user()->role == 'Staff')
                @if(auth()->user()->divisi == 'accounting')
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/adminlte/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Admin</a>
                    </div>
                </div>
                @endif
                @endif -->

                <!-- @if(auth()->user()->role == 'Manager')
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/adminlte/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Manager</a>
                    </div>
                </div>
                @endif -->

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview">
                            <a href="/dashboard" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        @if(auth()->user()->role == 'Staff')
                        @if(auth()->user()->divisi == 'accounting')
                        <li class="nav-item has-treeview">
                            <a href="/data_karyawan" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Data Karyawan
                                </p>
                            </a>
                        </li>
                        @endif
                        @endif

                        @if(auth()->user()->role == 'Staff')
                        @if(auth()->user()->divisi == 'accounting')
                        <li class="nav-item has-treeview">
                            <a href="/data_gaji" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Data Gaji Karyawan
                                </p>
                            </a>
                        </li>
                        @endif
                        @endif

                        @if(auth()->user()->role == 'Staff')
                        @if(auth()->user()->divisi == 'accounting')
                        <li class="nav-item has-treeview">
                            <a href="/data_kasbon" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Kasbon
                                </p>
                            </a>
                        </li>
                        @endif
                        @endif

                        @if(auth()->user()->role == 'Staff')
                        @if(auth()->user()->divisi == 'accounting')
                        <li class="nav-item has-treeview">
                            <a href="/transaksi" class="nav-link">
                                <i class="nav-icon fas fa-list-alt"></i>
                                <p>
                                    Transaksi
                                </p>
                            </a>
                        </li>
                        @endif
                        @endif

                        @if(auth()->user()->role == 'Manager')
                        <li class="nav-item">
                            <a href="/laporan" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>
                                    Laporan
                                </p>
                            </a>
                        </li>
                        @endif

                        <li class="nav-item">
                            <a href="/gaji_karyawan" class="nav-link">
                                <i class="nav-icon fas fa-list-ol"></i>
                                <p>
                                    Data Gaji
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->


        <!-- modal -->
        <div class="modal fade" id="modal-default1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h4 class="modal-title">Ganti Password</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form role="form" action="/ganti_password" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">Password</label>
                                <input name="password" type="text" class="form-control" placeholder="Enter ...">
                            </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="submit" class="btn btn-warning">Simpan</button>
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>



    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="/adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/adminlte/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/adminlte/js/demo.js"></script>
    <!-- DataTables -->
    <script src="/adminlte/plugins/datatables/jquery.dataTables.js"></script>

    <script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

    <!-- page script -->

    <script src="/adminlte/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="/adminlte/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });

            $('#masa_kasbon').keyup(function() {
                var jumlah_kasbon = parseInt($('#jumlah_kasbon').val());
                var masa_kasbon = parseInt($('#masa_kasbon').val());

                var perbulan = jumlah_kasbon / masa_kasbon;
                $('#potongan_perbulan').val(Math.round(perbulan));
                $('#sisa_kasbon').val(Math.round(jumlah_kasbon));
            });

            // $('#gaji_pokok').on('keyup', function() {
            //     var gaji_pokok = parseInt($('#gaji_pokok').val());
            //     // var gaji_pokok = parseInt('2769754');
            //     var bpjs_kt = gaji_pokok * 2 / 100;
            //     var bpjs_kes = gaji_pokok * 1 / 100;

            //     // var bpjs_kt = gaji_pokok * 2 / 100;
            //     // var bpjs_kes = gaji_pokok * 1 / 100;

            //     $('#bpjs_kt').val(Math.round(bpjs_kt));
            //     $('#bpjs_kes').val(Math.round(bpjs_kes));
            // });

            $('#absen').keyup(function() {
                var gaji_pokok = parseInt($('#gaji_pokok').val());
                var lembur = parseInt($('#lembur').val());
                var tnj_jabatan = parseInt($('#tnj_jabatan').val());
                var tnj_lama_kerja = parseInt($('#tnj_lama_kerja').val());
                var absen = parseInt($('#absen').val());
                var bpjs_kes = parseInt($('#bpjs_kes').val());
                var bpjs_kt = parseInt($('#bpjs_kt').val());
                var potongan_perbulan = parseInt($('#potongan_perbulan').val());

                // var harga_gaji = gaji_pokok / 30;
                var harga_lembur = 14425 * lembur;
                var harga_absen = 92325 * absen;

                var total_potongan = potongan_perbulan + harga_absen;

                var total_gaji = gaji_pokok + harga_lembur + tnj_jabatan + tnj_lama_kerja - harga_absen - bpjs_kt - bpjs_kes - potongan_perbulan;


                $('#total_gaji').val(Math.round(total_gaji));
                $('#harga_lembur').val(Math.round(harga_lembur));
                $('#harga_absen').val(Math.round(harga_absen));
                $('#potongan').val(Math.round(total_potongan));
            });


            $('#jabatan').bind('change keyup', function() {

                //get value of selected option
                var value = $(this).children("option:selected").attr('value');
                var Manager = parseInt('500000');
                var Kasir = parseInt('100000');
                var Staff = parseInt('250000');


                // do something here
                if (value == 'Manager') {
                    $('#tnj_jabatan').val(Math.round(Manager));
                } else if (value == 'Kasir/Staff Gudang') {
                    $('#tnj_jabatan').val(Math.round(Kasir));
                } else if (value == 'Staff') {
                    $('#tnj_jabatan').val(Math.round(Staff));
                }

            }).change();

            // //code java script khusus kalender untuk cetak laporan
            // $('#tgl_awal').datepicker({
            //     altFormat: "dd MM yy",
            //     changeMonth: true,
            //     changeYear: true
            // });

            // $('tgl_awal').datepicker()

        });
    </script>

    <!-- jQuery bootstrap
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
</body>

</html>
