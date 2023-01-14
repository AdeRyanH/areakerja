@extends('layouts.pasang3')
@section('meta')
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="{{ $title }} - Area Kerja">
<meta property="og:description" content="Platform lowongan kerja no. 1 untuk mendapatkan talenta terbaik bagi perusahaan anda.">
<meta property="og:image" content="{{ asset('img/img-01.png') }}">
<meta name="description" content="Temukan loker Jogja terbaru bulan Juni 2021 dengan mudah.">
<meta name="keywords" content="mitra">
@endsection
@section('home')
    <section id="home" >
        <div class="container py-5">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold">Rekrut Karyawan Terbaik Anda</h1>
                <h4 class="my-3" style="font-weight: 400; line-height:1.6!important">Menjadi bagian dari kami di Mitra Areakerja.com </h4>
                <button class="btn btn-lg mt-3" style="background:#fe7b54; color:white;" type="button" data-toggle="modal" data-target="#modalDaftarMitra">Daftar</button>
                <a class="btn btn-lg mt-3 ml-3" href="{{ route('mitra.home') }}" style="background:#fe7b54; color:white;" type="button">Login</a>
            </div>
            <div class="col-md-9 mx-auto">
                <img class="img-fluid" src="https://areakerja.com/img/aset_online/5222.jpg">
            </div>
        </div>
    </section>
@endsection

@section('slick2')

    <div>
        <img  style="position: absolute; top: 33%; width: 100%" src="{{ asset('img/vector4.png') }}" alt="">
        <div class="container text-center">
            <div class="row justify-content-center text-left align-items-center"  style="min-height: 100vh;flex-direction: column">
                <h1 style="font-weight: 500">
                    Kelebihan menjadi Mitra Areakerja
                </h1>
                <div class="row">
                    <div class="col-md-6" style="overflow:hidden">
                        <img src="https://areakerja.com/img/aset_online/Job hunt-pana.png" alt="" class="img-fluid" style="margin-top:-40px;margin-bottom:-40px">
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="">
                            <h2 class="m-0 mb-3" style="color: #fe7b54; ">
                                Mendapat Karyawan Profesional
                            </h2>
                            <h4 class="m-0" style="line-height:1.6!important">
                                Mitra dapat merekrut karyawan yang telah terseleksi tim Areakerja serta mendapatkan garansi apabila karyawan yang telah direkrut tidak kompeten
                            </h4>

                        </div>

                   </div>
                </div>

            </div>

        </div>

        <div>
            <div class="container " >
                <div class="row justify-content-center   align-items-center" style="min-height: 100vh">
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="">
                            <h2 class="m-0 mb-3" style="color: #fe7b54; ">
                                Menjadi Prioritas
                            </h2>
                            <h4 class="m-0" style="line-height:1.6!important">
                                Pasang Lowongan Kerja Mitra akan menjadi rekomendasi pada halaman loker sehingga pencari kerja langsung tertuju pada perusahaan tersebut
                            </h4>
                        </div>

                   </div>
                   <div class="col-md-6" style="overflow:hidden">
                    <img src="https://areakerja.com/img/aset_online/ISO Certification-pana.png" alt="" class="img-fluid">
                </div>
                </div>
            </div>

        </div>
    </div>

    <div>
        <img  style="position: absolute; top:70%; width: 100%" src="{{ asset('img/vector5.png') }}" alt="">
        <div class="container mb-3 min-vh-100">
            <div class="row justify-content-center align-items-center " style="min-height: 100vh">
                <div class="col-md-6" style="overflow:hidden">
                    <img src="https://areakerja.com/img/aset_online/Mobile Marketing-pana.png" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="">
                        <h2 class="m-0 mb-3" style="color: #fe7b54; ">
                            Publikasi
                        </h2>
                        <h4 class="m-0" style="line-height:1.6!important">
                            Mitra akan di publikasi pada semua jaringan aerakerja.com setelah menjadi mitra areakerja.com
                        </h4>
                    </div>

               </div>

            </div>


        </div>
        <div class="timeline_area mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-8 col-lg-6">
                        <!-- Section Heading-->
                        <div class="section_heading text-center">
                            <h2 style="color: #fe7b54;" class="my-3">Cara Mendaftar Mitra </h2>
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-7 mx-auto">
                        <div class="absolute-center">
                            <div class="apland-timeline-area ">
                                <div class="single-timeline-area mx-auto ">
                                    <div class="timeline-date wow fadeInLeft"  style="visibility: visible; ">
                                        <h2>
                                            01
                                        </h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-11">
                                            <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; ">
                                                <img src="https://areakerja.com/img/aset_online/startup life-pana.png" alt="" class="img-fluid w-25  mr-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="timeline-text">
                                                        <h3>Daftar</h3>
                                                        <p>Klik button daftar pada halaman pasang mitra</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Single Timeline Content-->
                                <div class="single-timeline-area">
                                    <div class="timeline-date wow fadeInLeft"  style="visibility: visible; animation-delay: ">
                                        <h2>
                                            02
                                        </h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-11">
                                            <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible;">
                                                <img src="https://areakerja.com/img/aset_online/blogging-pana.png" alt="" class="img-fluid w-25 mr-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="timeline-text">
                                                        <h3>Mengisi Form</h3>
                                                        <p>Mengisi dan melengkapi data untuk mendaftar menjadi mitra areakerja.com</p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Timeline Content-->
                                <div class="single-timeline-area">
                                    <div class="timeline-date2 wow fadeInLeft"  style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                                        <h2>
                                            03
                                        </h2>
                                    </div>
                                    <div class="row">
                                        <div class="col-11">
                                            <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">

                                                    <img src="https://areakerja.com/img/aset_online/Business deal-pana.png" alt="" class="img-fluid w-25 mr-3">
                                                <div class="d-flex align-items-center">
                                                    <div class="timeline-text">
                                                        <h3>Terdaftar Menjadi Mitra</h3>
                                                        <p>Menerima email dari admin apabila diterima menjadi mitra areakerja.com</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
