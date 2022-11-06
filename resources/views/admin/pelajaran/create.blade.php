@extends('app.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Form Pengajar</h4>
                    <div class="basic-form">
                        <form method="POST" action="{{ route('student.store') }}">
                            @csrf
                            <div class="form-group">
                                <label>Mata Pelajaran</label>
                                <input type="text" class="form-control" placeholder="Anti Wibu" name="mapel" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>Hari Mengajar</label>
                                    <select id="inputState" class="form-control" name="mengajar" required>
                                        <option selected="selected" disabled>Pilih Guru Untuk Mengajar</option>
                                        <option value="Senin">Ucup</option>
                                        <option value="Selasa">Pinan</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Hari Mengajar</label>
                                    <select id="inputState" class="form-control" name="mengajar" required>
                                        <option selected="selected" disabled>Pilih hari Mengajar</option>
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        <option value="Rabu">Rabu</option>
                                        <option value="Kamis">Kamis</option>
                                        <option value="Ju'mat">Ju'mat</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Waktu Mengajar</label>
                                    <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
                                        <input type="text" class="form-control" value="13:14" name="waktu"> <span class="input-group-append"><span class="input-group-text"><i class="fa fa-clock-o"></i></span></span>
                                    </div>
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
