@extends('layouts.mitra.app')
@section('content')
    <div class="loader"></div>
    <div class="main-content">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card author-box">
                    <div class="card-body">
                        <div class="author-box-center">
                            <img alt="image" src="{{ url('img/mitralogo') }}/{{ $mitra2->logo }}"
                                class="rounded-circle author-box-picture">
                            <div class="clearfix"></div>
                            <div class="author-box-name">
                                <a><br>{{ $mitra2->nama }}</a>
                            </div>
                            <div class="author-box-job">Graphic Designer</div>
                        </div>
                        <div class="text-center">
                            <div class="author-box-description">
                                <p>
                                    {{ $mitra2->deskripsi }}
                                </p>
                            </div>
                            <div class="w-100 d-sm-none"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Personal Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="py-4">
                            <p class="clearfix">
                                <span class="float-left">
                                    Address
                                </span>
                                <span class="float-right text-muted">
                                    {{ $mitra2->alamat }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left">
                                    Since
                                </span>
                                <span class="float-right text-muted">
                                    2017
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left">
                                    Phone
                                </span>
                                <span class="float-right text-muted">
                                    {{ $mitra2->no }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left">
                                    Mail
                                </span>
                                <span class="float-right text-muted">
                                    {{ $mitra2->email }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left">
                                    Instagram
                                </span>
                                <span class="float-right text-muted">
                                    <a href="https://www.instagram.com/oxt.design/?hl=id">{{ $mitra2->instagram }}</a>
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left">
                                    Facebook
                                </span>
                                <span class="float-right text-muted">
                                    <a
                                        href="https://www.facebook.com/OXT-Design-105053717732529/">{{ $mitra2->facebook }}</a>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
