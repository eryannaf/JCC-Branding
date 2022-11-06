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
                    <h4 class="card-title">Data Table</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration" id="myTable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
    $(document).ready(function () {
        $('#myTable').DataTable({
                processing: true,
                serverside: true,
                ajax: "{{ url('ajax') }}",
                columns: [{
                    data: 'name',
                    name: 'Nama'
                }, {
                    data: 'email',
                    name: 'Email'
                }]
            }
        );
    });

</script>
@include('components.js.dataTables')
@endpush
