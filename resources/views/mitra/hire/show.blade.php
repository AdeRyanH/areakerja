@extends('layouts.mitra.app')
@section('content')
    {{-- <div class="loader"></div> --}}
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="container d-flex justify-content-between flex-row">
                    <div class="col-8">
                        <div class="card mb-3 ">
                            <div class="img text-left"
                                style="height: 100%;background-image: url('http://i.imgur.com/9HMnxKs.png');background-repeat: no-repeat;background-size: 100% 70%; border-radius:inherit">
                                <br>
                                <img class="rounded-circle mt-5 mx-5 border border-white border-5"
                                    style="height: 180px;width: 180px;border-width: 4px!important; "
                                    src="https://asset.kompas.com/crops/DAT0bF9Dp21QqlgqXD-UcsBpxY4=/20x0:992x648/750x500/data/photo/2018/01/14/2342554562.jpg"
                                    alt="">
                            </div>
                            <div class="body">
                                <div class="container mt-3">
                                    <div class="nama container">
                                        <h3 style="color: #000">{{ $kandidat->nama }}</h3>

                                        <h5 class="font-weight-normal" style="color: #000">
                                            {{ $kandidat->mainSkill->nama }}
                                        </h5>

                                        <h6 class="font-weight-normal" style="color: #000">{{ $kandidat->domisili }}</h6>

                                        <div class="container">
                                            <div class="row justify-content-between">
                                                <div class="rating text-left " style="width:max-content; color: #000">

                                                    <input type="radio" name="rating" value="5" id="5"
                                                        disabled="disabled"><label for="5">☆</label>
                                                    <input type="radio" name="rating" value="4" id="4" checked="checked"
                                                        disabled="disabled"><label for="4">☆</label>
                                                    <input type="radio" name="rating" value="3" id="3"
                                                        disabled="disabled"><label for="3">☆</label>
                                                    <input type="radio" name="rating" value="2" id="2"
                                                        disabled="disabled"><label for="2">☆</label>
                                                    <input type="radio" name="rating" value="1" id="1"
                                                        disabled="disabled"><label for="1">☆</label>
                                                    <h6 class="font-weight-normal my-auto mr-3">Rating Areakerja : </h6>
                                                </div>
                                                <div class="row justify-content-between mb-3">
                                                    <div class="btn-light my-auto py-2 px-4 mr-3"
                                                        style="border-radius:15px; ">Pesan</div>
                                                    <div class="btn-light my-auto p-2 px-4 " style="border-radius:15px;">CV
                                                        Profile</div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card mb-3">
                            <div class="container mt-3 border-bottom">
                                <h4 style="color: #000">Biografi</h4>

                            </div>
                            <div class="isi-biografi">
                                <div class="container">
                                    <p>{{ $kandidat->biografi }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3 pb-3">
                            <div class="container mt-3 border-bottom">
                                <h4 style="color: #000">Riwayat Pendidikan</h4>
                            </div>

                            <div class="scroll ">
                                @foreach ($pendidikan as $pend)
                                    <div class="container d-flex border-bottom flex-center">
                                        <img class="border border-white border-5 my-1"
                                            style="height: 65px;width: 65px;border-width: 4px!important; "
                                            src="https://asset.kompas.com/crops/DAT0bF9Dp21QqlgqXD-UcsBpxY4=/20x0:992x648/750x500/data/photo/2018/01/14/2342554562.jpg"
                                            alt="">
                                        <div class="d-flex mx-2 flex-column">
                                            <h6 class="mt-2 my-0" style="color: #000">{{ $pend->nama_instansi }}</h6>
                                            <span class="font-weight-normal my-0"
                                                style="color: #000">{{ $pend->gelar }}</span>
                                            <span class="font-weight-normal "
                                                style="color: #000">{{ $pend->tahun }}</span>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="container mt-3 border-bottom">
                                <h4 style="color: #000">Pengalaman Kerja</h4>

                            </div>
                            <div class="isi-biografi">
                                <div class="container">
                                    <div class="scroll">

                                        @foreach ($pengalaman as $peng)
                                            <div class="d-flex border-bottom flex-center">
                                                <img class="border border-white border-5 my-1"
                                                    style="height: 65px;width: 65px;border-width: 4px!important; "
                                                    src="https://asset.kompas.com/crops/DAT0bF9Dp21QqlgqXD-UcsBpxY4=/20x0:992x648/750x500/data/photo/2018/01/14/2342554562.jpg"
                                                    alt="">
                                                <div class="d-flex mx-2 flex-column">
                                                    <h6 class="mt-2 my-0" style="color: #000">{{ $peng->nama_pengalaman }}
                                                    </h6>
                                                    <span class="font-weight-normal my-0"
                                                        style="color: #000">{{ $peng->posisi }}</span>
                                                    <span class="font-weight-normal "
                                                        style="color: #000">{{ $peng->tahun }}</span>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-4">
                        <div class="card mb-3">
                            <div class="container mt-3 border-bottom">
                                <h4 style="color: #000">Informasi Kontak</h4>

                            </div>
                            <div class="container">
                                <a href="https://www.instagram.com/areakerjacom/"><i class="fa fa-facebook py-3 mr-2"
                                        style="font-size:28px"></i></a>
                                <a href="https://www.instagram.com/areakerjacom/"><i class="fa fa-instagram py-3 mr-2"
                                        style="font-size:28px"></i></a>
                                <a href="https://www.instagram.com/areakerjacom/"><i class="fa fa-twitter py-3 mr-2"
                                        style="font-size:28px"></i></a>
                                <a href="https://www.instagram.com/areakerjacom/"><i class="fa fa-envelope py-3 mr-2"
                                        style="font-size:28px"></i></a>
                                <a href="https://www.instagram.com/areakerjacom/"><i class="fa fa-whatsapp py-3 mr-2"
                                        style="font-size:28px"></i></a>
                            </div>

                        </div>

                        <div class="card mb-3">
                            <div class="container mt-3 border-bottom">
                                <h4 style="color: #000">Skill</h4>

                            </div>
                            <div class="isi-biografi mt-2">
                                @foreach ($skill as $ski)
                                    <div class="container my-1">
                                        <h6 class="mb-1">{{ $ski->nama }}</h6>
                                        <div class="progress" data-height="25">
                                            <div class="progress-bar" role="progressbar"
                                                data-width="{{ $ski->tingkat }}%" aria-valuenow="{{ $ski->tingkat }}"
                                                aria-valuemin="0" aria-valuemax="{{ $ski->tingkat }}">
                                                {{ $ski->tingkat }}%</div>
                                        </div>
                                        <hr class="mt-2">
                                    </div>
                                @endforeach

                            </div>

                        </div>
                        <div class="card mb-3">
                            <div class="container mt-3 border-bottom">
                                <h4 style="color: #000">Sertifikasi</h4>

                            </div>
                            <div class="isi-biografi">
                                <div class="container">
                                    <div class="scroll">

                                        @foreach ($sertifikasi as $sertif)
                                            <div class="d-flex border-bottom flex-center">
                                                <img class="border border-white border-5 my-1"
                                                    style="height: 65px;width: 65px;border-width: 4px!important; "
                                                    src="https://asset.kompas.com/crops/DAT0bF9Dp21QqlgqXD-UcsBpxY4=/20x0:992x648/750x500/data/photo/2018/01/14/2342554562.jpg"
                                                    alt="">
                                                <div class="d-flex mx-2 flex-column">
                                                    <h6 class="mt-2 my-0" style="color: #000">
                                                        {{ $sertif->nama_sertifikasi }}</h6>
                                                    <span class="font-weight-normal my-0"
                                                        style="color: #000">{{ $sertif->penyelenggara }}</span>
                                                    <span class="font-weight-normal "
                                                        style="color: #000">{{ $sertif->tahun }}</span>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card mb-3">
                            <div class="container mt-3 border-bottom">
                                <h4 style="color: #000">Organisasi</h4>

                            </div>
                            <div class="isi-biografi">
                                <div class="container">
                                    <div class="scroll">

                                        @foreach ($organisasi as $org)
                                            <div class="d-flex border-bottom flex-center">
                                                <img class="border border-white border-5 my-1"
                                                    style="height: 65px;width: 65px;border-width: 4px!important; "
                                                    src="https://asset.kompas.com/crops/DAT0bF9Dp21QqlgqXD-UcsBpxY4=/20x0:992x648/750x500/data/photo/2018/01/14/2342554562.jpg"
                                                    alt="">
                                                <div class="d-flex mx-2 flex-column">
                                                    <h6 class="mt-2 my-0" style="color: #000">{{ $org->judul }}</h6>
                                                    <span class="font-weight-normal my-0"
                                                        style="color: #000">{{ $org->jabatan }}</span>
                                                    <span class="font-weight-normal "
                                                        style="color: #000">{{ $org->tahun }}</span>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-center my-4">
                            <a href="#" class="btn btn-primary"
                                style="font-size:16px">Cancel</a>
                        </div>

                    </div>
                </div>
            </div>
    </div>
    </section>
@endsection
