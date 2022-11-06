@extends('app.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Vertical Form</h4>
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
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Tanggal Lahir</label>
                                    <input type="date" class="form-control" name="tgl_lahir">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Jenis Kelamin</label>
                                    <select id="inputState" class="form-control" name="jenis_kelamin" required>
                                        <option selected="selected" disabled>Pilih Jenis Kelamin</option>
                                        <option value="0">Laki - Laki</option>
                                        <option value="1">Perempuan</option>
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
