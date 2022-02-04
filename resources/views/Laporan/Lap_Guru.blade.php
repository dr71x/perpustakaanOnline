<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> --}}
    <title>Laporan</title>
    <style type="text/css">
        body {
            font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
        }

        .test {
            border-collapse: collapse;
            width: 100%;
        }

        th {
            border: 1px solid #000;
        }

        .th,
        .td {
            padding: 8px;
            border-bottom: 1px solid #000;
        }

        tr:nth-child(even) {
            background-color: #a4c7b5;
        }

    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <table>
                <tbody>
                    <tr>
                        <td>
                            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/zircos/assets/images/logo.png'))) }}"
                                width="100px" alt="">
                        </td>
                        <td>
                            <h2 align="center">
                                <b>
                                    SMP NEGERI 2 Kota Jambi
                                </b>
                            </h2>
                            <p align="center">
                                Jln.Gatot Subroto No.169 Sungai Asam Kec.pasar Jambi Kota Jambi
                                <br>
                                Kode Pos: 36123 Telp. (0741) 23777
                            </p>
                        </td>
                        <td>
                            <img src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/zircos/assets/images/tut.png'))) }}"
                                width="100px" alt="">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <hr>
        <h2 align="center">
            <b>
                Data Buku
            </b>
        </h2>
        <table class="test">
            <thead>
                <tr class="tr">
                    <th class="th">
                        No
                    </th>
                    <th>
                        Nama Buku
                    </th>
                    <th>
                        Nama Peminjam
                    </th>
                    <th>
                        Tanggal Peminjaman
                    </th>
                    <th>
                        Tanggal Dikembalikan
                    </th>
                    <th>
                        Denda Buku
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td align="center" class="td">
                            {{ $loop->iteration }}
                        </td>
                        <td align="center" class="td">
                            {{ $item->buku->nm_buku }}
                        </td>
                        <td class="td">
                            {{ $item->guru->nama }}
                        </td>
                        <td class="td" align="center">
                            {{ \Carbon\carbon::parse($item->tgl_pinjam)->isoFormat('dddd, DD MMM Y') }} <br> Sampai
                            <br>
                            {{ \Carbon\carbon::parse($item->dikembalikan)->isoFormat('dddd, DD MMM Y') }}
                        </td>
                        <td align="center" class="td">
                            {{ \Carbon\carbon::parse($item->tgl_kembali)->isoFormat('dddd, DD MMM Y') }}
                        </td>
                        <td align="center" class="td">
                            Rp. {{ $item->denda }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <table align="right">
            <tbody>
                <tr>
                    <td>
                        <h4 align="right">
                            Jambi, {{ \Carbon\carbon::parse($tanggal)->translatedFormat('l d F Y') }}
                        </h4>
                    </td>
                </tr>
                <tr>
                    <td style="background-color: #ffff;">
                        <h4 align="center">
                            Kepala Perpustakaan
                        </h4>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
