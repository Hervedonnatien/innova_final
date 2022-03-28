@extends('layouts.front')

@section('banner')
        <!--=====================================-->
        <!--=       Breadcrumb Area Start       =-->
        <!--=====================================-->
        <div class="breadcrum-area breadcrumb-banner">
            <div class="container">
                <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                    <h1 class="title h2">Best solutions for your business</h1>
                    <p>Give your business a unique logo to stand out from crowd. We’ll create logo specifically for your company.</p>
                </div>
                <div class="banner-thumbnail" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                    <img class="paralax-image" src="{{ asset('assets/media/banner/banner-thumb-4.png') }}" alt="Illustration">
                </div>
            </div>
            <ul class="shape-group-8 list-unstyled">
                <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                    <img src="{{ asset('assets/media/others/bubble-9.png') }}" alt="Bubble">
                </li>
                <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                    <img src="{{ asset('assets/media/others/bubble-21.png') }}" alt="Bubble">
                </li>
                <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                    <img src="{{ asset('assets/media/others/line-4.png') }}" alt="Line">
                </li>
            </ul>
        </div>
@endsection

@section('content')
        <!--=====================================-->
        <!--=        Service Area Start         =-->
        <!--=====================================-->
        <div class="service-scroll-navigation-area">
            <!-- Service Nav -->
            <nav id="onepagenav" class="service-scroll-nav navbar onepagefixed">
                <div class="container">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link" href="#section1">Design</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section2">Development</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section3">Online Marketing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section4">Business</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section5">Technology</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section6">Content Strategy</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Design Service -->
            <div class="section section-padding" id="section1">
                <div class="container">
                    <div class="section-heading heading-left">
                        <span class="subtitle">Service</span>
                        <h2 class="title">Design</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-29.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="{{ route('service') }}">Logo &amp; Branding</a></h5>
                                    <p>We design professional looking yet simple Logo. Our designs are search engine and user friendly.</p>
                                    <a href="{{ route('service') }}" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-27.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="{{ route('service') }}">Website Design</a></h5>
                                    <p>We design professional looking yet simple websites. Our designs are search engine and user friendly.</p>
                                    <a href="{{ route('service') }}" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-28.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="{{ route('service') }}">Mobile app design</a></h5>
                                    <p>We design professional looking yet Mobile Apps. Our designs are search engine
                                        and user friendly. </p>
                                    <a href="{{ route('service') }}" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-4.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="{{ route('service') }}">Graphic/print design</a></h5>
                                    <p>From simple Content Management System to complex eCommerce developer, we cover it all.</p>
                                    <a href="{{ route('service') }}" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-30.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="{{ route('service') }}">Video production</a></h5>
                                    <p>From simple Content Management System to complex eCommerce developer, we cover it all.</p>
                                    <a href="{{ route('service') }}" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Development Service -->
            <div class="section section-padding bg-color-light" id="section2">
                <div class="container">
                    <div class="section-heading heading-left">
                        <span class="subtitle">Service</span>
                        <h2 class="title">Development</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-31.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="{{ route('service') }}">Content Managment</a></h5>
                                    <p>We design professional looking yet simple Logo. Our designs are search engine and user friendly.</p>
                                    <a href="{{ route('service') }}" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-32.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="{{ route('service') }}">Mobile app development</a></h5>
                                    <p>We design professional looking yet simple websites. Our designs are search engine and user friendly.</p>
                                    <a href="{{ route('service') }}" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-33.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="{{ route('service') }}">eCommerce</a></h5>
                                    <p>We design professional looking yet Mobile Apps. Our designs are search engine
                                        and user friendly. </p>
                                    <a href="{{ route('service') }}" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Online Marketing Service -->
            <div class="section section-padding" id="section3">
                <div class="container">
                    <div class="section-heading heading-left">
                        <span class="subtitle">Service</span>
                        <h2 class="title">Online Marketing</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-34.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-marketing.blade.php">SEO</a></h5>
                                    <p>We design professional looking yet simple Logo. Our designs are search engine and user friendly.</p>
                                    <a href="service-marketing.blade.php" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-35.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-marketing.blade.php">Pay-per click</a></h5>
                                    <p>We design professional looking yet simple websites. Our designs are search engine and user friendly.</p>
                                    <a href="service-marketing.blade.php" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-36.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-marketing.blade.php">Email marketing</a></h5>
                                    <p>We design professional looking yet Mobile Apps. Our designs are search engine
                                        and user friendly. </p>
                                    <a href="service-marketing.blade.php" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-37.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-marketing.blade.php">Display marketing</a></h5>
                                    <p>From simple Content Management System to complex eCommerce developer, we cover it all.</p>
                                    <a href="service-marketing.blade.php" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-38.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-marketing.blade.php">Social Media marketing</a></h5>
                                    <p>From simple Content Management System to complex eCommerce developer, we cover it all.</p>
                                    <a href="service-marketing.blade.php" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Business Service -->
            <div class="section section-padding bg-color-light" id="section4">
                <div class="container">
                    <div class="section-heading heading-left">
                        <span class="subtitle">Service</span>
                        <h2 class="title">Business</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-39.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-business.blade.php">Digital strategy</a></h5>
                                    <p>We design professional looking yet simple Logo. Our designs are search engine and user friendly.</p>
                                    <a href="service-business.blade.php" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-40.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-business.blade.php">Business consulting</a></h5>
                                    <p>We design professional looking yet simple websites. Our designs are search engine and user friendly.</p>
                                    <a href="service-business.blade.php" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-41.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-business.blade.php">Content writing</a></h5>
                                    <p>We design professional looking yet Mobile Apps. Our designs are search engine
                                        and user friendly. </p>
                                    <a href="service-business.blade.php" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-42.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-business.blade.php">Reporting</a></h5>
                                    <p>We design professional looking yet Mobile Apps. Our designs are search engine
                                        and user friendly. </p>
                                    <a href="service-business.blade.php" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Technology Service -->
            <div class="section section-padding" id="section5">
                <div class="container">
                    <div class="section-heading heading-left">
                        <span class="subtitle">Service</span>
                        <h2 class="title">Technology</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-43.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-technology.blade.php">Hosting</a></h5>
                                    <p>We design professional looking yet simple Logo. Our designs are search engine and user friendly.</p>
                                    <a href="service-technology.blade.php" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-44.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-technology.blade.php">Big data analysis</a></h5>
                                    <p>We design professional looking yet simple websites. Our designs are search engine and user friendly.</p>
                                    <a href="service-technology.blade.php" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content strategy Service -->
            <div class="section section-padding bg-color-light" id="section6">
                <div class="container">
                    <div class="section-heading heading-left">
                        <span class="subtitle">Service</span>
                        <h2 class="title">Content strategy</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-45.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-content-strategy.blade.php">Web Audit Practices</a></h5>
                                    <p>industry-icon-1 Web Audit Practices A reputable marketing strategy company runs a complete digital,</p>
                                    <a href="service-content-strategy.blade.php" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-46.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-content-strategy.blade.php">Marketing Flexibility</a></h5>
                                    <p>Do you cater to other businesses, investors, decision-makers or consumers? A trustworthy digital</p>
                                    <a href="service-content-strategy.blade.php" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-47.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-content-strategy.blade.php">Advertising Strategy</a></h5>
                                    <p>Promoting your products and services online requires cutting-edge organic and paid search strategies to rise</p>
                                    <a href="service-content-strategy.blade.php" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--=====================================-->
        <!--=     Call To Action Area Start     =-->
        <!--=====================================-->
        <section class="section call-to-action-area">
            <div class="container">
                <div class="call-to-action">
                    <div class="section-heading heading-light">
                        <span class="subtitle">Let's Work Together</span>
                        <h2 class="title">Need a successful project?</h2>
                        <a href="contact.blade.php" class="axil-btn btn-large btn-fill-white">Estimate Project</a>
                    </div>
                    <div class="thumbnail">
                        <div class="larg-thumb" data-sal="zoom-in" data-sal-duration="600" data-sal-delay="100">
                            <img class="paralax-image" src="{{ asset('assets/media/others/chat-group.png') }}" alt="Chat">
                        </div>
                        <ul class="list-unstyled small-thumb">
                            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="800" data-sal-delay="400">
                                <img class="paralax-image" src="{{ asset('assets/media/others/laptop-poses.png') }}" alt="Laptop">
                            </li>
                            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="800" data-sal-delay="300">
                                <img class="paralax-image" src="{{ asset('assets/media/others/bill-pay.png') }}" alt="Bill">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-9">
                <li class="shape shape-1"><img src="{{ asset('assets/media/others/bubble-12.png') }}" alt="Comments"></li>
                <li class="shape shape-2"><img src="{{ asset('assets/media/others/bubble-16.png') }}" alt="Comments"></li>
                <li class="shape shape-3"><img src="{{ asset('assets/media/others/bubble-13.png') }}" alt="Comments"></li>
                <li class="shape shape-4"><img src="{{ asset('assets/media/others/bubble-14.png') }}" alt="Comments"></li>
                <li class="shape shape-5"><img src="{{ asset('assets/media/others/bubble-16.png') }}" alt="Comments"></li>
                <li class="shape shape-6"><img src="{{ asset('assets/media/others/bubble-15.png') }}" alt="Comments"></li>
                <li class="shape shape-7"><img src="{{ asset('assets/media/others/bubble-16.png') }}" alt="Comments"></li>
            </ul>
        </section>

@endsection
