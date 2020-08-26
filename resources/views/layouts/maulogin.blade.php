<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <base href="{{asset('/')}}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Poppins" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Magnificpopup Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="assets/css/fontawesome.css" rel="stylesheet">
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet">

    <!--Slider-->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css"/> 
    <link rel="stylesheet" href="assets/css/owl.theme.css"/> 
    <link rel="stylesheet" href="assets/css/owl.transitions.css"/>
    <link rel="stylesheet" href="assets/css/slick.css"/> 
    <link rel="stylesheet" href="assets/css/slick-theme.css"/>  

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/menu.css" rel="stylesheet">
    <link href="assets/css/default.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/temp.css">
</head>
<body>
 
    
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>

    <!-- Navigation Bar-->
    <section class="bg-home" style="background-image: url('assets/images/home/bg-login.jpg');">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-lg-4">
                            <div class="bg-white p-30 rounded box-shadow">
                                <div class="text-center">
                                    <h4><a href="index-2.html"><img src="assets/images/logo.png" height="20" alt="logo"></a></h4>
                                    <div class="spacer-15"></div>
                                </div>
                                <form class="login-form">
                                    <div class="row">
                                        <div class="col-lg-12 mt-2">
                                            <label class="f-12">Email</label>
                                            <input type="email" class="form-control" placeholder="Email" name="email" required="">
                                        </div>

                                        <div class="col-lg-12 mt-2">
                                            <label class="">Password</label>
                                            <input type="password" class="form-control" placeholder="Password" required="">
                                        </div>

                                        <div class="col-lg-12 mt-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mt-3 mb-4">
                                            <button class="btn btn-custom w-100">Sign in</button>
                                        </div>
                                        <div class="mx-auto">
                                            <p class="mb-3 mt-2"><a href="forgot-password.html" class="text-dark font-weight-bold">Forgot your password ?</a></p>
                                        </div>
                                        <div class="mx-auto">
                                            <p class="mb-0 mt-2"><small class="text-dark mr-2">Don't have an account ?</small> <a href="signup.html" class="text-dark font-weight-bold">Sign Up</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HOME END--> 
        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Portfolio -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/isotope.js"></script>
        <!-- Carousel -->
        <script src="assets/js/slick.min.js"></script> 
        <script src="assets/js/slick.init.js"></script> 
        <!-- CONTACT -->
        <script src="assets/js/contact.js"></script> 
        <!--custom script-->
        <script src="assets/js/app.js"></script>
</body>
</html>
