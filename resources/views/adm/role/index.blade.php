@extends('layouts.adm.index')
@section('title', trans('menu.role.page'))

@section('content')

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <button href="javascript:void(0)" type="button" class="btn btn-sm btn-outline-success" onClick="add()">{{ trans('global.addData') }}</button>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        {{-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button> --}}
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                @canany(['role-U', 'role-D'])
                                    <th></th>
                                @endcanany
                            </tr>
                        </thead>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- Create Data -->
            <div class="modal fade" id="modal-create" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title ModalName" id="ModalName"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="javascript:void(0)" id="AddOrEditForm" name="AddOrEditForm"
                            class="form-horizontal AddOrEditForm" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <input type="hidden" class="id" name="id" id="id">
                                <div class="form-group">
                                    <label for="name"
                                        class="col-sm-2 control-label">{{ trans('menu.role.fields.name') }}</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control name" id="name" name="name"
                                            placeholder="Enter Name" maxlength="50" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name"
                                        class="col-sm-2 control-label">{{ trans('menu.role.fields.guard_name') }}</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" name="guard_name">
                                            <option value="web">web</option>
                                            <option value="api">api</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name"
                                        class="col-sm-2 control-label">{{ trans('menu.role.fields.permissions') }}</label>
                                    <div class="col-sm-12">
                                        <div class="icheck-primary col-md-3">
                                            <input class="form-check-input" type="checkbox" id="checkAll">
                                            <label class="form-check-label" for="checkAll">Check All</label>
                                        </div>
                                        <div class="input-group">
                                            @foreach ($data['permission'] as $p)
                                                <div class="icheck-primary col-md-3">
                                                    <input class="form-check-input permission" type="checkbox"
                                                        name="permission[]" id="{{ $p->id }}"
                                                        value="{{ $p->id }}">
                                                    <label
                                                        class="form-check-label {{ strtok($p->name, ' ') == 'delete' ? 'text-danger' : '' }}"
                                                        for="{{ $p->id }}">{{ $p->name }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary btn-save" id="btn-save">Save changes</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

            <!-- Update Data -->
            <div class="modal fade" id="modal-update" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title ModalName" id="ModalName"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="javascript:void(0)" id="AddOrEditForm" name="AddOrEditForm"
                            class="form-horizontal AddOrEditForm" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <input type="hidden" class="id" name="id" id="id">
                                <div class="form-group">
                                    <label for="name"
                                        class="col-sm-2 control-label">{{ trans('menu.role.fields.name') }}</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control name" id="name" name="name"
                                            placeholder="Enter Name" maxlength="50" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name"
                                        class="col-sm-2 control-label">{{ trans('menu.role.fields.guard_name') }}</label>
                                    <div class="col-sm-12">
                                        <select class="form-control" name="guard_name">
                                            <option value="web">web</option>
                                            <option value="api">api</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name"
                                        class="col-sm-2 control-label">{{ trans('menu.role.fields.permissions') }}</label>
                                    <div class="col-sm-12">
                                        <div class="icheck-primary col-md-3">
                                            <input class="form-check-input checkAll" type="checkbox" id="checkAll">
                                            <label class="form-check-label" for="checkAll">Check All</label>
                                        </div>
                                        <div class="input-group">
                                            @foreach ($data['permission'] as $p)
                                                <div class="icheck-primary col-md-3">
                                                    <input class="form-check-input permission" type="checkbox"
                                                        name="permission[]" id="{{ $p->id }}u"
                                                        value="{{ $p->name }}">
                                                    <label
                                                        class="form-check-label {{ strtok($p->name, ' ') == 'delete' ? 'text-danger' : '' }}"
                                                        for="{{ $p->id }}u">{{ $p->name }}</label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary btn-save" id="btn-save">Save
                                    changes</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->

        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

@endsection

@push('css')
@endpush

@push('js')
    <!-- Multi-select boxes -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.select2').select2()
        });
    </script>

    <!-- Datatables -->
    <script type="text/javascript">
        $(document).ready(function() {
            $("#example1").DataTable({
                processing: true,
                serverSide: true,
                info: true,
                ordering: true,
                searching: true,
                responsive: true,
                autoWidth: false,
                lengthChange: true,
                lengthMenu: [
                    [10, 25, 50, 100, -1],
                    [10, 25, 50, 100, "All"]
                ],
                pagingType: "full_numbers",
                buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
                ajax: {
                    url: "{{ route('roles.list') }}",
                    type: 'POST',
                    dataType: 'JSON',
                    data: function(d) {
                        return $.extend({}, d, {});
                    },
                    error: function(xhr, textStatus, ThrownException) {
                        alert('Error loading data. Exception: ' + ThrownException + "\n" + textStatus);
                    }
                },
                columns: [{
                        title: '{{ trans('menu.role.fields.id') }}',
                        data: 'id',
                        name: 'id',
                    }, {
                        title: '{{ trans('menu.role.fields.name') }}',
                        data: 'name',
                        name: 'name',
                        render: function(data, type, row) {
                            // return '<span style="text-transform: capitalize;">' + data + "</span>";
                            return '<span style="text-transform: lowercase;">' + data + "</span>";
                        }
                    }, {
                        title: '{{ trans('menu.role.fields.guard_name') }}',
                        data: 'guard_name',
                        name: 'guard_name',
                        render: function(data, type, row) {
                            return '<span style="text-transform: lowercase;">' + data + "</span>";
                        }
                    }, {
                        title: '{{ trans('menu.role.fields.permissions') }}',
                        data: 'permissions',
                        name: 'permission',
                        render: function(data, type, row) {
                            if (type === 'display') {
                                var names = [];
                                $.each(data, function(index, value) {
                                    names.push(value.name);
                                });
                                if (names.length == {{ count($data['permission']) }}) {
                                    return '{{ trans('menu.role.fields.allPermissions') }}';
                                } else {
                                    return names.join(' || ');
                                }
                                // return names.join(' || ');
                            }
                            return data;
                        }
                    }, {
                        title: '{{ trans('menu.role.fields.created_at') }}',
                        // data: 'updated_at == NULL ? created_at : updated_at',
                        data: 'created_at',
                        name: 'created_at',
                        render: function(data, type, row, full, meta) {
                            var locale = moment.locale(
                                "{{ app()->getLocale() == 'id' ? 'id' : 'en' }}");
                            return (moment(data).isValid()) ? moment(data).locale(locale).format(
                                'DD MMMM YYYY') : "-";
                        }
                    },

                    @canany(['role-U', 'role-D'])
                        {
                            title: '{{ trans('global.actions') }}',
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            // sortable: true,
                            // width: 125,
                            // autoHide: false,
                            // overflow: 'visible',
                        }
                    @endcanany
                ],
                order: [
                    [0, 'asc']
                ],
            });
        });

        function add() {
            $('.AddOrEditForm').trigger("reset");
            $('.ModalName').html("{{ trans('global.addNewData') }}");
            $('#modal-create').modal('show');
            $('.id').val('');
            // $("input:checkbox.checkAll").prop('checked', false);
            // $('input:checkbox.permission').prop('checked', false);
            $('input:checkbox.permission').prop('disabled', false);
        }

        function editFunc(id) {
            $.ajax({
                url: "{{ route('roles.updated') }}",
                type: "POST",
                dataType: 'JSON',
                data: {
                    id: id
                },
                success: function(res) {
                    $('.ModalName').html("{{ trans('global.updateData') }}");
                    $('#modal-update').modal('show');
                    $('.id').val(res.id);
                    $('.name').val(res.name);
                    $('.guard_name').val(res.guard_name);
                    // $('.permission').val(res.permissions);
                    var data = res.data;
                    var permissions = res.permissions;
                    if (permissions.length == {{ count($data['permission']) }}) {
                        $("input:checkbox.checkAll").prop('checked', true);
                    } else {
                        $("input:checkbox.checkAll").prop('checked', false);
                    }
                    if (res.name == 'admin') {
                        $('input:checkbox.permission').prop('checked', true);
                        $('input:checkbox.permission').prop('disabled', true);
                        $("input:checkbox.checkAll").prop('checked', true);
                        $("input:checkbox.checkAll").prop('disabled', true);
                    } else {
                        $('input:checkbox.permission').prop('checked', false);
                        $('input:checkbox.permission').prop('disabled', false);
                        $("input:checkbox.checkAll").prop('disabled', false);
                    }
                    for (let i = 0; i < permissions.length; i++) {
                        $(`#${permissions[i].id}u`).prop('checked', true);
                    }
                }
            });
        }

        function deleteFunc(id) {
            if (confirm("Delete Record?") == true) {
                var id = id;
                // ajax
                $.ajax({
                    type: "POST",
                    url: "{{ route('roles.deleted') }}",
                    data: {
                        id: id
                    },
                    dataType: 'json',
                    success: function(res) {
                        var oTable = $('#example1').dataTable();
                        oTable.fnDraw(true);
                    }
                });
            }
        }

        $('.AddOrEditForm').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: 'POST',
                url: "{{ route('roles.created') }}",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: (data) => {
                    $("#modal-create").modal('hide');
                    $("#modal-update").modal('hide');
                    var oTable = $('#example1').dataTable();
                    oTable.fnDraw(true);
                    $(".btn-save").html('Submit');
                    $(".btn-save").attr("disabled", false);
                    // location.reload();
                },
                error: function(data) {
                    console.log(data);
                }
            });
        });

        $("#checkAll").click(function() {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });

        $("#checkAllu").click(function() {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
    </script>
@endpush
