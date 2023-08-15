@extends('layouts.fe.base')
@section('title', 'About')

@section('content')

    <!-- Section -->
    <section class="section-ticket">
        <div class="header">
            <img src="{{ asset('fe') }}/img/bg-news.jpg">
            <div class="overlay">
                <div class="desc">
                    <h3>Tentang Mimika</h3>
                </div>
            </div>
        </div>
        <div class="body" style="margin-top:-44px;">
            <div class="panel" id="struktural">
                <div class="panel-header">
                    <span class="ion-ios-bookmarks"></span>&nbsp; Kepala Daerah - Masa Jabatan Masa Periode 2019-2024
                </div>
                <div class="panel-body">
                    <p><b><u>Bupati</u></b> : {!! $bupati->name !!} <br> <b><u>Wakil Bupati</u></b> : {!! $wakil_bupati->name !!}</p>
                </div>
            </div>
            <div class="panel" id="visi">
                <div class="panel-header">
                    <span class="ion-ios-bookmarks"></span>&nbsp; Visi
                </div>
                <div class="panel-body">
                    <p>{!! $visi->body !!}</p>
                </div>
            </div>
            <div class="panel" id="misi">
                <div class="panel-header">
                    <span class="ion-ios-bookmarks"></span>&nbsp; Misi
                </div>
                <div class="panel-body">
                    <p>{!! $misi->body !!}</p>
                </div>
            </div>
            <div class="panel" id="opd">
                <div class="panel-header">
                    <span class="ion-ios-bookmarks"></span>&nbsp; Organisasi Perangkat Daerah (OPD) / Badan / Dinas
                </div>
                <div class="panel-body">
                    {!! $opd->name !!}
                </div>
            </div>
            <div class="panel" id="deskripsi">
                <div class="panel-header">
                    <span class="ion-ios-bookmarks"></span>&nbsp; Deskripsi
                </div>
                <div class="panel-body">
                    <p style="text-align:justify;">
                        {!! $about->body !!}
                    </p>
                </div>
            </div>
            <div class="panel" id="lokasi">
                <div class="panel-header">
                    <span class="ion-map"></span>&nbsp; Lokasi
                </div>
                <div class="panel-body">
                    <div class="col-1">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1018062.7917491948!2d135.78066189610783!3d-4.628356682439664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6823f86aa45869eb%3A0xb08e127a57ad45b!2sMimika%20Regency%2C%20Papua!5e0!3m2!1sen!2sid!4v1671743646096!5m2!1sen!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        {{-- <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15788.424139256455!2d115.283967!3d-8.391231!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x165ad32430c70f14!2sElephant+Safari+Park+Lodge+Bali!5e0!3m2!1sen!2sid!4v1524497165802"
                            width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
                    </div>
                    <div class="col-2">
                        <h4><u>Pusat Pemerintahan Kabupaten Mimika</u></h4>
                        <p>
                            Jl. Cendrawasih SP. III Kuala Kencana - Timika - Papua
                            <br>
                            Telpon : 0811 4900 700
                            <br>
                            Email : info@mimikakab.go.id
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
