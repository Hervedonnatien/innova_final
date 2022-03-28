@extends('layouts.front')

@section('banner')
    <!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area breadcrumb-banner">
        <div class="container">
            <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                <h1 class="title h2">Our projects</h1>
                <p>A quick view of industry specific problems solved with design by the awesome team at Abstrak.</p>
            </div>
            <div class="banner-thumbnail" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                <img class="paralax-image" src="{{ asset('assets/media/banner/banner-thumb-1.png') }}" alt="Illustration">
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="{{ asset('assets/media/others/bubble-9.png') }}" alt="Bubble">
            </li>
            <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="{{ asset('assets/media/others/bubble-20.png') }}" alt="Bubble">
            </li>
        </ul>
    </div>
@endsection

@section('content')
    <!--=====================================-->
    <!--=       Projects  Area Start        =-->
    <!--=====================================-->
    <section class="section section-padding-equal pt--200 pt_md--80 pt_sm--60">
        <div class="container-fluid plr--30">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3">
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="{{ route('portfolio') }}">
                                <img src="{{ asset('assets/media/project/project-1.png') }}" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="{{ route('portfolio') }}">Creative Agency</a></h4>
                            <span class="subtitle">Full Branding</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="{{ route('portfolio') }}">
                                <img src="{{ asset('assets/media/project/project-2.png') }}" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="{{ route('portfolio') }}">Digital Marketing</a></h4>
                            <span class="subtitle">Logo, Website & App</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="{{ route('portfolio') }}">
                                <img src="{{ asset('assets/media/project/project-3.png') }}" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="{{ route('portfolio') }}">Digital Agency</a></h4>
                            <span class="subtitle">Website, UI/UX</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="{{ route('portfolio') }}">
                                <img src="{{ asset('assets/media/project/project-4.png') }}" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="{{ route('portfolio') }}">Plan Management</a></h4>
                            <span class="subtitle">Branding, Website, App</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="{{ route('portfolio') }}">
                                <img src="{{ asset('assets/media/project/project-5.png') }}" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="{{ route('portfolio') }}">Social Engagement</a></h4>
                            <span class="subtitle">Design, Development</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="{{ route('portfolio') }}">
                                <img src="{{ asset('assets/media/project/project-1.png') }}" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="{{ route('portfolio') }}">Creative Agency</a></h4>
                            <span class="subtitle">Full Branding</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="{{ route('portfolio') }}">
                                <img src="{{ asset('assets/media/project/project-2.png') }}" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="{{ route('portfolio') }}">Digital Marketing</a></h4>
                            <span class="subtitle">Logo, Website & App</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="{{ route('portfolio') }}">
                                <img src="{{ asset('assets/media/project/project-6.png') }}" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="{{ route('portfolio') }}">Technical SEO</a></h4>
                            <span class="subtitle">Logo, Webapp, App</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="{{ route('portfolio') }}">
                                <img src={{ asset('assets/media/project/project-3.png') }}" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="{{ route('portfolio') }}">Digital Agency</a></h4>
                            <span class="subtitle">Website, UI/UX</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="{{ route('portfolio') }}">
                                <img src="{{ asset('assets/media/project/project-4.png') }}" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="{{ route('portfolio') }}">Plan Management</a></h4>
                            <span class="subtitle">Branding, Website, App</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="{{ route('portfolio') }}">
                                <img src="{{ asset('assets/media/project/project-6.png') }}" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="{{ route('portfolio') }}">Technical SEO</a></h4>
                            <span class="subtitle">Logo, Webapp, App</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="{{ route('portfolio') }}">
                                <img src="{{ asset('assets/media/project/project-5.png') }}" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="{{ route('portfolio') }}">Social Engagement</a></h4>
                            <span class="subtitle">Design, Development</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination justify-content-center mt--20">
                <ul>
                    <li><a class="prev page-numbers" href="#"><i class="fal fa-arrow-left"></i></a></li>
                    <li><a href="#" class="page-numbers current">1</a></li>
                    <li><a class="page-numbers" href="#">2</a></li>
                    <li><a class="page-numbers" href="#">3</a></li>
                    <li><a class="page-numbers" href="#">4</a></li>
                    <li><a class="page-numbers" href="#">5</a></li>
                    <li><a class="next page-numbers" href="#"><i class="fal fa-arrow-right"></i></a></li>
                </ul>
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
