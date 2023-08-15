@extends('layouts.adm.index')
@section('title', $title)

@section('content')

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-sm btn-outline-success" onClick="location.href='{{ route('admin.destination.create') }}'">{{ trans('global.addData') }}</button>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>

                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Thumbnail</th>
                                <th>Deskripsi</th>
                                <th>Author</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->category }}</td>
                                    <td>
                                        <a href="{{ asset('fe/img/post/'.$item->thumbnail) }}" target="_blank" rel="noopener noreferrer">
                                            <img src="{{ asset('fe/img/post/'.$item->thumbnail) }}" alt="Thumbnail" width="150">
                                        </a>
                                    </td>
                                    <td>{!! Str::limit($item->body, 350, $end=' ...') !!}</td>
                                    <td>{{ $item->author->name }}</td>
                                    <td width="110px">
                                        <form action="{{ route('admin.destination.deleted', $item->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                            <button class="btn btn-sm btn-outline-info" type="button" onclick="location.href='{{ route('admin.destination.show', $item->id) }}'" >
                                                <i class="nav-icon fas fa-search"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-warning" type="button" onclick="location.href='{{ route('admin.destination.edit', $item->id) }}'" >
                                                <i class="nav-icon fas fa-pencil-alt"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger" type="submit">
                                                <i class="nav-icon fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">Trident</td>
                                </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Thumbnail</th>
                                <th>Deskripsi</th>
                                <th>Author</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

@endsection

@push('css')
@endpush

@push('js')

    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>

@endpush
