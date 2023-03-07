<nav class="navbar navbar-expand-lg navbar-light" id="header">
    <div class="container">
        <div id="logo" class="navbar-brand animate__animated animate__flipInX">
            <a href="{{ route('home') }}"><img src="{{ asset('img/img-01.png') }}" style="width:80px;" alt="" title="" /></a>
        </div>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigaation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item mb-2 mb-md-0 mr-2">
                    <a role="button" class="nav-link form-pasang5" href="{{ route('artikel') }}"
                        style="color: #fe7b54;font-size: 14px; background-color: #fe7c5400; font-weight:600">
                        <span class="fa fa-newspaper-o mr-1"></span> Tips Kerja
                    </a>
                </li>
                <li class="nav-item mb-2 mb-md-0 mr-2">
                  <div class="dropdown">
                    <a role="button" class="nav-link form-pasang5" href="" data-bs-toggle="dropdown" aria-expanded="false"
                        style="color: #fe7b54;font-size: 14px; background-color: #fe7c5400; font-weight:600">
                        <span class="fa-fw fas fa-map-marker-alt"></span> Kota Lainnya
                    </a>
                    <ul class="dropdown-menu dropdown-menu-start mt-1">
                      @foreach ($province as $province)
                      <li>
                        <a href="/titid/{{ $province->id }}" class="dropdown-item">{{ $province->province }}</a>
                      </li>
                      @endforeach
                      <li><div class="" style="padding-right: 110px; padding-left: 110px"></div></li>
                    </ul>
                  </div>
                    

                </li>
                {{-- <li class="nav-item mb-2 mb-md-0 mr-3">
                    <a role="button" class="nav-link form-pasang px-2 " href="{{ route('daftarkandidat') }}"
                        style="color: #fee5ba;width:max-content;font-weight:600">
                        <span class="fas fa-user-tie mr-2"></span> Daftar Sebagai Kandidat
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a role="button" class="nav-link form-pasang px-2 " href="{{ route('pilihpaket') }}"
                        style="color: #fee5ba;width:max-content;font-weight:600">

                        <span class="fas fa-briefcase mr-2"></span> Pasang Lowongan
                    </a>
                </li>

            </ul>
        </div>
    </div>

</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
{{-- <header id="header" id="home">
  <div class="container">
    <div class="row align-items-center justify-content-between d-flex">

      <div id="logo2" class="col-7 form-pasang2">
        <a href="{{ route('home') }}"><img src="{{ asset('img/logo3.svg') }}" alt="" title="" /></a>
      </div>

      <a class="text-orange" href="#">
        <span class="fa fa-newspaper-o mr-1"></span> Tips Kerja
      </a>

      <a class="text-orange" href="#" >
        <span class="fa fa-map-marker mr-1"></span> Kota Lainnya
      </a>

      <a role="button" class="btn form-pasang" href="{{ route('pasang') }}">
        <span class="lnr lnr-file-add"></span> Pasang Lowongan
      </a>

    </div>
  </div>
</header> --}}
