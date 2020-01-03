<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Invoice</title>

    <style>
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, .15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }

        /** RTL **/
        .rtl {
            direction: rtl;
            font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        }

        .rtl table {
            text-align: right;
        }

        .rtl table tr td:nth-child(2) {
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                Invoice : {{$karyawan->id}}<br>
                                Nip : {{$karyawan->nip}}<br>
                                Nama : {{$karyawan->nama}} <br>
                                Jabatan : {{$karyawan->jabatan}}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="heading">
                <td>
                    Item
                </td>

                <td>
                    Price
                </td>
            </tr>
            <tr class="item">
                <td>
                    Gaji Pokok
                </td>

                <td>
                    Rp. {{$karyawan->gaji_pokok}}
                </td>
            </tr>
            <tr class="item">
                <td>
                    Tunjangan Jabatan
                </td>

                <td>
                    Rp. {{$karyawan->tnj_jabatan}}
                </td>
            </tr>

            <tr class="item">
                <td>
                    Tunjangan Lama Kerja
                </td>

                <td>
                    Rp. {{$karyawan->tnj_lama_kerja}}
                </td>
            </tr>
            <tr class="item">
                <td>
                    BPJS Tenaga Kerja
                </td>

                <td>
                    Rp. {{$karyawan->bpjs_kt}}
                </td>
            </tr>

            <tr class="item">
                <td>
                    Bpjs Kesehatan
                </td>

                <td>
                    Rp. {{$karyawan->bpjs_kes}}
                </td>
            </tr>

            <tr class="item">
                <td>
                    Lembur
                </td>

                <td>
                    {{$karyawan->lembur}} Jam | Rp.  {{$karyawan->harga_lembur}}
                </td>
            </tr>
            <tr class="item">
                <td>
                    Potongan Absen
                </td>

                <td>
                    {{$karyawan->absen}} Hari | Rp.  {{$karyawan->harga_absen}}
                </td>
            </tr>
             <tr class="item">
                <td>
                    Potongan Kasbon
                </td>

                <td>
                    Rp. {{$karyawan->potongan_kasbon}}
                    @if($karyawan->potongan_kasbon == NULL)
                    0
                    @endif
                </td>
            </tr>
            <tr class="item">
                <td>
                    Total Potongan
                </td>

                <td>
                    Rp. {{$karyawan->potongan_perbulan}}
                </td>
            </tr>
            <tr class="total">
                <td>
                </td>

                <td>
                    Rp. {{$karyawan->total_gaji}}
                </td>
            </tr>
        </table>
    </div>
    <script type="text/javascript">
        window.addEventListener("load", window.print());
    </script>
</body>

</html>
