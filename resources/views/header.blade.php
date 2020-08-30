<!DOCTYPE html>
<html lang="en">


<!--  41:50-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive Multipurpose HTML5 Business Template">
    <meta name="author" content="Shreethemes">

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <title>@yield('pagetitle')</title>
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
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
</head>

<body>
<!------------------->
@if(session()->get('message'))
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Thư Cảnh Cáo (*_*)</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <p>Chúng tôi nhận thấy bạn đang cố truy cập vào hệ thống quản trị wesite của chúng tôi mà chưa được sự cho phép của MiNhaTi!</p>
                <p>Nếu còn tiếp tục, bạn sẽ nhận hình phạt từ ban quản trị, mong bạn hợp tác.</p>
                <form>
                    <a href="{{action("homeController@blankpage")}}"><button type="button" class="btn btn-danger">Tao Thích</button></a>
                    <button data-dismiss="modal" aria-hidden="true" type="button" class="btn btn-primary float-right">Đã Hiểu</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endif
<!------------------->
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
