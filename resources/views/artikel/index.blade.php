@extends('layouts.pasang')

@section('meta')
    <meta name="description" content="Pelajari Tips-Tips Kerja Yang Telah Kami Buat Untuk Anda">
    <meta name="keywords" content="Tips Kerja">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title }} - Area Kerja">
    <meta property="og:description" content="Pelajari Tips-Tips Kerja Yang Telah Kami Buat Untuk Anda">
    <meta property="og:image" content="{{ asset('img/img-01.png') }}">
@endsection

@section('home')
    <section class="relative" id="home" style="margin-bottom: 50px">
        <div class="banner-area2 ">
            <div class="row align-items-center justify-content-center" style="margin-right: 15px; margin-left: 15px">
                <div class="banner-content col-lg-12">
                    <div class="overlay overlay-bg container">
                        <h1 style="color: #fe7b54; margin-bottom:5px; text-shadow: 2px 2px 3px #353535b0;">
                            Tips Kerja
                        </h1>
                        <h6 style="color: #fe7b54; text-shadow: 1px 1px 2px #353535b0;">
                            Pelajari Tips-Tips Kerja Yang Telah Kami Buat Untuk Anda
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <div class="card-deck mb-4">
        @foreach ($article as $art)
            <div class="col-sm-4 my-2">
                <a href="{{ route('artikel.show', [Str::slug($art->judul)]) }}" style="color: black">
                    <div class="card post-list2 ml-auto mr-auto" style="height: 100%;">
                        @if ($art->gambar)
                            <img class="card-img-top" src="{{ url('img/artikel') }}/{{ $art->gambar }}"
                                alt="Card image cap"
                                style="width: inherit;height: 30vh;object-fit: cover;border-radius:15px">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title ">{{ $art->judul }}</h5>
                            <p class="card-text">{{ $art->ringkasan }}</p>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
</div>
    @endsection
