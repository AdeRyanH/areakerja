@extends('layouts.pasang')

@section('meta')
    <meta name="description" content="Platform lowongan kerja no. 1 untuk mendapatkan talenta terbaik bagi perusahaan anda" />
    <meta name="keywords" content="Pasang Lowongan Kerja" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title }} - Area Kerja">
    <meta property="og:description"
        content="Platform lowongan kerja no. 1 untuk mendapatkan talenta terbaik bagi perusahaan anda.">
    <meta property="og:image" content="{{ asset('img/img-01.png') }}">
@endsection

@section('home')
    <section class="relative" id="home" style="margin-bottom: 50px">
        <div class="banner-area2 ">
            <div class="row align-items-center justify-content-center" style="margin-right: 15px; margin-left: 15px">
                <div class="banner-content col-lg-12">
                    <div class="overlay overlay-bg container">
                        <h1 style="color: #fe7b54; margin-bottom:5px; text-shadow: 2px 2px 3px #353535b0;">
                            Pembayaran
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
    <section class="relative" id="home">
        <div class="row mb-3 justify-content-around text-center ">
            <div class="form-wrap-main">
                <h2 style="font-weight: bold">Terkirim!</h2>
                <p style="margin-top: 2vh; font-size: 14pt; font-weight: bold">{{ $nama }}</p>
                <p style="margin-top: 1vh; font-size: 14pt;">No Invoice : 2456789</p>
                <p style="margin-top: 1vh; font-size: 14pt;">Tanggal Order : 2456789</p>
                <p style="margin-top: 1vh; font-size: 14pt;">Terimakasih, materi lowongan sudah masuk dalam sistem kami.</p>
                <p style="margin-top: -1vh; font-size: 14pt;">Silahkan lakukan pembayaran beserta kode unik dibawah ini:</p>
                <div class="col-10 col-sm-4 mx-auto"
                    style="border-color: #000; border: 4px; border-style: solid; border-radius: 15px; padding: 8px">
                    <h2 style="font-size: 22pt">Rp. {{ $total }}</h2>
                </div>
                <a href={{ $url }}> link </a>
            </div>
    </section>
@endsection
