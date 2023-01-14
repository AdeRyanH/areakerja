@extends('layouts.main')

@section('meta')
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="{{ $title }} - Area Kerja">
<meta property="og:description" content="Area kerja platform untuk tempat pemberi Informasi detail tentang Lowongan Kerja.">
<meta property="og:image" content="{{ asset('img/img-01.png') }}">
<meta name="description" content="Informasi detail tentang Lowongan Kerja">
<meta name="keywords" content="{{ $job->title }}, {{ $job->company->name }}">
@endsection

@section('home')
<section class="relative mb-3 mb-md-5" id="home">
    <div class="banner-area2">
        <div class="overlay overlay-bg container">
            <h4 class="gg" style="color: #0f0f0f8a; margin-top: 2.5% ">
                Areakerja.com > {{ $job->address }} > Lowongan {{ $job->title }} di {{ $job->company->name }}
            </h4>
        </div>
    </div>
    <div class="container text-center">
        <form action="{{ route('search')}}">
            <div class="col-10 col-sm-10 col-md-8 form-wrap-main">
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
<div class="col-lg-8 post-list">
    <div class="single-post2 d-flex flex-row" style="margin-bottom: 10px">
        <div class="details" style="width: 100%">
            <div class="row no-gutters" style="width: 100%">
                <div class="col-8">
                    <a href="{{ route('compan', $job->company->id) }}">
                        <h2 class="cmp" style="font-weight: normal">{{ $job->company->name }}</h2>
                    </a>
                    <h5 style="margin-top: 8px; font-weight: normal">Membuka Lowongan</h5>

                    <h1 class="ttl" style="margin-top: 8px"> {{ $job->title }}</h1>
                </div>
                <div class="col-4 text-right" style="width: 100px;height: 100px;">
                    <a href="{{ route('compan', $job->company->slug) }}">
                        <img style="width: 25px;height: 25px;margin-bottom: 45%;margin-left: 45%" src="{{ url('img/link.png') }}" class="position-absolute">
                        <img class="gg5" src="{{ url('img/companylogo') }}/{{ $job->company->gambar }}" style="margin: auto;margin-top: 3%;margin-left: 5% ">
                    </a>
                </div>
            </div>
            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%; margin-top: 12px" />
            <h4 class="gg" style="margin-top: 8px; font-weight: normal;">{{$job->company->deskripsi}}</h4>
            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;margin-top: 16px" />
            <h3 class="head" style="margin-top: 10px">Ringkasan</h3>
            <div class=" row">
                <ul class="col-5" style="overflow: unset; white-space: nowrap;">
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-graduation-cap"></span><span style="display:inline-block; width: 15px;"></span>Pendidikan</h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-venus-mars"></span><span style="display:inline-block; width: 15px;"></span>Gender</h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-universal-access"></span><span style="display:inline-block; width: 15px;"></span>Umur</h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-user-circle-o"></span><span style="display:inline-block; width: 15px;"></span>Status Kerja</h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-money"></span><span style="display:inline-block; width: 15px;"></span>Besaran Gaji</h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-calendar"></span><span style="display:inline-block; width: 15px;"></span>Batas Lamaran</h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-map-marker"></span><span style="display:inline-block; width: 15px;"></span>Lokasi Kerja</h4>
                    </li>
                </ul>
                <ul style="overflow: unset; white-space: nowrap;">
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal;"> <span>:</span></h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"> <span>:</span></h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"> <span>:</span></h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"> <span>:</span></h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"> <span>:</span></h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"> <span>:</span></h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"> <span>:</span></h4>
                    </li>
                </ul>
                <ul class="col-6 ">
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal">{{ $job->pendidikan }}</h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal">{{ $job->gender }}</h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal">{{ $job->umur }}</h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal">{{ $job->job_nature }}</h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal">{{ $job->salary }}</h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal">{{ $job->bataslamaran }}</h4>
                    </li>
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal">
                            <p style="line-height: 150%; margin-top: -1%">{{ $job->lokasikerja }}</p>
                        </h4>
                    </li>
                </ul>
            </div>

            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;" />
            <h3 class="head" style="margin-top: 10px">Deskripsi Pekerjaan</h3>
            @foreach($job->full_description as $hehe)
            <ul style="list-style-type: disc; margin-left: 20px; font-family: 'Poppins', sans-serif; color: #222222;">
                <li>
                    <h4 class="gg" style="margin-top: 10px; font-weight: normal; margin-left: 5px; text-align: justify;">{{ $hehe }}</h4>
                </li>
            </ul>
            @endforeach

            </ul>
            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;" />
            <h3 class="head" style="margin-top: 10px">Syarat Pekerjaan</h3>
            @foreach($job->requirements as $hehe)
            <ul style="list-style-type: disc; margin-left: 20px; font-family: 'Poppins', sans-serif; color: #222222;">
                <li>
                    <h4 class="gg" style="margin-top: 10px; font-weight: normal; margin-left: 5px; text-align: justify;">{{ $hehe }}</h4>
                </li>
            </ul>
            @endforeach

            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;" />
            <h3 class="head" style="margin-top: 10px">Kirim Lamaran</h3>
            <div class="row no-gutters">
                <ul class="col-4" style="overflow: unset; white-space: nowrap;">
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-graduation-cap"></span><span style="display:inline-block; width: 15px;"></span>Email</h4>
                    </li>
                </ul>
                <ul style="overflow: unset; white-space: nowrap;" style="background-color: wheat">
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal;"> <span>:</span></h4>
                    </li>
                </ul>
                <ul class="col-auto" style="overflow: unset; white-space: nowrap;">
                    <li>
                        <h4 class="gg6" style="margin-top: 10px; font-weight: normal;" id="sample">{{ $job->email }}</h4>
                </ul>
                <ul class="col-auto " style="overflow: unset; white-space: nowrap; ">
                    <h4 class="gg8" style="margin-top: 5px; font-weight: normal">
                        <button onclick="CopyToClipboard('sample'); myFunction3()" class="fas fa-copy ui-button-icons-only buttona">
                            <div class="row justify-content-center popuptext" id="myPopup3" style="padding-right: 0px;margin-right: 0px; color: #000000; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                                Disalin
                            </div>
                        </button>
                    </h4>
                </ul>
            </div>
            <div class="row no-gutters">
                <ul class="col-4" style="overflow: unset; white-space: nowrap;">
                    <li id="telepon1">
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-phone"></span><span style="display:inline-block; width: 15px;"></span>Nomor Telepon</h4>
                    </li>
                    <li style="display: none" id="telepon2">
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-phone"></span><span style="display:inline-block; width: 15px;"></span>Telepon</h4>
                    </li>
                </ul>
                <ul style="overflow: unset; white-space: nowrap;">
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"> <span>:</span></h4>
                    </li>
                </ul>
                <ul class="col-auto" style="overflow: unset; white-space: nowrap;">

                    <li>
                        <h4 class="gg6" style="margin-top: 10px; font-weight: normal" id="sample2">{{ $job->notelp }}</h4>
                    </li>
                </ul>
                <ul class="col-auto" style="overflow: unset; white-space: nowrap;">
                    <h4 class="gg8" style="margin-top: 5px; font-weight: normal">
                        <button onclick="CopyToClipboard('sample2'); myFunction4()" class="fas fa-copy ui-button-icons-only buttonb">
                            <div class="row justify-content-center popuptext" id="myPopup4" style="padding-right: 0px;margin-right: 0px; color: #000000; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                                Disalin
                            </div>
                        </button>
                    </h4>
                </ul>

            </div>

            <div class="row no-gutters">
                <ul class="col-4" style="overflow: unset; white-space: nowrap;">
                    <li id="telepon1">
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"><span style="display:inline-block; width: 15px;" class="fa fa-globe"></span><span style="display:inline-block; width: 15px;"></span>Website</h4>
                    </li>
                </ul>
                <ul style="overflow: unset; white-space: nowrap;">
                    <li>
                        <h4 class="gg" style="margin-top: 10px; font-weight: normal"> <span>:</span></h4>
                    </li>
                </ul>
                <ul class="col-auto" style="overflow: unset; white-space: nowrap;">

                    <li>
                        <h4 class="gg6" style="margin-top: 10px; font-weight: normal" id="sample3">{{ $job->website }}</h4>
                    </li>
                </ul>
                <ul class="col-auto" style="overflow: unset; white-space: nowrap;">
                    <h4 class="gg8" style="margin-top: 5px; font-weight: normal">
                        <button onclick="CopyToClipboard('sample3'); myFunction5()" class="fas fa-copy ui-button-icons-only buttonb">
                            <div class="row justify-content-center popuptext" id="myPopup5" style="padding-right: 0px;margin-right: 0px; color: #000000; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
                                Disalin
                            </div>
                        </button>
                    </h4>
                </ul>

            </div>

            <hr class="d-flex flex-row" style="width: 100%; margin-left: 0%;" />
            <div class="row" style="margin-top: 15px">
                <div class="col-2" style="margin-right: 10%;">
                    <div class="btn popup2 form-pasang3" id="btn1" onclick="myFunction2()">
                        <h4 class="gg" style="font-weight: normal"><span class="fa fa-paper-plane-o"></span><span style="display:inline-block; width: 10px;"></span>Lamar</h4>
                        <div class="row justify-content-center popuptext" id="myPopup2" style="padding-right: 0px;margin-right: 0px">
                            <ul class="row justify-content-center">
                                <li style="margin-bottom: 5%; margin-top: 5%">
                                    <a role="button" class="btn form-pasang4" href="{{ route('login') }}">
                                        <h6 style="font-weight: normal"><span class="fa fa-folder-open-o"></span><span style="display:inline-block; width: 5px;"></span>Formulir</h6>
                                    </a>
                                </li>
                                <li style="padding-left: 10px;margin-bottom: 5%; margin-top: 5%">
                                    <a role="button" class="btn form-pasang4" href="https://wa.me/{{ $job->notelp }}?text=Halo {{ $job->company->name }}, Saya *..NAMA..* mendapatkan informasi lowongan kerja dari Areakerja.com. Saya berminat untuk melamar kerja sebagai {{ $job->title }}">
                                        <h6 style="font-weight: normal"><span class="fa fa-whatsapp"></span><span style="display:inline-block; width: 5px;"></span>Whatsapp</h6>
                                    </a>
                                </li>
                                <li style="padding-left: 10px; margin-bottom: 5%" id="liemail">
                                    <a role="button" class="btn form-pasang4" href="mailto:{{ $job->email }}?subject=Lamaran Pekerjaan di {{ $job->company->name }}">
                                        <h6 style="font-weight: normal"><span class="fa fa-envelope-o"></span><span style="display:inline-block; width: 5px;"></span>{{ $job->company->name }}</h6>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-2 gg2" style="margin-right: 12%">
                    {{-- onclick="return setColor('btn2','btnh42');" --}}

                    <a type="button" class="btn form-pasang3" href="{{ route('cache', $job->id) }}" id="btnfix1" data-toggle="0">
                        <h4 class="gg" style="font-weight: normal" id="btnfix2"><span class="fa fa-star-o"></span><span style="display:inline-block; width: 10px;"></span> Simpan </h4>
                    </a>
                </div>


                <div class="col-2">
                    <div class="btn popup form-pasang3" onclick="myFunction()" id="btn3">
                        <h4 class="gg" style="font-weight: normal"><span class="fa fa-share-alt"></span><span style="display:inline-block; width: 10px;"></span>Bagikan</h4>
                        <div class="row justify-content-center popuptext" id="myPopup" style="padding-right: 0px;margin-right: 0px">
                            <ul class="col row justify-content-center">

                                <li>
                                    <a href="https://www.facebook.com/sharer.php?u={{ route('jobs.show', $job->id) }}"><i class="fa fa-facebook-square" style="font-size:36px; color: black"></i></a>
                                </li>
                                <li style="padding-left: 10px;">
                                    <a href="https://twitter.com/intent/tweet?text=Lowongan Kerja {{ $job->title }} di {{ $job->company->name }} - Areakerja.com - {{ route('jobs.show', $job->id) }}"><i class="fa fa-twitter-square" style="font-size:36px; color: black"></i></a>
                                </li>
                                <li style="padding-left: 10px;">
                                    <a href="https://mail.google.com/mail/?view=cm&su=Lowongan Kerja {{ $job->title }} di {{ $job->company->name }} - Areakerja.com - {{ route('jobs.show', $job->id) }}"><i class="fas fa-envelope-square" style="font-size:36px; color: black"></i></a>
                                </li>
                                <li style="padding-left: 10px;">
                                    <a href="https://wa.me/?text=Lowongan Kerja {{ $job->title }} di {{ $job->company->name }} - Areakerja.com - {{ route('jobs.show', $job->id) }}"><i class="fab fa-whatsapp-square" style="font-size:36px; color: black""></i></a>
                                </li>

                            </ul>
                        </div>

                      </div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
