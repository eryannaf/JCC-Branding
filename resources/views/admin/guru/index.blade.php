@extends('app.app')

@section('content')
<div class="container-fluid">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4>Table Hover</h4>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Nama</th>
                                <th>NIP</th>
                                <th>Alamat</th>
                                <th>Jenis Kelamin</th>
                                <th>Pelajaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <th>{{ $item->name }}</th>
                                <th>{{ $item->email }}</th>
                                <th>{{ $item->nip }}</th>
                                <th>{{ $item->alamat }}</th>
                                <th>{{ $item->jenis_kelamin }}</th>
                                <th>{{ $item->pelajaran }}</th>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="7" class="text-center">data not found</th>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /# card -->
    </div>
</div>
@endsection
