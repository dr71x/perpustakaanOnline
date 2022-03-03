<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('zircos') }}/assets/images/logo.png">
    <!-- App title -->
    <title>Perpustakaan Online SMPN 2 Kota Jambi</title>

    <!-- date range picker -->
    <link href="{{ asset('zircos') }}/plugins/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('zircos') }}/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('zircos') }}/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet" />

    {{-- data table --}}
    <link href="{{ asset('zircos') }}/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('zircos') }}/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('zircos') }}/plugins/datatables/fixedHeader.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('zircos') }}/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('zircos') }}/plugins/datatables/scroller.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('zircos') }}/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('zircos') }}/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('zircos') }}/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet"
        type="text/css" />

    {{-- fancybox --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />

    <!-- Jquery dropify css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('zircos') }}/plugins/dropify/css/dropify.css" />

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('zircos') }}/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('zircos') }}/assets/css/icons.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('zircos') }}/assets/css/style.css" />

    <link rel="stylesheet" href="{{ asset('zircos') }}/plugins/switchery/switchery.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <script src="{{ asset('zircos') }}/assets/js/modernizr.min.js"></script>

</head>


<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="{{ url('/home') }}" class="logo"><img

                        src="{{ asset('zircos') }}/assets/images/logo.png" width="30px" alt="">

                    SMPN 2 Jambi</a>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
                <div class="container-fluid">

                    <div class="clearfix">
                        <!-- Navbar-left -->
                        <ul class="nav navbar-left">

                        </ul>

                        <!-- Right(Notification) -->
                        <ul class="nav navbar-right">

                            <li class="dropdown user-box">
                                <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown"
                                    aria-expanded="true">
                                    @if (\Auth::user()->level == 'admin')
                                        <img src="{{ asset('zircos') }}/assets/images/users/avatar1.jpg"
                                            alt="user-img" class="rounded-circle user-img">
                                    @elseif (\Auth::user()->level == 'guru')
                                        <img src="{{ \Storage::url(\Auth::user()->gambar) }}" alt="user-img"
                                            class="rounded-circle user-img">
                                    @elseif (\Auth::user()->level == 'anggota')
                                        <img src="{{ \Storage::url(\Auth::user()->gambar) }}" alt="user-img"
                                            class="rounded-circle user-img">
                                    @endif
                                </a>

                                <ul
                                    class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                    <li>
                                        <h5>{{ \Auth::user()->name }}</h5>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                            <i class="ti-power-off m-r-5"></i> {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>

                        </ul> <!-- end navbar-right -->
                    </div>

                </div><!-- ephp artisan servesnd container -->
            </div><!-- end navbar -->
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">Navigation</li>
                        @if (\Auth::user()->level === 'admin')
                            <li class="has_sub">
                                <a href="{{ route('home') }}" class="waves-effect"><i
                                        class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fas fa-table"></i>
                                    <span> Data Master </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('anggota') }}"><i class="fas fa-user-graduate"></i> Data
                                            Siswa</a></li>
                                    <li><a href="{{ route('guru') }}"><i class="fas fa-chalkboard-teacher"></i> Data
                                            Guru</a></li>
                                    <li><a href="{{ route('kelas') }}"><i class="fab fa-buromobelexperte"></i> Data
                                            Kelas</a></li>
                                    <li><a href="{{ route('buku') }}"><i class="fas fa-book"></i> Data Buku</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="fas fa-digital-tachograph"></i> Data Peminjaman
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('transaksi') }}"><i class="fas fa-file-upload"></i>
                                            Peminjaman Siswa</a></li>
                                    <li><a href="{{ route('transaksiGuru') }}"><i class="fas fa-file-alt"></i>
                                            Peminjaman Guru</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect">
                                    <i class="fas fa-digital-tachograph"></i> Laporan
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('lapGuru') }}"><i class="fas fa-file-upload"></i>
                                            Laporan Guru</a></li>
                                    <li><a href="{{ route('historiSiswa') }}"><i class="fas fa-file-alt"></i>
                                            Laporan Siswa</a></li>
                                </ul>
                            </li>
                        @elseif (\Auth::user()->level == 'guru')
                            <li class="has_sub">
                                <a href="{{ route('home') }}" class="waves-effect"><i
                                        class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                            </li>
                            <li class="has_sub">
                                <a href="{{ route('guruBuku') }}" class="waves-effect"><i
                                        class="fas fa-book-open"></i>
                                    <span> Pinjam Buku </span> </a>
                            </li>
                            <li class="has_sub">
                                <a href="{{ route('guruTransaksi') }}" class="waves-effect"><i
                                        class="fas fa-book-open"></i>
                                    <span> Transaksi Buku</span> </a>
                            </li>
                            <li class="has_sub">
                                <a href="{{ route('guruHistori') }}" class="waves-effect"><i
                                        class="fas fa-book-open"></i>
                                    <span> Histori Transaksi</span> </a>
                            </li>
                        @elseif (\Auth::user()->level == 'anggota')
                            <li class="has_sub">
                                <a href="{{ route('home') }}" class="waves-effect"><i
                                        class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                            </li>
                            <li class="has_sub">
                                <a href="{{ route('SiswaBuku') }}" class="waves-effect"><i
                                        class="fas fa-book-open"></i>
                                    <span> Pinjam Buku </span> </a>
                            </li>
                            <li class="has_sub">
                                <a href="{{ route('siswaTransaksi') }}" class="waves-effect"><i
                                        class="fas fa-book-open"></i>
                                    <span> Transaksi Buku</span> </a>
                            </li>
                            <li class="has_sub">
                                <a href="{{ route('siswaHistori') }}" class="waves-effect"><i
                                        class="fas fa-book-open"></i>
                                    <span> Histori Transaksi</span> </a>
                            </li>
                        @endif
                    </ul>
                </div>
                <!-- Sidebar -->
                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    @yield('content')

                </div> <!-- container -->

            </div> <!-- content -->

            <footer class="footer">
                SMPN 2 Kota Jambi
            </footer>

        </div>


        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->


        <!-- Right Sidebar -->
        <!-- /Right-bar -->

    </div>
    <!-- END wrapper -->



    <script>
        var resizefunc = [];
    </script>


    {{-- fancybox --}}
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    {{-- sweetalert --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"
        integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    @yield('script')
    <script>
        @if (session('Proses'))
            Swal.fire({
            title: 'Proses Selesai!',
            text: '{{ session('Proses') }}',
            icon: 'success',
            showClass: {
            popup: 'animate__animeted animate__rubberBand'
            },
            hideClass: {
            popup: 'animate__animated animate__bounceOut'
            },
            })
        @endif

        @if (session('success'))
            Swal.fire({
            icon: 'success',
            title: 'Proses Berhasil !!',
            text: '{{ session('success') }}',
            showClass: {
            popup:'animate__animated animate__rubberBand'
            },
            hideClass: {
            popup:'animate__animated animate__bounceOutDown'
            },
            })
        @endif
        @if (session('errors'))
            Swal.fire(
            title: 'MAAF!',
            text: 'Data Tidak Dapat Diproses',
            icon: 'error',
            showClass: {
            popup: 'animate__animated animate__jello'
            },
            hideClass: {
            popup: 'animate__animated animate__fadeOutBottomLeft'
            },
            )
        @endif

        @if (session('gagal'))
            Swal.fire({
            title: 'MAAF!',
            text: '{{ session('gagal') }}',
            icon: 'error',
            showClass: {
            popup:'animate__animated animate__backInRight'
            },
            hideClass: {
            popup: 'animate__animated animate__bounceOutRight'
            },
            }
            )
        @endif

        $(document).ready(function() {
            $('.tolak').on('click', function() {
                var link = $(this).attr('data-action');
                Swal.fire({
                    title: 'Apakah Anda Yakin?',
                    text: "Akan Menolak Transaksi Ini!!",
                    icon: 'warning',
                    showClass: {
                        popup: 'animate__animated animate__rubberBand'
                    },
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Jangan!!',
                    confirmButtonText: 'Yes, Tolak!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = link
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'Transaksi Tidak Jadi Dibatalkan',
                            showConfirmButton: false,
                            timer: 1500,
                            showClass: {
                                popup: 'animate__animated animate__flipInX'
                            },
                            hideClass: {
                                popup: 'animate__animated animate__backOutRight'
                            },
                        })
                    }
                });
            });
        });

        $(document).ready(function() {
            $('.komfirmasi').on('click', function() {
                var link = $(this).attr('data-action');
                Swal.fire({
                    title: 'Apakah Anda Yakin?',
                    text: "Akan mengkonfirmasi Transaksi Ini!!",
                    icon: 'warning',
                    showClass: {
                        popup: 'animate__animated animate__rubberBand'
                    },
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Jangan!!',
                    confirmButtonText: 'Yes, konfirmasi!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = link
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'Transaksi Tidak Jadi Konfirmasi',
                            showConfirmButton: false,
                            timer: 1500,
                            showClass: {
                                popup: 'animate__animated animate__flipInX'
                            },
                            hideClass: {
                                popup: 'animate__animated animate__backOutRight'
                            },
                        })
                    }
                });
            });
        })

        $(document).ready(function() {
            $('.hapus').on('click', function() {
                var test = $(this).attr('data-action')
                var nama = $(this).attr('data-nama');
                Swal.fire({
                    title: 'Apaka Anda Yakin?',
                    text: "Akan Menghapus Data " + nama,
                    icon: 'question',
                    showClass: {
                        popup: 'animate__animated animate__swing'
                    },
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = test
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'Baiklah',
                            text: 'Data ' + nama + ' Tidak Jadi Dihapus',
                            showClass: {
                                popup: 'animate__animated animate__shakeY'
                            },
                            hideClass: {
                                popup: 'animate__animated animate__zoomOut'
                            },
                        })
                    }
                });
            });
        });
        $(document).ready(function() {
            $('.kembali').on('click', function() {
                var test = $(this).attr('data-action')
                Swal.fire({
                    title: 'Apaka Anda Yakin?',
                    text: "Akan Melakukan Proses Ini ",
                    icon: 'question',
                    showClass: {
                        popup: 'animate__animated animate__bounceInDown'
                    },
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Process it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = test
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'Baiklah',
                            text: 'Buku Tidak Jadi Di Kembalikan',
                            showClass: {
                                popup: 'animate__animated animate__bounceInLeft'
                            },
                            hideClass: {
                                popup: 'animate__animated animate__zoomOut'
                            },
                        })
                    }
                });
            });
        });
        $(document).ready(function() {
            $('.pinjam').on('click', function() {
                var test = $(this).attr('data-action')
                var nama = $(this).attr('data-nama')
                Swal.fire({
                    title: 'Apaka Anda Yakin?',
                    text: "Akan Meminjam Buku " + nama,
                    icon: 'question',
                    showClass: {
                        popup: 'animate__animated animate__rubberBand'
                    },
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Process it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location = test
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'Baiklah',
                            text: 'Anda Tidak Jadi Meminjam Buku ' + nama,
                            showClass: {
                                popup: 'animate__animated animate__bounceInLeft'
                            },
                            hideClass: {
                                popup: 'animate__animated animate__zoomOut'
                            },
                        })
                    }
                });
            })
        });
    </script>
    <!-- jQuery  -->
    <script src="{{ asset('zircos') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('zircos') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('zircos') }}/assets/js/detect.js"></script>
    <script src="{{ asset('zircos') }}/assets/js/fastclick.js"></script>
    <script src="{{ asset('zircos') }}/assets/js/jquery.blockUI.js"></script>
    <script src="{{ asset('zircos') }}/assets/js/waves.js"></script>
    <script src="{{ asset('zircos') }}/assets/js/jquery.slimscroll.js"></script>
    <script src="{{ asset('zircos') }}/assets/js/jquery.scrollTo.min.js"></script>
    <script src="{{ asset('zircos') }}/plugins/switchery/switchery.min.js"></script>

    <script src="{{ asset('zircos') }}/plugins/dropify/js/dropify.min.js"></script>

    <!-- page specific js -->
    <script src="{{ asset('zircos') }}/assets/pages/jquery.dropify.init.js"></script>

    {{-- data table --}}
    <script src="{{ asset('zircos') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('zircos') }}/plugins/datatables/dataTables.bootstrap4.min.js"></script>

    <script src="{{ asset('zircos') }}/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="{{ asset('zircos') }}/plugins/datatables/buttons.bootstrap4.min.js"></script>

    <script src="{{ asset('zircos') }}/plugins/datatables/jszip.min.js"></script>
    <script src="{{ asset('zircos') }}/plugins/datatables/pdfmake.min.js"></script>
    <script src="{{ asset('zircos') }}/plugins/datatables/vfs_fonts.js"></script>

    <script src="{{ asset('zircos') }}/plugins/datatables/buttons.html5.min.js"></script>
    <script src="{{ asset('zircos') }}/plugins/datatables/buttons.print.min.js"></script>

    <script src="{{ asset('zircos') }}/plugins/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="{{ asset('zircos') }}/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="{{ asset('zircos') }}/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="{{ asset('zircos') }}/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('zircos') }}/plugins/datatables/dataTables.scroller.min.js"></script>
    <script src="{{ asset('zircos') }}/plugins/datatables/dataTables.colVis.js"></script>
    <script src="{{ asset('zircos') }}/plugins/datatables/dataTables.fixedColumns.min.js"></script>

    {{-- select2 --}}
    <script src="{{ asset('zircos') }}/plugins/multiselect/js/jquery.multi-select.js"></script>
    <script src="{{ asset('zircos') }}/plugins/jquery-quicksearch/jquery.quicksearch.js"></script>
    <script src="{{ asset('zircos') }}/plugins/select2/js/select2.min.js"></script>
    <script src="{{ asset('zircos') }}/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
    {{-- <script src="{{ asset('zircos') }}/plugins/autocomplete/jquery.mockjax.js"></script>
    <script src="{{ asset('zircos') }}/plugins/autocomplete/jquery.autocomplete.min.js"></script>
    <script src="{{ asset('zircos') }}/assets/pages/jquery.autocomplete.init.js"></script> --}}

    <script src="{{ asset('zircos') }}/assets/pages/jquery.form-advanced.init.js"></script>



    <!-- init -->
    <script src="{{ asset('zircos') }}/assets/pages/jquery.datatables.init.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').dataTable();
            $('#datatable-keytable').DataTable({
                keys: true
            });
            $('#datatable-responsive').DataTable();
            $('#datatable-colvid').DataTable({
                "dom": 'C<"clear">lfrtip',
                "colVis": {
                    "buttonText": "Change columns"
                }
            });
            $('#datatable-scroller').DataTable({
                ajax: "{{ asset('zircos') }}/plugins/datatables/json/scroller-demo.json",
                deferRender: true,
                scrollY: 380,
                scrollCollapse: true,
                scroller: true
            });
            var table = $('#datatable-fixed-header').DataTable({
                fixedHeader: true
            });
            var table = $('#datatable-fixed-col').DataTable({
                scrollY: "300px",
                scrollX: true,
                scrollCollapse: true,
                paging: false,
                fixedColumns: {
                    leftColumns: 1,
                    rightColumns: 1
                }
            });
        });
        TableManageButtons.init();
    </script>

    <!-- Counter js  -->
    <script src="{{ asset('zircos') }}/plugins/waypoints/jquery.waypoints.min.js"></script>
    <script src="{{ asset('zircos') }}/plugins/counterup/jquery.counterup.min.js"></script>

    <!-- Flot chart js -->
    {{-- <script src="{{ asset('zircos') }}/plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="{{ asset('zircos') }}/plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="{{ asset('zircos') }}/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="{{ asset('zircos') }}/plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="{{ asset('zircos') }}/plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="{{ asset('zircos') }}/plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="{{ asset('zircos') }}/plugins/flot-chart/jquery.flot.crosshair.js"></script> --}}

    <script src="{{ asset('zircos') }}/plugins/moment/moment.js"></script>
    <script src="{{ asset('zircos') }}/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>


    <!-- Dashboard init -->
    {{-- <script src="{{ asset('zircos') }}/assets/pages/jquery.dashboard_2.js"></script> --}}

    <!-- App js -->
    <script src="{{ asset('zircos') }}/assets/js/jquery.core.js"></script>
    <script src="{{ asset('zircos') }}/assets/js/jquery.app.js"></script>

    <script>
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format(
            'MMMM D, YYYY'));
        $('#reportrange').daterangepicker({
            format: 'MM/DD/YYYY',
            startDate: moment().subtract(29, 'days'),
            endDate: moment(),
            minDate: '01/01/2012',
            maxDate: '12/31/2016',
            dateLimit: {
                days: 60
            },
            showDropdowns: true,
            showWeekNumbers: true,
            timePicker: false,
            timePickerIncrement: 1,
            timePicker12Hour: true,
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
                    'month')]
            },
            opens: 'left',
            drops: 'down',
            buttonClasses: ['btn', 'btn-sm'],
            applyClass: 'btn-success',
            cancelClass: 'btn-default',
            separator: ' to ',
            locale: {
                applyLabel: 'Submit',
                cancelLabel: 'Cancel',
                fromLabel: 'From',
                toLabel: 'To',
                customRangeLabel: 'Custom',
                daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
                monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                    'October', 'November', 'December'
                ],
                firstDay: 1
            }
        }, function(start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        });
    </script>

</body>

</html>
