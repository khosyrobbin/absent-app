@extends('layout.template')
@section('content')
@if (auth()->user()->level == 1)
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header pb-0">
                </div>
                <div class="card-body">
                    <p class="text-uppercase text-sm">Tambah user</p>
                    <form action="/profil/simpan" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-grup">
                            <div class="col-md-6">
                                <div class="form-grup">
                                    <label>Nama</label>
                                    <input name="name" class="form-control @error('name') is-invalid @enderror">
                                    <div class="text-danger">
                                        @error('name')
                                            Nama Salah/Kosong/Sudah digunakan
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>NIM</label>
                                    <input name="nim" class="form-control @error('nim') is-invalid @enderror" type="text">
                                    <div class="text-danger">
                                        @error('nim')
                                            NIM Salah/Kosong
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Instansi</label>
                                    <input name="instansi" class="form-control @error('instansi') is-invalid @enderror" type="text">
                                    <div class="text-danger">
                                        @error('instansi')
                                            Instansi Salah/Kosong
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input name="email" class="form-control @error('email') is-invalid @enderror" type="email">
                                    <div class="text-danger">
                                        @error('email')
                                            Email Salah/Kosong
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input name="password" class="form-control @error('password') is-invalid @enderror">
                                    <div class="text-danger">
                                        @error('password')
                                            Password Salah/Kosong
                                        @enderror
                                    </div>
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
</div>
@endif
@endsection
