@extends('layouts.mitra.app')
@section('content')
    <div class="loader"></div>
    <div class="main-content">
        <section class="section">
            <div class="row ">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="card-statistic-4">
                            <div class="align-items-center justify-content-between">
                                <div class="row ">
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                        <div class="card-content">
                                            <h5 class="font-15">Daftar Lowongan</h5>
                                            {{-- <h2 class="mb-3 font-18">258</h2> --}}
                                            <p class="mb-0"><span class="col-blue">#</span> Data</p>
                                            <p class="mb-0"><a href="#"><span class="col-green"> </span>See More
                                                    Category</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            {{-- <img src="otika/assets/img/banner/1.png" alt=""> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="card-statistic-4">
                            <div class="align-items-center justify-content-between">
                                <div class="row ">
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                        <div class="card-content">
                                            <h5 class="font-15">Daftar Kandidat</h5>
                                            {{-- <h2 class="mb-3 font-18">128</h2> --}}
                                            <p class="mb-0"><span class="col-blue"></span> Data</p>
                                            <p class="mb-0"><a href="#"><span class="col-green"> </span>See More
                                                    Portofolio</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            {{-- <img src="otika/assets/img/banner/3.png" alt=""> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="card-statistic-4">
                            <div class="align-items-center justify-content-between">
                                <div class="row ">
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                        <div class="card-content">
                                            <h5 class="font-15">Product for Sale</h5>
                                            <p class="mb-0"><span class="col-blue"></span> Data</p>
                                            <p class="mb-0"><a href="#"><span class="col-green"> </span>See More Product</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            {{-- <img src="otika/assets/img/banner/4.png" alt=""> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="card-statistic-4">
                            <div class="align-items-center justify-content-between">
                                <div class="row ">
                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                        <div class="card-content">
                                            <h5 class="font-15"> Transaction</h5>
                                            {{-- <h2 class="mb-3 font-18">1,287</h2> --}}
                                            <p class="mb-0"><span class="col-blue"></span> Data</p>
                                            <p class="mb-0"><a href="#"><span class="col-green"> </span>See More
                                                    Transaction</a></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                        <div class="banner-img">
                                            {{-- <img src="otika/assets/img/banner/2.png" alt=""> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h4>Statistik Lowongan</h4>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table table-striped">
                    <thead>
                      <tr>
                        <th class="text-center">Lowongan</th>
                        <th class="text-center">Tanggal</th>
                        <th class="text-center">Dilihat</th>
                        <th class="text-center" style="width: 250px">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="text-center">Create a mobile app</td>
                        <td class="text-center">2018-01-20</td>
                        <td class="text-center">20</td>
                        <td class="text-center"><a href="#" class="btn far fa-eye"></a>
                            <a href="#" class="btn far fa-trash-alt"></a>
                            <a href="#" class="btn far fa-edit"></a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">Redesign homepage</td>
                        <td class="text-center">2017-07-14</td>
                        <td class="text-center">12</td>
                        <td class="text-center"><a href="#" class="btn far fa-eye"></a>
                            <a href="#" class="btn far fa-trash-alt"></a>
                            <a href="#" class="btn far fa-edit"></a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">Backup database</td>
                        <td class="text-center">2019-07-25</td>
                        <td class="text-center">17</td>
                        <td class="text-center"><a href="#" class="btn far fa-eye"></a>
                            <a href="#" class="btn far fa-trash-alt"></a>
                            <a href="#" class="btn far fa-edit"></a>
                        </td>
                      </tr>
                      <tr>
                        <td class="text-center">Android App</td>
                        <td class="text-center">2018-04-15</td>
                        <td class="text-center">20</td>
                        <td class="text-center"><a href="#" class="btn far fa-eye"></a>
                            <a href="#" class="btn far fa-trash-alt"></a>
                            <a href="#" class="btn far fa-edit"></a>
                        </td>
                      </tr>
                    </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                      <h4>Peminat Skill</h4>
                    </div>
                    <div class="card-body">
                      <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">
                        <li class="media">
                          <div class="media-body">
                            <div class="media-title">Front-End Developer</div>
                          </div>
                          <div class="media-progressbar">
                            <div class="progress-text">20%</div>
                            <div class="progress" data-height="6">
                              <div class="progress-bar bg-primary" data-width="30%"></div>
                            </div>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-body">
                            <div class="media-title">Back-End Developer</div>
                          </div>
                          <div class="media-progressbar">
                            <div class="progress-text">70%</div>
                            <div class="progress" data-height="6">
                              <div class="progress-bar bg-primary" data-width="67%"></div>
                            </div>
                          </div>
                        </li>
                        <li class="media">
                          <div class="media-body">
                            <div class="media-title">Android Developer</div>
                          </div>
                          <div class="media-progressbar">
                            <div class="progress-text">30%</div>
                            <div class="progress" data-height="6">
                              <div class="progress-bar bg-primary" data-width="45%"></div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12 col-sm-12">
                <div class="card mt-sm-5 mt-md-0">
                  <div class="card-header">
                    <h4>Pengalaman Kandidat</h4>
                  </div>
                  <div class="card-body">
                    <canvas id="donutChart"></canvas>
                    <ul class="p-t-30 list-unstyled">
                      <li class="padding-5"><span><i class="fa fa-circle m-r-5 col-black"></i></span>Fresh Graduate<span
                          class="float-right">30%</span></li>
                      <li class="padding-5"><span><i class="fa fa-circle m-r-5 col-green"></i></span>> 1 Tahun<span
                          class="float-right">50%</span></li>
                      <li class="padding-5"><span><i class="fa fa-circle m-r-5 col-orange"></i></span>> 3 Tahun<span
                          class="float-right">20%</span></li>
                    </ul>
                  </div>
                </div>
              </div>
          </div>


    </div>

@endsection
