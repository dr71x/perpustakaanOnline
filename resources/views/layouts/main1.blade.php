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

        <!-- date range picker -->
        <link href="{{ asset('zircos') }}/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        
        {{-- data table --}}
        <link href="{{ asset('zircos') }}/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('zircos') }}/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('zircos') }}/plugins/datatables/fixedHeader.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('zircos') }}/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('zircos') }}/plugins/datatables/scroller.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('zircos') }}/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('zircos') }}/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('zircos') }}/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>

        {{-- upload foto --}}
        <link rel="stylesheet" type="text/css" href="{{ asset('zircos') }}/plugins/dropify/css/dropify.css" />

        <!-- App css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('zircos') }}/assets/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('zircos') }}/assets/css/icons.css" />
        <link rel="stylesheet" type="text/css" href="{{ asset('zircos') }}/assets/css/style.css" />

		<link rel="stylesheet" href="{{ asset('zircos') }}/plugins/switchery/switchery.min.css">

        <script src="{{ asset('zircos') }}/assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo"><span>Zir<span>cos</span></span><i class="mdi mdi-layers"></i></a>
                    <!-- Image logo -->
                    <!--<a href="index.html" class="logo">-->
                        <!--<span>-->
                            <!--<img src="assets/images/logo.png" alt="" height="30">-->
                        <!--</span>-->
                        <!--<i>-->
                            <!--<img src="assets/images/logo_sm.png" alt="" height="28">-->
                        <!--</i>-->
                    <!--</a>-->
                </div>

                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container-fluid">

                        <div class="clearfix">
                            <!-- Navbar-left -->
                             <ul class="nav navbar-left">
                                <li>
                                    <button class="button-menu-mobile open-left waves-effect">
                                        <i class="mdi mdi-menu"></i>
                                    </button>
                                </li>
                                <li class="d-none d-sm-inline-block">
                                    <form role="search" class="app-search">
                                        <input type="text" placeholder="Search..."
                                               class="form-control">
                                        <a href=""><i class="fa fa-search"></i></a>
                                    </form>
                                </li>
                                <li class="d-none d-lg-inline-block">
                                    <a href="#" class="menu-item">New</a>
                                </li>
                                <li class="dropdown d-none d-lg-inline-block">
                                    <a class="dropdown-toggle menu-item" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        English
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)" class="dropdown-item">German</a></li>
                                        <li><a href="javascript:void(0)" class="dropdown-item">French</a></li>
                                        <li><a href="javascript:void(0)" class="dropdown-item">Italian</a></li>
                                        <li><a href="javascript:void(0)" class="dropdown-item">Spanish</a></li>
                                    </ul>
                                </li>
                            </ul>
    
                            <!-- Right(Notification) -->
                            <ul class="nav navbar-right">
                                <li>
                                    <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                        <i class="mdi mdi-bell"></i>
                                        <span class="badge up badge-success badge-pill">4</span>
                                    </a>
    
                                    <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                        <li>
                                            <h5>Notifications</h5>
                                        </li>
                                        <li>
                                            <a href="#" class="user-list-item">
                                                <div class="icon bg-info">
                                                    <i class="mdi mdi-account"></i>
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">New Signup</span>
                                                    <span class="time">5 hours ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="user-list-item">
                                                <div class="icon bg-danger">
                                                    <i class="mdi mdi-comment"></i>
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">New Message received</span>
                                                    <span class="time">1 day ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="user-list-item">
                                                <div class="icon bg-warning">
                                                    <i class="mdi mdi-settings"></i>
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">Settings</span>
                                                    <span class="time">1 day ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="all-msgs text-center">
                                            <p class="m-0"><a href="#">See all Notification</a></p>
                                        </li>
                                    </ul>
                                </li>
    
                                <li>
                                    <a href="#" class="right-menu-item dropdown-toggle" data-toggle="dropdown">
                                        <i class="mdi mdi-email"></i>
                                        <span class="badge up badge-danger badge-pill">8</span>
                                    </a>
    
                                    <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right dropdown-lg user-list notify-list">
                                        <li>
                                            <h5>Messages</h5>
                                        </li>
                                        <li>
                                            <a href="#" class="user-list-item">
                                                <div class="avatar">
                                                    <img src="assets/images/users/avatar-2.jpg" alt="">
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">Patricia Beach</span>
                                                    <span class="desc">There are new settings available</span>
                                                    <span class="time">2 hours ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="user-list-item">
                                                <div class="avatar">
                                                    <img src="assets/images/users/avatar-3.jpg" alt="">
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">Connie Lucas</span>
                                                    <span class="desc">There are new settings available</span>
                                                    <span class="time">2 hours ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="user-list-item">
                                                <div class="avatar">
                                                    <img src="assets/images/users/avatar-4.jpg" alt="">
                                                </div>
                                                <div class="user-desc">
                                                    <span class="name">Margaret Becker</span>
                                                    <span class="desc">There are new settings available</span>
                                                    <span class="time">2 hours ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="all-msgs text-center">
                                            <p class="m-0"><a href="#">See all Messages</a></p>
                                        </li>
                                    </ul>
                                </li>
    
                                <li>
                                    <a href="javascript:void(0);" class="right-bar-toggle right-menu-item">
                                        <i class="mdi mdi-settings"></i>
                                    </a>
                                </li>
    
                                <li class="dropdown user-box">
                                    <a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
                                        <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="rounded-circle user-img">
                                    </a>
    
                                    <ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
                                        <li>
                                            <h5>Hi, John</h5>
                                        </li>
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="ti-user m-r-5"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)" class="dropdown-item"><i class="ti-lock m-r-5"></i> Lock screen</a></li>
                                        <li><a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                               <i class="ti-power-off m-r-5"></i> {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </li>
    
                            </ul> <!-- end navbar-right -->
                        </div>

                    </div><!-- end container -->
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

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-view-dashboard"></i><span class="badge badge-success float-right">2</span> <span> Dashboard </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="index.html">Dashboard 1</a></li>
                                    <li><a href="dashboard_2.html">Dashboard 2</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-invert-colors"></i> <span> Data Master </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('anggota') }}"><i class="fas fa-user-graduate"></i> Data Anggota</a></li>
                                    <li><a href="#"><i class="fab fa-buromobelexperte"></i> Data Kelas</a></li>
                                    <li><a href="#"><i class="fas fa-chalkboard-teacher"></i> Data Guru</a></li>
                                    <li><a href="#"><i class="fas fa-book"></i> Data Buku</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i><span> Admin UI </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="admin-sweet-alert2.html">Sweet Alert 2</a></li>
                                    <li><a href="admin-widgets.html">Widgets</a></li>
                                    <li><a href="admin-nestable.html">Nestable List</a></li>
                                    <li><a href="admin-rangeslider.html">Range Slider</a></li>
                                    <li><a href="admin-ratings.html">Ratings</a></li>
                                    <li><a href="admin-animation.html">Animation</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="mdi mdi-calendar"></i><span> Calendar </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email"></i><span> Email </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="email-inbox.html"> Inbox</a></li>
                                    <li><a href="email-read.html"> Read Mail</a></li>
                                    <li><a href="email-compose.html"> Compose Mail</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-heart-outline"></i><span> Icons </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="icons-colored.html">Colored Icons</a></li>
                                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                                    <li><a href="icons-ionicons.html">Ion Icons</a></li>
                                    <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                    <li><a href="icons-themifyicon.html">Themify Icons</a></li>
                                    <li><a href="icons-typicons.html">Typicons</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-diamond-stone"></i><span class="badge badge-info float-right">New</span> <span> Forms </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-advanced.html">Form Advanced</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-pickers.html">Form Pickers</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="form-mask.html">Form Masks</a></li>
                                    <li><a href="form-summernote.html">Summernote</a></li>
                                    <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                                    <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-layouts.html">Tables Layouts</a></li>
                                    <li><a href="tables-datatable.html">Data Table</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-tablesaw.html">Tablesaw Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Extra</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-chart-arc"></i><span> Charts </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="chart-flot.html">Flot Chart</a></li>
                                    <li><a href="chart-morris.html">Morris Chart</a></li>
                                    <li><a href="chart-google.html">Google Chart</a></li>
                                    <li><a href="chart-chartist.html">Chartist Charts</a></li>
                                    <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                                    <li><a href="chart-c3.html">C3 Chart</a></li>
                                    <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                    <li><a href="chart-knob.html">Jquery Knob</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-map"></i> <span> Maps </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="maps-google.html">Google Maps</a></li>
                                    <li><a href="maps-vector.html">Vector Maps</a></li>
                                    <li><a href="maps-mapael.html">Mapael Maps</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-google-pages"></i><span> Pages </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="page-starter.html">Starter Page</a></li>
                                    <li><a href="page-login.html">Login</a></li>
                                    <li><a href="page-register.html">Register</a></li>
                                    <li><a href="page-logout.html">Logout</a></li>
                                    <li><a href="page-recoverpw.html">Recover Password</a></li>
                                    <li><a href="page-lock-screen.html">Lock Screen</a></li>
                                    <li><a href="page-confirm-mail.html">Confirm Mail</a></li>
                                    <li><a href="page-404.html">Error 404</a></li>
                                    <li><a href="page-404-alt.html">Error 404-alt</a></li>
                                    <li><a href="page-500.html">Error 500</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-gift"></i><span> Extras </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="extras-profile.html">Profile</a></li>
                                    <li><a href="extras-sitemap.html">Sitemap</a></li>
                                    <li><a href="extras-about.html">About Us</a></li>
                                    <li><a href="extras-contact.html">Contact</a></li>
                                    <li><a href="extras-members.html">Members</a></li>
                                    <li><a href="extras-timeline.html">Timeline</a></li>
                                    <li><a href="extras-invoice.html">Invoice</a></li>
                                    <li><a href="extras-search-result.html">Search Result</a></li>
                                    <li><a href="extras-emailtemplate.html">Email Template</a></li>
                                    <li><a href="extras-maintenance.html">Maintenance</a></li>
                                    <li><a href="extras-coming-soon.html">Coming Soon</a></li>
                                    <li><a href="extras-faq.html">FAQ</a></li>
                                    <li><a href="extras-gallery.html">Gallery</a></li>
                                    <li><a href="extras-pricing.html">Pricing</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">More</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-comment-text-outline"></i><span> Blog </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="blogs-dashboard.html">Dashboard</a></li>
                                    <li><a href="blogs-blog-list.html">Blog List</a></li>
                                    <li><a href="blogs-blog-column.html">Blog Column</a></li>
                                    <li><a href="blogs-blog-post.html">Blog Post</a></li>
                                    <li><a href="blogs-blog-add.html">Add Blog</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-home-map-marker"></i><span> Real Estate </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="real-estate-dashboard.html">Dashboard</a></li>
                                    <li><a href="real-estate-list.html">Property List</a></li>
                                    <li><a href="real-estate-column.html">Property Column</a></li>
                                    <li><a href="real-estate-detail.html">Property Detail</a></li>
                                    <li><a href="real-estate-agents.html">Agents</a></li>
                                    <li><a href="real-estate-profile.html">Agent Details</a></li>
                                    <li><a href="real-estate-add.html">Add Property</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                    <div class="help-box">
                        <h5 class="text-muted m-t-0">For Help ?</h5>
                        <p class=""><span class="text-custom">Email:</span> <br/> support@support.com</p>
                        <p class="m-b-0"><span class="text-custom">Call:</span> <br/> (+123) 123 456 789</p>
                    </div>

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
                    2016 - 2019 © Zircos <span class="d-none d-sm-inline-block">theme by Coderthemes.</span>
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Settings</h4>
                <div class="setting-list nicescroll">
                    <div class="row m-t-20">
                        <div class="col-8">
                            <h5 class="m-0">Notifications</h5>
                            <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                        </div>
                        <div class="col-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-8">
                            <h5 class="m-0">API Access</h5>
                            <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                        </div>
                        <div class="col-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-8">
                            <h5 class="m-0">Auto Updates</h5>
                            <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                        </div>
                        <div class="col-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-8">
                            <h5 class="m-0">Online Status</h5>
                            <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                        </div>
                        <div class="col-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        {{-- foto --}}
        <script src="{{ asset('zircos') }}/plugins/dropify/js/dropify.min.js"></script>

        <!-- page specific js -->
        <script src="{{ asset('zircos') }}/assets/pages/jquery.dropify.init.js"></script>

        <!-- jQuery  -->
        <script src="{{ asset('zircos') }}/assets/js/jquery.min.js"></script>
        <script src="{{ asset('zircos') }}/assets/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('zircos') }}/assets/js/detect.js"></script>
        <script src="{{ asset('zircos') }}/assets/js/fastclick.js"></script>
        <script src="{{ asset('zircos') }}/assets/js/jquery.blockUI.js"></script>
        <script src="{{ asset('zircos') }}/assets/js/waves.js"></script>
        <script src="{{ asset('zircos') }}/assets/js/jquery.slimscroll.js"></script>
        <script src="{{ asset('zircos') }}/assets/js/jquery.scrollTo.min.js"></script>
        <script src="{{ asset('zircos') }}//plugins/switchery/switchery.min.js"></script>

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


        <!-- init -->
        <script src="{{ asset('zircos') }}/assets/pages/jquery.datatables.init.js"></script>
        <script>
            $(document).ready(function () {
                $('#datatable').dataTable();
                $('#datatable-keytable').DataTable({keys: true});
                $('#datatable-responsive').DataTable();
                $('#datatable-colvid').DataTable({
                    "dom": 'C<"clear">lfrtip',
                    "colVis": {
                        "buttonText": "Change columns"
                    }
                });
                $('#datatable-scroller').DataTable({
                    ajax: "../plugins/datatables/json/scroller-demo.json",
                    deferRender: true,
                    scrollY: 380,
                    scrollCollapse: true,
                    scroller: true
                });
                var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
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
        <script src="{{ asset('zircos') }}/plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="{{ asset('zircos') }}/plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="{{ asset('zircos') }}/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="{{ asset('zircos') }}/plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="{{ asset('zircos') }}/plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="{{ asset('zircos') }}/plugins/flot-chart/jquery.flot.selection.js"></script>
        <script src="{{ asset('zircos') }}/plugins/flot-chart/jquery.flot.crosshair.js"></script>

        <script src="{{ asset('zircos') }}/plugins/moment/moment.js"></script>
        <script src="{{ asset('zircos') }}/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>


        <!-- Dashboard init -->
        <script src="{{ asset('zircos') }}/assets/pages/jquery.dashboard_2.js"></script>

        <!-- App js -->
        <script src="{{ asset('zircos') }}/assets/js/jquery.core.js"></script>
        <script src="{{ asset('zircos') }}/assets/js/jquery.app.js"></script>

        <script>
            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
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
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
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
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function (start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });
        </script>

    </body>
</html>