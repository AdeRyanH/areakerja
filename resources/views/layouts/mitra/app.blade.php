<!DOCTYPE html>
<html lang="en">

<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1,minimum-scale=1.0, maximum-scale=3.0, shrink-to-fit=no" name="viewport">
    @mitra
        <title>Mitra - Area Kerja</title>
    @endmitra
    @kandidat
        <title>Kandidat - Area Kerja</title>
    @endkandidat
    <!-- General CSS Files -->

    <link rel="stylesheet" href="{{ url('otika/assets/css/app.min.css') }}">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ url('otika/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('otika/assets/css/components.css') }}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ url('otika/assets/css/custom.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/img-01.png') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('otika/assets/bundles/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ url('otika/assets/bundles/datatables/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ url('otika/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ url('otika/assets/bundles/fullcalendar/fullcalendar.min.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
        .form-control3 {
            display: block;
            width: 100%;
            height: 100px;
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            -webkit-transition: border-color .15s ease-in-out,
                -webkit-box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out
        }

        .form-control3:focus {
            color: #495057;
            background-color: #fff;
            border-color: #c2c8f8;
            outline: 0;
        }

        .form-control3::-webkit-input-placeholder {
            color: #6c757d;
            opacity: 1
        }

        .rating {
            display: flex;
            flex-direction: row-reverse;
            justify-content: left
        }

        .rating>input {
            display: none
        }

        .rating>label {
            position: relative;
            width: 1em;
            font-size: 2.2rem;
            color: #FFD600;
            cursor: pointer
        }

        .rating>label::before {
            content: "\2605";
            position: absolute;
            opacity: 0
        }

        .rating>input:checked~label:before {
            opacity: 1
        }

        .rating:hover>input:checked~label:before {
            opacity: 0.4
        }
    </style>
    @section('css')
    @show
    @yield('css')
</head>

<body>
    {{-- <div class="loader"></div> --}}
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            <!--header-->
            @include('layouts.mitra.header')
            <!--sidebar-->
            @include('mitra.partials.menu')
            <!-- Main Content -->
            @yield('content')

            <!-- footer -->
            @include('layouts.mitra.footer')

        </div>
    </div>
    </div>
    </div>

    @include('sweetalert::alert')

    @stack('before-script')
    {{-- <!-- JS Libraies -->
  <script src="assets/bundles/jqvmap/dist/jquery.vmap.min.js"></script>
  <script src="assets/bundles/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="assets/bundles/jqvmap/dist/maps/jquery.vmap.indonesia.js"></script> --}}

    <!-- General JS Scripts -->
    <script src="{{ url('otika/assets/js/app.min.js') }}"></script>
    <!-- JS Libraies -->
    <script src="{{ url('otika/assets/bundles/chartjs/chart.min.js') }}"></script>
    <script src="{{ url('otika/assets/bundles/jquery.sparkline.min.js') }}"></script>
    <script src="{{ url('otika/assets/bundles/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ url('otika/assets/js/page/index.js') }}"></script>
    <script src="{{ url('otika/assets/js/page/chat.js') }}"></script>
    <script src="{{ url('otika/assets/js/page/widget-chart.js') }}"></script>
    @stack('page-script')
    <!-- Template JS File -->
    <script src="{{ url('otika/assets/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ url('otika/assets/js/custom.js') }}"></script>

    <script src="{{ url('otika/assets/bundles/datatables/datatables.min.js') }}"></script>
    <script src="{{ url('otika/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('otika/assets/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ url('otika/assets/js/page/datatables.js') }}"></script>
    <script src="{{ url('otika/assets/js/page/advance-table.js') }}"></script>

    <script src="{{ url('otika/assets/bundles/datatables/export-tables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ url('otika/assets/bundles/datatables/export-tables/buttons.flash.min.js') }}"></script>
    <script src="{{ url('otika/assets/bundles/datatables/export-tables/pdfmake.min.js') }}"></script>
    <script src="{{ url('otika/assets/bundles/datatables/export-tables/vfs_fonts.js') }}"></script>
    <script src="{{ url('otika/assets/bundles/datatables/export-tables/buttons.print.min.js') }}"></script>
    <!-- JS Libraies -->
    <script src="{{ url('otika/assets/bundles/izitoast/js/iziToast.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ url('otika/assets/js/page/toastr.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                "scrollX": false,
            });
        });
    </script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#submitform").click(function(e) {

            e.preventDefault();

            var text = $("input[name=text]").val();
            var id = $("input[name=id]").val();

            $.ajax({
                type: 'POST',
                url: "{{ route('mitra.chat.send') }}",
                data: {
                    text: text,
                    id: id
                },
                success: function(response) {
                    $("#sendform")[0].reset();
                },
                error: function(response) {
                    console.log(response);
                }
            });

        });
    </script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#submitformk").click(function(e) {

            e.preventDefault();

            var text = $("input[name=text]").val();
            var id = $("input[name=id]").val();

            $.ajax({
                type: 'POST',
                url: "{{ route('mitra.chat.send') }}",
                data: {
                    text: text,
                    id: id
                },
                success: function(response) {
                    $("#sendformk")[0].reset();
                },
                error: function(response) {
                    console.log(response);
                }
            });

        });
    </script>

    @section('js')
    @show
    @stack('after-script')

</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>
