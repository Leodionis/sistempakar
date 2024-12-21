<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="assets/img/paru3.png">
    <title>Login - Liceria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico"> -->
    <link rel="stylesheet" href="assets2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets2/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets2/css/themify-icons.css">
    <link rel="stylesheet" href="assets2/css/metisMenu.css">
    <link rel="stylesheet" href="assets2/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets2/css/slicknav.min.css">
    <!-- amchart css -->
    <!-- <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" /> -->
    <!-- others css -->
    <link rel="stylesheet" href="assets2/css/typography.css">
    <link rel="stylesheet" href="assets2/css/default-css.css">
    <link rel="stylesheet" href="assets2/css/styles.css">
    <link rel="stylesheet" href="assets2/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets2/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
    .login-form-head {
    text-align: center;
    background: #2196F3;
    padding: 50px;
    }
    .submit-btn-area button:hover {
    background: #2196f3;
    color: #ffffff;
    }
    .submit-btn-area button {
    font-size: 16px;
    }
</style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
            <form method="POST" action="{{ route('login') }}" style="border-radius: 20px; box-shadow: 0 0 20px rgba(2, 2, 2, 0.1)">
                {{csrf_field()}}
                    <div class="login-form-head" style="border-radius: 20px 20px 0px 0px;;">
                        <img src="/assets/img/paru3.png" width="18%" height="18%" > 
                        <h4 class="font-weight-bold">Login</h4>
                        <p>Hello there, login and start managing your Admin </p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <input id="email" placeholder="Masukkan email anda" type="email"  @error('email') is-invalid @enderror" 
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>                          
                                <i class="ti-email"></i>
                           
                                @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror

                        </div>
                        <div class="form-gp">
                            <input id="password" placeholder="Masukkan password anda" type="password" @error('password') is-invalid @enderror" 
                            name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>                          
                            <i class="ti-lock"></i>
                            @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                        </div>
                        <div class="submit-btn-area mt-5">
                            <button id="form_submit" type="submit">Login <i class="ti-arrow-right"></i></button>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="assets2/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js1 -->
    <script src="assets2/js/popper.min.js"></script>
    <script src="assets2/js/bootstrap.min.js"></script>
    <script src="assets2/js/owl.carousel.min.js"></script>
    <script src="assets2/js/metisMenu.min.js"></script>
    <!-- <script src="assets1/js/jqu1ery.slimscroll.min.js"></script> -->
    <script src="assets2/js/jquery.slicknav.min.js"></script>
    
    <!-- others plugins1 -->
    <script src="assets2/js/plugins.js"></script>
    <script src="assets2/js/scripts.js"></script>
</body>

</html>

 