@extends('user.main')
@section('meta')
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="{{ $title }} - Area Kerja">
<meta property="og:description" content="Platform lowongan kerja no. 1 untuk mendapatkan talenta terbaik bagi perusahaan anda.">
<meta property="og:image" content="{{ asset('img/img-01.png') }}">
<meta name="description" content="Untuk bertanya hal terkait, silahkan hubungi kontak perusahaan yang membuka lowongan kerja tersebut.">
<meta name="keywords" content="kontak">
@endsection
@section('home')
    <section class="relative" id="home">
        <div class="banner-area2">
            <div class="overlay overlay-bg container">
                <h4 class="gg" style="color: #0f0f0f8a; margin-top: 2.5% ">
                    Areakerja.com > Kontak Kami
                </h4>
            </div>
        </div>
    </section>
@endsection
@section('aboutus')
    <section class="relative" id="home">
        <div class="container text-center">
            <div class="col-12 col-sm-8 mb-5 ml-auto mr-auto form-wrap-main">
                <form method="POST" enctype="multipart/form-data" action="{{ url('kontakform') }}"
                    class="serach-form-area flex-wrap">
                    @csrf
                    <div class="container ">
                        <h1 class="mb-4 mr-auto ml-auto" style="color: #fe7b54; text-shadow: 2px 2px 3px #353535b0;">Kontak
                            Kami</h1>
                        <p class="mb-3" style="font-size: 12pt; font-style: bold;text-align: left; ">
                            Apabila ada pertanyaan ataupun saran untuk AreaKerja, silahkan mengisi form di bawah ini:
                        </p>
                        <p class="mb-3" style="font-size: 12pt; font-style: bold;text-align: left">
                            Catatan: Kami tidak menerima pertanyaan terkait ketersediaan lowongan dan sebagainya. Untuk
                            bertanya hal terkait, silahkan hubungi kontak perusahaan yang membuka lowongan kerja tersebut.
                        </p>
                        <hr style="margin:auto;">
                        @if (\Session::has('success'))
                            <p class="alert alert-success">
                                {!! \Session::get('success') !!}
                            </p>
                        @endif

                        @if (\Session::has('error'))
                            <p class="alert alert-danger">
                                {!! \Session::get('error') !!}
                            </p>
                        @endif

                        <div class="row mb-3 mt-3">
                            <div class="col-12 col-sm-6 text-left">
                                <h4 class="mb-2">Nama</h4>
                                <div>
                                    <input id="nama" name="nama" required="" type="text" class="form-control2 " value=""
                                        data-type="text" aria-required="true">
                                </div>
                            </div>

                            <div class="col-12 col-sm-6 mt-3 mt-sm-0 text-left">
                                <h4 class="mb-2">Email</h4>
                                <div>
                                    <input id="email" name="email" required="" type="text" class="form-control2 " value=""
                                        data-type="text" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3 mt-3">
                            <div class="col-7 col-sm-6 text-left">
                                <h4 class="mb-2">No Telepon / WA</h4>
                                <div>
                                    <input id="nomor" name="nomor" required="" type="text" class="form-control2 " value=""
                                        data-type="text" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <hr style="margin:auto;" />
                        <div class="row mb-3 mt-3">
                            <div class="col-12 text-left">
                                <h4 class="mb-2">Saran</h4>
                                <div>
                                    <textarea id="saran" name="saran" required="" type="text" class="form-control2 "
                                        value="" data-type="text" aria-required="true"></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-area text-left mb-3 mt-3">
                            <span></span> Kirim
                        </button>

                    </div>
                </form>

            </div>
        </div>
        {{-- <div class="banner-area"> --}}
        {{-- <div class="row align-items-center justify-content-center">
            <div class="banner-content col-lg-12">
                <div class="serach-form-area flex-wrap" style="width: 150%; margin-left: -25%; margin-right: auto" id="formkontak">
                    <div class="col form-wrap-main" id="contentuser">
                        <h1 style="color: #fe7b54; text-shadow: 2px 2px 3px #353535b0;">Kontak Kami</h1>
                        <p style="font-size: 11pt; font-style: bold; margin: 5%; text-align: left; line-height: 120%">
                            Apabila ada pertanyaan ataupun saran untuk AreaKerja, silahkan mengisi form di bawah ini:
                        </p>
                        <p style="font-size: 11pt; font-style: bold; margin: 5%; text-align: left; line-height: 120%">
                            Catatan: Kami tidak menerima pertanyaan terkait ketersediaan lowongan dan sebagainya. Untuk bertanya hal terkait, silahkan hubungi kontak perusahaan yang membuka lowongan kerja tersebut.
                        </p>

                        <form method="POST" enctype="multipart/form-data" action="{{ url('kontakform') }}" class="serach-form-area flex-wrap">
                            @csrf
                            <div class="form-group col-5" style="margin-left: 4%; margin-right: 4%" id="kontaknama">
                                <h4 style="margin-bottom: 2%">Nama
                                    <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                                </h4>
                                <div>
                                    <input id="nama" name="nama" required="" type="text"  class="form-control2 " value="" data-type="text" aria-required="true">
                                </div>
                            </div>
                            <div class="form-group col-5" style="margin-left: 5%" id="kontakemail">
                                <h4 style="margin-bottom: 2%">Email
                                    <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                                </h4>
                                <div >
                                    <input id="email" name="email" required="" type="text"  class="form-control2 " value="" data-type="text" aria-required="true">
                                </div>
                            </div>
                            <div class="form-group col-5" style="margin-left: 4%; margin-top: 5%" id="kontaknomor">
                                <h4 style="margin-bottom: 2%">Nomor Telepon / WA
                                    <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                                </h4>
                                <div >
                                    <input id="nomor" name="nomor" required="" type="text"  class="form-control2 " value="" data-type="text" aria-required="true">
                                </div>
                            </div>
                            <div class="form-group col-11" style="margin-left: 4%; margin-top: 5%">
                                <h4 style="margin-bottom: 2%">Pertanyaan / Saran
                                    <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                                </h4>
                                <div >
                                    <textarea id="saran" name="saran"required="" type="text"  class="form-control2 " value="" data-type="text" aria-required="true"></textarea>
                                </div>
                            </div>
                            <div class="row form-wrap justify-content-around" style="margin-top: 2%; margin-left: auto">
                                <div class="col-lg-3 form-cols">
                                    <button type="submit" class="btn btn-area">
                                        <span ></span> Kirim
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- </div> --}}
    </section>
@endsection
