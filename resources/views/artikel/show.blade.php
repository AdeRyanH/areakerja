@extends('layouts.pasang')

@section('meta')
    <meta name="description" content="{{ $art->ringkasan }}" />
    <meta name="keywords" content="{{ $art->judul }}" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title }} - Area Kerja">
    <meta property="og:description"
        content="{{ $art->ringkasan }}">
    <meta property="og:image" content="{{ asset('img/img-01.png') }}">
@endsection

@section('home')
    <section class="relative" id="home">
        <div class="banner-area2">
            <div class="container">
                <div class="banner-content text-right">
                    <div class="overlay overlay-bg container">
                        <h5 class="mt-3" style="color: #00000062; ">
                            Areakerja.com >
                            <a style="color: #00000062; " href="{{ route('artikel') }}">Artikel</a>
                            > {{ $art->judul }}
                        </h5>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <div class="col-sm-8 post-list2 ml-auto mr-auto">
        <div data-aos="fade-up" class="single-post2 align-items-center border-bottom"
            style="margin-left: auto;margin-right: auto">
            <div class="col-12 border-bottom text-center">
                <h1 style="margin-bottom: 20px">{{ $art->judul }}</h1>
            </div>

            <div>

                <div class="section-row">
                    {!! $art->content !!}
                </div>
            </div>
        </div>


        <div class="footer-social2 text-center">
            <h4 class="text-uppercase mx-auto d-block text-center">Bagikan</h4>
            <ul class="col row " style="width: max-content;margin-left: auto;margin-right: auto">
                <li>
                    <a href="{{ 'http://pinterest.com/pin/create/button/?url=' . url()->current() . '&description=' . urlencode($art->judul) }}"
                        target="_blank"><i class="fa fa-pinterest" style="font-size:36px"></i></a>
                </li>
                <li>
                    <a href="{{ 'https://www.facebook.com/sharer/sharer.php?u=' . url()->current() . '&t=' . $art->judul }}"
                        target="_blank"><i class="fa fa-facebook-square" style="font-size:36px"></i></a>
                </li>
                <li>
                    <a href="{{ 'http://www.tumblr.com/share?v=3&u=' . url()->current() . '&t=' . $art->judul }}"
                        target="_blank"><i class="fa fa-tumblr" style="font-size:36px"></i></a>
                </li>
                <li>
                    <a href="{{ 'https://twitter.com/intent/tweet?url=' . url()->current() . '&text=' . $art->judul }}"
                        target="_blank"><i class="fa fa-twitter-square" style="font-size:36px"></i></a>
                </li>
                <li>
                    <a href="{{ 'https://www.linkedin.com/sharing/share-offsite/?url=' . url()->current() }}"
                        target="_blank"><i class="fa fa-linkedin-square" style="font-size:36px"></i></a>
                </li>
                <li>
                    <a href="{{ 'https://wa.me/?text=*' . $art->judul . '*%0A' . url()->current() }}" target="_blank"><i
                            class="fa fa-whatsapp" style="font-size:36px"></i></a>
                </li>
            </ul>
        </div>
    </div>
@endsection
