<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SPK Semangka</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">



    <link rel="canonical" href="https://www.wrappixel.com/templates/xtreme-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="{{ asset('admin/assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('admin/dist/css/style.min.css') }}" rel="stylesheet">

</head>

<body class="antialiased">
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar " data-navbarbg="skin5">
            <h1 class="text-white text-center pt-md-2">Rekomendasi Benih Tanaman Semangka</h1>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar pt-md-5">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav mt-md-5">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a
                                class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->routeIs('home') ? 'active' : '' }}"
                                href="{{ url('/home') }}" aria-expanded="false"><i class="mdi mdi-home"></i><span
                                    class="hide-menu">Home</span></a></li>
                        <li class="sidebar-item"> <a
                                class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->routeIs('kriteria') ? 'active' : '' }}"
                                href="{{ url('/kriteria') }}" aria-expanded="false"><i
                                    class="mdi mdi-border-all"></i><span class="hide-menu">Kriteria</span></a></li>
                        <li class="sidebar-item"> <a
                                class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->routeIs('alternatif') ? 'active' : '' }}"
                                href="{{ url('/alternatif') }}" aria-expanded="false"><i class="mdi mdi-cube"></i><span
                                    class="hide-cube">Alternatif</span></a></li>
                        <li class="sidebar-item"> <a
                                class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->routeIs('output') ? 'active' : '' }}"
                                href="{{ url('/output') }}" aria-expanded="false"><i class="mdi mdi-file"></i><span
                                    class="hide-menu">Output</span></a></li>
                        <li class="sidebar-item"> <a
                                class="sidebar-link waves-effect waves-dark sidebar-link {{ request()->routeIs('profil') ? 'active' : '' }}"
                                href="{{ url('/profil') }}" aria-expanded="false"><i class="mdi mdi-account"></i><span
                                    class="hide-menu">Profil</span></a></li>
                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h5>Hai, {{ Auth::user()->username }}</h5>
                    </div>
                    <div class="col-7">
                        <div class="text-end upgrade-btn">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class="btn btn-danger text-white ">
                                Logout </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title text-center text-primary">Panduan Pemilihan Bibit Semangka</h4>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-md-row justify-content-evenly row">
                                    <!-- title -->
                                    <div class="card border-primary col-md-4">
                                        <div class="card-header">
                                            <h5 class="card-title text-center">Menu Beranda</h5>
                                        </div>
                                        <div class="card-body">
                                            <!-- title -->
                                            <p>
                                                Menu home adalah menu yang pertama kali ditampilkan ketika admin maupun
                                                petani/masyarakat berhasil melakukan login serta melihat informasi
                                                mengenai
                                                panduan pengguna</p>
                                        </div>
                                    </div>
                                    <div class="card col-md-4">
                                        <div class="card-header">
                                            <h5 class="card-title text-center">Menu Data Kriteria</h5>
                                        </div>
                                        <div class="card-body">
                                            <!-- title -->
                                            <p>
                                                Menu data kriteria adalah menu yang digunakan untuk melihat data
                                                kriteria,
                                                tipe kriteria, dan bobot kriteria serta sub kriteria.
                                            </p>

                                        </div>
                                    </div>
                                    <div class="card col-md-4">
                                        <div class="card-header">
                                            <h5 class="card-title text-center">Menu Data Alternatif</h5>
                                        </div>
                                        <div class="card-body">
                                            <!-- title -->
                                            <p>
                                                Menu data alternatif adalah menu yang digunakan untuk melihat data
                                            </p>

                                        </div>
                                    </div>
                                    <div class="card col-md-4">
                                        <div class="card-header">
                                            <h5 class="card-title text-center">Menu Output</h5>
                                        </div>
                                        <div class="card-body">
                                            <!-- title -->
                                            <p>Menu output adalah menu yang menampilkan hasil perhitungan dengan metode
                                                WP
                                                dan SAW</p>

                                        </div>
                                    </div>
                                    <div class="card col-md-4">
                                        <div class="card-header">
                                            <h5 class="card-title text-center">Menu Profil</h5>
                                        </div>
                                        <div class="card-body">
                                            <!-- title -->
                                            <p>Menu profil adalah menu yang menampilkan data user login serta untuk
                                                mengubah
                                                data tersebut</p>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    <footer class="footer text-center">
        Made by Curiosity.
    </footer>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <script src="{{ asset('admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/app-style-switcher.js') }}"></script>
    <!--Wave Effects -->
    {{-- <script src="{{ asset('admin/dist/js/waves.js">
        </s') }}cript> --}}
    <!--Menu sidebar -->
    <script src="{{ asset('admin/dist/js/sidebarmenu.js') }}">
    </script>
    <!--Custom JavaScript -->
    <script src="{{ asset('admin/dist/js/custom.js') }}"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="{{ asset('admin/assets/libs/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js' )}}">
    </script>
    <script src="{{ asset('admin/dist/js/pages/dashboards/dashboard1.js') }}"></script>
</body>

</html>