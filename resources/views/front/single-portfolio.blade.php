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
                        <h1 class="title h2">Creative Agency</h1>
                        <p>A quick view of industry specific problems solved with design by the awesome team at Keystroke.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-thumbnail" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                        <img class="paralax-image" src="{{ asset('assets/media/project/project-2.png') }}" alt="Illustration">
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
    <!--=     Single Portfolio Area Start   =-->
    <!--=====================================-->
    <section class="section-padding single-portfolio-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-heading heading-left mb-0">
                        <span class="subtitle">Branding, Creative</span>
                        <h3 class="title">Creative agency</h3>
                    </div>
                    <p>From the designers and engineers who are creating the next generation of web and mobile experiences, to anyone putting a website together for the first time. We provide elegant solutions that set new standards for online publishing.</p>
                    <p>Digital technology has made our world more transparent and interconnected, posing new challenges and opportunities for every business. A holistic, user-centric perspective is what truly sets one apart.</p>
                    <a href="contact.blade.php" class="axil-btn btn-fill-primary">Get it Now</a>
                </div>
                <div class="col-lg-6 offset-xl-1">
                    <div class="why-choose-us">
                        <div class="section-heading heading-left">
                            <h3 class="title">We delivered</h3>
                            <p>Digital technology has made our world more transparent and interconnected, posing new challenges and opportunities for every business.</p>
                        </div>
                        <div class="accordion" id="choose-accordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="far fa-compress"></i> Strategy
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#choose-accordion">
                                    <div class="accordion-body">
                                        Aenean hendrerit laoreet vehicula. Nullam convallis augue at enim gravida pellentesque.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="far fa-code"></i>Design
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#choose-accordion">
                                    <div class="accordion-body">
                                        Aenean hendrerit laoreet vehicula. Nullam convallis augue at enim gravida pellentesque.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="fal fa-globe"></i>Development
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#choose-accordion">
                                    <div class="accordion-body">
                                        Aenean hendrerit laoreet vehicula. Nullam convallis augue at enim gravida pellentesque.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--=====================================-->
    <!--=       Video Popup Area Start      =-->
    <!--=====================================-->
    <div class="section section-padding-equal bg-color-light">
        <div class="container">
            <div class="about-expert">
                <div class="thumbnail">
                    <img src="{{ asset('assets/media/about/about-1.png') }}" alt="Thumbnail">
                    <div class="popup-video">
                        <a href="https://www.youtube.com/watch?v=1iIZeIy7TqM" class="play-btn popup-youtube"><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group-16 list-unstyled">
            <li class="shape shape-1"><img src="{{ asset('assets/media/others/circle-2.png') }}" alt="circle"></li>
            <li class="shape shape-2"><img src="{{ asset('assets/media/others/bubble-2.png') }}" alt="Line"></li>
            <li class="shape shape-3"><img src="{{ asset('assets/media/others/bubble-1.png') }}" alt="Line"></li>
        </ul>
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
