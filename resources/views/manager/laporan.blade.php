<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Laporan Gaji </title>
    <!-- <link rel="stylesheet" href="<a class=" vglnk" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css" rel="nofollow"><span>https</span><span>://</span><span>cdnjs</span><span>.</span><span>cloudflare</span><span>.</span><span>com</span><span>/</span><span>ajax</span><span>/</span><span>libs</span><span>/</span><span>paper</span><span>-</span><span>css</span><span>/</span><span>0</span><span>.</span><span>4</span><span>.</span><span>1</span><span>/</span><span>paper</span><span>.</span><span>css</span></a>"> -->

    <style>
        @page {
            size: A4
        }

        h1 {
            font-weight: bold;
            font-size: 20pt;
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        .table th {
            padding: 8px 8px;
            border: 1px solid #000000;
            text-align: center;
        }

        .table td {
            padding: 3px 3px;
            border: 1px solid #000000;
        }

        .text-center {
            text-align: center;
        }
    </style>
</head>

<body class="A4">
    <section class="sheet padding-10mm">
        <h1>LAPORAN DATA TRANSAKSI GAJI KARYAWAN</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>NIP</th>
                    <th>NAMA</th>
                    <th>JABATAN</th>
                    <th>TANGGAL</th>
                    <th>GAJI POKOK</th>
                    <th>TOTAL GAJI</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cari as $cari)
                <tr>
                    <td class="text-center" width="20">{{$cari->nip}}</td>
                    <td>{{$cari->nama}}</td>
                    <td>{{$cari->jabatan}}</td>
                    <td>{{$cari->tanggal_transaksi}}</td>
                    <td>{{$cari->gaji_pokok}}</td>
                    <td>{{$cari->total_gaji}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</body>

</html>
