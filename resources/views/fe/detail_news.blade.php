@extends('layouts.fe.base')
@section('title', 'News')

@section('content')

    <section class="section-header-single">
        <img src="{{ asset('fe') }}/img/bg-news.jpg">
        <div class="overlay">
            <div class="header-title">
                <h3>What's Happen</h3>
                <span class="ion-record"></span>&nbsp;
                <span class="ion-record"></span>&nbsp;
                <span class="ion-record"></span>
            </div>
    </section>
    </section>

    <ul class="breadcrumb">
        <li><a href="{{ route('fe.index') }}">Home</a></li>
        <li>{{ $item->category }}</li>
    </ul>

    <section class="section section-archive">
        <div class="container">
            <div class="row">
                <div class="content">
                    <div class="content-single">
                        <div class="content-single-title">
                            <h3>{{ $item->name }}</h3>
                            <img src="{{ asset('fe') }}/img/post/{{ $item->thumbnail }}" class="image">
                        </div>
                        <div class="content-single-body">
                            {!! $item->body !!}

                            {{-- <div class="label">
                                <a href=""><span class="ion-pricetags"></span> &nbsp; News</a>
                                <a href=""><span class="ion-android-share-alt"></span> &nbsp; Share</a>
                                <a href=""><span class="ion-heart"></span> &nbsp; Like</a>
                            </div> --}}
                        </div>
                        <div class="content-single-footer">
                            <h3 class="text-center">Artikel Terkait</h3>
                            <div class="terkait">
                                <div class="col">
                                    <img src="{{ asset('fe') }}/img/post/{{ $item->thumbnail }}"> <br><br>
                                    <a href="#">
                                        <h3 class="text-center">
                                            {{ $item->name }}
                                        </h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="aside">
                    <div class="row">
                        <div class="aside-content">
                            <div class="content-title">
                                <b>KATEGORI</b>
                            </div>
                            <div class="content-body">
                                <ul style="padding: 0;list-style: none;">
                                    <li><a href="{{ route('fe.news') }}">News</a></li>
                                    <li><a href="{{ route('fe.culture') }}">Culture</a></li>
                                    <li><a href="{{ route('fe.event') }}">Event</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
