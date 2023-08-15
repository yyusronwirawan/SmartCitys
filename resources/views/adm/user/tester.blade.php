@extends('layouts.adm.index')
@section('title', trans('menu.user.title'))

@section('content')

    <div class="row">
        <div class="col-12">
            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">DataTable {{ trans('menu.user.title') }}</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        {{-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button> --}}
                    </div>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                {{-- <th>Avatar</th> --}}
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->
        </div>
    </div>

@endsection

@push('css')
@endpush

@push('js')

    <!-- Datatables -->
    {{-- <script type="text/javascript">
        $(document).ready(function () {
            $("#example1").DataTable({
                processing: true,
                serverSide: true,
                info: true,
                ordering: true,
                searching: { "regex": true },
                responsive: true,
                autoWidth: false,
                lengthChange: true,
                lengthMenu: [ [10, 25, 50, 100, -1], [10, 25, 50, 100, "All"] ],
                pagingType: "full_numbers",
                buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
                ajax: {
                    url: "{{ route('users.list') }}",
                    type: 'POST',
                    dataType: 'JSON',
                    data: function(d) {
                        return $.extend({}, d, {
                        });
                    },
                    error: function(xhr, textStatus, ThrownException) {
                        alert('Error loading data. Exception: ' + ThrownException + "\n" + textStatus);
                    }
                },
                columns: [
                    {
                        data: 'name',
                        name: 'name'
                    }, {
                        data: 'email',
                        name: 'email'
                    // }, {
                    //     data: 'avatar',
                    //     name: 'avatar'
                    }, {
                        data: 'created_at',
                        name: 'created_at',
                        render: function (data, type, full, meta) {
                            return moment(data).format('DD MMMM YYYY');
                        }
                    },
                ],
                // order: [[0,'asc']]
            });
        });
    </script> --}}

@endpush
