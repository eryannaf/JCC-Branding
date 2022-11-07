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
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Email" name="email" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Password</label>
                                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Anti Wibu" name="name" required>
                            </div>
                            <div class="form-group">
                                <label>alamat</label>
                                <textarea class="form-control h-150px" rows="6" id="comment" name="alamat"></textarea>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label>NIP</label>
                                    <input type="text" class="form-control" name="nip">
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Keahlian</label>
                                    <select id="inputState" class="form-control" name="keahlian" required>
                                        <option selected="selected" disabled>Pilih Keahlian</option>
                                        <option value="1">Bahasa Indonesia</option>
                                        <option value="2">Coding</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label>Nomer Telpone</label>
                                    <input type="text" class="form-control" name="no_phone">
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
