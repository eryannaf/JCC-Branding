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
                                <th>keahlian</th>
                                <th>alamat</th>
                                <th>No Telpon</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <th>{{ $item->name }}</th>
                                <th>{{ $item->email }}</th>
                                <th>{{ $item->nip }}</th>
                                <th>{{ $item->keahlian }}</th>
                                <th>{{ $item->alamat }}</th>
                                <th>{{ $item->no_telp }}</th>
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
