@extends('layout.template')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">

                {{-- PESAN --}}
                @if (session('pesan'))
                    <div class="alert alert-success alert-dismissible">
                        {{-- <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> --}}
                        <h4><i class="icon fa fa-check"></i>{{ session('pesan') }}</h4>
                    </div>
                @endif

                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <a id="demo" class="btn bg-gradient-dark mb-0" href="/tabel/add"><i class="fas fa-plus"></i>&nbsp;&nbsp;Absen</a>
                        {{-- <a id="demo" class="btn bg-gradient-dark mb-0" onclick="getLocation()"><i class="fas fa-plus"></i>&nbsp;&nbsp;Absen</a>
                        <script>
                            var x = document.getElementById("demo");
                            var validDistance = 1;

                            function getLocation() {
                                if (navigator.geolocation) {
                                    navigator.geolocation.getCurrentPosition(showPosition);
                                } else {
                                    x.innerHTML = "Geolocation tidak didukung oleh browser ini.";
                                }
                            }

                            function distance(lat1, lon1, lat2, lon2, unit) {
                                var radlat1 = Math.PI * lat1 / 180
                                var radlat2 = Math.PI * lat2 / 180
                                var radlon1 = Math.PI * lon1 / 180
                                var radlon2 = Math.PI * lon2 / 180
                                var theta = lon1 - lon2
                                var radtheta = Math.PI * theta / 180
                                var dist = Math.sin(radlat1) * Math.sin(radlat2) + Math.cos(radlat1) * Math.cos(radlat2) * Math.cos(radtheta);
                                dist = Math.acos(dist)
                                dist = dist * 180 / Math.PI
                                dist = dist * 60 * 1.1515
                                if (unit == "K") {
                                    dist = dist * 1.609344
                                }
                                if (unit == "N") {
                                    dist = dist * 0.8684
                                }
                                if (unit == "M") {
                                    dist = dist * 1000
                                }
                                return dist
                            }

                            function showPosition(position) {
                                cel = distance((position.coords.latitude), (position.coords.longitude), -8.1268186, 114.3980215)
                                if (cel < validDistance) {
                                    x.href = "/tabel/add";
                                } else {
                                    x.innerHTML = "lokasi anda terlalu jauh";
                                }
                            }
                        </script> --}}
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Deskrisi</th>
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($absen as $data)
                                        @if (auth()->user()->level == 1)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->deskripsi }}</td>
                                                <td>{{ $data->tanggal }}</td>
                                                <td>{{ $data->waktu }}</td>
                                                <td>{{ $data->status }}</td>
                                                <td>
                                                    <a href="/tabel/edit/{{ $data->id_absen }}" class="btn btn-warning"><i
                                                            class="fas fa-pencil-alt me-2" aria-hidden="true"></i></a>
                                                    <a href="/tabel/delete/{{ $data->id_absen }}"
                                                        class="btn btn-danger"><i class="far fa-trash-alt me-2"></i></a>
                                                </td>
                                            </tr>
                                        @elseif (auth()->user()->level == 2)
                                            @if ($data->id == Auth::user()->id)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ Auth::user()->name }}</td>
                                                    <td>{{ $data->deskripsi }}</td>
                                                    <td>{{ $data->tanggal }}</td>
                                                    <td>{{ $data->waktu }}</td>
                                                    <td>{{ $data->status }}</td>
                                                    <td>
                                                        <a href="/tabel/edit/{{ $data->id_absen }}"
                                                            class="btn btn-warning"><i class="fas fa-pencil-alt me-2"
                                                                aria-hidden="true"></i>EDIT</a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- delete notif --}}
                            <br />
                            {{-- {{ $absen->links('pagination::bootstrap-4') }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('searchBar')
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <form action="/tabel/cari" method="get">
                <div class="input-group">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input name="cari" type="text" class="form-control" placeholder="Type here...">
                </div>
            </form>
        </div>
    @endsection
