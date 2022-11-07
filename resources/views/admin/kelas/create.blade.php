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
                                    <input type="string" class="form-control" name="kelas" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Pelajaran</label>
                                    <select id="inputState" class="form-control" name="studieses_id" required>
                                        <option selected="selected" disabled>Pilih Pelajaran</option>
                                        <option value="1">Bahasa Indonesia</option>
                                        <option value="2">Coding</option>

                                        {{-- @forelse ($data as $item)
                                        <option value="{{ $item->id  }}">{{ $item->mata_pelajaran }}</option>
                                        @empty
                                        <option value="2">Data not found</option>
                                        @endforelse --}}
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
