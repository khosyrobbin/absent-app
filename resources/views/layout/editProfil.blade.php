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
                    <p class="text-uppercase text-sm">Edit User</p>
                    <form action="/profil/update/{{$user->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-grup">
                            <div class="col-md-6">
                                <div class="form-grup">
                                    <label>Nama</label>
                                    <input name="name" class="form-control @error('id') is-invalid @enderror" value="{{ $user->name }}" >
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
                                    <input name="nim" class="form-control @error('nim') is-invalid @enderror" type="text" value="{{$user->nim}}">
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
                                    <input name="instansi" class="form-control @error('instansi') is-invalid @enderror" type="text" value="{{$user->instansi}}">
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
                                    <input name="email" class="form-control @error('email') is-invalid @enderror" type="email" value="{{$user->email}}">
                                    <div class="text-danger">
                                        @error('email')
                                            Email Salah/Kosong
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
