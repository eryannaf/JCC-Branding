@extends('app.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Pengajar</h4>
                    <div class="basic-form">
                        <form method="POST" action="{{ route('kelas.store') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Ruangan</label>
                                    <select id="inputState" class="form-control" name="kelas" required>
                                        <option selected="selected" disabled>Pilih Ruangan</option>

                                        <option value="IPA 1">IPA 1</option>
                                        <option value="IPA 2">IPA 2</option>
                                        <option value="IPA 3">IPA 3</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Siswa</label>
                                    <select id="inputState" class="form-control" name="user_id" required>
                                        <option selected="selected" disabled>Pilih Siswa</option>

                                        @forelse ($siswa as $item)
                                        <option value="{{ $item->id  }}">{{ $item->name }}</option>
                                        @empty
                                        <option value="2">Data not found</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <button type="submite" class="btn mb-1 btn-rounded btn-primary">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
