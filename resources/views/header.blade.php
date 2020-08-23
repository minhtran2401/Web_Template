<!DOCTYPE html>
<html lang="en">


<!--  41:50-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive Multipurpose HTML5 Business Template">
    <meta name="author" content="Shreethemes">

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <title>Alita - A Responsive Multipurpose HTML Template</title>
    <base href="{{asset('/')}}">


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
        <!-- Loader -->
        <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
<!-- Navigation Bar-->
<div class="tagline hidden-md">
    <div class="container">
        <div class="float-left">
            <div class="phone">
                <i class="fas fa-phone"></i> +1 123 456 78 90
            </div>
        </div>
        <div class="float-right">
            <ul class="top_socials">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>

<!-- Navigation Bar-->
@yield('menu')
<!-- End Navigation Bar-->

<!-- HOME START-->
@yield('slide')
