@extends('layouts.pasang')

@section('meta')
<meta name="description" content="Platform lowongan kerja no. 1 untuk mendapatkan talenta terbaik bagi perusahaan anda" />
<meta name="keywords" content="Pasang Lowongan di Areakerja.com" />
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="{{ $title }} - Area Kerja">
<meta property="og:description" content="Platform lowongan kerja no. 1 untuk mendapatkan talenta terbaik bagi perusahaan anda">
<meta property="og:image" content="{{ asset('img/img-01.png') }}">

<link rel="stylesheet" href="https://kit.fontawesome.com/68eba8d306.css" crossorigin="anonymous">
@endsection

@section('home')
<section class="relative">
    <img src="{{ url('img/chat_me.png') }}" onclick="location.href='https://wa.me/6287719999132'" id="myBtn2" title="Go to top" class="myBtn2">
    <div class="banner-area3">
        <div class="row align-items-center justify-content-center" style="margin-right: 15px; margin-left: 15px">
            <div class="banner-content col-lg-12">
                <div class="overlay overlay-bg container">
                    <h5 class="mt-3 text-right" style="color: #00000062; ">
                        Areakerja.com >
                        <a style="color: #00000062; " href="{{ route('artikel') }}">Pasang Lowongan</a>
                    </h5>
                    <h2 class="mt-3 mb-2 pasang" style="color: #fe7b54;  font-weight: 400; ">
                        Pasang <strong>Lowongan</strong> di <strong>Areakerja.com</strong>
                    </h2>
                    <h4 class="pasang" style="color: #fe7b54;line-height: 2!important;font-weight: 500 ">
                        Platform lowongan kerja no. 1 <br />untuk mendapatkan talenta terbaik bagi
                        perusahaan anda<i class="fa-brands fa-whatsapp"></i>
                    </h4>


                </div>

            </div>

        </div>
    </div>


</section>
@endsection

@section('content')

