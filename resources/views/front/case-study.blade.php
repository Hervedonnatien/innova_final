@extends('layouts.front')

@section('banner')
        <!--=====================================-->
        <!--=       Breadcrumb Area Start       =-->
        <!--=====================================-->
        <div class="breadcrum-area breadcrumb-banner">
            <div class="container">
                <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                    <h1 class="title h2">Case Study</h1>
                    <p>We design and develop web and mobile applications for our clients worldwide.</p>
                </div>
                <div class="banner-thumbnail thumbnail-3" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                    <img src="{{ asset('assets/media/banner/banner-thumb-5.png') }}" alt="Illustration">
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
        <!--=      Case Study  Area Start       =-->
        <!--=====================================-->
        <section class="pt--250 pt_lg--200 pt_md--100 pt_sm--80 case-study-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" data-sal="slide-right" data-sal-duration="1000">
                        <div class="case-study-featured-thumb thumb-1">
                            <img class="paralax-image" src="{{ asset('assets/media/others/case-study-1.png') }}" alt="Case Study">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 offset-xl-1" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="200">
                        <div class="case-study-featured">
                            <div class="section-heading heading-left">
                                <span class="subtitle">Featured Case Study</span>
                                <h2 class="title">Los Marineros</h2>
                                <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                                <a href="{{ route('case-study') }}" class="axil-btn btn-fill-primary btn-large">Read Case Study</a>
                            </div>
                            <div class="case-study-counterup">
                                <div class="single-counterup">
                                    <h3 class="count-number">
                                        <span class="number count" data-count="15">15</span>
                                        <span class="symbol">%</span>
                                    </h3>
                                    <span class="counter-title">ROI increase</span>
                                </div>
                                <div class="single-counterup">
                                    <h3 class="count-number">
                                        <span class="number count" data-count="60">60</span>
                                        <span class="symbol">k</span>
                                    </h3>
                                    <span class="counter-title">Monthly website visits</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 offset-xl-1 order-lg-2" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="200">
                        <div class="case-study-featured-thumb thumb-2">
                            <img class="paralax-image" src="{{ asset('assets/media/others/case-study-2.png') }}" alt="Case Study">
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-1" data-sal="slide-right" data-sal-duration="1000">
                        <div class="case-study-featured">
                            <div class="section-heading heading-left">
                                <span class="subtitle">Featured case study</span>
                                <h2 class="title">Whitehorse</h2>
                                <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                                <a href="{{ route('case-study') }}" class="axil-btn btn-fill-primary btn-large">Read Case Study</a>
                            </div>
                            <div class="case-study-counterup">
                                <div class="single-counterup">
                                    <h3 class="count-number">
                                        <span class="number count" data-count="15">15</span>
                                        <span class="symbol">%</span>
                                    </h3>
                                    <span class="counter-title">ROI increase</span>
                                </div>
                                <div class="single-counterup">
                                    <h3 class="count-number">
                                        <span class="number count" data-count="60">60</span>
                                        <span class="symbol">k</span>
                                    </h3>
                                    <span class="counter-title">Monthly website visits</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 order-lg-3" data-sal="slide-right" data-sal-duration="1000">
                        <div class="case-study-featured-thumb thumb-3">
                            <img class="paralax-image" src="{{ asset('assets/media/others/case-study-3.png') }}" alt="Case Study">
                        </div>
                    </div>
                    <div class="col-lg-5 offset-xl-1 order-lg-4" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="200">
                        <div class="case-study-featured">
                            <div class="section-heading heading-left">
                                <span class="subtitle">Featured Case Study</span>
                                <h2 class="title">Periscope Data</h2>
                                <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                                <a href="{{ route('case-study') }}" class="axil-btn btn-fill-primary btn-large">Read Case Study</a>
                            </div>
                            <div class="case-study-counterup">
                                <div class="single-counterup">
                                    <h3 class="count-number">
                                        <span class="number count" data-count="15">15</span>
                                        <span class="symbol">%</span>
                                    </h3>
                                    <span class="counter-title">ROI increase</span>
                                </div>
                                <div class="single-counterup">
                                    <h3 class="count-number">
                                        <span class="number count" data-count="60">60</span>
                                        <span class="symbol">k</span>
                                    </h3>
                                    <span class="counter-title">Monthly website visits</span>
                                </div>
                            </div>
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
                        <a href="{{ route('contact') }}" class="axil-btn btn-large btn-fill-white">Estimate Project</a>
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
