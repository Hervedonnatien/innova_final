@extends('layouts.front')

@section('banner')
    <!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area breadcrumb-banner">
        <div class="container">
            <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                <h1 class="title h2">One of the fastest growing agency</h1>
                <p>We design and develop web and mobile applications for our clients worldwide.</p>
            </div>
            <div class="banner-thumbnail thumbnail-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                <img src="{{ asset('assets/media/banner/banner-thumb-3.png') }}" alt="Illustration">
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="{{ asset('assets/media/others/bubble-9.png') }}" alt="Bubble">
            </li>
            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="{{ asset('assets/media/others/bubble-22.png') }}" alt="Bubble">
            </li>
            <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                <img src="{{ asset('assets/media/others/line-4.png') }}" alt="Line">
            </li>
        </ul>
    </div>

@endsection

@section('content')
    <!--=====================================-->
    <!--=       About  Area Start        =-->
    <!--=====================================-->
    <section class="section section-padding case-study-featured-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-6">
                    <div class="case-study-featured-thumb text-start">
                        <img src="{{ asset('assets/media/others/case-study-4.png') }}" alt="travel">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="case-study-featured">
                        <div class="section-heading heading-left">
                            <span class="subtitle">Who we are</span>
                            <h2 class="title">Building software for world changers</h2>
                            <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis.</p>
                            <p>Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                            <a href="#" class="axil-btn btn-fill-primary btn-large">Read More</a>
                        </div>
                        <div class="case-study-counterup">
                            <div class="single-counterup">
                                <h2 class="count-number">
                                    <span class="number count" data-count="10">10</span>
                                    <span class="symbol">+</span>
                                </h2>
                                <span class="counter-title">Years on the market</span>
                            </div>
                            <div class="single-counterup">
                                <h2 class="count-number">
                                    <span class="number count" data-count="1500">1500</span>
                                    <span class="symbol">+</span>
                                </h2>
                                <span class="counter-title">Projects delivered so far</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=      About  Quality Area Start    =-->
    <!--=====================================-->
    <section class="section section-padding bg-color-dark pb--80 pb_lg--40 pb_md--20">
        <div class="container">
            <div class="section-heading heading-light-left mb--100">
                <span class="subtitle">Our Valus</span>
                <h2 class="title">Why should you work with us?</h2>
                <p class="opacity-50">Nulla facilisi. Nullam in magna id dolor
                    blandit rutrum eget vulputate augue sed eu leo eget risus imperdiet.</p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="about-quality active">
                        <h3 class="sl-number">1</h3>
                        <h5 class="title">Exceed clients’ and colleagues’ expectations</h5>
                        <p>Ut id orci ultricies, gravida arcu ac, elementum
                            eros. Curabitur tortor ipsum, imperdiet eget odio
                            ac, faucibus ultricies nisl. Maecenas
                            scelerisque dignissim elit.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-quality">
                        <h3 class="sl-number">2</h3>
                        <h5 class="title">Take ownership and question the status quo in a constructive manner</h5>
                        <p>Nulla facilisi. Vestibulum vel urna eget magna condimentum faucibus. Sed arcu mi, semper sed suscipit vel, rhoncus vel justo.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-quality">
                        <h3 class="sl-number">3</h3>
                        <h5 class="title">Be brave, curious and experiment – learn from all successes and failures</h5>
                        <p>Quisque aliquet quis est in faucibus. Aenean eget lorem ac risus placerat convallis eget a eros. Suspendisse dignissim ultrices tellus, id placerat mauris lacinia a.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-quality">
                        <h3 class="sl-number">4</h3>
                        <h5 class="title">Act in a way that makes all of us proud</h5>
                        <p>Proin dignissim facilisis tortor a mattis. Morbi non maximus nunc, ut mattis tellus. In hac habitasse platea dictumst. Mauris viverra enim tellus, vel ultrices dolor aliquam non.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-quality">
                        <h3 class="sl-number">5</h3>
                        <h5 class="title">Build an inclusive, transparent and socially responsible culture</h5>
                        <p>Maecenas eros sapien, egestas at elit nec, eleifend sagittis orci.</p>
                    </div>
                </div>
            </div>
        </div>
        <ul class="list-unstyled shape-group-10">
            <li class="shape shape-1"><img src="{{ asset('assets/media/others/circle-1.png') }}" alt="Circle"></li>
            <li class="shape shape-2"><img src="{{ asset('assets/media/others/line-3.png') }}" alt="Circle"></li>
            <li class="shape shape-3"><img src="{{ asset('assets/media/others/bubble-5.png') }}" alt="Circle"></li>
        </ul>
    </section>
    <!--=====================================-->
    <!--=       About Team  Area Start      =-->
    <!--=====================================-->
    <section class="section-padding-equal">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7" data-sal="slide-right" data-sal-duration="800" data-sal-delay="100">
                    <div class="about-team">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/media/about/about-2.png') }}" alt="thumbnail">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" data-sal="slide-left" data-sal-duration="800" data-sal-delay="100">
                    <div class="about-team">
                        <div class="section-heading heading-left">
                            <span class="subtitle">Our Team</span>
                            <h2>Alone we can do so little; together we can do so much.</h2>
                            <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero.</p>
                            <a href="team.blade.php" class="axil-btn btn-large btn-fill-primary">Our Team</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
