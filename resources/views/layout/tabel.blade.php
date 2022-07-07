@extends('layout.template')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        {{-- <h6>Authors table</h6> --}}
                        <a class="btn bg-gradient-dark mb-0" href="/tabel/add"><i class="fas fa-plus"></i>&nbsp;&nbsp;Add New Card</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Deskrisi</th>
                                        <th>Waktu</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($absen as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ Auth::user()->name }}</td>
                                            <td>{{ $data->deskripsi }}</td>
                                            <td>{{ $data->waktu }}</td>
                                            <td>{{ $data->status }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
