@extends('layouts.mitra.app')
@section('content')

    <div class="main-content">

        <div class="row">
            <div class="col-12 ">
                <div class="card author-box">
                    <div class="card-body">
                        <div class="author-box-center">
                            <img alt="image" src="{{ url('img/mitralogo') }}/{{ $mitra->logo }}"
                                class="rounded-circle author-box-picture">
                            <div class="clearfix"></div>
                            <div class="author-box-name">
                                <a><br>{{ $mitra->nama }}</a>
                            </div>
                        </div>
                        <div class="text-center">
                            <div class="author-box-description">
                                <p>
                                    {{ $mitra->deskripsi }}
                                </p>
                            </div>
                            <div class="w-100 d-sm-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Personal Details</h4>
                    </div>
                    <div class="author-box">
                    <div class="card-body">
                        <div class="author-box-center">
                            <img alt="image" src="{{ url('img/mitralogo') }}/{{ $mitra->logo }}"
                                class="rounded-circle author-box-picture">
                            <div class="clearfix"></div>
                            <div class="author-box-name">
                                <a><br>{{ $mitra->nama }}</a>
                            </div>
                        </div>
                        <div class="py-4">
                            <p class="clearfix">
                                <span class="float-left">
                                    Address
                                </span>
                                <span class="float-right text-muted">
                                    {{ $mitra->alamat }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left">
                                    Phone
                                </span>
                                <span class="float-right text-muted">
                                    {{ $mitra->no }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left">
                                    Mail
                                </span>
                                <span class="float-right text-muted">
                                    {{ $mitra->email }}
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left">
                                    Instagram
                                </span>
                                <span class="float-right text-muted">
                                    <a href="https://www.instagram.com/oxt.design/?hl=id">{{ $mitra->instagram }}</a>
                                </span>
                            </p>
                            <p class="clearfix">
                                <span class="float-left">
                                    Facebook
                                </span>
                                <span class="float-right text-muted">
                                    <a
                                        href="https://www.facebook.com/OXT-Design-105053717732529/">{{ $mitra->facebook }}</a>
                                </span>
                            </p>
                            <div class="clearfix float-right">
                                <a href="{{ route('mitra.profil.edit', $mitra->slug) }}" class="btn btn-primary">Edit Profil</a>
                            </div>
                        </div>
                    </div>
                </div>
                    {{-- <div class="card-footer">
                        <button class="btn btn-primary">Edit Details</button>
                      </div> --}}
                </div>
            </div>
        </div>

    </div>

@endsection
