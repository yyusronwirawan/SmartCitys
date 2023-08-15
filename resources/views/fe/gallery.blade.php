@extends('layouts.fe.base')
@section('title', 'Gallery')

@section('content')

    <section class="section-header-single">
        <img src="{{ asset('fe') }}/img/bg-gallery.jpg">
        <div class="overlay">
            <div class="header-title">
                <h3>Capture The Moment</h3>
                <span class="ion-record"></span>&nbsp;
                <span class="ion-record"></span>&nbsp;
                <span class="ion-record"></span>
            </div>
        </section>
    </section>

    <ul class="breadcrumb">
        <li><a href="{{ route('fe.index') }}">Home</a></li>
        <li>Gallery</li>
    </ul>

    <!-- Photo Grid -->
    <section class="section section-gallery">
        <div class="container-fluid">
            <div class="single-head">
                <div class="col">
                    <img src="{{ asset('fe') }}/img/icon/013-photo.png">
                    <h3>Beautifull Gallery Of Mimika</h3>
                    <p>Tangkap momen - momen indah dengan nuansa instagramable di Mimika, Berikut adalah potret yang ditangkap oleh wisatawan</p>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse ($items as $item)
                <div class="column">
                    <a href="{{ asset('fe') }}/img/post/gallery/{{ $item->thumbnail }}" class="swipebox" title="Image by Instagram Explore Mimika">
                        <div class="wrapper">
                            <div class="zoom-effect">
                                <div class="image">
                                    <img src="{{ asset('fe') }}/img/post/gallery/{{ $item->thumbnail }}">
                                    <div class="overlay">
                                        <span class="ion-search"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="column">
                    <a href="{{ asset('fe') }}/img/post/Kawasan Pertambangan PT.Freeport.jpg" class="swipebox" title="Image by Instagram Explore Mimika">
                        <div class="wrapper">
                            <div class="zoom-effect">
                                <div class="image">
                                    <img src="{{ asset('fe') }}/img/post/Kawasan Pertambangan PT.Freeport.jpg>
                                    <div class="overlay">
                                        <span class="ion-search"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforelse
        </div>
    </section>

    {{-- <ul class="pagination">
        <a href="#" class="pagination-arrow arrow-left">
            <span class="ion-ios-arrow-back"></span>
        </a>
        <a class="pagin-number active">1</a>
        <a href="#" class="pagin-number">2</a>
        <a href="#" class="pagin-number">3</li>
            <a href="#" class="pagin-number">4</a>
            <a href="#" class="pagin-number">5</a>
            <a href="#" class="pagin-arrow arrow-right">
                <span class="ion-ios-arrow-forward"></span>
            </a>
    </ul> --}}

@endsection
