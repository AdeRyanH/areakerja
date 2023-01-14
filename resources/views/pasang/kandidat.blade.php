@extends('layouts.pasang3')
@section('meta')
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="{{ $title }} - Area Kerja">
<meta property="og:description" content="Platform lowongan kerja no. 1 untuk mendapatkan talenta terbaik bagi perusahaan anda.">
<meta property="og:image" content="{{ asset('img/img-01.png') }}">
<meta name="description" content="Menjadi bagian dari kandidat areakerja.com dan dapatkan pekerjaan impian anda">
<meta name="keywords" content="kandidat">
@endsection
@section('home')
    <section class="relative" id="home" style="margin-bottom: 50px">
        <div class="mb-4 rounded-3">
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-md-5 text-center text-lg-left">
                    <h1 class="display-4 fw-bold" style="font-weight: bold">Daftarkan Diri Anda</h1>
                    <h4 class="my-3" style="font-weight: 400; line-height:1.6!important">Menjadi bagian dari kandidat areakerja.com dan dapatkan pekerjaan impian anda</h4>
                    <button class="btn btn-lg mt-3" style="background:#fe7b54; color:white;" type="button" data-toggle="modal" data-target="#modalDaftar">Daftar</button>
                    <a class="btn btn-lg mt-3 ml-3" href="{{ route('kandidat.awal') }}" style="background:#fe7b54; color:white;" type="button">Login</a>
                </div>
                <div class="col-7 col-md-7 d-none d-md-block">
                    <img class="img-fluid" src="{{ asset('img/kandidat/Hiring.png') }}">
                </div>
            </div>

        </div>
        </div>
    </section>
@endsection
{{-- @section('awanatas')
    <div class="awan">
        <div class="awandalam"></div>
    </div>
@endsection --}}
@section('slick')
    <div class="container">
        <h2 style="font-weight: normal" class=" text-center mb-3"><strong>Benefit</strong> Menjadi <strong>Kandidat</strong>
        </h2>
        <div class="col-12 col-sm-11 mt-4 mx-auto ">
            <div class="row  mx-auto " >
                <div class="items col-md-3 py-3 form-wrap-main mb-3"
                    style="background: #ffffff; border-radius: 10px; box-shadow: 2px 2px 2px 2px rgba(0.15, 0.15, 0.15, 0.15);">
                    <div class="header text-center">
                        <h4 class="sng-dtl" style="line-height: 1.65!important">Prioritas calon pekerja</h4>
                        <img class="mx-auto my-2 img-fluid"
                            src="https://areakerja.com/img/aset_online/priority.png"
                            style="height: 100px; ">
                    </div>
                        <h5 class="sng-dtl" style="font-weight: normal;line-height: 1.65!important">Menjadi prioritas pilihan dari perusahaan mitra areakerja</h5>
                </div>
                <div class="items py-3 col-md-3 form-wrap-main mb-3"
                    style="background: #ffffff; border-radius: 10px; box-shadow: 2px 2px 2px 2px rgba(0.15, 0.15, 0.15, 0.15);">
                    <h4 class="sng-dtl" >Memiliki banyak mitra
                        perusahaan</h4>
                    <div class="header text-center">
                        <img class="mx-auto my-2 img-fluid"
                            src="https://areakerja.com/img/aset_online/cooperation.png"
                            style="height: 100px; ">
                    </div>
                    <h5 class="sng-dtl" style="font-weight: normal;line-height: 1.65!important">Areakerja memiliki banyak mitra perusahaan yang sedang membuka lowongan  </h5>
                </div>
                <div class="items col-md-3 py-3 form-wrap-main mb-3"
                    style="background: #ffffff; border-radius: 10px; box-shadow: 2px 2px 2px 2px rgba(0.15, 0.15, 0.15, 0.15);">
                    <h4 class="sng-dtl" >Terpercaya dan berbadan
                        hukum</h4>
                    <div class="header text-center">
                        <img class="mx-auto my-2 img-fluid"
                            src="https://areakerja.com/img/aset_online/compliant.png"
                            style="height: 100px; ">
                    </div>
                    <h5 class="sng-dtl" style="font-weight: normal;line-height: 1.65!important">Perusahaan areakerja merupakan perusahaan yang terpercaya dan berbadan hukum </h5>
                </div>


            </div>
        </div>

    </div>
