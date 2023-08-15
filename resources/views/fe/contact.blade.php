@extends('layouts.fe.base')
@section('title', 'Kontak Kami')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('fe') }}/css/swipe.min.css">
@endsection

@section('js')
    <script type="text/javascript" src="{{ asset('fe') }}/js/swipe.js"></script>
@endsection

@section('content')

    <!-- Section -->
    <section class="section-ticket">
        <div class="header">
            <img src="{{ asset('fe') }}/img/bg-news.jpg">
            <div class="overlay">
                <div class="desc">
                    <h3>Kontak Kami</h3>
                </div>
            </div>
        </div>
        <div class="body" style="margin-top:-44px;">
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
            <div class="panel">
                <div class="panel-header">
                    <span class="ion-ios-bookmarks"></span>&nbsp; Kontak Kami
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{ route('fe.contact_post') }}" method="POST">
                        @csrf
                        <div class="input-form">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                            <label>No Handphone</label>
                            <input type="number" name="phone" class="form-control" placeholder="No Handphone" required>
                            <label>Pesan</label>
                            {{-- <input type="text" class="form-control" placeholder="Pesan"> --}}
                            <textarea class="form-control" name="body" rows="5" placeholder="Silahkan Isi Pesan Anda" required></textarea>
                            <button type="submit" class="btn btn-ticket btn-orange btn-contact"><span class="ion-paper-airplane"></span>&nbsp; Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
