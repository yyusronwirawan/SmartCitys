@extends('layouts.fe.base')
@section('title', 'Home')

@section('content')

    <!-- Section Header -->
    <section class="section-header">
        <div class="section-header-image">
            <img src="{{ asset('fe') }}/img/banner-2.png" alt="Header">
        </div>
        <div class="container">
            <div class="section-header-inner">
                <div class="section-header-title">
                    <h3 class="title">GREAT <br> ART <br>OF <br>MIMIKA</h3>
                    <p>Telusuri Keindahan Mimika Yang <br> Belum Pernah Anda Temui Sebelumnya</p>
                    <a href="{{ route('fe.destination') }}" class="btn btn-round btn-orange">See Our Destination</a>
                </div>
                <div class="section-header-title-xs">
                    <h3 class="title">GREAT ART OF MIMIKA</h3>
                    <p>Telusuri Keindahan Mimika Yang <br> Belum Pernah Anda Temui Sebelumnya</p>
                    <a href="{{ route('fe.destination') }}" class="btn btn-round btn-orange">See Our Destination</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Section About -->
    <section class="section section-about">
        <div class="about-head slides">
            <h3>{{ config('app.name2', 'Laravel') }}</h3>
            <p>
                <b>Mimika</b> adalah salah satu kabupaten di provinsi <b>Papua Tengah, Indonesia</b>.
                Ibu kota kabupaten ini terletak di <b>Timika</b>.
                Di kabupaten ini, tepatnya di distrik Tembagapura, terdapat tambang emas dan salah satu tambang emas
                terbesar di dunia milik <b>PT. Freeport Indonesia</b>.
            </p>
        </div>
        <div class="about-body">
            <div class="row slides">
                <div class="col">
                    <img src="{{ asset('fe') }}/img/About/035-trekking.png">
                    <h2>ADVENTURE</h2>
                    <p>Dapatkan pengalaman berpetualang yang belum pernah anda rasakan sebelumnya hanya di Mimika</p>
                </div>
                <div class="col">
                    <img src="{{ asset('fe') }}/img/About/028-book.png">
                    <h2>GUIDE</h2>
                    <p>Kami memberikan info - info seputar Mimika mulai dari event dan destinasi terbaik</p>
                </div>
                <div class="col">
                    <img src="{{ asset('fe') }}/img/About/024-tent.png">
                    <h2>STAY</h2>
                    <p>Anda tidak perlu kawatir akan menetap dimana karna kami menyediakan tiket Hotel terbaik</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Explore -->
    <section class="section-explore">
        <div class="texture-handler-top"></div>
        <div class="overlay">
            <div class="caption">
                <h2>ENJOY BEUTY & friendliness OF</h2> <br>
                <img src="{{ asset('fe') }}/img/mimika-island.png" alt="Mimika Island">
            </div>
        </div>
        <div class="texture-handler-bottom"></div>
    </section>

    <!-- Section Discover -->
    <section class="section section-discover" id="discover">
        <div class="section-head">
            <div class="section-line"></div>
            <h3 class="section-title">DISCOVERY MIMIKA</h3>
            <p class="section-subtitle">Adalah sebuah warisan indahnya alam dan budaya yang masih terjaga di Mimika yang
                dapat anda jelajahi</p>
        </div>
        <div class="section-discover-body slides">
            <div class="col">
                <a href="{{ route('fe.destination') }}">
                    <img src="{{ asset('fe') }}/img/selfie.jpg" alt="Destination">
                    <div class="caption">
                        <p>DESTINATION</p>
                        <div class="line"></div>
                        <div class="caption-text">
                            <p>Kunjungi destinasi wisata dan kuliner yang belum pernah anda temui sebelumnya</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('fe.culture') }}">
                    <img src="{{ asset('fe') }}/img/culture.jpg">
                    <div class="caption" alt="Culture">
                        <p>CULTURE</p>
                        <div class="line"></div>
                        <div class="caption-text">
                            <p>Selain pemandangan yang indah mimika juga memiliki budaya yang mengesankan</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('fe.event') }}">
                    <img src="{{ asset('fe') }}/img/event.jpg">
                    <div class="caption" alt="Event">
                        <p>EVENT</p>
                        <div class="line"></div>
                        <div class="caption-text">
                            <p>Ikuti dan ketahui event - event menarik yang berlangsung di Mimika</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('fe.smart_city') }}">
                    <img src="{{ asset('fe') }}/img/stay.jpg">
                    <div class="caption" alt="Stay">
                        <p>SMART CITY</p>
                        <div class="line"></div>
                        <div class="caption-text">
                            <p>Kota yang mampu mengelola dan memanfaatkan sumber daya alam (SDA) dan sumber daya manusia (SDM)</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Gallery Mimika -->
    <section class="section section-gallery">
        <div class="section-head">
            <div class="section-line"></div>
            <h3 class="section-title">OUR GALLERY</h3>
            <p class="section-subtitle">Potret indahnya kenampakan Mimika yang tidak boleh anda lewatkan</p>
        </div>
        <div class="section-gallery-body">
            <div class="row">
                <div class="col-video">
                    <video controls>
                        {{-- <source src="{{ asset('fe') }}/img/explore.mp4" type="video/mp4"> --}}
                        <source src="{{ asset('fe') }}/img/Halal Bihalal - Pegawai dan Dharma Wanita Dinas Peternakan Dan Kesehatan Hewan Kab.Mimika.mp4" type="video/mp4">
                        Your browser does not support HTML5 video.
                    </video>
                </div>
                <div class="col-image">
                    <div class="row">
                        <div class="col" onclick="window.location.href='gallery.html'">
                            <img src="{{ asset('fe') }}/img/Gallery/27573391_1831430933557419_8533318736831053824_n.jpg">
                            <div class="overlay">
                                <span class="ion-search"></span>
                            </div>
                        </div>
                        <div class="col" onclick="window.location.href='gallery.html'">
                            <img src="{{ asset('fe') }}/img/Gallery/26870845_1740142096076715_486825953067008000_n.jpg">
                            <div class="overlay">
                                <span class="ion-search"></span>
                            </div>
                        </div>
                        <div class="col" onclick="window.location.href='gallery.html'">
                            <img src="{{ asset('fe') }}/img/Gallery/27880266_1798970387070331_5621832064107020288_n.jpg">
                            <div class="overlay">
                                <span class="ion-search"></span>
                            </div>
                        </div>
                        <div class="col" onclick="window.location.href='gallery.html'">
                            <img src="{{ asset('fe') }}/img/Gallery/29415561_163922580940067_2417069708558729216_n.jpg">
                            <div class="overlay">
                                <span class="ion-search"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Tours -->
    <section class="section section-tour">
        <div class="section-head">
            <div class="section-line"></div>
            <h3 class="section-title">5 RECOMENDED DESTINATION</h3>
            <p class="section-subtitle">Wisata, kuliner dan sovenir terbaik berdasarkan tingkat ketertarikan wisatawan Mimika dan kepopuleran tempat tersebut</p>
        </div>
        <div class="section-tour-body">
            <div class="row">
                @foreach ($item1 as $item)
                    <div class="col-1 slides slideanim">
                        <img src="{{ asset('fe') }}/img/post/{{ $item->thumbnail }}">
                        <div class="overlay">
                            <div class="caption">
                                <div class="caption-text">
                                    <p>{{ $item->name }}</p>
                                    <span class="ion-location big"></span> &nbsp;
                                    <b>{{ $item->category }}</b> <br>
                                    <a href="{{ route('fe.detail_destination', $item->id) }}" class="btn btn-orange btn-round">See Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                @forelse ($item2 as $item)
                    <div class="col-2 slides slideanim">
                        <img src="{{ asset('fe') }}/img/post/{{ $item->thumbnail }}">
                        <div class="overlay">
                            <div class="caption">
                                <div class="caption-text">
                                    <p>{{ $item->name }}</p>
                                    <span class="ion-pizza big"></span> &nbsp;
                                    <b>{{ $item->category }}</b> <br>
                                    <a href="{{ route('fe.detail_destination', $item->id) }}" class="btn btn-orange btn-round">See Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
                @forelse ($item3 as $item)
                <div class="col-2 slides slideanim">
                    <img src="{{ asset('fe') }}/img/post/{{ $item->thumbnail }}">
                    <div class="overlay">
                        <div class="caption">
                            <div class="caption-text">
                                <p>{{ $item->name }}</p>
                                <span class="ion-bag big"></span> &nbsp;
                                <b>{{ $item->category }}</b> <br>
                                <a href="{{ route('fe.detail_destination', $item->id) }}" class="btn btn-orange btn-round">See Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>

    <!-- Section News -->
    <section class="section section-news">
        <div class="section-news-head">
            <h3 class="section-title">WHAT'S HAPPENING</h3>
            <p class="section-subtitle">Apa saja yang terjadi seputar Pariwisata, Kebudayaan dan Event di Mimika</p>
        </div>
        <div class="section-news-body">
            <div class="row slides">
                @foreach ($items as $item)
                    <div class="col" style="margin:5px">
                        <img src="{{ asset('fe') }}/img/post/{{ $item->thumbnail }}">
                        <div class="overlay">
                            <a href="{{ route('fe.detail_news', $item->id) }}">
                                <p class="text-top">{{ $item->name }}</p>
                            </a>
                            <p class="text-bottom">{{ $item->created_at }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
