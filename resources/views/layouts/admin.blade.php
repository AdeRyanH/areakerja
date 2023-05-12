<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="{{ asset('img/img-01.png') }}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard - Admin</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/select/1.3.0/css/select.dataTables.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/@coreui/coreui@2.1.16/dist/css/coreui.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/css/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.cs') }}s">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @yield('styles')
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed pace-done sidebar-lg-show">
    @admin
        <header class="app-header navbar" style="background-color: #272e41">
            <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a href="{{ route('home') }}"><img src="{{ asset('img/logo3.svg') }}" alt="" title="" style="margin-top: 3px" />
            </a>
            <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
                <span class="navbar-toggler-icon"></span>
            </button>

            <ul class="nav navbar-nav ml-auto">
                @if (count(config('panel.available_languages', [])) > 1)
                    <li class="nav-item dropdown d-md-down-none">
                        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            {{ strtoupper(app()->getLocale()) }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            @foreach (config('panel.available_languages') as $langLocale => $langName)
                                <a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }}
                                    ({{ $langName }})
                                </a>
                            @endforeach
                        </div>
                    </li>
                @endif
            </ul>
        </header>

        <div id="admin">
            @include('admin.partials.menu')
            <main class="main">


                <div style="padding-top: 20px" class="container-fluid">
                    @if (session('message'))
                        <div class="row mb-2">
                            <div class="col-lg-12">
                                <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                            </div>
                        </div>
                    @endif
                    @if ($errors->count() > 0)
                        <div class="alert alert-danger">
                            <ul class="list-unstyled">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @yield('content')

                </div>


            </main>
            <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </div>
    @else
        <div class="container text-center my-auto">
            <H1><b>SADARO KOWE DUDU SOPO SOPO NE DEE</b></H1>
        </div>
    @endadmin



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://unpkg.com/@coreui/coreui@2.1.16/dist/js/coreui.min.js"></script>
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.2.4/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.3.0/js/dataTables.select.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.full.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.5.1/js/bootstrap-colorpicker.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/app2admin.js') }}"></script>
    <script>
        $(document).ready(function() {
            var postURL = "<?= url('addmore') ?>";
            var i = 1;

            var i2 = 1;

            var i3 = 1;


            $('#add').click(function() {
                i++;
                $('#dynamic_field').append('<tr id="row' + i +
                    '" class="dynamic-added"><td><input type="text" name="requirements[]" placeholder="Masukkan Syarat Pekerjaan" class="form-control name_list" /></td><td><button type="button" name="remove" id="' +
                    i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
            });

            $('#add2').click(function() {
                i2++;
                $('#dynamic_field2').append('<tr id="row' + i2 +
                    '" class="dynamic-added"><td><input type="text" name="full_description[]" placeholder="Masukkan Deskripsi Pekerjaan" class="form-control name_list" /></td><td><button type="button" name="remove" id="' +
                    i2 + '" class="btn btn-danger btn_remove">X</button></td></tr>');
            });

            $('#add3').click(function() {
                i3++;
                $('#dynamic_field3').append('<tr id="row' + i3 +
                    '" class="dynamic-added"><td><input type="text" name="list[]" placeholder="Masukkan list" class="form-control name_list" /></td><td><button type="button" name="remove" id="' +
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
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <script>
        // add row
        $("#addRow").click(function() {
            var html = '';
            html += '<div id="inputFormRow">';
            html += '<div class="input-group mb-3">';
            html +=
                '<input type="text" name="requirements[]" class="form-control m-input" placeholder="Enter title" autocomplete="off">';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow', function() {
            $(this).closest('#inputFormRow').remove();
        });
    </script>

    <script>
        // add row
        $("#addRow2").click(function() {
            var html = '';
            html += '<div id="inputFormRow2">';
            html += '<div class="input-group mb-3">';
            html +=
                '<input type="text" name="full_description[]" class="form-control m-input" placeholder="Masukkan Deskripsi Pekerjaan" autocomplete="off">';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow2" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newRow2').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow2', function() {
            $(this).closest('#inputFormRow2').remove();
        });
    </script>

    <script>
        // add row
        $("#addRow3").click(function() {
            var html = '';
            html += '<div id="inputFormRow3">';
            html += '<div class="input-group mb-3">';
            html +=
                '<input type="text" name="list[]" class="form-control m-input" placeholder="" autocomplete="off">';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow3" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';
            $('#newRow3').append(html);
        });
        // remove row
        $(document).on('click', '#removeRow3', function() {
            $(this).closest('#inputFormRow3').remove();
        });
    </script>

    <script>
        // add row
        $("#addRow4").click(function() {
            var html = '';
            html += '<div id="inputFormRow4">';
            html += '<div class="input-group mb-3">';
            html +=
                '<input type="text" name="namaskill[]" class="form-control m-input" placeholder="Masukkan Nama Skill" autocomplete="off">';
            html +=
                '<input type="text" name="rangeskill[]" class="form-control m-input" placeholder="Masukkan Presetase Skill" autocomplete="off">';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow4" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newRow4').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow4', function() {
            $(this).closest('#inputFormRow4').remove();
        });
    </script>

    <script>
        // add row
        $("#addRow5").click(function() {
            var html = '';
            html += '<div id="inputFormRow5">';
            html += '<div class="input-group mb-3">';
            html +=
                '<input type="text" name="school[]" class="form-control m-input" placeholder="Masukkan Nama Sekolah" autocomplete="off">';
            html +=
                '<input type="text" name="tahun[]" class="form-control m-input" placeholder="Masukkan Tahun" autocomplete="off">';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow5" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newRow5').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow5', function() {
            $(this).closest('#inputFormRow5').remove();
        });
    </script>

    <script>
        // add row
        $("#addRow6").click(function() {
            var html = '';
            html += '<div id="inputFormRow6">';
            html += '<div class="input-group mb-3">';
            html +=
                '<input type="text" name="organisasi[]" class="form-control m-input" placeholder="Masukkan Nama Organisasi" autocomplete="off" >';
            html +=
                '<input type="text" name="jabatan[]" class="form-control m-input" placeholder="Masukkan Jabatan" autocomplete="off" >';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow6" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newRow6').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow6', function() {
            $(this).closest('#inputFormRow6').remove();
        });
    </script>

    <script>
        // add row
        $("#addRow7").click(function() {
            var html = '';
            html += '<div id="inputFormRow7">';
            html += '<div class="input-group mb-3">';
            html +=
                '<input type="text" name="kantor[]" class="form-control m-input" placeholder="Masukkan Nama Kantor" autocomplete="off" >';
            html +=
                '<input type="text" name="pekerjaan[]" class="form-control m-input" placeholder="Masukkan Pekerjaan" autocomplete="off" >';
            html += '<div class="input-group-append">';
            html += '<button id="removeRow7" type="button" class="btn btn-danger">Remove</button>';
            html += '</div>';
            html += '</div>';

            $('#newRow7').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow7', function() {
            $(this).closest('#inputFormRow7').remove();
        });
    </script>

    <script>
        $('.colorpicker').colorpicker({});
    </script>

    <script>
        $(function() {
            let copyButtonTrans = '{{ trans('global.datatables.copy') }}'
            let csvButtonTrans = '{{ trans('global.datatables.csv') }}'
            let excelButtonTrans = '{{ trans('global.datatables.excel') }}'
            let pdfButtonTrans = '{{ trans('global.datatables.pdf') }}'
            let printButtonTrans = '{{ trans('global.datatables.print') }}'
            let colvisButtonTrans = '{{ trans('global.datatables.colvis') }}'

            let languages = {
                'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json'
            };

            $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, {
                className: 'btn'
            })
            $.extend(true, $.fn.dataTable.defaults, {
                language: {
                    url: languages['{{ app()->getLocale() }}']
                },
                columnDefs: [{
                    orderable: false,
                    className: 'select-checkbox',
                    targets: 0
                }, {
                    orderable: false,
                    searchable: false,
                    targets: -1
                }],
                select: {
                    style: 'multi+shift',
                    selector: 'td:first-child'
                },
                order: [],
                scrollX: true,
                pageLength: 100,
                dom: 'lBfrtip<"actions">',
                buttons: [{
                        extend: 'copy',
                        className: 'btn-default',
                        text: copyButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'csv',
                        className: 'btn-default',
                        text: csvButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'excel',
                        className: 'btn-default',
                        text: excelButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'pdf',
                        className: 'btn-default',
                        text: pdfButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'print',
                        className: 'btn-default',
                        text: printButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    },
                    {
                        extend: 'colvis',
                        className: 'btn-default',
                        text: colvisButtonTrans,
                        exportOptions: {
                            columns: ':visible'
                        }
                    }
                ]
            });

            $.fn.dataTable.ext.classes.sPageButton = '';
        });
    </script>

    <script>
        const input = document.getElementById("colorPicker");
        const input2 = document.getElementById("colorCode");

        setColor();
        input.addEventListener("input", setColor);

        function setColor() {
            input2.value = input.value;
        }
    </script>

    <script>
        var select = document.getElementById('roles');
        // var option = select.options[select.selectedIndex];

        var text = document.getElementById("nama2");
        text.style.display = "none";
        $('#roles').on('change', function() {
            if (this.value == "3") {
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }
        });
        // text.style.display = "none";
        // document.getElementById('name').value = option.value;
        // function mitra(){
        //     alert( option.value );
        //     // if (option.value == "3") {
        //     //     text.style.display = "block";
        //     // } else {
        //     //     text.style.display = "none";
        //     // }
        // }

        // mitra();
    </script>

    @include('sweetalert::alert')

    @yield('scripts')
</body>

</html>
