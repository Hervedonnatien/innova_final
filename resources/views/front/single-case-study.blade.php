@extends('layouts.front')

@section('banner')
    <!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area breadcrumb-banner single-breadcrumb">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                        <h1 class="title h2">Los Marineros</h1>
                        <p>We design and develop web and mobile applications for our clients worldwide.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-thumbnail" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                        <img class="paralax-image" src="{{ asset('assets/media/others/case-study-1.png') }}" alt="Illustration">
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="{{ asset('assets/media/others/bubble-9.png') }}" alt="Bubble">
            </li>
            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="{{ asset('assets/media/others/bubble-20.png') }}" alt="Bubble">
            </li>
            <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                <img src="{{ asset('assets/media/others/line-4.png') }}" alt="Line">
            </li>
        </ul>
    </div>
@endsection

@section('content')
    <!--=====================================-->
    <!--=      Project Brief  Area Start    =-->
    <!--=====================================-->
    <section class="section-padding case-study-brief">
        <div class="container">
            <div class="row align-items-xl-center">
                <div class="col-lg-6" data-sal="slide-right" data-sal-duration="1000">
                    <div class="case-study-featured-thumb">
                        <img class="paralax-image" src="{{ asset('assets/media/others/case-study-1.png') }}" alt="Case Study">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-1" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="200">
                    <div class="case-study-featured">
                        <div class="section-heading heading-left">
                            <h2 class="title">Los Marineros</h2>
                            <p>From the designers and engineers who are creating the next generation of web and mobile experiences, to anyone putting a website together for the first time. We provide elegant solutions that set new standards for online publishing.</p>
                            <p>Digital technology has made our world more transparent and interconnected, posing new challenges and opportunities for every business. A holistic, user-centric perspective is what truly sets one apart.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding case-study-brief bg-color-mercury">
        <div class="container">
            <div class="row align-items-xl-center">
                <div class="col-xl-5 col-lg-6" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="200">
                    <div class="case-study-featured">
                        <div class="section-heading heading-left">
                            <h2 class="title">Los Marineros</h2>
                            <p>From the designers and engineers who are creating the next generation of web and mobile experiences, to anyone putting a website together for the first time. We provide elegant solutions that set new standards for online publishing.</p>
                            <p>Digital technology has made our world more transparent and interconnected, posing new challenges and opportunities for every business. A holistic, user-centric perspective is what truly sets one apart.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-xl-1" data-sal="slide-left" data-sal-duration="1000">
                    <div class="case-study-featured-thumb">
                        <img class="paralax-image" src="{{ asset('assets/media/others/case-study-2.png') }}" alt="Case Study">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=    Project Solution  Area Start   =-->
    <!--=====================================-->
    <section class="section-padding-equal case-study-solution">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading heading-left">
                        <h2 class="title">Solutions</h2>
                        <p>From the designers and engineers who are creating the next generation of web and mobile experiences, to anyone putting a website together for the first time. We provide elegant solutions that set new standards for online publishing.</p>
                        <p>Digital technology has made our world more transparent and interconnected, posing new challenges and opportunities for every business. A holistic, user-centric perspective is what truly sets one apart. together for the first time. We provide elegant solutions.</p>
                    </div>
                    <div class="about-expert">
                        <div class="thumbnail paralax-image">
                            <img src="{{ asset('assets/media/about/about-1.png') }}" alt="Thumbnail">
                            <div class="popup-video">
                                <a href="https://www.youtube.com/watch?v=1iIZeIy7TqM" class="play-btn popup-youtube"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group-10 list-unstyled">
            <li class="shape shape-2"><img src="{{ asset('assets/media/others/bubble-2.png') }}" alt="Line"></li>
            <li class="shape shape-3"><img src="{{ asset('assets/media/others/bubble-1.png') }}" alt="Line"></li>
        </ul>
    </section>
    <!--=====================================-->
    <!--=       Work Process Area Start     =-->
    <!--=====================================-->
    <section class="section section-padding bg-color-light pb--70">
        <div class="container">
            <div class="section-heading mb--90">
                <span class="subtitle">Process</span>
                <h2 class="title">Our logo design process</h2>
                <p>Our comprehensive logo design strategy ensures a perfectly crafted logo for your business.</p>
            </div>
            <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
                <div class="thumbnail paralax-image">
                    <img src="{{ asset('assets/media/others/process-1.png') }}" alt="Thumbnail">
                </div>
                <div class="content">
                    <span class="subtitle">Step One</span>
                    <h3 class="title">Discover</h3>
                    <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                </div>
            </div>
            <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
                <div class="thumbnail paralax-image">
                    <img src="{{ asset('assets/media/others/process-2.png') }}" alt="Thumbnail">
                </div>
                <div class="content">
                    <span class="subtitle">Step Two</span>
                    <h3 class="title">Prototype</h3>
                    <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                </div>
            </div>
            <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
                <div class="thumbnail paralax-image">
                    <img src="{{ asset('assets/media/others/process-3.png') }}" alt="Thumbnail">
                </div>
                <div class="content">
                    <span class="subtitle">Step Three</span>
                    <h3 class="title">Test</h3>
                    <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                </div>
            </div>
            <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
                <div class="thumbnail paralax-image">
                    <img src="{{ asset('assets/media/others/process-4.png') }}" alt="Thumbnail">
                </div>
                <div class="content">
                    <span class="subtitle">Step four</span>
                    <h3 class="title">Build</h3>
                    <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                </div>
            </div>
        </div>
        <ul class="shape-group-17 list-unstyled">
            <li class="shape shape-1"><img src="{{ asset('assets/media/others/bubble-24.png') }}" alt="Bubble"></li>
            <li class="shape shape-2"><img src="{{ asset('assets/media/others/bubble-23.png') }}" alt="Bubble"></li>
            <li class="shape shape-3"><img src="{{ asset('assets/media/others/line-4.png') }}" alt="Line"></li>
            <li class="shape shape-4"><img src="{{ asset('assets/media/others/line-5.png') }}" alt="Line"></li>
            <li class="shape shape-5"><img src="{{ asset('assets/media/others/line-4.png') }}" alt="Line"></li>
            <li class="shape shape-6"><img src="{{ asset('assets/media/others/line-5.png') }}" alt="Line"></li>
        </ul>
    </section>
    <!--=====================================-->
    <!--=       CounterUp Area Start     =-->
    <!--=====================================-->
    <section class="section section-padding">
        <div class="container">
            <div class="section-heading">
                <h2 class="title">Work We Finished</h2>
                <p>In vel varius turpis, non dictum sem. Aenean in efficitur ipsum, in egestas ipsum. Mauris in mi ac tellus.</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                    <div class="counterup-progress counterup-style-2">
                        <div class="icon">
                            <img src="{{ asset('assets/media/icon/icon-10.png') }}" alt="Apple">
                        </div>
                        <div class="count-number h2">
                            <span class="number count" data-count="15">15</span>
                            <span class="symbol">+</span>
                        </div>
                        <h6 class="title">Years of operation</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt--90 mt_md--0" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                    <div class="counterup-progress counterup-style-2">
                        <div class="icon">
                            <img src="{{ asset('assets/media/icon/icon-11.png') }}" alt="Apple">
                        </div>
                        <div class="count-number h2">
                            <span class="number count" data-count="360">360</span>
                            <span class="symbol">+</span>
                        </div>
                        <h6 class="title">Projects deliverd</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="counterup-progress counterup-style-2">
                        <div class="icon">
                            <img src="{{ asset('assets/media/icon/icon-12.png') }}" alt="Apple">
                        </div>
                        <div class="count-number h2">
                            <span class="number count" data-count="600">600</span>
                            <span class="symbol">+</span>
                        </div>
                        <h6 class="title">Specialist</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mt--90 mt_md--0" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                    <div class="counterup-progress counterup-style-2">
                        <div class="icon">
                            <img src="{{ asset('assets/media/icon/apple-black.png') }}" alt="Apple">
                        </div>
                        <div class="count-number h2">
                            <span class="number count" data-count="64">64</span>
                            <span class="symbol">+</span>
                        </div>
                        <h6 class="title">Years of operation</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
