<!DOCTYPE html>
<html>

<head>
    <title>LAPORAN MAGANG {{ Auth::user()->name }}</title>
    <tr>
        <td align="center" width="70%">
    </tr>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="id=halaman">
        <style type="text/css">
            table tr td,
            table tr th {
                font-size: 9pt;
            }
        </style>
        <center>
            <img src="https://pelindo.co.id/uploads/config/kkX2Ik4l3I5cteU6ZTTKHpbYuWkfNGdBZEhE5lrT.png" alt=""
                class="navbar-brand-img h-10" width="240" height="70">
            <h4 style="font-weight: bold">LAPORAN ABSEN MAGANG PT. PELINDO MLTI TERMINAL</h4>
            <a>Jalan Situbondo - Banyuwangi, Klatak, Kecamatan Banyuwangi, Lkr.
                Kp. Baru, Bulusan, Kec. Kalipuro, Kabupaten Banyuwangi, Jawa
                Timur 68455</a>
            <hr style="height: 2px" size="10"/>
        </center>
        <table width="15%">
            <tr>
                <td><h6>Nama</h6></td>
                <td><h6>: {{Auth::user()->name}}</h6></td>
            </tr>
            <tr>
                <td><h6>NIM</h6></td>
                <td><h6>: {{Auth::user()->nim}}</h6></td>
            </tr>
            <tr>
                <td><h6>Universitas</h6></td>
                <td><h6>: {{Auth::user()->instansi}}</h6></td>
            </tr>
        </table>

        <table class='table table-bordered'>
            <thead>
                <tr>
                    <th style="background-color: #c6c6c6">No</th>
                    <th style="background-color: #c6c6c6">Nama</th>
                    <th style="background-color: #c6c6c6">Deskrisi</th>
                    <th style="background-color: #c6c6c6">Tanggal</th>
                    <th style="background-color: #c6c6c6">Waktu</th>
                    <th style="background-color: #c6c6c6">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                @foreach ($absen as $data)
                    @if ($data->id == Auth::user()->id)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ Auth::user()->name }}</td>
                            <td>{{ $data->deskripsi }}</td>
                            <td>{{ $data->tanggal }}</td>
                            <td>{{ $data->waktu }}</td>
                            <td>{{ $data->status }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>

        <p>Menyatakan bahwa yang namanya tertera diatas melakukan magang di PT. Pelindo Multi Terminal Tanjung Wangi.</p>

        <div style="width: 30%; text-align: left; float: right;">Banyuwangi, <span id="tanggalwaktu"></span></div><br>
        <div style="width: 30%; text-align: left; float: right;">Yang bertanda tangan,</div><br><br><br><br><br>
        <div style="width: 30%; text-align: left; float: right;">Branch Manager</div>

        <script>
            var tw = new Date();
            if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
            else(a = tw.getTime());
            tw.setTime(a);
            var tahun = tw.getFullYear();
            var hari = tw.getDay();
            var bulan = tw.getMonth();
            var tanggal = tw.getDate();
            var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
            var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
                "Oktober", "Nopember", "Desember");
            document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] +
                " " + tahun;
        </script>
    </div>
</body>

</html>
