@extends('layouts.fe.base')
@section('title', 'Smart City')

@section('content')

    <!-- Section -->
    <section class="section-ticket">
        <div class="header">
            <img src="{{ asset('fe') }}/img/bg-news.jpg">
            <div class="overlay">
                <div class="desc">
                    <h3>Smart City</h3>
                </div>
            </div>
        </div>
        <div class="body" style="margin-top:-44px;">
            <div class="panel" id="deskripsi">
                <div class="panel-header">
                    <span class="ion-ios-bookmarks"></span>&nbsp; Deskripsi
                </div>
                <div class="panel-body">
                    <p style="text-align:justify;">
                        {!! $item->body !!}
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
