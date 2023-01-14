@hasSection('banner')
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg container">
            <h4 style="color: #000000; margin-top: 2.5% ">
                Areakerja.com > {{ $job->address }} > Lowongan {{ $job->title }} di {{ $job->company->name }}
            </h4>
        </div>
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">

                <div class="about-content col-lg-12" id="searchformbanner">
                    <div class="banner-content align-items-center col-lg-12">
                        <form action="#" class="serach-form-area flex-wrap"
                            style="width: 150%; margin-top: -10%; margin-left: auto; margin-right: auto">
                            <div class="col form-wrap-main" id="form-luar">
                                <div class="row form-wrap justify-content-center" id="form-dalam">
                                    <div class="col-lg-3 form-cols">
                                        <input type="text" class="form-control" placeholder="Cari Disini..">
                                    </div>
                                    <div class="col-lg-3 form-cols">
                                        <div class="default-select" id="default-selects">
                                            <select>
                                                <option value="0">All Areas</option>
                                                @foreach ($searchLocations as $id => $searchLocations)
                                                    <option value="{{ $id }}">{{ $searchLocations }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 form-cols">
                                        <div class="default-select" id="default-selects2">
                                            <select>
                                                <option value="0">All Categories</option>
                                                @foreach ($searchCategories as $id => $searchCategories)
                                                    <option value="{{ $id }}">{{ $searchCategories }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row form-wrap justify-content-around" style="margin-top: 2%">
                                    <div class="col-lg-3 form-cols">
                                        <button type="submit" class="btn btn-area ">
                                            <span class="lnr lnr-magnifier"></span> Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                    <h1 class="text-white">
                        @yield('banner')
                    </h1>
                    <p class="text-white link-nav"><a href="{{ route('home') }}">Home </a> <span
                            class="lnr lnr-arrow-right"></span> <a href="{{ url()->full() }}"> @yield('banner')</a></p>
                </div>
            </div>
        </div>
    </section>
@endif
