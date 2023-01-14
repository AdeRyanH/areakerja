@extends('layouts.mitra.app')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        {{-- <form action="{{ route("admin.jobs.store") }}" method="POST" enctype="multipart/form-data" id="form-name"> --}}
                        <form action="{{ route('mitra.lowongan.store') }}" method="POST" enctype="multipart/form-data" id="form-name">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h4>Input Text</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row container">
                                        <div class="col-12 col-sm-6 form-group">
                                            <label>Nama Posisi</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-user"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" id="posisi" name="posisi">
                                            </div>
                                        </div>



                                        <div class="col-12 col-sm-6 form-group">
                                            <label>Status Kerja</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-hourglass-half"></i>
                                                    </div>
                                                </div>

                                                <select id="status_pekerjaan" name="status_pekerjaan" class="form-control">
                                                    <option value="Full Time">Full Time</option>
                                                    <option value="Part Time">Part Time</option>
                                                    <option value="Freelance">Freelance</option>
                                                </select>

                                            </div>

                                        </div>

                                    </div>
                                    <div class="row container">
                                        <div class="col-12 form-group">
                                            <label>Deskripsi Pekerjaan</label>
                                            <textarea width="100%" type="text" class="form-control3" id="deskripsi_pekerjaan" name="deskripsi_pekerjaan"></textarea>
                                        </div>

                                    </div>
                                    <div class="row container">
                                        <div class="col-12  form-group">
                                            <label>Syarat Pekerjaan</label>
                                            <textarea width="100%" type="text" class="form-control3" id="syarat_pekerjaan" name="syarat_pekerjaan"></textarea>
                                        </div>
                                    </div>
                                    <div class="row container">
                                        <div class="col-12 col-sm-6 form-group">
                                            <label>Alamat Kantor</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-map-marker-alt"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" id="alamat_kantor" name="alamat_kantor">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 form-group">
                                            <label>Minimal Pendidikan</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-graduation-cap"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" id="min_pendidikan" name="min_pendidikan">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row container">
                                        <div class="col-12 col-sm-6 form-group">
                                            <label>Jenis Kelamin</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-venus-mars"></i>
                                                    </div>
                                                </div>
                                                <select id="gender" name="gender" class="form-control">
                                                    <option value="laki/perempuan">Laki-Laki/Perempuan</option>
                                                    <option value="laki">Laki-Laki</option>
                                                    <option value="perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 form-group">
                                            <label>Umur</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-universal-access"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" id="min_umur" name="min_umur">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row container">
                                        <div class="col-12 col-sm-6 form-group">
                                            <label>Batas Pengiriman Lamaran</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-calendar-alt"></i>
                                                    </div>
                                                </div>
                                                <input type="date" id="bataslamaran" name="bataslamaran" class="form-control" data-date-format="dd-mm-yyyy" value="" data-type="date" min="{{ now()->toDateString('Y-m-d') }}">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 form-group">
                                            <label>Gaji</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-money-bill"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" id="gaji"
                                                    name="gaji">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row container">
                                        <div class="col-12 form-group">
                                            <label>Email Pengiriman Lamaran</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-envelope"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" id="email"
                                                    name="email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
