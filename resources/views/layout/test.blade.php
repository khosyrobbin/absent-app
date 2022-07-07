@extends('layout.template')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Data Penduduk</h4>
                        </div>
                        <div class="card-body">

                            <form action="/tabel/simpan" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-grup">
                                    <label>NIK</label>
                                    <select name="id" class="form-control @error('id') is-invalid @enderror" readonly>
                                        <option value="{{ Auth::user()->id }}">{{ Auth::user()->nik }}</option>
                                    </select>
                                    <div class="text-danger">
                                        @error('id')
                                            NIK Salah/Kosong/Sudah digunakan
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-grup">
                                    <label>NAMA LENGKAP</label>
                                    <select name="nama" class="form-control @error('nama') is-invalid @enderror" readonly>
                                        <option value="{{ Auth::user()->name }}">{{ Auth::user()->name }}</option>
                                    </select>
                                    <div class="text-danger">
                                        @error('nama')
                                            Nama Salah/Kosong
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-grup">
                                    <label>JENIS KELAMIN</label>
                                    <select name="jk" class="form-control @error('jk') is-invalid @enderror">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="L">Laki-laki</option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                    {{-- <input name="jk" class="form-control @error('jk') is-invalid @enderror"> --}}
                                    <div class="text-danger">
                                        @error('jk')
                                            Jenis Kelamin Salah/Kosong
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-grup">
                                    <label>NO HP</label>
                                    <input name="no_telpon" class="form-control @error('no_telpon') is-invalid @enderror">
                                    <div class="text-danger">
                                        @error('no_telpon')
                                            Nomer HP Salah/Kosong
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-grup">
                                    <label>ALAMAT</label>
                                    <input name="alamat" class="form-control @error('alamat') is-invalid @enderror">
                                    <div class="text-danger">
                                        @error('alamat')
                                            Alamat Salah/Kosong
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-grup">
                                    <label>Foto</label>
                                    <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">
                                    <div class="text-danger">
                                        @error('foto')
                                            Foto Salah/Kosong
                                        @enderror
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
        </div>
    </div>

@endsection
