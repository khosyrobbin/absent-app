@extends('layout.template')
@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        {{-- <h6>Authors table</h6> --}}
                        <a class="btn bg-gradient-dark mb-0" href="/home/pdf" target="_blank"><i class="fas fa-file-pdf text-lg me-1"></i>Print Absen</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama</th>
                                        <th>Deskrisi</th>
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                        @foreach ($absen as $data)
                                            @if (auth()->user()->level==1)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->deskripsi }}</td>
                                                <td>{{ $data->tanggal }}</td>
                                                <td>{{ $data->waktu }}</td>
                                                <td>{{ $data->status }}</td>
                                            </tr>
                                            @elseif (auth()->user()->level==2)
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
                                            @endif
                                        @endforeach
                                </tbody>
                            </table>
                            <br/>
                            {{-- {{ $absen->links('pagination::bootstrap-4') }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('searchBar')
    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <form action="/home/cari" method="get">
            <div class="input-group">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input name="cari" type="text" class="form-control" placeholder="Type here...">
            </div>
        </form>
    </div>
@endsection