<section class="relative" id="home">
    <div class='slider-nav'>
        <div class="sl 1 active"><img alt="" class="img-social" src="img/img-01.png" style="width: 30px" /></div>
        <div class="sl 2"><img alt="" class="img-social" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/google.png" /></div>
        <div class="sl 3"><img alt="" class="img-social" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/instagram.png" /></div>
        <div class="sl 4"><img alt="" class="img-social" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/facebook.png" /></div>
        <div class="sl 5"><img alt="" class="img-social" src="https://www.freeiconspng.com/uploads/twitter-icon-download-18.png" /></div>
        <div class="sl 6"><img alt="" class="img-social" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/linkedin.png" /></div>
        <div class="sl 7"><img alt="" class="img-social" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/telegram.png" /></div>
    </div>

    <div class="col-12 col-sm-10 col-md-8 mx-auto">
        <div class='slider'>
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-4 col-sm-3 align-self-center">
                        <img class="mx-auto img-r" src="img/img-01.png" alt="" style="width: 120px">
                    </div>
                    <div class="col-8 col-sm-9 no-padding my-3 pr-1">
                        <h3 class="mb-2 paket" style="font-weight: 400">Website Area Kerja</h3>
                        <h5 class="paket2" style="line-height: 1.6!important;font-weight: normal;">Ribuan
                            pencari kerja
                            mengunjungi
                            <a href="{{ route('home') }}">website</a>
                            & aplikasi kami setiap hari untuk melihat lowongan terbaru
                        </h5>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-4 col-sm-3 pr-0">
                        <img class="mx-auto img-r " src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/google.png" alt="">
                    </div>
                    <div class="col-8 col-sm-9 no-padding my-3">
                        <div class="container">
                            <h3 class="mb-2 paket">Google Jobs & Bisnis</h3>
                            <h5 class="paket2 " style="line-height: 1.6!important;font-weight: normal;">Listing
                                di
                                Google Jobs & Bisnis <a>(klik untuk contoh)</a> membuat lowongan anda semakin banyak
                                dilihat dan lebih efektif</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-4 col-sm-3 pr-0">
                        <img class="mx-auto img-r" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/instagram.png" alt="">
                    </div>
                    <div class="col-8 col-sm-9 no-padding my-3">
                        <div class="container">
                            <h3 class="mb-2 paket">Instagram</h3>
                            <h5 class="paket2 " style="line-height: 1.6!important;font-weight: normal;">Kami
                                mempunyai
                                ratusan ribu pengikut di akun instagram kami <a href="#">@instagrammm</a> yang terus
                                tumbuh, sehingga efektif</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-4 col-sm-3 pr-0">
                        <img class="mx-auto img-r" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/facebook.png" alt="">
                    </div>
                    <div class="col-8 col-sm-9 no-padding my-3">
                        <div class="container">
                            <h3 class="mb-2 paket">Facebook</h3>
                            <h5 class="paket2 " style="line-height: 1.6!important;font-weight: normal;">Kami juga
                                mempunyai ribuan pengikut setia di FP Facebook kami <a href="#">@facebookkkk</a>yang
                                terus mengabarkan loker terbaru</h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-4 col-sm-3 pr-0">
                        <img class="mx-auto img-r" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/twitter.png" alt="">
                    </div>
                    <div class="col-8 col-sm-9 no-padding my-3">
                        <div class="container">
                            <h3 class="mb-2 paket">Twitter</h3>
                            <h5 class="paket2 " style="line-height: 1.6!important;font-weight: normal;">Melalui
                                Twitter
                                <a href="#">@twitteerrr</a> kami siap mengabarkan loker anda ke ribuan pengikut dan
                                jaringan luas Twitter
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-4 col-sm-3 pr-0">
                        <img class="mx-auto img-r" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/linkedin.png" alt="">
                    </div>
                    <div class="col-8 col-sm-9 no-padding my-3">
                        <div class="container">
                            <h3 class="mb-2 paket">Linkedin</h3>
                            <h5 class="paket2 " style="line-height: 1.6!important;font-weight: normal;">Linkedin
                                <a href="#">@linkedinnn</a> juga menjadi sarana tepat menjaring para pencari kerja
                                profesional di Yogyakarta
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row align-items-center ">
                    <div class="col-4 col-sm-3 pr-0">
                        <img class="mx-auto img-r" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/telegram.png" alt="">
                    </div>
                    <div class="col-8 col-sm-9 no-padding my-3">
                        <div class="container">
                            <h3 class="mb-2 paket">Telegram</h3>
                            <h5 class="paket2 " style="line-height: 1.6!important;font-weight: normal;">Dapatkan
                                kandidat terbaik melalui official Telegram channel <a href="#">@telegrammm</a> yang
                                telah diikuti ribuan member</h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row mb-3 justify-content-around text-center mt-5">
        
    @foreach ($paket2 as $pak)
    <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-4 ">
        <a href="" data-bs-toggle="modal" data-bs-target="#pop{{ $pak->id }}">
            <div class="card mb-4 form-wrap-main2" style="border-radius: 25px; border:5px solid {{ $pak->warna }} ">
                <div class="card-header pt-3 pb-4" style="border-radius:  25px 25px 200px 200px/25px 25px 45px 45px; height: auto;background-color: {{ $pak->warna }}">
                    <h1 class="my-0 fw-normal mb-1 text-white text-bold">{{ $pak->nama }}</h1>
                    <h4 class="my-0 fw-normal text-white">{{ $pak->deskripsi_singkat }}</h4>
                </div>
                <div class="card-body ">
                    <h4 style="font-weight: normal;display: block; line-height: 1.6 !important; ">
                        {!! $pak->deskripsi_full !!}</h4>
                    <div class="col-11 col-sm-10 mx-auto no-padding">
                        <ul class="text-left mb-4">
                            @foreach ($pak->list as $fitur)
                            <h5 class="mb-3" style="font-weight: normal;">{!! $fitur !!}
                            </h5>
                            @endforeach
                        </ul>
                    </div>
                    <hr />
                </div>
                <div class="card-footer pt-4 pb-3" style="border-radius:  200px 200px 25px 25px/45px 45px 25px 25px; height: auto;background-color: {{ $pak->warna }}">
                    <h3 class="my-0 fw-normal mb-1 text-white">Rp
                        {{ number_format($pak->harga, 0, '.', '.') }}
                    </h3>
                    <p class="my-0 fw-normal text-white">Gabung Mitra Sekarang</h6>
                </div>
            </div>
        </a>
    </div>

    <!-- PopUp -->
    <div class="modal fade" id="pop{{ $pak->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: {{ $pak->warna }}">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: white">{{ $pak->nama }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="" style="margin-bottom: 30px"></div>
                    <div class="card" style="border: none;">
                        <a href="https://wa.me/{{ $contact->contact }}?text=Halo%20Areakerja.com,%20Saya%20ingin%20pasang%20lowongan%20dengan%20paket%20{{$pak->nama}}" target="_blank" rel="nofollow" data-wpel-link="external">
                            <div class="card-body">
                                <img class="img-fluid" src="{{asset('img/icons/whatsapp.png')}}">
                                <h4 class="mb-2">Via Whatsapp</h4>
                                <p style="color: black; font-size: 16px; font-weight: 400;">Tim kami akan memberikan bantuan pemasangan melalui aplikasi Whatsapp</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    @foreach ($paket as $pak)
    <div class="col-12 col-sm-6 col-md-6 col-lg-4 px-4 ">
        <a href="" data-bs-toggle="modal" data-bs-target="#pop{{ $pak->id }}">
            <div class="card mb-4 form-wrap-main" style="border-radius: 25px;">
                <div class="card-header pt-3 pb-4" style="border-radius:  25px 25px 200px 200px/25px 25px 45px 45px; height: auto;background-color: {{ $pak->warna }}">
                    <h1 class="my-0 fw-normal mb-1 text-white text-bold">{{ $pak->nama }}</h1>
                    <h4 class="my-0 fw-normal text-white">{{ $pak->deskripsi_singkat }}</h4>
                </div>
                <div class="card-body ">
                    <h4 style="font-weight: normal;display: block; line-height: 1.6 !important; ">
                        {!! $pak->deskripsi_full !!}</h4>
                    <div class="col-11 col-sm-10 mx-auto no-padding">
                        <ul class="text-left mb-4">
                            @foreach ($pak->list as $fitur)
                            <h5 class="mb-3" style="font-weight: normal;">{!! $fitur !!}
                            </h5>
                            @endforeach
                        </ul>
                    </div>
                    <hr />
                </div>
                <div class="card-footer pt-4 pb-3" style="border-radius:  200px 200px 25px 25px/45px 45px 25px 25px; height: auto;background-color: {{ $pak->warna }}">

                    <h3 class="my-0 fw-normal mb-1 text-white">Rp
                        {{ number_format($pak->harga, 0, '.', '.') }}
                    </h3>
                    <p class="my-0 fw-normal text-white">Pasang Lowongan Sekarang</h6>
                </div>
            </div>
        </a>
    </div>

    <!-- PopUp -->
    <div class="modal fade" id="pop{{ $pak->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: {{ $pak->warna }}">
                    <h1 class="modal-title fs-5" id="exampleModalLabel" style="color : white">{{ $pak->nama }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="" style="margin-bottom: 30px"></div>
                    <div class="card" style="border: none;">
                        <a href="https://wa.me/{{ $contact->contact }}?text=Halo%20Areakerja.com,%20Saya%20ingin%20pasang%20lowongan%20dengan%20paket%20{{$pak->nama}}" target="_blank" rel="nofollow" data-wpel-link="external">
                            <div class="card-body">
                                <img class="img-fluid" src="{{asset('img/icons/whatsapp.png')}}">
                                <h4 class="mb-2">Via Whatsapp</h4>
                                <p style="color: black; font-size: 16px; font-weight: 400;">Tim kami akan memberikan bantuan pemasangan melalui aplikasi Whatsapp</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</section>
@endsection
@section('awanatas')
<div class="awan">
    <div class="awandalam"></div>
</div>
@endsection
@section('slick')
<div class="container px-0">
    <h3 style="font-weight: normal" class=" text-center mb-3"><strong>Cara</strong> Memasang <strong>Lowongan</strong>
    </h3>
    <div class="col-12 col-sm-11 no-gutters no-padding mt-4 mx-auto">
        <div class="for_slick_slider2 multiple-items2 mx-auto">
            <div class="items card py-3 form-wrap-main" style="background: #ffffff; border-radius: 10px; box-shadow: 2px 2px 2px 2px rgba(0.15, 0.15, 0.15, 0.15);">
                <div class="header text-left">
                    <img src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/cara-1.png" style="margin-top: -37px; margin-bottom:20px">
                    <img class="mx-auto mb-4" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/cara-gambar-1.png" style="width: 100px; height:80px; margin-top: -10px">
                </div>
                <h5 class="sng-dtl" style="font-weight: normal;line-height: 1.65!important">Pilih paket
                    pemasangan
                    lowongan sesuai yang anda inginkan</h5>
            </div>
            <div class="items card py-3 form-wrap-main" style="background: #ffffff; border-radius: 10px; box-shadow: 2px 2px 2px 2px rgba(0.15, 0.15, 0.15, 0.15);">
                <div class="header text-left">
                    <img src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/cara-2.png" style="margin-top: -37px;margin-bottom:20px">
                    <img class="mx-auto mb-4" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/cara-gambar-2.png" style="width: 100px; height:80px; margin-top: -10px">
                </div>
                <h5 class="sng-dtl" style="font-weight: normal;line-height: 1.65!important">Kirim materi
                    lowongan via
                    formulir website atau whatsapp kami</h5>
            </div>
            <div class="items card py-3 form-wrap-main" style="background: #ffffff; border-radius: 10px; box-shadow: 2px 2px 2px 2px rgba(0.15, 0.15, 0.15, 0.15);">
                <div class="header text-left">
                    <img src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/cara-3.png" style="margin-top: -37px;margin-bottom:20px">
                    <img class="mx-auto mb-4" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/cara-gambar-3.png" style="width: 100px; height:80px; margin-top: -10px">
                </div>
                <h5 class="sng-dtl" style="font-weight: normal;line-height: 1.65!important">Setelah materi
                    dikirim, anda
                    akan diberikan intruksi pembayaran </h5>
            </div>
            <div class="items card py-3 form-wrap-main" style="background: #ffffff; border-radius: 10px; box-shadow: 2px 2px 2px 2px rgba(0.15, 0.15, 0.15, 0.15);">
                <div class="header text-left">
                    <img src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/cara-4.png" style="margin-top: -37px;margin-bottom:20px ">
                    <img class="mx-auto mb-4" src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1/img/pasang/cara-gambar-4.png" style="width: 100px; height:80px;margin-top: -10px ">
                </div>
                <h5 class="sng-dtl" style="font-weight: normal;line-height: 1.65!important">Apabila sudah
                    membayar ,
                    lowongan akan dipublikasikan</h5>
            </div>


        </div>
    </div>

</div>
@endsection
@section('awanbawah')
<div class="awan2">
    <div class="awandalam2"></div>
</div>
@endsection
@section('slick2')
<div class="container px-0 mb-5">
    <h3 style="font-weight: normal" class=" text-center mb-3"><strong>Kelebihan</strong> Areakerja.com</h3>
    <div class="col-12 col-sm-11 no-gutters no-padding mt-4 mx-auto ">
        <div class="for_slick_slider3 multiple-items3 mx-auto">
            <div class="items card py-2 px-3 form-wrap-main ">
                <div class="kelebihan">
                    <div style="float:left;width:auto;  margin:-35px 10px 0px 0;">
                        <img src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1-m/img/pasang/kelebihan-1-2.png">
                    </div>
                    <div style="float:none; text-align:left;">
                        <h5 style="font-weight: normal;line-height: 1.65!important">Website dan aplikasi Areakerja
                            dikunjungi ribuan pencari kerja setiap harinya dengan posisi tinggi untuk kata kunci lokal
                            di mesin pencari seperti Google</h5>
                    </div>
                </div>

            </div>
            <div class="items card py-2 px-3 form-wrap-main kelebihan">
                <div class="kelebihan">
                    <div style="float:left;width:auto;  margin:-35px 10px 0px 0">
                        <img src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1-m/img/pasang/kelebihan-2-2.png">
                    </div>
                    <div style="float:none; text-align:left;">
                        <h5 style="font-weight: normal;line-height: 1.65!important">Akun media sosial kami diikuti
                            ratusan ribu pencari kerja, serta memiliki jaringan media sosial terlengkap</h5>
                    </div>
                </div>
            </div>
            <div class="items card pt-2  px-3 form-wrap-main kelebihan">
                <div class="kelebihan">
                    <div style="float:left;width:auto;  margin:-35px 10px 0px 0">
                        <img src="https://www.lokerjogja.id/wp-content/themes/lokerjogjav1-m/img/pasang/kelebihan-3-2.png">
                    </div>
                    <div style="float:none; text-align:left;">
                        <h5 style="font-weight: normal;line-height: 1.65!important">Harga murah dengan fitur maksimal,
                            integrasi Google Jobs, free desain poster standar, layanan bantuan perusahaan yang ramah dan
                            suportif</h5>
                    </div>

                </div>


            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/68eba8d306.js" crossorigin="anonymous"></script>
    @endsection