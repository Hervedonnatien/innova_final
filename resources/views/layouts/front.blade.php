<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Innova Freelance - Digital web agency</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/media/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/sal.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/green-audio-player.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/odometer-theme-default.css') }}">

@yield('css')

<!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">

</head>

<body class="sticky-header">
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->
<a href="#main-wrapper" id="backto-top" class="back-to-top">
    <i class="far fa-angle-double-up"></i>
</a>

<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->

<div id="main-wrapper" class="main-wrapper">

    <!--=====================================-->
    <!--=        Header Area Start       	=-->
    <!--=====================================-->
    <header class="header axil-header header-style-1">
        <div id="axil-sticky-placeholder"></div>
        <div class="axil-mainmenu">
            <div class="container">
                <div class="header-navbar">
                    <div class="header-logo">
                        <a href="{{ route('home') }}"><img class="dark-version-logo" src="{{ asset('assets/media/logo-3.svg') }}" alt="logo"></a>
                        <a href="{{ route('home') }}"><img class="sticky-logo" src="{{ asset('assets/media/logo-2.svg') }}" alt="logo"></a>
                    </div>
                    <div class="header-main-nav">
                        <!-- Start Mainmanu Nav -->
                        <nav class="mainmenu-nav" id="mobilemenu-popup">
                            <div class="d-block d-lg-none">
                                <div class="mobile-nav-header">
                                    <div class="mobile-nav-logo">
                                        <a href="{{ route('home') }}">
                                            <img class="dark-mode" src="{{ asset('assets/media/logo-3.svg') }}" alt="Site Logo">
                                        </a>
                                    </div>
                                    <button class="mobile-menu-close" data-bs-dismiss="offcanvas"><i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <ul class="mainmenu">
                                <li>
                                    <a href="{{ route('home') }}">Accueil</a>
                                </li>
                                <li>
                                    <a href="{{ route('service') }}">Expertises</a>
                                </li>
                                <li>
                                    <a href="{{ route('portfolio') }}">Portfolio</a>
                                </li>
                                <li>
                                    <a href="{{ route('team') }}">Equipe</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- End Mainmanu Nav -->
                    </div>
                    <div class="header-action">
                        <ul class="list-unstyled">
                            <li class="sidemenu-btn d-lg-block d-none">
                                <button class="btn-wrap" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenuRight">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </li>
                            <li class="mobile-menu-btn sidemenu-btn d-lg-none d-block">
                                <button class="btn-wrap" data-bs-toggle="offcanvas" data-bs-target="#mobilemenu-popup">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

@yield('banner')

@yield('content')

<!--=====================================-->
    <!--=        Footer Area Start       	=-->
    <!--=====================================-->
    <footer class="footer-area">
        <div class="container">
            <div class="footer-top">
                <div class="footer-social-link">
                    <ul class="list-unstyled">
                        <li><a href="https://web.facebook.com/Innova-Freelance-111398514797655" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/innova-freelance/mycompany/?viewAsMember=true" data-sal="slide-up" data-sal-duration="500" data-sal-delay="400"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="https://twitter.com/InnovaFreelance" data-sal="slide-up" data-sal-duration="500" data-sal-delay="200"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.pinterest.com/innovafreelance/_saved/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="https://www.instagram.com/innovafreelance/" data-sal="slide-up" data-sal-duration="500" data-sal-delay="500"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-main">
                <div class="row">
                    <div class="col-xl-6 col-lg-5" data-sal="slide-right" data-sal-duration="800" data-sal-delay="100">
                        <div class="footer-widget border-end">
                           
                        <div class="contact-inner">
                            <address class="address">
                                <span class="title"><strong>Adresse: </strong></span></br>
                                <p>Antananarivo Madagascar</p>
                                <span class="title"><strong>Contact:</strong></span>
                                <p>Nous sommes disponibles 7j / 7. Contactez-nous:</p>
                                <a class="tel" href="tel: +261 34 40 079 99"><i class="fas fa-phone"></i>+261 34 40 079 99</a></br></br>
                                <a class="email" href="email: innovafreelance@gmail.com"><i class="fa fa-envelope"></i> innovafreelance@gmail.com</a>
                            </address>
                        </div>
                    
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7" data-sal="slide-left" data-sal-duration="800" data-sal-delay="100">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="footer-widget">
                                    <h6 class="widget-title">Services</h6>
                                    <div class="footer-menu-link">
                                        <ul class="list-unstyled">
                                            <li><a href="{{ route('service') }}">Développement web</a></li>
                                            <li><a href="{{ route('service') }}">Développement mobile</a></li>
                                            <li><a href="{{ route('service') }}">Développement Desktop</a></li>
                                            <li><a href="{{ route('service') }}">CMS</a></li>
                                            <li><a href="{{ route('service') }}">Rédaction web SEO</a></li>
                                            <li><a href="{{ route('service') }}">Saisie des données (OS)</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer-copyright">
                            <span class="copyright-text">© {{ date('Y') }}. All rights reserved by <a href="https://innova-freelance.com/">Innova Freelance</a>.</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--=====================================-->
    <!--=       Offcanvas Menu Area       	=-->
    <!--=====================================-->
    <div class="offcanvas offcanvas-end header-offcanvasmenu" tabindex="-1" id="offcanvasMenuRight">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            
            <div class="row ">
                <div class="col-lg-5 col-xl-6">
                    <ul class="main-navigation list-unstyled">
                        <li><a href="{{ route('home') }}">Accueil</a></li>
                        <li><a href="{{ route('service') }}">Expertises</a></li>
                        <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                        <li><a href="{{ route('team') }}">Equipe</a></li>
                    </ul>
                </div>
                <div class="col-lg-7 col-xl-6">
                    <div class="contact-info-wrap">
                        <div class="contact-inner">
                            <address class="address">
                                <span class="title"><strong>Adresse:</strong></span>
                                <p>Antananarivo Madagascar</p>
                            </address>
                            <address class="address">
                                <span class="title">Nous sommes disponibles 7j / 7. Contactez-nous:</span>
                                <a class="tel" href="tel: +261 34 40 079 99"><i class="fas fa-phone"></i>+261 34 40 079 99</a>
                                <a class="email" href="email: innovafreelance@gmail.com"><i class="fa fa-envelope"></i> innovafreelance@gmail.com</a>
                            </address>
                        </div>
                        <div class="contact-inner">
                            <h5 class="title">Vous pouvez nous trouver sur:</h5>
                            <div class="contact-social-share">
                                <ul class="social-share list-unstyled">
                                    <li><a href="https://web.facebook.com/Innova-Freelance-111398514797655"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.linkedin.com/company/innova-freelance/mycompany/?viewAsMember=true"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="https://twitter.com/InnovaFreelance"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/innovafreelance/"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Jquery Js -->
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/odometer.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-appear.js') }}"></script>
<script src="{{ asset('assets/js/vendor/slick.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/sal.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/js.cookie.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.style.switcher.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/tilt.js') }}"></script>
<script src="{{ asset('assets/js/vendor/green-audio-player.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery.nav.js') }}"></script>

@yield('js')

<!-- Site Scripts -->
<script src="{{ asset('assets/js/app.js') }}"></script>
</body>
</html>
