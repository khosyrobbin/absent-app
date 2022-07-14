@extends('layout.template')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header pb-0">
                    </div>
                    <div class="card-body">
                        <p class="text-uppercase text-sm">Tambah Absen</p>
                        <form action="/tabel/simpan" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-grup">
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label>Nama</label>
                                        {{-- <input name="id" class="form-control @error('id') is-invalid @enderror" value="{{ Auth::user()->id }}" readonly> --}}
                                        <select name="id" class="form-control @error('id') is-invalid @enderror" readonly>
                                            <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</option>
                                        </select>
                                        <div class="text-danger">
                                            @error('id')
                                                Nama Salah/Kosong/Sudah digunakan
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Deskripsi</label>
                                        {{-- <input name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" type="text"> --}}
                                        <select name="deskripsi" class="form-control @error('id') is-invalid @enderror">
                                            <option value="">-- Pilih --</option>
                                            <option value="Magang">Magang</option>
                                            <option value="Pegawai">Pegawai</option>
                                        </select>
                                        <div class="text-danger">
                                            @error('deskripsi')
                                                Deskripsi Salah/Kosong
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Tanggal</label>
                                        <input name="tanggal" class="form-control @error('waktu') is-invalid @enderror" type="date">
                                        <div class="text-danger">
                                            @error('tanggal')
                                                Tanggal Salah/Kosong
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Waktu</label>
                                        <script>
                                            var dt = new Date();
                                            document.getElementById("Swaktu").innerHTML = dt.toLocaleTimeString();
                                        </script>
                                        <input name="waktu" type="time" class="form-control @error('waktu') is-invalid @enderror">
                                        <div class="text-danger">
                                            @error('waktu')
                                                Waktu Salah/Kosong
                                            @enderror
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" class="form-control @error('status') is-invalid @enderror">
                                            <option value="absen">Absen</option>
                                            <option value="ijin">Ijin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary pull-right">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
