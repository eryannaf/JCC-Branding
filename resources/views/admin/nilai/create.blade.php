@extends('app.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Nilai</h4>
                    
                    <div class="basic-form">
                        <form method="POST" action="{{ route('nilai.store') }}">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Siswa</label>
                                    <select id="inputState" class="form-control" name="keahlian" required>
                                        <option selected="selected" disabled>Pilih Siswa</option>
                                        @forelse ($siswa as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @empty
                                        <option >Data Not Found</option>
                                        @endforelse
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>niali</label>
                                    <input type="number" class="form-control" placeholder="Password" name="nilai" min="0" max="10" required>
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
