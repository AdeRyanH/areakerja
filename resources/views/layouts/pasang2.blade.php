<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/img-01.png') }}">
    <meta name="author" content="codepixer">
    <meta charset="UTF-8">
    <title>{{ $title }} - Area Kerja</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/linearicons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style3.css') }}">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <style>
        body,
        wrapper {
            min-height: 100vh;
        }

        .flex-fill {
            flex: 1 1 auto;
        }

        .slider>div {
            display: block;
            width: 100%;
            border-radius: 20px;
            background: rgb(255, 255, 255);
            box-shadow: 0px 2px 5px 0px rgb(0 0 0 / 20%);
        }

        /* Navigation */
        .slider-nav {
            text-align: center;
        }

        .slider-nav>div {
            display: inline-block;
            width: auto;
            height: auto;
            margin: 0 2px;
            padding: 10px 10px 8px 10px;
            text-align: center;
            border-radius: 10px 10px 0 0;
            background: rgb(254, 244, 227);
            cursor: pointer;
        }

        #container3 {
            float: left;
            /* added */
            width: 100%;
            /* added */
            background: green;
            /* added */
        }

        #container2 {
            float: left;
            /* added */
            width: 100%;
            /* added */
            background: yellow;
            /* added */
        }

        #container1 {
            float: left;
            width: 100%;
            background: red;
        }

        #col1 {
            float: left;
            width: 30%;
        }

        #col2 {
            float: left;
            width: 40%;
        }

        #col3 {
            float: left;
            width: 30%;
        }
        .input-pertanyaan:focus{
            outline: none;
        }

        .timeline_area {
            position: relative;
            z-index: 1;
        }

        .absolute-center{
            position: relative;
            top: 50%;  /* position the top  edge of the element at the middle of the parent */
            left: 50%; /* position the left edge of the element at the middle of the parent */
            transform: translate(-50%, -50%);
        }
        .single-timeline-area {
            position: relative;
            z-index: 1;
            padding-left: 120px;
        }
        @media only screen and (max-width: 575px) {
            .single-timeline-area {
                padding-left: 100px;
            }
        }
        .single-timeline-area .timeline-date {
            position: absolute;
            width: 120px;
            height: 100%;
            top: 0;  /* position the top  edge of the element at the middle of the parent */
            left: 0; /* position the left edge of the element at the middle of the parent */

            z-index: 1;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-grid-row-align: center;
            align-items: center;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            padding-right: 60px;
        }
        .single-timeline-area .timeline-date2 {
            position: absolute;
            width: 120px;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-grid-row-align: center;
            align-items: center;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            padding-right: 60px;
        }
        @media only screen and (max-width: 575px) {
            .single-timeline-area .timeline-date {
                width: 100px;
            }
        }
        .single-timeline-area .timeline-date::after {
            position: absolute;
            width: 3px;
            height: 100%;
            content: "";
            background-color: #FFAD4D;
            top: 50%;
            right: 30px;
            z-index: 1;
        }
        .single-timeline-area .timeline-date2::after {
            position: absolute;
            width: 3px;
            height: 0%;
            content: "";
            background-color: #FFAD4D;
            top: 50%;
            right: 30px;
            z-index: 1;
        }
        .single-timeline-area .timeline-date::before {
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #FE7B54;
            content: "";
            top: 50%;
            right: 21px;
            z-index: 5;
            margin-top: -10.5px;
        }
        .single-timeline-area .timeline-date2::before {
            position: absolute;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: #FE7B54;
            content: "";
            top: 50%;
            right: 21px;
            z-index: 5;
            margin-top: -10.5px;
        }
        .single-timeline-area .timeline-date p {
            margin-bottom: 0;
            color: #020710;
            font-size: 13px;
            text-transform: uppercase;
            font-weight: 500;
        }
        .single-timeline-area .single-timeline-content {
            position: relative;
            z-index: 1;
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 15px;
            margin-top: 15px;
            background-color:#FBEFE1;
            border-radius: 20px;
            -webkit-box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
            box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
            border: 1px solid #ebebeb;
        }
        @media only screen and (max-width: 575px) {
            .single-timeline-area .single-timeline-content {
                padding: 20px;
            }
        }
        .single-timeline-area .single-timeline-content .timeline-icon {
        }
        .single-timeline-area .single-timeline-content .timeline-text h3 {
            color: #FE7B54;
            margin-bottom:.4rem;
        }


        .single-timeline-area .single-timeline-content .timeline-text p {
            font-weight: 500;
            color: black;
            margin:0px;
            padding:0px;
        }
        .single-timeline-area .single-timeline-content:hover .timeline-icon,
        .single-timeline-area .single-timeline-content:focus .timeline-icon {
            background-color: #020710;
        }
        .single-timeline-area .single-timeline-content:hover .timeline-text h6,
        .single-timeline-area .single-timeline-content:focus .timeline-text h6 {
            color: #3f43fd;
        }
    </style>
