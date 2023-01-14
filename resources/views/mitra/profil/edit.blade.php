@extends('layouts.mitra.app')
@section('content')

    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        {{-- <form action="{{ route("admin.jobs.store") }}" method="POST" enctype="multipart/form-data" id="form-name"> --}}
                        <form action="{{ route('mitra.profil.store') }}" method="POST" enctype="multipart/form-data"
                            id="form-name">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h4>Edit Details</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row container">
                                        <div class="col-12 form-group">
                                            <label>Nama Perusahaan</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="far fa-building"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" id="nama" name="nama"
                                                value="{{ $mitra->nama }}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row container">
                                        <div class="col-12 form-group">
                                            <label>Deskripsi Perusahaan</label>
                                            <textarea width="100%" type="text" class="form-control3"
                                                id="deskripsi" name="deskripsi"
                                               >{{ $mitra->deskripsi }}</textarea>
                                        </div>

                                    </div>
                                    <div class="row container">
                                        <div class="col-12  form-group">
                                            <label>Alamat Perusahaan</label>
                                            <textarea width="100%" type="text" class="form-control3" id="alamat"
                                                name="alamat">{{ $mitra->alamat }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row container">
                                        <div class="col-12 col-sm-6 form-group">
                                            <label>Nomor Telepon</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-phone"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" id="no"
                                                    name="no" value="{{ $mitra->no }}">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 form-group">
                                            <label>Instagram</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-instagram"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" id="instagram"
                                                    name="instagram" value="{{ $mitra->instagram }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row container">
                                        <div class="col-12 col-sm-6 form-group">
                                            <label>Facebook</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fa fa-facebook"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control" id="facebook"
                                                    name="facebook" value="{{ $mitra->facebook }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <button type="submit" class="btn btn-primary">Simpan</button>
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
