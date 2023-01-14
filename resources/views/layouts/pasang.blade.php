<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/img-01.png') }}">
    <meta name="author" content="codepixer">
    <meta charset="UTF-8">
    @yield('meta')
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

        .slider-nav .sl {
            display: inline-block;
            width: auto;
            height: auto;
            margin: 0 2px;
            padding: 10px 10px 8px 10px;
            text-align: center;
            border-radius: 10px 10px 0 0;
            background: rgb(254, 240, 215);
            cursor: pointer;
        }

        .slider-nav .sl.active {
            display: inline-block;
            width: auto;
            height: auto;
            margin: 0 2px;
            padding: 10px 10px 8px 10px;
            text-align: center;
            border-radius: 10px 10px 0 0;
            background: rgb(255, 255, 255);
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

    </style>
</head>

<body>

    <div class="d-flex flex-column">
        <nav>
            @include('partials.header')
        </nav>
        <main class="flex-fill">
            @yield('home')


            <div class="container">

                @yield('content')
            </div>
            @yield('awanatas')
            <div style="background-color: #fee5ba">
                @yield('slick')
            </div>
            @yield('awanbawah')

            @yield('slick2')



        </main>
        @include('user.footer')
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
    <script src="{{ asset('js/pasang.js') }}"></script>

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
            if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>


    <script>
        $(document).ready(function() {
            var postURL = "<?= url('addmore') ?>";
            var i = 1;

            var i2 = 1;
            var r = 1;
            var r2 = 1;

            var i3 = 1;


            $('#add').click(function() {
                i++;
                $('#dynamic_field').append('<tr id="row' + i +
                    '" class="dynamic-added"><td><input id="namasekolah" name="namasekolah" type="text" class="form-control2 " value="" required="" data-type="text" aria-required="true" placeholder="Nama Sekolah" style="width: 100%;border-radius: 10px; padding:10px; border: 2px solid #fe7b54;font-family: Poppins, sans-serif;"></td><td><input id="tahun" name="tahun" type="text" class="form-control2 " value="" required="" data-type="text" aria-required="true" placeholder="Tahun Belajar (2016-2019)" style="width: 100%;border-radius: 10px; padding:10px; border: 2px solid #fe7b54;font-family: Poppins, sans-serif;"><td><button type="button" name="remove" id="' +
                    i +'" class="btn btn-area btn_remove">X</button></td></tr>');
            });

            $('#add2').click(function() {
                i2++;
                r++;
                $('#dynamic_field2').append('<tr id="row' + i2 +
                    '" class="dynamic-added"><td><input type="text" name="namaskill" required="" placeholder="Nama Skill" class="form-control2" data-type="text" aria-required="true" style="width: 100%;border-radius: 10px; padding:10px; border: 2px solid #fe7b54;font-family: Poppins;" /></td><td><div class="box input-group mb-2 mr-sm-2"><div class="value" id="current-value' +
                    r +
                    '">50 </div><span style="color:#f77f10;">%</span><div class="slider"><input type="range" min="0" max="100" value="50" id="costum-slider' +
                    r + '"></div></div></td><td><button type="button" name="remove" id="' +
                    i2 +
                    '" class="btn btn-area btn_remove">X</button></td></tr><script src="{{ asset('js/slider.js') }}" />'
                );
                // window['pre_' + r] = 'a';
                // console.log('pre' + r);
                // var slider = document.getElementById("costum-slider" + r + "").addEventListener("input",
                //     function(
                //         event) {
                //         console.log("costum-slider" + r + "");
                //         let value = event.target.value;
                //         document.getElementById(
                //             "current-value" + r + "").innerText = value;
                //     });

            });

            $('#add3').click(function() {
                i3++;
                $('#dynamic_field3').append('<tr id="row' + i3 +
                    '" class="dynamic-added"><td><input type="text" name="namaskill" placeholder="Nama Skill" class="form-control2" data-type="text" aria-r /></td><td><button type="button" name="remove" id="' +
                    i3 + '" class="btn btn-danger btn_remove">X</button></td></tr>');
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
            speed: 250,
            autoplay: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            accessibility: false,
            draggable: false
        });
        //On click of slider-nav childern,
        //Slick slider naviga
        $('.slider-nav .sl.1').click(function() {
            $('.slider').slick('slickGoTo', 0);
            $(this).addClass('active');
            $('.slider-nav .sl.2').removeClass('active');
            $('.slider-nav .sl.3').removeClass('active');
            $('.slider-nav .sl.4').removeClass('active');
            $('.slider-nav .sl.5').removeClass('active');
            $('.slider-nav .sl.6').removeClass('active');
            $('.slider-nav .sl.7').removeClass('active');
            // console.log($(this).index());
        });
        $('.slider-nav .sl.2').click(function() {
            $('.slider').slick('slickGoTo', 1);
            $(this).addClass('active');
            $('.slider-nav .sl.1').removeClass('active');
            $('.slider-nav .sl.3').removeClass('active');
            $('.slider-nav .sl.4').removeClass('active');
            $('.slider-nav .sl.5').removeClass('active');
            $('.slider-nav .sl.6').removeClass('active');
            $('.slider-nav .sl.7').removeClass('active');
            // console.log($(this).index());
        });
        $('.slider-nav .sl.3').click(function() {
            $('.slider').slick('slickGoTo', 2);
            $(this).addClass('active');
            $('.slider-nav .sl.1').removeClass('active');
            $('.slider-nav .sl.2').removeClass('active');
            $('.slider-nav .sl.4').removeClass('active');
            $('.slider-nav .sl.5').removeClass('active');
            $('.slider-nav .sl.6').removeClass('active');
            $('.slider-nav .sl.7').removeClass('active');
            // console.log($(this).index());
        });
        $('.slider-nav .sl.4').click(function() {
            $('.slider').slick('slickGoTo', 3);
            $(this).addClass('active');
            $('.slider-nav .sl.1').removeClass('active');
            $('.slider-nav .sl.2').removeClass('active');
            $('.slider-nav .sl.3').removeClass('active');
            $('.slider-nav .sl.5').removeClass('active');
            $('.slider-nav .sl.6').removeClass('active');
            $('.slider-nav .sl.7').removeClass('active');
            // console.log($(this).index());
        });
        $('.slider-nav .sl.5').click(function() {
            $('.slider').slick('slickGoTo', 4);
            $(this).addClass('active');
            $('.slider-nav .sl.1').removeClass('active');
            $('.slider-nav .sl.3').removeClass('active');
            $('.slider-nav .sl.2').removeClass('active');
            $('.slider-nav .sl.4').removeClass('active');
            $('.slider-nav .sl.6').removeClass('active');
            $('.slider-nav .sl.7').removeClass('active');
            // console.log($(this).index());
        });
        $('.slider-nav .sl.6').click(function() {
            $('.slider').slick('slickGoTo', 5);
            $(this).addClass('active');
            $('.slider-nav .sl.1').removeClass('active');
            $('.slider-nav .sl.2').removeClass('active');
            $('.slider-nav .sl.3').removeClass('active');
            $('.slider-nav .sl.4').removeClass('active');
            $('.slider-nav .sl.7').removeClass('active');
            $('.slider-nav .sl.5').removeClass('active');
            // console.log($(this).index());
        });
        $('.slider-nav .sl.7').click(function() {
            $('.slider').slick('slickGoTo', 6);
            $(this).addClass('active');
            $('.slider-nav .sl.1').removeClass('active');
            $('.slider-nav .sl.2').removeClass('active');
            $('.slider-nav .sl.3').removeClass('active');
            $('.slider-nav .sl.4').removeClass('active');
            $('.slider-nav .sl.6').removeClass('active');
            $('.slider-nav .sl.5').removeClass('active');
            // console.log($(this).index());
        });

        $('slider').on('afterChange', function (event, slick, currentSlide) {
            $('.slider-nav').slick('slickGoTo', currentSlide);
            var currrentNavSlideElem = '.slider-nav .sl[data-slick-index="' + currentSlide + '"]';
            $('.slider-nav .sl.1.active').removeClass('active');
            $(currrentNavSlideElem).addClass('active');
        });

    </script>
    @include('sweetalert::alert')

</body>

</html>