</head>

<body>

    <div class="d-flex flex-column">
        <nav>
            <img  style="position: absolute" src="{{ asset('img/kandidat/Vector 1.svg') }}" alt="" class="d-none d-lg-block">
            @include('partials.header')
        </nav>
        <main class="flex-fill">
            @yield('home')


            <div class="container">

                @yield('content')
            </div>
            @yield('awanatas')
            <div  style="background-color: #ffffff">
                @yield('slick')
            </div>
            @yield('awanbawah')

            @yield('slick2')



        </main>
        @include('user.footer')
        {{-- Modal Daftar Kandidat   --}}
        <div class="modal fade" id="modalDaftar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document" >
                <div class="modal-content" >
                    <div class="modal-body" >
                        <div class="login-sec-bg">
                            <h2 class="text-center mb-3">Daftar Kandidat</h2>
                            <form id="example-advanced-form" enctype="multipart/form-data"
                                action="{{ url('formkandidat') }}" method="POST" style="display: none;">
                                @csrf
                                <h3 >Account</h3>
                                <fieldset class="form-input"  style="overflow-y: scroll; box-sizing: border-box;width: 100%;">
                                    <h4>Account Information</h4>

                                    <label for="namalengkap">Nama Lengkap</label>
                                    <input id="namalengkap" name="namalengkap" type="text" class="form-control2">
                                    <label for="email">Email</label>
                                    <input id="email" name="email" type="email" class="form-control2">
                                    <label for="alamat">Alamat Tempat Tinggal</label>
                                    <textarea id="alamat" name="alamat" type="text" class="form-control2"> </textarea>
                                    <label for="biografi">Biografi</label>
                                    <textarea id="biografi" name="biografi" type="text"
                                        class="form-control2"> </textarea>
                                    <label for="skillutama">Skill Utama</label>
                                    <select name="skillutama" id="skillutama" class="form-control2">
                                        @foreach($mainSkill1 as $skill)
                                        <option value="{{$skill->nama}}" class="nama">{{$skill->nama}}</option>
                                        @endforeach
                                    </select>
                                    <label for="image">Upload Pas Foto</label>
                                    <input id="image" name="image" type="file" class="form-control2">
                                    <label for="cv">Upload CV</label>
                                    <input id="cv" name="cv" type="file" class="form-control2">
                                </fieldset>

                                <h3>Skill</h3>
                                <fieldset class="form-input">
                                    <h4>Skill</h4>

                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field2">
                                            <tr>
                                                <td><input id="namaskill" name="namaskill[]" type="text"
                                                        class="form-control2 " value="" required="" data-type="text"
                                                        aria-required="true" placeholder="Nama Skill"
                                                        style="width: 100%;border-radius: 10px; padding:10px; border: 2px solid #fe7b54;font-family: 'Poppins', sans-serif;">
                                                </td>
                                                <td>
                                                    <div class="box input-group mb-2 mr-sm-2">
                                                        <div class="value" id="current-value1">50 </div><span
                                                            style="color:#f77f10;">%</span>
                                                        <div class="slider">
                                                            <input type="range" name="rangeskill[]" min="0" max="100"
                                                                value="50" id="costum-slider1">
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><button type="button" name="add2" id="add2" class="btn btn-area">Add
                                                        More</button></td>
                                            </tr>
                                        </table>
                                    </div>
                                </fieldset>

                                <h3>Pendidikan</h3>
                                <fieldset class="form-input">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field3">
                                            <tr>
                                                <td><input id="school" name="school[]" type="text"
                                                        class="form-control2 form-conwiz" value="" required=""
                                                        data-type="text" aria-required="true"
                                                        placeholder="Nama Instansi(exp.SMAN 1 GG)">
                                                </td>
                                                <td>
                                                    <input id="tahun" name="tahun[]" type="text"
                                                        class="form-control2 form-conwiz" value="" required=""
                                                        data-type="text" aria-required="true"
                                                        placeholder="Tahun exp. 2016-2019">
                                                </td>
                                                <td><button type="button" name="add3" id="add3" class="btn btn-area">Add
                                                        More</button></td>
                                            </tr>
                                        </table>
                                    </div>
                                </fieldset>

                                <h3>Organisasi</h3>
                                <fieldset class="form-input">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field4">
                                            <tr>
                                                <td><input id="organisasi" name="organisasi[]" type="text"
                                                        class="form-control2 form-conwiz" value="" required=""
                                                        data-type="text" aria-required="true"
                                                        placeholder="Nama Organisasi" />
                                                </td>
                                                <td>
                                                    <input id="jabatan" name="jabatan[]" type="text"
                                                        class="form-control2 form-conwiz" value="" required=""
                                                        data-type="text" aria-required="true" placeholder="Jabatan" />
                                                </td>
                                                <td><button type="button" name="add4" id="add4" class="btn btn-area">Add
                                                        More</button></td>
                                            </tr>
                                        </table>
                                    </div>
                                </fieldset>

                                <h3>Pengalaman</h3>
                                <fieldset class="form-input">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dynamic_field5">
                                            <tr>
                                                <td><input id="kantor" name="kantor[]" type="text"
                                                        class="form-control2 form-conwiz" value="" required=""
                                                        data-type="text" aria-required="true"
                                                        placeholder="Nama Kantor" />
                                                </td>
                                                <td>
                                                    <input id="pekerjaan" name="pekerjaan[]" type="text"
                                                        class="form-control2 form-conwiz" value="" required=""
                                                        data-type="text" aria-required="true" placeholder="Pekerjaan" />
                                                </td>
                                                <td><button type="button" name="add5" id="add5" class="btn btn-area">Add
                                                        More</button></td>
                                            </tr>
                                        </table>
                                    </div>
                                </fieldset>

                                <h3>Finish</h3>
                                <fieldset class="form-input">
                                    <h4>Terms and Conditions</h4>

                                    <input id="acceptTerms-2" name="acceptTerms" type="checkbox" class="required">
                                    <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Modal Daftar Mitra --}}

        <div class="modal fade" id="modalDaftarMitra" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true" >
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document" >
                <div class="modal-content" >
                    <div class="modal-body" >
                        <div class="login-sec-bg">
                            <h2 class="text-center mb-3">Account Information</h2>
                            <form id="example-advanced-form1" enctype="multipart/form-data"
                                action="{{ url('formmitra') }}" method="POST" style="display: none;">
                                @csrf
                                <h3 >Account</h3>
                                <fieldset class="form-input"  style="overflow-y: scroll; box-sizing: border-box;width: 100%;">
                                    <h4>Account Information</h4>

                                    <label for="nama">Nama Perusahaan</label>
                                    <input id="nama" name="nama" type="text" class="form-control2">
                                    <label for="email">Email Perusahaan</label>
                                    <input id="email" name="email" type="email" class="form-control2">
                                    <label for="alamat">Alamat Perusahaan</label>
                                    <textarea id="alamat" name="alamat" type="text" class="form-control2"> </textarea>
                                    <label for="deskripsi">Deskripsi Perusahaan</label>
                                    <textarea id="deskripsi" name="deskripsi" type="text"
                                        class="form-control2"> </textarea>
                                    <label for="no">Nomor Telepon Perusahaan</label>
                                    <input id="no" name="no" type="text" class="form-control2">
                                    <label for="logo">Logo Perusahaan</label>
                                    <input id="logo" name="logo" type="file" class="form-control2">
                                </fieldset>

                                <h3>Finish</h3>
                                <fieldset class="form-input">
                                    <h4>Terms and Conditions</h4>

                                    <input id="acceptTerms-2" name="acceptTerms" type="checkbox" class="required">
                                    <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/vendor/jquery-2.2.4.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{ asset('js/easing.min.js') }}"></script>
    <script src="{{ asset('js/hoverIntent.js') }}"></script>
    <script src="{{ asset('js/superfish.min.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/parallax.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/app2.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('js/app2user.js') }}"></script>
    <script src="{{ asset('js/app2pasang.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/jquery.cookie-1.3.1.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.steps.js') }}"></script>
    <script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.js'></script>

    <script>
        AOS.init({
            once: true,
        });
    </script>
    <script>
        var mybutton = document.getElementById("myBtn2");
        window.onscroll = function() {
            scrollFunction()
        };
        mybutton.style.display = "block";

        function scrollFunction() {
            if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
                mybutton.style.display = "none";
            } else {
                mybutton.style.display = "block";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>

    <script>
        document.getElementById("costum-slider1").addEventListener("input", function(event) {
            let value1 = event.target.value;
            document.getElementById("current-value1").innerText = value1;
        });
    </script>

    <script>
        $(document).ready(function() {
            var postURL = "<?= url('addmore') ?>";
            var i = 1;

            var i2 = 1;
            var r = 1;
            var r2 = 1;

            var i3 = 1;
            var i4 = 1;
            var i5 = 1;


            $('#add').click(function() {
                i++;
                $('#dynamic_field').append('<tr id="row' + i +
                    '" class="dynamic-added"><td><input id="namasekolah" name="namasekolah" type="text" class="form-control2 " value="" required="" data-type="text" aria-required="true" placeholder="Nama Sekolah" style="width: 100%;border-radius: 10px; padding:10px; border: 2px solid #fe7b54;font-family: Poppins, sans-serif;"></td><td><input id="tahun" name="tahun" type="text" class="form-control2 " value="" required="" data-type="text" aria-required="true" placeholder="Tahun Belajar (2016-2019)" style="width: 100%;border-radius: 10px; padding:10px; border: 2px solid #fe7b54;font-family: Poppins, sans-serif;"><td><button type="button" name="remove" id="' +
                    i + '" class="btn btn-area btn_remove">X</button></td></tr>');
            });

            $('#add2').click(function() {
                i2++;
                r++;
                $('#dynamic_field2').append('<tr id="row' + i2 +
                    '" class="dynamic-added"><td><input type="text" name="namaskill[]" required="" placeholder="Nama Skill" class="form-control2" data-type="text" aria-required="true" style="width: 100%;border-radius: 10px; padding:10px; border: 2px solid #fe7b54;font-family: Poppins;" /></td><td><div class="box input-group mb-2 mr-sm-2"><div class="value" id="current-value' +
                    r +
                    '">50 </div><span style="color:#f77f10;">%</span><div class="slider"><input type="range" min="0" max="100" name="rangeskill[]" value="50" id="costum-slider' +
                    r + '"></div></div></td><td><button type="button" name="remove" id="' +
                    i2 +
                    '" class="btn btn-area btn_remove">X</button></td></tr><script src="{{ asset('js/slider.js') }}" />'
                );
            });

            $('#add3').click(function() {
                i3++;
                $('#dynamic_field3').append('<tr id="row' + i3 +
                    '" class="dynamic-added"><td><input type="text" name="school[]" placeholder="Nama Instansi(exp.SMAN 1 GG)" class="form-control2 form-conwiz name_list" /></td><td><input type="text" name="tahun[]" placeholder="Tahun (exp. 2016-2019)" class="form-control2 form-conwiz name_list" /></td><td><button type="button" name="remove" id="' +
                    i3 + '" class="btn btn-danger btn_remove">X</button></td></tr>');
            });

            $('#add4').click(function() {
                i4++;
                $('#dynamic_field4').append('<tr id="row' + i4 +
                    '" class="dynamic-added"><td><input type="text" name="organisasi[]" placeholder="Nama Organisasi" class="form-control2 form-conwiz name_list" /></td><td><input type="text" name="jabatan[]" placeholder="Jabatan" class="form-control2 form-conwiz name_list" /></td><td><button type="button" name="remove" id="' +
                    i4 + '" class="btn btn-danger btn_remove">X</button></td></tr>');
            });

            $('#add5').click(function() {
                i5++;
                $('#dynamic_field5').append('<tr id="row' + i5 +
                    '" class="dynamic-added"><td><input type="text" name="kantor[]" placeholder="Nama Kantor" class="form-control2 form-conwiz name_list" /></td><td><input type="text" name="pekerjaan[]" placeholder="Pekerjaan" class="form-control2 form-conwiz name_list" /></td><td><button type="button" name="remove" id="' +
                    i5 + '" class="btn btn-danger btn_remove">X</button></td></tr>');
            });



            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });

            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });

            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });

            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });

            $(document).on('click', '.btn_remove', function() {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $('#submit').click(function() {
                $.ajax({
                    url: postURL,
                    method: "POST",
                    data: $('#add_name').serialize(),
                    type: 'json',
                    success: function(data) {
                        if (data.error) {
                            printErrorMsg(data.error);
                        } else {
                            i = 1;
                            $('.dynamic-added').remove();
                            $('#add_name')[0].reset();
                            $(".print-success-msg").find("ul").html('');
                            $(".print-success-msg").css('display', 'block');
                            $(".print-error-msg").css('display', 'none');
                            $(".print-success-msg").find("ul").append(
                                '<li>Record Inserted Successfully.</li>');
                        }
                    }
                });
            });


            function printErrorMsg(msg) {
                $(".print-error-msg").find("ul").html('');
                $(".print-error-msg").css('display', 'block');
                $(".print-success-msg").css('display', 'none');
                $.each(msg, function(key, value) {
                    $(".print-error-msg").find("ul").append('<li>' + value + '</li>');
                });
            }
        });
    </script>



    <script>
        var r = 1;
        var r2 = 1;
        for (r = 1; r < 100; r++) {
            for (r2 = 1; r2 < 100; r2++) {
                document.getElementById("costum-slider" + r + "").addEventListener("input", function(event) {
                    let value = event.target.value;
                    document.getElementById("current-value" + r2 + "").innerText = value;
                });
            }
        }
    </script>


    <script>
        $('.slider').slick({
            arrows: false,
            dots: false,
            infinite: false,
            speed: 500,
            autoplay: false,
            autoplaySpeed: 3000,
            slidesToShow: 1,
            slidesToScroll: 1
        });
        //On click of slider-nav childern,
        //Slick slider navigate to the respective index.
        $('.slider-nav > div').click(function() {
            $('.slider').slick('slickGoTo', $(this).index());
        })
    </script>
    @include('sweetalert::alert')
    <script>
        var form1 = $("#example-advanced-form").show();

        form1.steps({
            headerTag: "h3",
            bodyTag: "fieldset",
            transitionEffect: "slideLeft",
            onStepChanging: function(event, currentIndex, newIndex) {
                // Allways allow previous action even if the current form is not valid!
                if (currentIndex > newIndex) {
                    return true;
                }
                // Forbid next action on "Warning" step if the user is to young
                if (newIndex === 3 && Number($("#age").val()) < 18) {
                    return false;
                }
                // Needed in some cases if the user went back (clean up)
                if (currentIndex < newIndex) {
                    // To remove error styles
                    form1.find(".body:eq(" + newIndex + ") label.error").remove();
                    form1.find(".body:eq(" + newIndex + ") .error").removeClass("error");
                }
                form1.validate().settings.ignore = ":disabled,:hidden";
                return form1.valid();
            },
            onStepChanged: function(event, currentIndex, priorIndex) {
                // Used to skip the "Warning" step if the user is old enough.
                // if (currentIndex === 2 && Number($("#age").val()) >= 18) {
                //     form.steps("next");
                // }
                // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
                // if (currentIndex === 2 && priorIndex === 3) {
                //     form.steps("previous");
                // }
            },
            onFinishing: function(event, currentIndex) {
                form1.validate().settings.ignore = ":disabled";
                return form1.valid();
            },
            onFinished: function(event, currentIndex) {
                return form1.submit();
            }
        }).validate({
            errorPlacement: function errorPlacement(error, element) {
                element.before(error);
            },
            rules: {
                confirm: {
                    equalTo: "#password"
                }
            }
        });
    </script>
    <script>
        var form = $("#example-advanced-form1").show();

        form.steps({
            headerTag: "h3",
            bodyTag: "fieldset",
            transitionEffect: "slideLeft",
            onStepChanging: function(event, currentIndex, newIndex) {
                // Allways allow previous action even if the current form is not valid!
                if (currentIndex > newIndex) {
                    return true;
                }
                // Forbid next action on "Warning" step if the user is to young
                if (newIndex === 3 && Number($("#age").val()) < 18) {
                    return false;
                }
                // Needed in some cases if the user went back (clean up)
                if (currentIndex < newIndex) {
                    // To remove error styles
                    form.find(".body:eq(" + newIndex + ") label.error").remove();
                    form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
                }
                form.validate().settings.ignore = ":disabled,:hidden";
                return form.valid();
            },
            onStepChanged: function(event, currentIndex, priorIndex) {
                // Used to skip the "Warning" step if the user is old enough.
                // if (currentIndex === 2 && Number($("#age").val()) >= 18) {
                //     form.steps("next");
                // }
                // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
                // if (currentIndex === 2 && priorIndex === 3) {
                //     form.steps("previous");
                // }
            },
            onFinishing: function(event, currentIndex) {
                form.validate().settings.ignore = ":disabled";
                return form.valid();
            },
            onFinished: function(event, currentIndex) {
                return form.submit();
            }
        }).validate({
            errorPlacement: function errorPlacement(error, element) {
                element.before(error);
            },
            rules: {
                confirm: {
                    equalTo: "#password"
                }
            }
        });
    </script>
</body>

</html>
