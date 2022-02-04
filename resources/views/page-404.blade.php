<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!-- App title -->
    <title>Perpustakaan Online SMPN 2 Kota Jambi</title>

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('zircos') }}/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('zircos') }}/assets/css/icons.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('zircos') }}/assets/css/style.css" />

    <script src="{{ asset('zircos') }}/assets/js/modernizr.min.js"></script>

</head>


<body class="account-pages-bg">

    <!-- HOME -->
    <section>
        <div class="container-alt">
            <div class="row">
                <div class="col-sm-12 text-center">

                    <div class="wrapper-page">
                        <img src="{{ asset('zircos') }}/assets/images/animat-search-color.gif" alt="" height="250px">
                        <h2 class="text-uppercase text-danger">Akses Terlarang</h2>
                        <p class="text-muted mb-2">Maaf Anda Tidak Bisa Mengakses Website Ini, Silahkan Kembali Ke
                            Halaman Yang Dapat Anda Akses</p>

                        <a class="btn btn-success waves-effect waves-light m-t-20" href="{{ route('home') }}"> Return
                            Home</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->

    <script>
        var resizefunc = [];
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

    <!-- App js -->
    <script src="{{ asset('zircos') }}/assets/js/jquery.core.js"></script>
    <script src="{{ asset('zircos') }}/assets/js/jquery.app.js"></script>

</body>

</html>
