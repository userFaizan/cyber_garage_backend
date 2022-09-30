<!DOCTYPE html>
<html lang="en">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K4FPVX7');</script>
<!-- End Google Tag Manager -->

<meta name="google-site-verification" content="mjmIHHwoXi27AT5U6POgGE6Fu8Kz1b6eqydqEsuyLn8" />
<meta name="facebook-domain-verification" content="vgwfeiqs8jl7zur3uji0kn8mpam0op" />
    <!--twitter og-->
    <meta name="twitter:site" content="@themetags">
    <meta name="twitter:creator" content="@themetags">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Repair Management System">
    <meta name="twitter:description" content="Repair Management System">
    <meta name="twitter:image" content="#">

    <!--facebook og-->
    <meta property="og:url" content="#">
    <meta name="twitter:title" content="Repair Management System">
    <meta property="og:description" content="Repair Management System">
    <meta property="og:image" content="#">
    <meta property="og:image:secure_url" content="#">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!--meta-->
    <meta name="description" content="Repair Management System">
    <meta name="author" content="ThemeTags">

    <!--favicon icon-->
    <link rel="icon" href="{{asset('assets/img/cg11.png')}}" type="image/png" sizes="16x16">

    <!--title-->
    <title>Cyber Garage | Home</title>

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!--build:css-->
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <!-- endbuild -->

    <!--custom css start-->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <!--custom css end-->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>

    <!--preloader start-->
    <!-- <div id="preloader">
        <div class="preloader-wrap">
            <img src="assets/img/favicon.png" alt="logo" class="img-fluid preloader-icon" />
            <div class="loading-bar"></div>
        </div>
    </div> -->
    <!--preloader end-->
    <!--main content wrapper start-->
    <div class="main-wrapper">
        <header class="main-header position-absolute w-100">
            <nav class="navbar navbar-expand-xl navbar-dark sticky-header z-10">
                <div class="container d-flex align-items-center justify-content-lg-between position-relative">
                    <a href="https://cybergaragellc.com/" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
                        <img src="{{asset('assets/img/white-logo.png')}}" alt="logo" class="img-fluid logo-white" / style="width: 20%;">
                        <img src="{{asset('assets/img/cyber-garage-logo.png')}}" alt="logo" class="img-fluid logo-color" / style="width: 20%;">
                    </a>

                    <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop" role="button">
                        <span
                        class="far fa-bars"
                        data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasWithBackdrop"
                        aria-controls="offcanvasWithBackdrop"
                        ></span>
                    </a>
                    <div class="clearfix"></div>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="nav col-12 col-md-auto main-menu ml-auto">
                            <li><a href="{{ route('index') }}" class="nav-link">Home</a></li>
                            <li><a href="{{ route('about_us') }}" class="nav-link">About Us</a></li>
                            <li><a href="{{ route('management') }}" class="nav-link">Management Info</a></li>
                            <li><a href="{{ route('app') }}" class="nav-link">Apps</a></li>
                            <li><a href="{{ route('videos') }}" class="nav-link">Video</a></li>
                            <li><a href="{{ route('subscription') }}" class="nav-link">Subscription</a></li>
                            <li><a href="{{ route('blog') }}" class="nav-link">Blog</a></li>
                        </ul>
                    </div>
                    <!--offcanvas menu start-->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop">
                        <div class="offcanvas-header d-flex align-items-center mt-4">
                            <a href="index.html" class="d-flex align-items-center mb-md-0 text-decoration-none">
                                <img src="assets/img/cg11.png" alt="logo" class="img-fluid ps-2" />
                            </a>
                            <button type="button" class="close-btn text-white" data-bs-dismiss="offcanvas" aria-label="Close">
                                <i class="far fa-close"></i>
                            </button>
                        </div>
                        <!-- <div class="offcanvas-body z-10">
                            <ul class="nav col-12 col-md-auto main-menu">
                                <li><a href="index.html" class="nav-link">Home</a></li>
                                <li><a href="about-us.html" class="nav-link">About us</a></li>
                                <li><a href="management.html" class="nav-link">Management info</a></li>
                                <li><a href="app.html" class="nav-link">Apps</a></li>
                                <li><a href="videos.html" class="nav-link">Video</a></li>
                                <li><a href="subscription.html" class="nav-link">Subscription</a></li>
                                <li><a href="blog.html" class="nav-link">Blog</a></li>
                            </ul>
                        </div> -->
                    </div>
                    <!--offcanvas menu end-->
                </div>
            </nav>
        </header>
        <!--header end-->
        <!--header section end-->




@yield('content')




        <footer class="footer-section" >
            <!--footer top start-->
            <!--for light footer add .footer-light class and for dark footer add .bg-dark .text-white class-->
            <div class="footer-top bg-gradient text-white ptb-100 " style="background: url('asset('assets/img/page-header-bg.svg')}}')no-repeat bottom right">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-8 col-lg-6 mb-md-4 mb-lg-0 padd">
                            <div class="footer-single-col">
                                <div class="footer-single-col mb-4">
                                    <img src="{{asset('assets/img/white-logo.png')}}" alt="logo" class="img-fluid logo-white" style="width: 23%;">
                                    <img src="{{asset('assets/img/white-logo.png" alt="logo')}}" class="img-fluid logo-color" style="width: 23%;">
                                </div>
                                <h3>Our Mission</h3>
                                <p class="mb-1">Cyber Garage Repair Management System</p>
                                <p>We provide trustworthy software management technologies that are especially designed for the automotive sector. Our real-time solutions spare your staff the hassles, costs, and potentially time-wasting paperwork and tasks, allowing you to focus on what you do best: increasing productivity and enhancing your bottom line.</p>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-5 mt-4 mt-md-0 mt-lg-0 padd">
                            <div class="row">
                                <div class="col-md-12 col-lg-12 mt-4 mt-md-0 mt-lg-0">
                                    <div class="footer-single-col">
                                        <h3>Contact</h3>
                                        <ul class="list-unstyled footer-nav-list mb-lg-0">
                                            <li><a href="tel:559-647-7654" class="text-decoration-none"><strong>Phone:</strong> 559-647-7654</a></li>
                                            <li><a href="mailto:sales@cybergarageLLC.com" class="text-decoration-none"><strong>Email:</strong> sales@cybergaragellc.com</a></li>
                                            <li><a href="#" class="text-decoration-none"><strong>Working Days/Hours:</strong> Mon-Fri / 8:00 AM - 5:30 PM</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer top end-->

            <!--footer bottom start-->
            <div class="footer-bottom  bg-dark text-white py-4" >
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-md-7 col-lg-7 padd">
                            <div class="copyright-text">
                                <p class="mb-lg-0 mb-md-0">&copy; 2021 All Rights Reserved | <a href="privacy-policy.html" target="_blank" style="text-decoration:none; color: #d6d5e1;"> Privacy Policy</a> | <a href="terms-of-use.html" target="_blank" style="text-decoration:none; color: #d6d5e1;"> Terms of Use</a></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="footer-single-col text-start text-lg-end text-md-end">
                                <ul class="list-unstyled list-inline footer-social-list mb-0">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/cybergaragellc/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/cyber_garage_llc/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K4FPVX7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
            <!--footer bottom end-->
        </footer>
        <!--footer section end-->

    </div>



    <!--build:js-->
    <script src="{{asset('assets/js/vendors/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/parallax.min.js')}}"></script>
    <script src="{{asset('assets/js/vendors/aos.js')}}"></script>
    <script src="{{asset('assets/js/app.js')}}"></script>
    <!--endbuild-->
</body>

</html>