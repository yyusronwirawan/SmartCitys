@extends('layouts.adm.index')
@section('title', $title)

@section('content')

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <button type="button" class="btn btn-sm btn-outline-danger" onClick="location.href='{{ route('admin.event.index') }}'">{{ __('Cancel') }}</button>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <img class="card-img-top" src="{{ asset('fe/img/post/'.$item->thumbnail) }}" alt="Card image cap">
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-4">Nama</dt>
                        <dd class="col-sm-8">{{ $item->name }}</dd>
                        <dt class="col-sm-4">Kategori</dt>
                        <dd class="col-sm-8">{{ $item->category }}</dd>
                        <dt class="col-sm-4">Author</dt>
                        <dd class="col-sm-8">{{ $item->author->name }}</dd>
                        <dt class="col-sm-4">Deskripsi</dt>
                        <dd class="col-sm-8">{!! $item->body !!}</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>

@endsection
