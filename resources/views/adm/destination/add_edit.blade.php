@extends('layouts.adm.index')
@section('title', $title)

@section('content')

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-sm btn-outline-danger" onClick="location.href='{{ route('admin.destination.index') }}'">{{ __('Cancel') }}</button>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                @if ($isEdit)
                    <form class="card-body" action="{{ route('admin.destination.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                @else
                    <form class="card-body" action="{{ route('admin.destination.store') }}" method="POST" enctype="multipart/form-data">
                @endif
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input name="name" type="text" class="form-control" id="name" value="{{ $isEdit ? $item->name : '' }}" placeholder="Nama" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <select name="category" id="category" class="form-control" fdprocessedid="pgodo">
                                @if ($isEdit)
                                    <option value="{{ $item->category }}" selected="">{{ $item->category }}</option>
                                @endif
                                <option value="Wisata">Wisata</option>
                                <option value="Kuliner">Kuliner</option>
                                <option value="Sovenir">Sovenir</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="thumbnail" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input name="thumbnail" type="file" class="form-control" id="thumbnail" @if(!$isEdit) required @endif>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="body" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <textarea name="body" id="body" class="form-control summernote" rows="5" placeholder="Deskripsi">{!! $isEdit ? $item->body : '' !!}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                            <button type="submit" class=" btn btn-sm btn-info btn-block">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
