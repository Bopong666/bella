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
        <header class="topbar " data-navbarbg="skin5" style="height: auto; padding-bottom: 0.1rem;">
            <h3 class="text-white text-center pt-md-2">Selamat Datang!! <br>REKOMENDASI BENIH TANAMAN SEMANGKA DENGAN
                METODE WP DAN TOPSIS DALAM SISTEM PENDUKUNG KEPUTUSAN BUDIDAYA SEMANGKA </h3>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper" style="background-image: url(https://id-test-11.slatic.net/p/41cf4dd57496a97c731532bac51ab15d.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover; margin: auto;">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <div class="row justify-content-center">
                    <div class="card col-md-5 p-2 me-md-4" style="border-radius: 0.4rem;">
                        <h4>SPK(Sistem Pendukung Keputusan)</h4>
                        <p>
                            Pada dasarnya Sistem Pendukung Keputusan atau dikenal dengan istilah Decision Support System
                            (DSS)
                            ini merupakan pengembangan lebih lanjut dari sistem informasi manajemen terkomputerisasi
                            yang
                            dirancang sedemikian rupa sehingga bersifat interaktif dengan pemakainya. SPK dapat
                            memberikan
                            kerangka keputusan yang fleksibel, aspek interaktif yang dimaksudkan untuk memudahkan
                            integrasi
                            berbagai elemen proses pengambilan keputusan, termasuk sebagai proses, kebijakan, analisis
                            teknis,
                            serta keahlian dan wawasan manajemen (Sari, 2018). </p>
                    </div>
                    <div class="card col-md-5 p-2" style="border-radius: 0.4rem;">
                        <h4>Buah Semangka</h4>
                        <p>Semangka merupakan salah satu tanaman budidaya hortikultura yang cukup penting di daerah
                            subtropik karena tanaman semangka dapat memberikan keuntungan yang cukup besar. Semangka
                            termasuk tanaman semusim berbentuk terna yang merambat dengan menggunakan sulur atau alat
                            pembelitnya. Semangka mengandung zat yang sangat efektif membunuh sel kanker. Selain itu,
                            semangka diduga mengandung zat yang dapat meningkatkan sistem kekebalan tubuh dengan
                            meningkatkan aktivitas sel darah putih dan merangsang sel darah yang dapat menyerap mikroba
                            untuk membunuh sel penyebab kanker, semangka juga memiliki kalori yang sangat sedikit
                            (Sunyoto dkk., 2006).</p>
                    </div>

                    <div class="text-center mt-3">
                        <a href="{{ url('/login') }}" class="btn btn-md btn-primary">Login</i></a>
                        <p class="mt-2 text-white">Belum punya Akun? <a href="{{ url('/register') }}">Register</i></a>
                        </p>
                    </div>
                </div>

                <!-- ============================================================== -->

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-white">
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