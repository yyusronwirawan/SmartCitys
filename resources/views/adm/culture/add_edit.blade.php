@extends('layouts.adm.index')
@section('title', $title)

@section('content')

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-sm btn-outline-danger" onClick="location.href='{{ route('admin.culture.index') }}'">{{ __('Cancel') }}</button>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                @if ($isEdit)
                    <form class="card-body" action="{{ route('admin.culture.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                @else
                    <form class="card-body" action="{{ route('admin.culture.store') }}" method="POST" enctype="multipart/form-data">
                @endif
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input name="name" type="text" class="form-control" id="name" value="{{ $isEdit ? $item->name : '' }}" placeholder="Nama" required>
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
