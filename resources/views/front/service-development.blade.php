@extends('layouts.front')

@section('banner')
    <!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area breadcrumb-banner">
        <div class="container">
            <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                <h1 class="title h2">Development</h1>
                <p>Give your business a unique logo to stand out from the crowd. We’ll create custom logo for your company.</p>
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
    <!--=       Why Choose Area Start       =-->
    <!--=====================================-->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="why-choose-us">
                        <div class="section-heading heading-left">
                            <span class="subtitle">About Us</span>
                            <h3 class="title">Why branding matters?</h3>
                            <p>Ut condimentum enim nec diam convallis mollis. Sed felis quam, semper dapibus purus sed, rhoncus ullamcorper lacus.</p>
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
                <div class="col-xl-5 col-lg-6 offset-xl-1">
                    <div class="contact-form-box shadow-box mb--30">
                        <h3 class="title">Get a free Keystroke quote now</h3>
                        <form>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" placeholder="John Smith">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="name" placeholder="example@mail.com">
                            </div>
                            <div class="form-group mb--40">
                                <label>Phone</label>
                                <input type="tel" class="form-control" name="Phone" placeholder="+123456789">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="axil-btn btn-fill-primary btn-fluid" name="submit-btn">Get Pricing Now</button>
                            </div>
                        </form>
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
    <!--=     Featured Project Area Start   =-->
    <!--=====================================-->
    <section class="section section-padding">
        <div class="container">
            <div class="section-heading">
                <span class="subtitle">Our Project</span>
                <h2 class="title">Featured Designs</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="{{ route('portfolio') }}">
                                <img src="{{ asset('assets/media/project/project-1.png') }}" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="{{ route('portfolio') }}">Creative Agency</a></h4>
                            <span class="subtitle">Full Branding, Website, App</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="{{ route('portfolio') }}">
                                <img src="{{ asset('assets/media/project/project-2.png') }}" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="{{ route('portfolio') }}">Digital Marketing</a></h4>
                            <span class="subtitle">Logo, Website & Mobile App</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group-16 list-unstyled">
            <li class="shape shape-1"><img src="{{ asset('assets/media/others/circle-2.png') }}" alt="circle"></li>
            <li class="shape shape-3"><img src="{{ asset('assets/media/others/bubble-1.png') }}" alt="Line"></li>
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
