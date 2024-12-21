<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Liceria</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link rel="icon" href="/assets/img/paru3.png">
    <link href="/pengguna/img/apple-touch-icon.png" rel="apple-touch-icon">
    <script src="/pengguna/lib/jquery/jquery.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
        rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="/pengguna/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="/pengguna/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/pengguna/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/pengguna/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="/pengguna/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/pengguna/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <script src="/pengguna/lib/jquery/jquery.min.js"></script>

    <!-- Main Stylesheet File -->
    <link href="/pengguna/css/style.css" rel="stylesheet">
    <style>
        body {
            background: #fff;
            color: #fff;
            font-family: "Open Sans", sans-serif;
            /* color: #000000; */
        }

        .img-thumbnail {
            padding: .25rem;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 1rem;
            max-width: 40%;
            height: auto;
        }

        p {
            padding: 0;
            margin: 0 0 0 0;

        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif;
            font-weight: 400;
            margin: 0 0 0 0;
            padding: 0;
        }

        #intro {

            padding: 120px 0 90px 0;
        }
        .btn-group-lg>.btn, .btn-lg {
          padding: .5rem 1rem;
          font-size: 1rem;
          line-height: 1.5;
          text-transform: uppercase;
          font-weight: 600;
          width: 50%;
          border-radius: 40px;
          box-shadow: 0 0 22px rgba(0, 0, 0, 0.07);
        }
        hr {
          margin-top: 1rem;
          margin-bottom: 1rem;
          border-top: 1px solid var(--white);
      }
    </style>
    <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

    <!--==========================
  Header
  ============================-->
    <header id="header" class="fixed-top">
        <div class="container">

            <div class="logo float-left">
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
                <a href="/pasien" class="scrollto"><img src="/assets/img/logo4.png" alt="" class="" width="200px"
                        height="200px"></a>
            </div>

            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <li class="nav-item" id="home" >
                      <a href="/pasien" class="nav-link" >
                        <b>HOME</b>
                      </a>
                    </li>
                    <li class="nav-item" id="dokter">
                      <a href="/pasien/dokter" class="nav-link" ">
                        <b>DOKTER</b>
                      </a>
                    </li>
                    <li class="nav-item"  id="gejala">
                      <a href="/pasien/gejala" class="nav-link"> 
                        <b>GEJALA</b>
                      </a>
                    </li>
                    <li class="nav-item" id="penyakit">
                      <a href="/pasien/penyakit" class="nav-link" >
                        <b>PENYAKIT</b>
                      </a>
                    </li>
            <!-- <li class="drop-down"><a href="">Sistem Pakar</a>
            <ul>
              <li><a href="#">Gejala</a></li>
              <li><a href="#">Penyakit</a></li>
            </ul>
          </li> -->
                    <li class="nav-item" id="diagnosa">
                      <a href="/diagnosa" class="nav-link" >
                        <b>DIAGNOSIS</b>
                      </a>
                    </li>
                </ul>
            </nav>

        </div>
    </header><!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="intro" class="clearfix">

        <div class="container">
            @yield('content2')
        </div>


        <!-- <div class="intro-img">
        <img src="/pengguna/img/intro-img.svg" alt="" class="img-fluid">
      </div>

      <div class="intro-info">
        <h2>We provide<br><span>solutions</span><br>for your business!</h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
          <a href="#services" class="btn-services scrollto">Our Services</a>
        </div>
      </div>

    </div> -->
    </section>


    <!--==========================
    Footer
  ============================-->
    <!-- <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong>NewBiz</strong>. All Rights Reserved
            </div>
        </div>
  </footer> -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- JavaScript Libraries -->
    <script src="/pengguna/lib/jquery/jquery.min.js"></script>
    <script src="/pengguna/lib/jquery/jquery-migrate.min.js"></script>
    <script src="/pengguna/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/pengguna/lib/easing/easing.min.js"></script>
    <script src="/pengguna/lib/mobile-nav/mobile-nav.js"></script>
    <script src="/pengguna/lib/wow/wow.min.js"></script>
    <script src="/pengguna/lib/waypoints/waypoints.min.js"></script>
    <script src="/pengguna/lib/counterup/counterup.min.js"></script>
    <script src="/pengguna/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/pengguna/lib/isotope/isotope.pkgd.min.js"></script>
    <script src="/pengguna/lib/lightbox/js/lightbox.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <!-- Template Main Javascript File -->
    <script src="/pengguna/js/main.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-expander/1.7.0/jquery.expander.js"></script>
</body>

</html>