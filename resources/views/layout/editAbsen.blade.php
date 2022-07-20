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
                        <form action="/tabel/update/{{$absen->id_absen}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-grup">
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label>Nama</label>
                                        {{-- <input name="id" class="form-control @error('id') is-invalid @enderror" value="{{ Auth::user()->id }}" readonly> --}}
                                        @if (auth()->user()->level == 1)
                                            <select name="id" class="form-control @error('id') is-invalid @enderror" readonly>
                                                <option value="{{ $absen->id }}">{{ $absen->name }}</option>
                                            </select>
                                        @elseif (auth()->user()->level == 2)
                                            <select name="id" class="form-control @error('id') is-invalid @enderror" readonly>
                                                <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</option>
                                            </select>
                                        @endif
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
                                        {{-- <input name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" type="text" value="{{$absen->deskripsi}}"> --}}
                                        <select name="deskripsi" class="form-control @error('id') is-invalid @enderror">
                                            <option value="{{$absen->deskripsi}}">{{$absen->deskripsi}}</option>
                                            <option value="Magang">Magang</option>
                                        </select>
                                        <div class="text-danger">
                                            @error('deskripsi')
                                                Deskripsi Salah/Kosong
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Status</label>
                                        @if (auth()->user()->level == 1)
                                            <select name="status" class="form-control @error('status') is-invalid @enderror">
                                                <option value="{{$absen->status}}">{{$absen->status}}</option>
                                                <option value="Masuk">Masuk</option>
                                                <option value="Ijin">Ijin</option>
                                            </select>
                                        @elseif (auth()->user()->level == 2)
                                            <select name="status" class="form-control @error('status') is-invalid @enderror" readonly>
                                                <option value="{{ $absen->status }}">{{ $absen->status }}</option>
                                            </select>
                                        @endif
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
