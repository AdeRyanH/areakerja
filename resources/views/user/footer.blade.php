<footer class="footer-area" id="footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-8">
                <div class="container footer-nav">
                    <a href="{{ route('home') }}"><img src="{{ asset('img/logo putih.png') }}" style="width:50px;" alt="" title="" /></a>
                    <ul class="col row">
                        {{-- <li>
                            <a href= #>Artikel</a>
                        </li> --}}
                        <li>
                            <a href="{{ request()->segment(1)=='aboutus' ? '#' : route('aboutus') }}">Tentang Kami</a>
                        </li>
                        <li>
                            <a href="{{ request()->segment(1)=='kontak' ? '#' : route('kontak') }}">Kontak Kami</a>
                        </li>
                        <li>
                            <a href="{{ request()->segment(1)=='pilihpaket' ? '#' : route('pilihpaket') }}">Pasang Lowongan</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <p class="col-lg-8 footer-text m-0" style="color: white">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Areakerja.com
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>

            </div>


            <div class="col-lg-4 ">
                <div class="footer-social">
                    <h4 class="text-white">Temukan Kami di</h4>
                    <ul class="col row">

                        <li>
                            <a href="https://www.instagram.com/areakerjacom/"><i class="fa fa-instagram" style="font-size:36px"></i></a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}"><i class="fa fa-facebook-square" style="font-size:36px"></i></a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}"><i class="fa fa-twitter-square" style="font-size:36px"></i></a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}"><i class="fa fa-linkedin-square" style="font-size:36px"></i></a>
                        </li>
                        <li>
                            <a href="{{ route('home') }}"><i class="fa fa-telegram" style="font-size:36px"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<footer class="page-footer d-md-none d-lg-none d-xl-none" style="background-color: #fe7b54">

    <!-- Footer Elements -->
    <div class="container text-center mb-3 pt-4">
        <div id="logo-f">
            <a href="{{ route('home') }}"><img src="{{ asset('img/logo putih.png') }}" style="width:50px;" alt="" title="" /></a>
        </div>
    </div>

    <!-- Social buttons -->
    <ul class="row" style="width: max-content;margin-left: auto;margin-right: auto">
        <li class="mr-2" style="font-size:13px; color: aliceblue">
            Tentang Kami
        </li>
        <li class="mr-2" style="font-size:13px; color: aliceblue">
            Kontak Kami
        </li>
        <li style="font-size:13px; color: aliceblue">
            Pasang Lowongan
        </li>
    </ul>
    <!-- Social buttons -->

    <!-- Footer Elements -->

    <div class="container">
        <div class="footer-copyright text-center py-3" style="font-size:14px; color: aliceblue">© 2020 Copyright:
            <a href="https://mdbootstrap.com/" style="font-size:14px; color: aliceblue"> Areakerja.com</a>
        </div>
        <!-- Copyright -->
    </div>

</footer>