<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Docmed</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js" integrity="sha512-w3u9q/DeneCSwUDjhiMNibTRh/1i/gScBVp2imNVAMCt6cUHIw6xzhzcPFIaL3Q1EbI2l+nu17q2aLJJLo4ZYg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <link rel="stylesheet" href="../frontend/assets/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="../frontend/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../frontend/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../frontend/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../frontend/assets/css/themify-icons.css">
    <link rel="stylesheet" href="../frontend/assets/css/nice-select.css">
    <link rel="stylesheet" href="../frontend/assets/css/flaticon.css">
    <link rel="stylesheet" href="../frontend/assets/css/gijgo.css">
    <link rel="stylesheet" href="../frontend/assets/css/animate.css">
    <link rel="stylesheet" href="../frontend/assets/css/slicknav.css">
    <link rel="stylesheet" href="../frontend/assets/css/style.css">
    <link rel="stylesheet" href="../frontend/assets/css/login-checkform.css">
    <!-- <link rel="stylesheet" href="../frontend/assets/css/responsive.css"> -->
</head>
<style>
    .abc {
        display: flex;
    }

    .list {
        width: 285px;
    }

    .validateForm {
        color: red;
        font-size: 10px;
    }

    .validateForm {
        margin-top: -20px;
    }

    .choice {
        margin-bottom: 20px;
    }

    .choice input {
        width: inherit;
    }

    .form-select {
        height: 50px;
        border: 1px solid #ddd;
    }

    #submitA {
        width: 200px;
        margin-left: 37%;
    }

    .button-21 {
        align-items: center;
        appearance: none;
        background-color: #3EB2FD;
        background-image: linear-gradient(1deg, #4F58FD, #149BF3 99%);
        background-size: calc(100% + 20px) calc(100% + 20px);
        border-radius: 100px;
        border-width: 0;
        box-shadow: none;
        box-sizing: border-box;
        color: #FFFFFF;
        cursor: pointer;
        display: inline-flex;
        font-family: CircularStd, sans-serif;
        font-size: 1rem;
        height: auto;
        justify-content: center;
        line-height: 1.5;
        padding: 6px 20px;
        position: relative;
        text-align: center;
        text-decoration: none;
        transition: background-color .2s, background-position .2s;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        vertical-align: top;
        white-space: nowrap;
    }

    .button-21:active,
    .button-21:focus {
        outline: none;
    }

    .button-21:hover {
        background-position: -20px -20px;
    }

    .button-21:focus:not(:active) {
        box-shadow: rgba(40, 170, 255, 0.25) 0 0 0 .125em;
    }

    /* #staticBackdrop {
        height: 500px;
        width: 750px;
    } */
</style>

<body>

    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-md-6 ">
                            <div class="social_media_links">
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-envelope"></i> info@docmed.com</a></li>
                                    <li><a href="#"> <i class="fa fa-phone"></i> 160160</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="../frontend/assets/img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.html">home</a></li>
                                        <li><a href="Department.html">Department</a></li>
                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">elements</a></li>
                                                <li><a href="about.html">about</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="Doctors.html">Doctors</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">

                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <?php

                                    use Illuminate\Support\Facades\Session; ?>
                                    <?php $name = Session::get('user_name'); ?>
                                    <!-- <a class="popup-with-form" href="<?php echo (isset($name)) ? "#test-form" : "#accept-form"; ?>">Make an Appointment</a> -->
                                    <button type="button" class="btn btn-primary" id="appointmentbutton" data-toggle="modal" data-target="#staticBackdrop">
                                        Make an Appointment
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-1">
                            <?php
                            $name = Session::get('user_name');
                            $id = Session::get('user_id');
                            if (isset($name) && isset($id)) {
                            ?>
                                <!-- <a href="/my-account?id={{$id}}">Welcome {{$name}}</a>
                                <form action="/logout">
                                    <input type="submit" value="Log Out" />
                                </form> -->
                                <div class="dropdown" style="float:initial; width: 160px; align-items:center">
                                    <a href="/login" id="user"><i class="fa fa-user" aria-hidden="true"></i></a>
                                    <span style="font-size: 15px;">Welcome {{$name}}</span>
                                    <div class="dropdown-content" style="position:absolute;z-index: 5">
                                        <a href="#">Link 1</a>
                                        <a href="#">Link 2</a>
                                        <a href="/logout">Log Out</a>
                                    </div>
                                </div>
                            <?php } else {
                            ?>
                                <!-- <a href="/login">Login</a> -->
                                <!-- <div class="dropdown" style="float:right; position:fixed"> -->
                                <a href="/login"><i class="fa fa-user" aria-hidden="true"></i></a>
                                <!-- <div class="dropdown-content"> -->
                                <!-- <a href="#">Link 1</a> -->
                                <!-- <a href="#">Link 2</a> -->
                                <!-- <a href="#">Link 3</a> -->
                                <!-- </div> -->
                                <!-- </div> -->
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
    @yield('homepage')

    <!-- slider_area_start -->
    <!-- <div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.</p>
                                <a href="#" class="boxed-btn3">Check Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.</p>
                                <a href="#" class="boxed-btn3">Check Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single_slider  d-flex align-items-center slider_bg_2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> <span>Health care</span> <br>
                                    For Hole Family </h3>
                                <p>In healthcare sector, service excellence is the facility of <br> the hospital as
                                    healthcare service provider to consistently.</p>
                                <a href="#" class="boxed-btn3">Check Our Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- slider_area_end -->

    <!-- service_area_start -->
    <!-- <div class="service_area">
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="flaticon-electrocardiogram"></i>
                        </div>
                        <h3>Hospitality</h3>
                        <p>Clinical excellence must be the priority for any health care service provider.</p>
                        <a href="#" class="boxed-btn3-white">Apply For a Bed</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="flaticon-emergency-call"></i>
                        </div>
                        <h3>Emergency Care</h3>
                        <p>Clinical excellence must be the priority for any health care service provider.</p>
                        <a href="#" class="boxed-btn3-white">+10 672 356 3567</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_service">
                        <div class="icon">
                            <i class="flaticon-first-aid-kit"></i>
                        </div>
                        <h3>Chamber Service</h3>
                        <p>Clinical excellence must be the priority for any health care service provider.</p>
                        <a href="#" class="boxed-btn3-white">Make an Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- service_area_end -->

    <!-- welcome_docmed_area_start -->
    <!-- <div class="welcome_docmed_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_thumb">
                        <div class="thumb_1">
                            <img src="../frontend/assets/img/about/1.png" alt="">
                        </div>
                        <div class="thumb_2">
                            <img src="../frontend/assets/img/about/2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_docmed_info">
                        <h2>Welcome to Docmed</h2>
                        <h3>Best Care For Your <br>
                            Good Health</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem.
                            It esteems luckily or picture placing drawing. Apartments frequently or motionless on reasonable projecting expression.</p>
                        <ul>
                            <li> <i class="flaticon-right"></i> Apartments frequently or motionless. </li>
                            <li> <i class="flaticon-right"></i> Duis aute irure dolor in reprehenderit in voluptate.</li>
                            <li> <i class="flaticon-right"></i> Voluptatem quia voluptas sit aspernatur. </li>
                        </ul>
                        <a href="#" class="boxed-btn3-white-2">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- welcome_docmed_area_end -->

    <!-- offers_area_start -->
    <!-- <div class="our_department_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title text-center mb-55">
                        <h3>Our Departments</h3>
                        <p>Esteem spirit temper too say adieus who direct esteem. <br>
                            It esteems luckily or picture placing drawing. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="../frontend/assets/img/department/1.png" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Eye Care</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            <a href="#" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="../frontend/assets/img/department/2.png" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Physical Therapy</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            <a href="#" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="../frontend/assets/img/department/3.png" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Dental Care</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            <a href="#" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="../frontend/assets/img/department/4.png" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Diagnostic Test</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            <a href="#" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="../frontend/assets/img/department/5.png" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Skin Surgery</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            <a href="#" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4">
                    <div class="single_department">
                        <div class="department_thumb">
                            <img src="../frontend/assets/img/department/6.png" alt="">
                        </div>
                        <div class="department_content">
                            <h3><a href="#">Surgery Service</a></h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.</p>
                            <a href="#" class="learn_more">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- offers_area_end -->

    <!-- testmonial_area_start -->
    <!-- <div class="testmonial_area">
        <div class="testmonial_active owl-carousel">
            <div class="single-testmonial testmonial_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br>
                                    Fusce ac mattis nulla. Morbi eget ornare dui.
                                </p>
                                <div class="testmonial_author">
                                    <h4>Asana Korim</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-testmonial testmonial_bg_2 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br>
                                    Fusce ac mattis nulla. Morbi eget ornare dui.
                                </p>
                                <div class="testmonial_author">
                                    <h4>Asana Korim</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-testmonial testmonial_bg_1 overlay2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-10 offset-xl-1">
                            <div class="testmonial_info text-center">
                                <div class="quote">
                                    <i class="flaticon-straight-quotes"></i>
                                </div>
                                <p>Donec imperdiet congue orci consequat mattis. Donec rutrum porttitor <br>
                                    sollicitudin. Pellentesque id dolor tempor sapien feugiat ultrices nec sed neque.
                                    <br>
                                    Fusce ac mattis nulla. Morbi eget ornare dui.
                                </p>
                                <div class="testmonial_author">
                                    <h4>Asana Korim</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- testmonial_area_end -->

    <!-- business_expert_area_start  -->
    <!-- <div class="business_expert_area">
        <div class="business_tabs_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Excellent Services</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Qualified Doctors</a>
                            </li>


                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Emergency Departments</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="border_bottom">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="business_info">
                                    <div class="icon">
                                        <i class="flaticon-first-aid-kit"></i>
                                    </div>
                                    <h3>Leading edge care for Your family</h3>
                                    <p>Esteem spirit temper too say adieus who direct esteem.
                                        It esteems luckily picture placing drawing. Apartments frequently or motionless on
                                        reasonable projecting expression.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="business_thumb">
                                    <img src="img/about/business.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="business_info">
                                    <div class="icon">
                                        <i class="flaticon-first-aid-kit"></i>
                                    </div>
                                    <h3>Leading edge care for Your family</h3>
                                    <p>Esteem spirit temper too say adieus who direct esteem.
                                        It esteems luckily picture placing drawing. Apartments frequently or motionless on
                                        reasonable projecting expression.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="business_thumb">
                                    <img src="img/about/business.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-md-6">
                                <div class="business_info">
                                    <div class="icon">
                                        <i class="flaticon-first-aid-kit"></i>
                                    </div>
                                    <h3>Leading edge care for Your family</h3>
                                    <p>Esteem spirit temper too say adieus who direct esteem.
                                        It esteems luckily picture placing drawing. Apartments frequently or motionless on
                                        reasonable projecting expression.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-md-6">
                                <div class="business_thumb">
                                    <img src="img/about/business.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- business_expert_area_end  -->


    <!-- expert_doctors_area_start -->
    <!-- <div class="expert_doctors_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="doctors_title mb-55">
                        <h3>Expert Doctors</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="expert_active owl-carousel">
                        <div class="single_expert">
                            <div class="expert_thumb">
                                <img src="../frontend/assets/img/experts/1.png" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>Mirazul Alom</h3>
                                <span>Neurologist</span>
                            </div>
                        </div>
                        <div class="single_expert">
                            <div class="expert_thumb">
                                <img src="../frontend/assets/img/experts/2.png" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>Mirazul Alom</h3>
                                <span>Neurologist</span>
                            </div>
                        </div>
                        <div class="single_expert">
                            <div class="expert_thumb">
                                <img src="../frontend/assets/img/experts/3.png" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>Mirazul Alom</h3>
                                <span>Neurologist</span>
                            </div>
                        </div>
                        <div class="single_expert">
                            <div class="expert_thumb">
                                <img src="../frontend/assets/img/experts/4.png" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>Mirazul Alom</h3>
                                <span>Neurologist</span>
                            </div>
                        </div>
                        <div class="single_expert">
                            <div class="expert_thumb">
                                <img src="../frontend/assets/img/experts/1.png" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>Mirazul Alom</h3>
                                <span>Neurologist</span>
                            </div>
                        </div>
                        <div class="single_expert">
                            <div class="expert_thumb">
                                <img src="../frontend/assets/img/experts/2.png" alt="">
                            </div>
                            <div class="experts_name text-center">
                                <h3>Mirazul Alom</h3>
                                <span>Neurologist</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- expert_doctors_area_end -->

    <!-- Emergency_contact start -->
    <!-- <div class="Emergency_contact">
        <div class="conatiner-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-6">
                    <div class="single_emergency d-flex align-items-center justify-content-center emergency_bg_1 overlay_skyblue">
                        <div class="info">
                            <h3>For Any Emergency Contact</h3>
                            <p>Esteem spirit temper too say adieus.</p>
                        </div>
                        <div class="info_button">
                            <a href="#" class="boxed-btn3-white">+10 378 4673 467</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="single_emergency d-flex align-items-center justify-content-center emergency_bg_2 overlay_skyblue">
                        <div class="info">
                            <h3>Make an Online Appointment</h3>
                            <p>Esteem spirit temper too say adieus.</p>
                        </div>
                        <div class="info_button">
                            <a href="#" class="boxed-btn3-white">Make an Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Emergency_contact end -->

    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="../frontend/assets/img/footer_logo.png" alt="">
                                </a>
                            </div>
                            <p>
                                Firmament morning sixth subdue darkness
                                creeping gathered divide.
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Departments
                            </h3>
                            <ul>
                                <li><a href="#">Eye Care</a></li>
                                <li><a href="#">Skin Care</a></li>
                                <li><a href="#">Pathology</a></li>
                                <li><a href="#">Medicine</a></li>
                                <li><a href="#">Dental</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Useful Links
                            </h3>
                            <ul>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#"> Contact</a></li>
                                <li><a href="#"> Appointment</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Address
                            </h3>
                            <p>
                                200, D-block, Green lane USA <br>
                                +10 367 467 8934 <br>
                                docmed@contact.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end  -->
    <!-- link that opens popup -->

    <!-- form itself end-->
    <!-- <form id="test-form" class="white-popup-block mfp-hide modal" action="{{url('/save-appointment')}}" method="POST" onsubmit="return validateForm()"> -->
    <!-- <form id="test-form" class=" modal hide" action="{{url('/save-appointment')}}" method="POST" >
        @csrf
        <div class="popup_box ">
            <div class="popup_inner">
                <h3>Make an Appointment</h3>


                <div class="row">
                    <div class="formvalidate">
                        <input class="choice" name="appointment_user_id" value="<?php echo (Session::get('user_id')); ?>" type="hidden">
                    </div>
                    <div class="col-xl-6 choice">
                        <input placeholder="Pick date" type="date" name="appointment_date">
                       
                    </div>
                    <div class="col-xl-6 choice">
                        <select class="form-select" id="selecttime" name="appointment_time">

                            @foreach($Time as $key => $time)
                            <option value="{{$time->time_id}}">{{$time->time_pick}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-xl-6 choice">
                        <select class="form-select" id="selectdepartment" name="appointment_department_id">
                            @foreach($Department as $key => $department)
                            <option value="{{$department->department_id}}">{{$department->department_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-xl-6 choice">
                        <select class="form-select" id="selectphysician" name="appointment_physician_id">
                            @foreach($Physician as $key => $physician)
                            <option id="{{$physician->physician_department_id}}" value="{{$physician->physician_id}}">{{$physician->physician_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-xl-6 choice" style="margin-top: 20px;">
                        <input type="text" placeholder="Name" name="appointment_name" value="">
                        <div class="validateForm" id="validate_name"></div>
                    </div>
                    <div class="col-xl-6 choice" style="margin-top: 20px;">
                        <input type="text" placeholder="Phone no." name="appointment_phone">
                    </div>
                    <div class="col-xl-6 choice">
                        <input type="email" placeholder="Email" name="appointment_email">
                    </div>
                    <div class="col-xl-6 choice">
                        <input type="text" placeholder="Note" name="appointment_notes">
                    </div>
                    <div class="col-xl-12">
                        <button type="submit" id="submitA" class="boxed-btn3">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
    </form> -->
    <!-- form itself end -->
    <!-- <div class="modal fade" tabindex="-1" role="dialog" id="accept-form">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h2>Please login to make an appointment</h2>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="/login" role="button">Login</a>
                </div>
            </div>
        </div>
    </div> -->

    <!-- <div id="accept-form">
        <div class="popup_box" id="accept-form1">
            <div class="popup_inner">
                <h3>Make an Appointment</h3>
                <div class="row">
                    <div class="col-xl-12">
                        <h2>Please login to make an appointment</h2>
                    </div>
                    <div class="col-xl-12 modal-footer" id="accept-form3">
                        <a class="btn btn-primary" href="/login" role="button">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{url('/save-appointment')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div><input name="appointment_user_id" value="<?php echo (Session::get('user_id')); ?>" type="hidden"></div>
                            <div class="col-xl-6 choice"><select class="form-select" id="selecttime" name="appointment_time">
                                    @foreach($Time as $key => $time)
                                    <option value="{{$time->time_id}}">{{$time->time_pick}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-6 choice">
                                <input placeholder="Pick date" class="form-select" type="date" name="appointment_date">
                            </div>
                            <div class="col-xl-6 choice">
                                <select class="form-select" id="selectdepartment" name="appointment_department_id">
                                    @foreach($Department as $key => $department)
                                    <option value="{{$department->department_id}}">{{$department->department_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-6 choice">
                                <select class="form-select" id="selectphysician" name="appointment_physician_id">
                                    @foreach($Physician as $key => $physician)
                                    <option id="{{$physician->physician_department_id}}" value="{{$physician->physician_id}}">{{$physician->physician_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-6 choice"><input class="form-select" type="text" placeholder="Name" name="appointment_name"></div>
                            <div class="col-xl-6 choice"> <input class="form-select" type="text" placeholder="Phone no." name="appointment_phone"></div>
                            <div class="col-xl-6 choice"> <input class="form-select" type="email" placeholder="Email" name="appointment_email"></div>
                            <div class="col-xl-6 choice"><input class="form-select" type="text" placeholder="Note" name="appointment_notes"></div>
                        </div>
                    </form>
                    <div class="col-xl-12">
                        <button type="submit" id="submitA" class="boxed-btn3 button-21">Confirm</button>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="col-xl-12">
                        <button type="submit" id="submitA" class="boxed-btn3 button-21">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JS here -->

    <script src="../frontend/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="../frontend/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../frontend/assets/js/popper.min.js"></script>
    <script src="../frontend/assets/js/bootstrap.min.js"></script>
    <script src="../frontend/assets/js/owl.carousel.min.js"></script>
    <script src="../frontend/assets/js/isotope.pkgd.min.js"></script>
    <script src="../frontend/assets/js/ajax-form.js"></script>
    <script src="../frontend/assets/js/waypoints.min.js"></script>
    <script src="../frontend/assets/js/jquery.counterup.min.js"></script>
    <script src="../frontend/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="../frontend/assets/js/scrollIt.js"></script>
    <script src="../frontend/assets/js/jquery.scrollUp.min.js"></script>
    <script src="../frontend/assets/js/wow.min.js"></script>
    <script src="../frontend/assets/js/nice-select.min.js"></script>
    <script src="../frontend/assets/js/jquery.slicknav.min.js"></script>
    <script src="../frontend/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../frontend/assets/js/plugins.js"></script>
    <script src="../frontend/assets/js/gijgo.min.js"></script>
    <!--contact js-->
    <script src="../frontend/assets/js/contact.js"></script>
    <script src="../frontend/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="../frontend/assets/js/jquery.form.js"></script>
    <script src="../frontend/assets/js/jquery.validate.min.js"></script>
    <script src="../frontend/assets/js/mail-script.js"></script>

    <script src="../frontend/assets/js/main.js"></script>
    <script>
        function validateForm() {
            var name = $('input[name="appointment_name"]').val();
            if (name == '') {
                $('validateForm').text('Please choose this field to make an appointment');
            }
        };
        var user_name = "<?php echo $name; ?>";
        console.log(user_name);
        $('#appointmentbutton').click(function() {
            if (user_name == '') {
                $('#appointmentbutton').attr('data-target', '#accept-form');
            }
        })
    </script>
    <script>
        $(document).ready(function() {
            $('#selectdepartment').change(function() {
                var val = $(this).val();
                var a = $("#selectphysician option").attr("id");
                $("#selectphysician option").each(function() {
                    var doctor_id = $(this).attr('id');

                    if (val == doctor_id) {
                        $('#selectphysician').children('option[id=' + doctor_id + ']').show();
                    } else {
                        $('#selectphysician').children('option[id=' + doctor_id + ']').hide();
                    }
                });
            })

            // $("#test-form").validate({
            //     rules: {
            //         "appointment_department_id": {
            //             required: true,
            //         },
            //         "appointment_date": {
            //             required: true,
            //         },
            //         "appointment_time": {
            //             required: true,
            //         },
            //         "appointment_physician_id": {
            //             required: true,
            //         },
            //         "appointment_name": {
            //             required: true,
            //         },
            //         "appointment_phone": {
            //             required: true,
            //         }
            //     },
            //     messages: {
            //         "appointment_department_id": {
            //             required: "Please choose this field to make an appointment",
            //         },
            //         "appointment_date": {
            //             required: "Please choose this field to make an appointment",
            //         },
            //         "appointment_time": {
            //             required: "Please choose this field to make an appointment",
            //         },
            //         "appointment_physician_id": {
            //             required: "Please choose this field to make an appointment",
            //         },
            //         "appointment_name": {
            //             required: "Please choose this field to make an appointment",
            //         },
            //         "appointment_phone": {
            //             required: "Please choose this field to make an appointment",
            //         }
            //     }
            // });

        });
    </script>

</body>

</html>