<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="/assets/img/paru3.png">
    <title>Liceria - Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link href="/assets/datatables/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">

    
    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/datatables/jquery.dataTables.js"></script>  
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <!-- Theme style -->
    <link rel="stylesheet" href="/assets/css/adminlte.min.css">
    <!-- overlayScrollbars -->


    <style>

select.is-invalid {
    background-image: none !important;
}
        /* body {
            font-size: 0.8rem;
        }
        .main-sidebar, .main-sidebar::before {
        width: 180px;
        }
        .content-wrapper, .main-footer, .main-header {
        transition: margin-left .3s ease-in-out;
        margin-left: 180px;
        z-index: 3000;
        }
        .layout-fixed .brand-link {
        width: 180px;
        } */

    .bg-yellow, .bg-yellow>a {
    color: #ffffff!important;
    }   
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" id="pushmenu" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                {{-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> --}}
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <img src="assets/img/user.jpg" class="img-circle mr-1" width="30" height="30  "> <span>{{auth()->user()->nama}}</span>
                        <i class="right fas fa-angle-down"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <img src="assets/img/user.jpg" class="img-circle mr-1" width="30" height="30">
                            {{ __('Logout') }}
                            <i class="fas fa-power-off mt-1 float-right" style="margin-top: .45rem!important;"></i>
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/home" class="brand-link">
                <img src="/assets/img/paru3.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">Liceria - Admin</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="/assets/img/user.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info" style="color: #c2c7d0;">
                        {{auth()->user()->nama}} 
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">

                        <li class="nav-item has-treeview">
                            <a href="/home" class="nav-link" id="home">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Home
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="/admin" class="nav-link" id="admin">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Admin
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="/dokter" class="nav-link" id="dokter">
                                <i class="nav-icon fas fa-user-md"></i>
                                <p>
                                    Dokter Spesialis Paru
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview " id="penyakitmenu">
                            <a href="/penyakit" class="nav-link" id="datapenyakit">
                                <i class="nav-icon fas fa-laptop-medical"></i>
                                <p>
                                    Sistem Pakar
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview ml-4">
                                <li class="nav-item">
                                    <a href="/penyakit" class="nav-link" id="penyakit">
                                        <i class="fas fa-notes-medical nav-icon"></i>
                                        <p>Penyakit</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/gejala" class="nav-link" id="gejala">
                                        <i class="fas fa-clipboard-list nav-icon"></i>
                                        <p>Gejala</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/pengetahuan" class="nav-link" id="pengetahuan">
                                        <i class="fas fa-list nav-icon"></i>
                                        <p>Pengetahuan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li class="nav-item has-treeview">
                            <a href="/diagnosa" class="nav-link" id="diagnosa">
                                <i class="nav-icon fas fa-stethoscope"></i>
                                <p>
                                    Diagnosis
                                </p>
                            </a>
                        </li> --}}
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            
            @yield('content')

        </div>

        @include('layouts.modal')

  
    </div>
 
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> 
    
    <script src="/assets/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/assets/js/demo.js"></script>

    <script src="{{ asset('assets1/vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>

    {{-- <script src="{{ asset('assets1/js/ie10-viewport-bug-workaround.js') }}"></script> --}}

    <script src="{{ asset('assets1/js/app.js') }}"></script>
       

    @stack('scripts')

     
    <script>
        $(document).ready(function () {
            $("#pushmenu").click(function () {
                // console.log('test');
                if ($("#penyakitmenu").hasClass("menu-open")) {
                    $("#penyakitmenu").removeClass("menu-open");
                    $("#penyakitmenu ul").css("display", "none");
                } else {
                    if ($("#datapenyakit").hasClass("active")) {
                        $("#penyakitmenu").addClass("menu-open");
                    }
                }
            });
        });

    </script>

</body>

</html>
