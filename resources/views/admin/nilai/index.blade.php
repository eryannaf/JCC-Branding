@extends('app.app')

@push('style')
@include('components.css.dataTables')
@endpush

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Nilai</h4>
                    @hasanyrole('pengajar')
                    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah
                        Nilai
                    </button> --}}
                    <h4 class="card-title mt-3">Import dan Export</h4>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <form action="{{ route('nilai.import') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="file" required>
                                <button class="btn mb-1 btn-rounded btn-success">Import</button>
                            </form>
                        </div>
                        {{-- <div class="form-group col-md-6">
                            <form action="{{ route('nilai.export') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <button class="btn mb-1 btn-rounded btn-primary">export</button>
                            </form>
                        </div> --}}
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Form Nilai</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="form">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Nama Siswa</label>
                                            <select name="user_id" id="" class="form-control" required>
                                                <option selected disabled>Pilih Nama siswa</option>
                                                <option value="1">Arin</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">Nilai</label>
                                            <input type="number" name="nilai" id="" class="form-control" min="1"
                                                max="10" required>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration" id="myTable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Nama Pelajaran</th>
                                    <th>Nilai</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    @else
                    <div>
                        <h4 class="card-title mt-3">Export</h4>
                        <form action="{{ route('export.nilai') }}" method="get" enctype="multipart/form-data">
                            @csrf
                            <button class="btn mb-1 btn-rounded btn-success">Success</button>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Keahlian</th>
                                    <th>Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $item)
                                <tr>
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->keahlian }}</td>
                                    <td class="color-primary">{{ $item->nilai }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center">Data Not Found</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                @endhasanyrole
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
@can('pengajar')
@include('components.js.dataTables')
@endcan
@endpush
