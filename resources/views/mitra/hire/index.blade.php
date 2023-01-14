@extends('layouts.mitra.app')
@section('content')
    {{-- <div class="loader"></div> --}}
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    {{-- <div class="col-3 pr-4">
            <div class="card">
              <div class="body">
                <div class="cari p-2 mt-2 mx-2 text-left border-bottom">
                  <h6>Cari Berdasarkan :</h6>
                  <ul class="p-0 m-0" style="list-style-type: none">
                    <li>
                      <input type="radio" class="mr-2">Pengalaman
                    </li>
                    <li>
                      <input type="radio" class="mr-2">Rating
                    </li>
                  </ul>
                </div>
                <div class="cari p-2 mt-2 mx-2 text-left border-bottom">
                  <h6>Urut Berdasarkan :</h6>
                  <ul class="p-0 m-0" style="list-style-type: none">
                    <li>
                      <input type="radio" class="mr-2">Pengalaman
                    </li>
                    <li>
                      <input type="radio" class="mr-2">Rating
                    </li>
                  </ul>
                </div>
                <div class="container text-center my-3">
                  <a href="#" class="btn btn-success">Cari</a>
                </div>
              </div>
            </div>
          </div> --}}
                    <div class="col-12">
                        <div class="card">
                            <div class="body container">
                                <div class="cari p-2 mt-2 mx-3 border-bottom">
                                    <div class="d-flex justify-content-between">
                                        <h5>Already Hired</h5>
                                    </div>
                                </div>


                                <div class="row mt-3 px-3">

                                    @foreach ($kandidat as $kan)
                                        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                                            <div class="card" style="overflow: hidden">
                                                <div class="body">
                                                    <div class="img text-center"
                                                        style="height: 80%;background-image: url('http://i.imgur.com/9HMnxKs.png');background-repeat: no-repeat;background-size: 100% 50%; ">
                                                        <img class="rounded-circle my-3" style="height: 100px;width: 100px;"
                                                            src="https://asset.kompas.com/crops/DAT0bF9Dp21QqlgqXD-UcsBpxY4=/20x0:992x648/750x500/data/photo/2018/01/14/2342554562.jpg"
                                                            alt="">
                                                    </div>
                                                    <div class="nama text-center">
                                                        <h6>
                                                            {{ $kan->kandidat->nama }}
                                                        </h6>
                                                        <span>{{ $kan->kandidat->mainSkill->nama }}</span>
                                                    </div>
                                                    <div class="nama text-center">
                                                        <h6>
                                                        </h6>
                                                        <span>6 Tahun Pengalaman</span>
                                                    </div>

                                                    <div class="container text-center my-3">
                                                        <a href="{{ route('mitra.hire.show', $kan->kandidat->slug) }}"
                                                            class="btn btn-primary">Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <div class="settingSidebar">
            <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
            </a>
            <div class="settingSidebar-body ps-container ps-theme-default">
                <div class=" fade show active">
                    <div class="setting-panel-header">Setting Panel
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Select Layout</h6>
                        <div class="selectgroup layout-color w-50">
                            <label class="selectgroup-item">
                                <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout"
                                    checked>
                                <span class="selectgroup-button">Light</span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                                <span class="selectgroup-button">Dark</span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Sidebar Color</h6>
                        <div class="selectgroup selectgroup-pills sidebar-color">
                            <label class="selectgroup-item">
                                <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                    data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                            </label>
                            <label class="selectgroup-item">
                                <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar"
                                    checked>
                                <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                    data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Color Theme</h6>
                        <div class="theme-setting-options">
                            <ul class="choose-theme list-unstyled mb-0">
                                <li title="white" class="active">
                                    <div class="white"></div>
                                </li>
                                <li title="cyan">
                                    <div class="cyan"></div>
                                </li>
                                <li title="black">
                                    <div class="black"></div>
                                </li>
                                <li title="purple">
                                    <div class="purple"></div>
                                </li>
                                <li title="orange">
                                    <div class="orange"></div>
                                </li>
                                <li title="green">
                                    <div class="green"></div>
                                </li>
                                <li title="red">
                                    <div class="red"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <div class="theme-setting-options">
                            <label class="m-b-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                    id="mini_sidebar_setting">
                                <span class="custom-switch-indicator"></span>
                                <span class="control-label p-l-10">Mini Sidebar</span>
                            </label>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <div class="theme-setting-options">
                            <label class="m-b-0">
                                <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                                    id="sticky_header_setting">
                                <span class="custom-switch-indicator"></span>
                                <span class="control-label p-l-10">Sticky Header</span>
                            </label>
                        </div>
                    </div>
                    <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                        <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                            <i class="fas fa-undo"></i> Restore Default
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