@endsection
{{-- @section('awanbawah')
    <div class="awan2">
        <div class="awandalam2"></div>
    </div>
@endsection --}}
@section('slick2')

    <div class="container" style="margin-top: 55px">
        <h2 style="font-weight: normal" class=" text-center mt-4">Cara <strong>Daftar</strong></h2>
        <div class="row">
            <div class="col-md-6" style="overflow:hidden">
                <img src="https://areakerja.com/img/aset_online/forms-pana.png" alt="" class="img-fluid" style="margin-top:-0px">
            </div>
            <div class="col-md-6">
               <ul class="h-100" style="list-style:none; display:flex; flex-direction: column; justify-content: center;">
                   <li>
                       <div class="d-flex align-items-center mb-3" >
                        <h2 class="m-0 mr-2 my-auto" style="color: #fe7b54; width:45px">
                            01
                        </h2>
                        <h4 class="m-0">
                            Pilih Daftar untuk melakukan registrasi kandidat
                        </h4>
                       </div>
                   </li>
                   <li>
                        <div class="d-flex align-items-center mb-3" >
                            <h2 class="m-0 mr-2 my-auto" style="color: #fe7b54; width:45px">
                                02
                            </h2>
                            <h4 class="m-0">Lengkapi Data yang Diperlukan pada Proses Registrasi
                            </h4>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center mb-3" >
                            <h2 class="m-0 mr-2 my-auto" style="color: #fe7b54; width:45px">
                                03
                            </h2>
                            <h4 class="m-0">
                                Tunggu Pemberitahuan Setelah Melakukan Registrasi
                            </h4>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-center mb-3" >
                            <h2 class="m-0 mr-2 my-auto" style="color: #fe7b54; width:45px">
                                04
                            </h2>
                            <h4 class="m-0">
                                Anda telah menjadi kandidat Areakerja.com
                            </h4>
                        </div>
                    </li>
               </ul>
           </div>
        </div>


    </div>
    <div style="display:flex;align-items:center" class="mb-5 mt-4">
        <img style="position: absolute; top: 53%; right: 0" src="{{ asset('img/kandidat/vector 2.svg') }}" alt="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 d-flex align-items-center text-center text-lg-left" >
                    <div class="w-100">
                        <h1 class="mb-4 " style="font-weight: bold">F A Q</h1>
                        <h3 style="font-weight: 500;line-height: 2">Pertanyaan dan Jawaban tentang Areakerja.com</h3>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-end" style="height:max-content">
                    <img src="https://areakerja.com/img/aset_online/ask.png" alt="" class="img-fluid h-75 m-0">
                </div>
            </div>
            <div class="accordion">
                <div id="accordion">
                    <div class="px-md-5 mb-5">
                        <div class="row">
                            <div class="col-md-6">
                                    <div class="accordion-item">
                                        <div class="accordion-item-header box w-100 px-3 py-3 d-flex justify-content-between rounded-top">
                                            <h5>
                                                Berapa biaya yang dibutuhkan untuk mendaftar sebagai kandidat Areakerja.com?
                                            </h5>
                                        </div>
                                        <div class="accordion-item-body">
                                        <div id="panel-body-1" class="accordion-item-body-content w-100 px-3 py-3  justify-content-between rounded-bottom " data-parent="#accordion">
                                            <h6 class="mb-0">Untuk mendaftar sebagai kandidat Areakerja.com tidak membutuhkan biaya (Gratis)</h6>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div div class="accordion-item-header box w-100 px-3 py-3 d-flex justify-content-between rounded-top">
                                            <h5>
                                                Bagaimana cara mengetahui apakah calon kandidat diterima menjadi kandidat areakerja.com atau tidak?
                                            </h5>
                                        </div>
                                        <div class="accordion-item-body">
                                        <div id="panel-body-2" class="accordion-item-body-content w-100 px-3 py-3  justify-content-between rounded-bottom " data-parent="#accordion">
                                            <h6 class="mb-0">Bagi calon kandidat yang diterima menjadi kandidat Areakerja.com akan mendapat email dari Areakerja.com</h6>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <div div class="accordion-item-header box w-100 px-3 py-3 d-flex justify-content-between rounded-top">
                                            <h5>
                                                Berapa lama proses verifikasi setelah pendaftaran hingga mendapat pengumuman lolos menjadi kandidat Areakerja.com?
                                            </h5>
                                        </div>
                                        <div class="accordion-item-body">
                                        <div id="panel-body-2" class="accordion-item-body-content w-100 px-3 py-3  justify-content-between rounded-bottom " data-parent="#accordion">
                                            <h6 class="mb-0">Verifikasi oleh Areakerja.com berkisar 1-2 hari, silahkan tunggu pemberitahuan melalui email dari Areakerja.com</h6>
                                        </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-6">
                                <div class="accordion-item">
                                    <div div class="accordion-item-header box w-100 px-3 py-3 d-flex justify-content-between rounded-top">
                                        <h5>
                                            Pertanyaan
                                        </h5>
                                    </div>
                                <div class="accordion-item-body">
                                    <div id="panel-body-5" class="accordion-item-body-content w-100 px-3 py-3  justify-content-between rounded-bottom " data-parent="#accordion">
                                        <h6 class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
                                    </div>
                                </div>
                                </div>
                                <div class="accordion-item">
                                    <div div class="accordion-item-header box w-100 px-3 py-3 d-flex justify-content-between rounded-top">
                                        <h5>
                                            Pertanyaan
                                        </h5>
                                    </div>
                                    <div class="accordion-item-body">
                                        <div id="panel-body-6" class="accordion-item-body-content w-100 px-3 py-3  justify-content-between rounded-bottom " data-parent="#accordion">
                                            <h6 class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <div div class="accordion-item-header box w-100 px-3 py-3 d-flex justify-content-between rounded-top">
                                        <h5>
                                            Pertanyaan
                                        </h5>
                                    </div>
                                    <div class="accordion-item-body">
                                        <div id="panel-body-7" class="accordion-item-body-content w-100 px-3 py-3  justify-content-between rounded-bottom " data-parent="#accordion">
                                            <h6 class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h6>
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
    <div class="container px-5 text-center pb-5" style="margin-bottom: 3rem;">
        <div class="my-3">
            <h2 style="font-weight: normal" class="mb-3">Memiliki <strong>Pertanyaan </strong>Lain?</h2>
            <h3 style="font-weight: normal">Hubungi Kami</h3>
        </div>
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="box-pertanyaan d-flex px-3 py-3 mx-auto mb-3" style="border-radius:20px;box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 5px 2px;border: solid 1px #ffffff">
                    <input id="pertanyaan" type="text" style="border: none; font-family: inherit;" class="input-pertanyaan" placeholder="Tulis Pertanyaan">
                    <a id="kirim" target="_blank" class="btn px-4 d-flex align-items-center" style="border-radius:20px;background-color:#FFAD4D;color: white">
                        Kirim
                    </a>
                </div>
            </div>
        </div>

    </div>

    <script>
        document.getElementById("kirim").
        addEventListener("click", kirimpertanyaan);

        function kirimpertanyaan() {
            var pertanyaan=document.getElementById("pertanyaan").value;
            var a = document.getElementById("kirim");
            a.href = "https://mail.google.com/mail/u/0/?to=areakerja@gmail.com&su=Pertanyaan&body="+ pertanyaan+"&fs=1&tf=cm"
        }

    </script>

    <script>
        const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

        accordionItemHeaders.forEach(accordionItemHeader => {
        accordionItemHeader.addEventListener("click", event => {
            const accordionItemBody = accordionItemHeader.nextElementSibling;
            if(accordionItemHeader.classList.contains("active")){
                accordionItemHeader.classList.remove("active");
                accordionItemBody.style.maxHeight = 0;
            } else {
                const accordionItemHeaderWithActive = document.querySelectorAll(".active");
                accordionItemHeaderWithActive.forEach((accordionItemHeaderWithActive)=>{
                const accordionItemBody = accordionItemHeaderWithActive.nextElementSibling;
                    accordionItemHeaderWithActive.classList.remove("active");
                    accordionItemBody.style.maxHeight = 0;
                });
                accordionItemHeader.classList.add("active");
                accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
            }
        });
        });
    </script>
@endsection
