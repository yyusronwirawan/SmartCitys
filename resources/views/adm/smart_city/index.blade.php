@extends('layouts.adm.index')
@section('title', $title)

@section('content')

    <div class="row">
        <div class="col-12">
            <form class="card card-outline card-dark" action="{{ route('admin.smartcity.update', $item->id) }}" method="POST">
            @method('PUT')
            @csrf
                <div class="card-header">
                    <h3 class="card-title">Deskripsi</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <textarea class="summernote" name="body" style="display: none;">{!! $item->body !!}</textarea>
                </div>
                <div class="card-footer justify-content-between">
                    <button type="submit" class="btn btn-primary btn-save">Save</button>
                </div>
            </form>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('adm') }}/plugins/summernote/summernote-bs4.min.css">
@endpush

@push('js')
    <script src="{{ asset('adm') }}/plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function() {
            // Summernote
            $('.summernote').summernote()
        })
    </script>
@endpush
