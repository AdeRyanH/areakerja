@extends('layouts.main')
@section('meta')
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title }} - Area Kerja">
    <meta property="og:description" content="Area kerja platform untuk menyediakan informasi lowongan kerja untuk anda.">
    <meta property="og:image" content="{{ asset('img/img-01.png') }}">
    <meta name="description" content="Area kerja platform yang menyediakan informasi lowongan kerja untuk anda">
    <meta name="keywords" content="'Lowongan Kerja', 'Rekomendasi Lowongan Kerja', 'Loker Jogja'">
@endsection

@section('home')
    <section id="home" style="margin-bottom: 20px">
        <div class="banner-area">
            <div class="row align-items-center justify-content-center" style="margin-right: 15px; margin-left: 15px">
                <div class="banner-content col-lg-12">
                    <h1 style="color: #fe7b54; margin-bottom:5px; text-shadow: 2px 2px 3px #353535b0;">
                        Tempat Mencari Kerja
                    </h1>
                    <h6 style="color: #fe7b54; text-shadow: 1px 1px 2px #353535b0;">
                        Temukan loker Jogja terbaru bulan Juni 2021 dengan mudah.
                    </h6>
                </div>
            </div>
        </div>
        <div class="container text-center">
            <form action="/search" method="GET">
                <div class="col-10 col-sm-8 form-wrap-main">
                    <div class="col-12 search">
                        <div class="row">
                            <div class="col-12 col-sm-4 ">
                                <input type="text" class="form-control" style="margin: 10px 0;" name="search" placeholder="Cari Disini">
                            </div>
                            <div class="clearfix visible-xs"></div>
                            <div class="col-6 col-sm-4">
                                <select class="default-select3" name="location">
                                    <option value="">All Areas</option>
                                    @foreach ($searchLocations as $id => $searchLocations)
                                        <option value="{{ $id }}">{{ $searchLocations }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- Add clearfix for only the required viewport -->
                            <div class="col-6 col-sm-4">
                                <div>
                                    <select class="default-select3" name="categories">
                                        <option value="">All Categories</option>
                                        @foreach ($searchCategories as $id => $searchCategories)
                                            <option value="{{ $id }}">{{ $searchCategories }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 text-center ">
                                <div class="col-12 col-sm-3 form-cols" style="margin:auto; padding: 0;">
                                    <button type="submit" class="btn btn-area " style="margin: 10px 0; width: 100%;">
                                        <span class="lnr lnr-magnifier"></span> Search
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@section('slick')
    <h3 class="sng-ttl9 text-center ">Rekomendasi Lowongan</h3>
    <div class="for_slick_slider multiple-items">
        @foreach ($sidbarJobs as $job)
            <div class="items gg" style="background: #ffffff; border-radius: 10px; box-shadow: 2px 2px 2px 2px rgba(0.15, 0.15, 0.15, 0.15);">
                <a href="{{ route('riwayat', $job->slug) }}">
                    <h3 class="sng-ttl5" style="color: #7e7e7e; margin-left: 5%; margin-top: 5%;">Dibutuhkan</h3>
                    <h3 class="sng-ttl5" style="color: #2b2b2b ; margin-left: 5%; margin-right: 5%; overflow: hidden; white-space: nowrap; -webkit-mask-image: linear-gradient(to right, rgba(0,0,0,1) 75%, rgba(0,0,0,0));">
                        {{ $job->title }}
                    </h3>
                    @if ($job->company->gambar)
                        <img src="{{ url('img/companylogo') }}/{{ $job->company->gambar }}" alt="{{ $job->company->name }}" style="width: 100px; height:80px; margin-left: auto; margin-right: auto;margin-top: 10px">
                    @endif
                    <h5 class="sng-dtl" style="margin-left: 5%; margin-top: 5%; overflow: hidden; white-space: nowrap; -webkit-mask-image: linear-gradient(to right, rgba(0,0,0,1) 75%, rgba(0,0,0,0));">
                        <span class="fa fa-building-o" aria-hidden="true"></span> {{ $job->company->name }}
                    </h5>
                    <hr>
                    <h5 class="sng-dtl" style="margin-left: 5%; overflow: hidden; white-space: nowrap; -webkit-mask-image: linear-gradient(to right, rgba(0,0,0,1) 75%, rgba(0,0,0,0));">
                        <span class="fa fa-hourglass-half" aria-hidden="true"></span> {{ $job->job_nature }}
                    </h5>
                    <hr>
                    <h5 class="sng-dtl" style="margin-left: 5%;margin-bottom: 5%; overflow: hidden; white-space: nowrap; -webkit-mask-image: linear-gradient(to right, rgba(0,0,0,1) 75%, rgba(0,0,0,0));">
                        <span class="fa fa-map-marker" aria-hidden="true"></span> {{ $job->location->name }}
                    </h5>
                </a>
            </div>
        @endforeach

        {{-- <h3 style="margin-bottom: 15px; text-align: center">Lowongan wd</h3> --}}
    </div>
@endsection
@section('rekom')
    <div class="container rr2">
        <div class="justify-content-center d-flex">
            <a href="/rekomendasi" style="color: #000; font-size: 20px;margin-bottom: 25px">Rekomendasi Loker Lainnya></a>
        </div>
    </div>
@endsection
@section('content')
    <div class="col-lg-8 post-list">
        <div class="container rr">
            <div class="justify-content-center d-flex">
                <a href="/rekomendasi" style="color: #000; font-size: 14px;margin-bottom: 10px;">
                    Rekomendasi Loker Lainnya>
                </a>
            </div>
        </div>

        <h3 class="sng-ttl9" style="margin-bottom: 15px; ">Lowongan Terbaru</h3>
        @foreach ($jobs as $job)
            {{-- <a href="{{ route('jobs.show', $job->id) }}"> --}}
            <div data-aos="fade-up" class="single-post align-items-center d-flex" style="width: 100%">
                <div class="row " style="margin: auto;margin-right:20px">
                    @if ($job->company->gambar)
                        <img class="thumb2" alt="" src="{{ url('img/companylogo') }}/{{ $job->company->gambar }}">
                    @endif
                </div>

                <div class="details " style="width: 100%; margin-top: 14px; overflow: unset; white-space: nowrap;">
                    <div class="row no-gutters" style="width: 100%;margin-left: -0.5%">
                        <div class="col-6 ">
                            <h3 class="sng-ttl" style="color: #7e7e7e">Dibutuhkan</h3>
                        </div>
                        <div class="col-6 text-right">
                            <h5 class="sng-dtl">
                                <span class="fa fa-clock-o" aria-hidden="true"></span>
                                {{ $job->created_at->diffForHumans() }}
                            </h5>
                        </div>

                    </div>
                    <div class="title d-flex flex-row justify-content-between">
                        <div class="titles">
                            <h3 class="sng-ttl2">
                                <a href="{{ route('riwayat', $job->slug) }}">{{ $job->title }}</a>
                            </h3>
                            <div class="row ttl3" style=" overflow: unset; white-space: nowrap;">
                                <div class="col-auto">
                                    <h5 class="sng-dtl">
                                        <a href="{{ route('compan', $job->company->slug) }}">
                                            <span class="fa fa-building-o" aria-hidden="true"></span>
                                            {{ $job->company->name }}
                                        </a>
                                    </h5>
                                </div>
                                <div class="col-auto">
                                    <h5 class="sng-dtl">
                                        <span class="fa fa-money" aria-hidden="true"></span>
                                        {{ $job->salary }}
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="d-flex flex-row gg" style="width: 100%; margin-left: -0.5%">
                    <div class="row ttl3">
                        <div class="col-auto ">
                            <h5 class="sng-dtl">
                                <span class="fa fa-graduation-cap" aria-hidden="true"></span>
                                {{ $job->pendidikan }}
                            </h5>
                        </div>
                        <div class="col-auto ">
                            <h5 class="sng-dtl">
                                <span class="fa fa-hourglass-half" aria-hidden="true"></span>
                                {{ $job->job_nature }}
                            </h5>
                        </div>
                        <div class="col-auto">
                            <h5 class="sng-dtl">
                                <span class="fa fa-map-marker" aria-hidden="true"></span>
                                {{ $job->location->name }}
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <a class="text-uppercase loadmore-btn mx-auto d-block" href="{{ route('jobs.index') }}" style="margin: 50px 0;">Load More Job Posts</a>
    </div>
@endsection
