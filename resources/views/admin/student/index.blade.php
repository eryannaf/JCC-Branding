@extends('app.app')

@section('content')
<div class="container-fluid">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4>Table Siswa</h4>
                    <h5>Import Dan Export</h5>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <form action="{{ route('siswa.import') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="file" required>
                                <button class="btn mb-1 btn-rounded btn-success">import</button>
                            </form>
                        </div>
                        <div class="form-group col-md-6">
                            <form action="{{ route('siswa.export') }}" method="get" enctype="multipart/form-data">
                                @csrf
                                <button class="btn mb-1 btn-rounded btn-primary">Export</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Email</th>
                                <th>Nama</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($data as $item)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <th>{{ $item->name }}</th>
                                <th>{{ $item->email }}</th>
                                <th>{{ $item->tgl_lahir }}</th>
                                <th>{{ $item->jenis_kelamin }}</th>
                            </tr>
                            @empty
                            <tr>
                                <th colspan="5" class="text-center">data not found</th>
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
