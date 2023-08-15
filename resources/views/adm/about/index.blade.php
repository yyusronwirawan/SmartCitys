@extends('layouts.adm.index')
@section('title', $title)

@section('content')

    <div class="row">
        <div class="col-12">
            <form class="card card-outline card-dark collapsed-card" action="{{ route('admin.struktural.update', $bupati->id) }}" method="POST">
            @method('PUT')
            @csrf
                <div class="card-header">
                    <h3 class="card-title">Bupati</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <textarea class="summernote" name="name" style="display: none;">{!! $bupati->name !!}</textarea>
                </div>
                <div class="card-footer justify-content-between">
                    <button type="submit" class="btn btn-primary btn-save">Save</button>
                </div>
            </form>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-12">
            <form class="card card-outline card-dark collapsed-card" action="{{ route('admin.struktural.update', $wakil_bupati->id) }}" method="POST">
            @method('PUT')
            @csrf
                <div class="card-header">
                    <h3 class="card-title">Wakil Bupati</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <textarea class="summernote" name="name" style="display: none;">{!! $wakil_bupati->name !!}</textarea>
                </div>
                <div class="card-footer justify-content-between">
                    <button type="submit" class="btn btn-primary btn-save">Save</button>
                </div>
            </form>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-12">
            <form class="card card-outline card-dark collapsed-card" action="{{ route('admin.visi.update', $visi->id) }}" method="POST">
            @method('PUT')
            @csrf
                <div class="card-header">
                    <h3 class="card-title">Visi</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <textarea class="summernote" name="body" style="display: none;">{!! $visi->body !!}</textarea>
                </div>
                <div class="card-footer justify-content-between">
                    <button type="submit" class="btn btn-primary btn-save">Save</button>
                </div>
            </form>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-12">
            <form class="card card-outline card-dark collapsed-card" action="{{ route('admin.misi.update', $misi->id) }}" method="POST">
            @method('PUT')
            @csrf
                <div class="card-header">
                    <h3 class="card-title">Misi</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <textarea class="summernote" name="body" style="display: none;">{!! $misi->body !!}</textarea>
                </div>
                <div class="card-footer justify-content-between">
                    <button type="submit" class="btn btn-primary btn-save">Save</button>
                </div>
            </form>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-12">
            <form class="card card-outline card-dark collapsed-card" action="{{ route('admin.about.update', $about->id) }}" method="POST">
            @method('PUT')
            @csrf
                <div class="card-header">
                    <h3 class="card-title">Deskripsi</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <textarea class="summernote" name="body" style="display: none;">{!! $about->body !!}</textarea>
                </div>
                <div class="card-footer justify-content-between">
                    <button type="submit" class="btn btn-primary btn-save">Save</button>
                </div>
            </form>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-12">
            <form class="card card-outline card-dark collapsed-card" action="{{ route('admin.opd.update', $opd->id) }}" method="POST">
            @method('PUT')
            @csrf
                <div class="card-header">
                    <h3 class="card-title">Organisasi Perangkat Daerah (OPD) / Badan / Dinas</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <textarea class="summernote" name="name" style="display: none;">{!! $opd->name !!}</textarea>
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
