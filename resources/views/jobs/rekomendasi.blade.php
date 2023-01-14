@extends('layouts.main')

@section('meta')
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="{{ $title }} - Area Kerja">
<meta property="og:description" content="Area kerja platform untuk tempat mencari kerja.">
<meta property="og:image" content="{{ asset('img/img-01.png') }}">
<meta name="description" content="Area kerja tempat mencari kerja">
<meta name="keywords" content="'lowongan kerja','Rekomendasi Lowongan Kerja', 'Loker Jogja'">
@endsection

@section('jobss')
<section class="relative mb-5" id="home">
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
        <form action="{{ route('search')}}">
            <div class="col-10 col-sm-8 form-wrap-main">
                <div class="col-12 search">
                    <div class="row">
                        <div class="col-12 col-sm-4 ">
                            <input type="text" class="form-control" style="margin: 10px 0;" name="search" placeholder="Cari Disini">
                        </div>
                        <div class="clearfix visible-xs"></div>
                        <div class="col-6 col-sm-4">
                            <select class="default-select3" name="location">
                                <option value="0">All Areas</option>
                                @foreach($searchLocations as $id=>$searchLocations)
                                <option value="{{ $id }}">{{ $searchLocations }}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Add clearfix for only the required viewport -->
                        <div class="col-6 col-sm-4">
                            <div>
                                <select class="default-select3" name="location">
                                    <option value="0">All Categories</option>
                                    @foreach($searchCategories as $id=>$searchCategories)
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


@section('content')
<div class="col-lg-8 post-list" id="main-content">
    <h3 class="sng-ttl9 mb-4">Rekomendasi Lowongan</h3>
    @foreach($sidbarJobs as $job)
    <a href="{{ route('riwayat', $job->slug) }}">
        <div data-aos="fade-up" class="single-post align-items-center d-flex" style="width: 100%">
            <div class="row" style="margin: auto;margin-right:20px">
                @if($job->company->gambar)
                <img class="thumb2" src="{{ url('img/companylogo') }}/{{ $job->company->gambar }}">
                @endif
            </div>

            <div class="details " style="width: 100%; margin-top: 14px; overflow: unset; white-space: nowrap;">
                <div class="title d-flex flex-row justify-content-between">
                    <div class="titles">
                        <h3 class="sng-ttl" style="color: #7e7e7e">Dibutuhkan</h3>
                        <h3 class="sng-ttl2">{{ $job->title }}</h3>
                        <div class="row ttl3" style=" overflow: unset; white-space: nowrap;">
                            <div class="col-auto">
                                <h5 class="sng-dtl">
                                    <span class="fa fa-building-o" aria-hidden="true"></span>
                                    {{ $job->company->name }}
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

                <hr class="d-flex flex-row gg" style="width: 100%; margin-left: -0.5%" />
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
                            {{ $job->address }}
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </a>
    @endforeach
</div>
@endsection
