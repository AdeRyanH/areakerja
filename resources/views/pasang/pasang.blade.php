@extends('layouts.pasang')

@section('meta')
    <meta name="description" content="Form Pasang Lowongan Paket {{ $jenis }} di Areakerja.com" />
    <meta name="keywords" content="Pasang Lowongan" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $title }} - Area Kerja">
    <meta property="og:description" content="Form Pasang Lowongan Paket {{ $jenis }} di Areakerja.com">
    <meta property="og:image" content="{{ asset('img/img-01.png') }}">
@endsection

@section('home')
    <section class="relative" id="home" style="margin-bottom: 50px">
        <div class="banner-area2 ">
            <div class="row align-items-center justify-content-center" style="margin-right: 15px; margin-left: 15px">
                <div class="banner-content col-lg-12">
                    <div class="overlay overlay-bg container">
                        <h1 style="color: #fe7b54; margin-bottom:5px; text-shadow: 2px 2px 3px #353535b0;">
                            Form Pasang Lowongan
                        </h1>
                        <h6 style="color: #fe7b54; text-shadow: 1px 1px 2px #353535b0;">
                            {{-- Pelajari Tips-Tips Kerja Yang Telah Kami Buat Untuk Anda --}}
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('content')
    <section class="relative" id="home">
        {{-- action="{{ url('formpasang') }}" --}}
        <form method="POST" enctype="multipart/form-data" action="{{ url('formpasang') }}" id="regForm" style="width: 50%;">
            @csrf
            <div class="tab" id="pasangform">
                <div class="form-group">
                    <h2 class="text-left">
                        <span> Form Order : Paket</span>
                        <span style="color: {{ $warna }}"> {{ $jenis }} </span>
                    </h2>
                    <hr>
                </div>
                <div class="form-group">
                    <h4>Nama Perusahaan
                        <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                    </h4>
                    <div>
                        <input id="namaperusahaan" name="namaperusahaan" type="text" class="form-control2 " oninput="this.className = ''" placeholder="Areakerja.com">
                    </div>
                </div>

                <div class="form-group">
                    <h4>Deskripsi Perusahaan</h4>
                    <div>
                        <textarea id="deskripsiperusahaan" name="deskripsiperusahaan" style="width: 100%" oninput="this.className = ''" type="text" class="form-control2 " value="" data-type="text" aria-required="true" placeholder="Areakerja merupakan ..."></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <h4>Alamat Perusahaan</h4>
                    <div>
                        <textarea id="alamatperusahaan" name="alamatperusahaan" style="width: 100%" oninput="this.className = ''" type="text" class="form-control2 " value="" data-type="text" aria-required="true" placeholder="Jl. X"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <h4> Logo Perusahaan </h4>
                    <input type="file" id="gambar" name="gambar">

                </div>

                <div class="row form-wrap justify-content-around" style="margin-top: 2%">
                    <div class="col-lg-3 form-cols">
                        <button type="submit" class="btn btn-area" onclick="nextPrev(1)">
                            <span></span> Selanjutnya
                        </button>
                    </div>
                </div>
            </div>

            <div class="tab" id="pasangform1">
                <div class="form-group">
                    <h2 class="text-left">
                        <span> Form Order : Paket</span>
                        <span style="color: {{ $warna }}"> {{ $jenis }} </span>
                    </h2>
                    <hr>
                </div>
                <div class="form-group">
                    <h4>Nama Pekerjaan
                        <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                    </h4>
                    <div>
                        <input id="title" name="title" required="" type="text" class="form-control2 " value="" data-type="text" aria-required="true" placeholder="Kameramen">
                    </div>
                </div>

                <div class="form-group">
                    <h4>Status Pekerjaan <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span> </h4>
                    <div>
                        <select id="job_nature" name="job_nature" class="form-control2" required>
                            <option value="Full Time">Full Time</option>
                            <option value="Part Time">Part Time</option>
                            <option value="Freelance">Freelance</option>
                        </select>
                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                    </div>
                </div>

                <div class="form-group">
                    <h4>Kisaran Gaji
                        <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                    </h4>
                    <div>
                        <input id="salary" name="salary" required="" type="text" class="form-control2 " value="" data-type="text" aria-required="true" placeholder="1,2 Jt - 2 Jt">
                    </div>
                </div>

                <div class="form-group">
                    <h4>Lokasi Pekerjaan</h4>
                    <div>
                        <textarea id="alamat_kantor" name="alamat_kantor" required="" type="text" class="form-control2 " value="" data-type="text" aria-required="true" placeholder="Jl. A, Kota B"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <h4>Deskripsi Pekerjaan</h4>
                    <div>
                        <textarea id="short_description" name="short_description" required="" type="text" class="form-control2 " value="" data-type="text" aria-required="true" placeholder="1. Lorem Ipsum
                        2. Lorem Ipsum"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <h4>Syarat Pekerjaan</h4>
                    <div>
                        <textarea id="full_description" name="full_description" required="" type="text" class="form-control2 " value="" data-type="text" aria-required="true" placeholder="1. Lorem Ipsum
    2. Lorem Ipsum"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <h4>Minimal Pendidikan</h4>
                    <div>
                        <textarea id="min_pendidikan" name="min_pendidikan" required="" type="text" class="form-control2 " value="" data-type="text" aria-required="true" placeholder="SMA/SMK"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <h4>Gender <span aria-hidden="true" role="presentation" style="color:#ee0000;"></span> </h4>
                    <div>
                        <select id="gender" name="gender" class="form-control2" required>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                            <option value="Pria/Wanita">Pria/Wanita</option>
                        </select>
                        <div class="invalid-feedback">Example invalid custom select feedback</div>
                    </div>
                </div>

                <div class="form-group">
                    <h4>Minimal/Maximal Umur
                        <span aria-hidden="true" role="presentation" style="color:#ee0000;"></span>
                    </h4>
                    <div>
                        <input id="min_umur" name="min_umur" required="" type="text" class="form-control2 " value="" data-type="text" aria-required="true" placeholder="min: 20 Tahun">
                    </div>
                </div>

                <div class="form-group">
                    <h4>Batas Lamaran</h4>
                    <div>
                        <input id="bataslamaran" name="bataslamaran" required="" type="date" class="form-control2  " data-date-format="dd-mm-yyyy" value="" data-type="date" min="{{ now()->toDateString('Y-m-d') }}" aria-required="true">
                    </div>
                </div>

                <div class="row form-wrap justify-content-around" style="margin-top: 2%">
                    <div class="col-lg-9 form-cols">
                        <button type="submit" class="btn btn-area" onclick="nextPrev(-1)">
                            <span>Sebelumnya</span>
                        </button>

                        <button type="submit" class="btn btn-area" onclick="nextPrev(1)">
                            <span>Selanjutnya</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="tab" id="pasangform2">
                <div class="form-group">
                    <h2 class="text-left">
                        <span> Form Order : Paket</span>
                        <span style="color: {{ $warna }}"> {{ $jenis }} </span>
                    </h2>
                    <hr>
                </div>
                <div class="form-group">
                    <h2> Bagaimana Cara Mengirimkan Melamar? <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                    </h2>
                </div>
                <div class="form-group">
                    <div class="form-check form-check-inline">
                        <label for="defaultCheck1">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            Email</label>
                        <label for="hp">
                            <input class="form-check-input" type="checkbox" value="" id="hp" onclick="myFunction()">
                            No. Telp/Whatsapp</label>
                        <label for="defaultCheck3">
                            <input class="form-check-input" type="checkbox" value="" id="web" onclick="myFunction()">
                            Formulir Web
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <h4>Email
                        <span aria-hidden="true" role="presentation" style="color:#ee0000;">*</span>
                    </h4>
                    <div>
                        <input id="email" name="email" required type="text" class="form-control2 " value="" data-type="text" aria-required="true">
                        <label> Email wajib diisi untuk konfirmasi pembayaran, hanya ditampilkan publik jika merupakan cara
                            untuk mengirimkan lamaran
                        </label>
                    </div>
                </div>

                <div class="form-group" id="hpform" style="display:none">
                    <h4>No. Telp/Whatsapp</h4>
                    <div>
                        <input id="notelp" name="notelp" type="text" class="form-control2 " value="" data-type="text">
                    </div>
                </div>

                <div class="form-group" id="webform" style="display:none">
                    <h4>Formulir Web</h4>
                    <div>
                        <input id="web" name="web" type="text" class="form-control2 " value="" data-type="text" placeholder="Contoh: https://docs.google.com/forms/d/xxx">
                    </div>
                </div>

                <div class="form-group" id="paketform" style="display:none">
                    <h4>Formulir Web</h4>
                    <div>
                        <input id="paket" name="paket" type="text" class="form-control2 " value="{{ $jenis }}" data-type="text" placeholder="Contoh: https://docs.google.com/forms/d/xxx">
                    </div>
                </div>
                <div class="row justify-content-center" style="margin-top: 2%">
                    <div class="col-6 col-sm-3 ">
                        <button type="submit" class="btn btn-area" onclick="nextPrev(-1)">
                            <span>Sebelumnya</span>
                        </button>
                    </div>
                    <div class="col-6 col-sm-3">
                        <button type="submit" class="btn btn-area">
                            <span>Selanjutnya</span>
                        </button>
                    </div>
                </div>
            </div>
            </div>
            </div>

            <!-- Circles which indicates the steps of the form: -->
            {{-- <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    </div> --}}

        </form>

        {{-- </div> --}}
    </section>
@endsection
