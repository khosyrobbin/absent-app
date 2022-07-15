@extends('layout.template')

@section('content')
    @if (auth()->user()->level == 1)
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-header pb-0">
                            {{-- <h6>Authors table</h6> --}}
                        </div>
                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Universitas</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach ($user as $data)
                                            @if (auth()->user()->level == 1)
                                                <tr>
                                                    <td>{{ $no++ }}</td>
                                                    <td>{{ $data->nim }}</td>
                                                    <td>{{ $data->name }}</td>
                                                    <td>{{ $data->instansi }}</td>
                                                    <td>{{ $data->email }}</td>
                                                    <td>
                                                        <a href="/profil/edit/{{ $data->id }}"
                                                            class="btn btn-warning"><i class="fas fa-pencil-alt me-2" aria-hidden="true"></i></a>
                                                        <a href="/profil/delete/{{ $data->id }}"
                                                            class="btn btn-danger"><i class="far fa-trash-alt me-2"></i></a>
                                                            </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                                <br />
                                {{-- {{ $absen->links('pagination::bootstrap-4') }} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
