@extends('layouts.front')

@section('banner')
    <!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area">
        <div class="container">
            <div class="breadcrumb">
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="active">Team Details</li>
                </ul>
                <h1 class="title h2">Team Details</h1>
            </div>
        </div>
        <ul class="shape-group-8 list-unstyled">
            <li class="shape shape-1 sal-animate" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                <img src="{{ asset('assets/media/others/bubble-9.png') }}' alt="Bubble">
            </li>
            <li class="shape shape-2 sal-animate" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                <img src="{{ asset('assets/media/others/bubble-17.png') }}" alt="Bubble">
            </li>
            <li class="shape shape-3 sal-animate" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                <img src="{{ asset('assets/media/others/line-4.png') }}" alt="Line">
            </li>
        </ul>
    </div>
@endsection

@section('content')
    <!--=====================================-->
    <!--=      Team Details Area Start      =-->
    <!--=====================================-->
    <section class="section-padding-equal team-details-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="team-details-content">
                        <h2 class="title">Ralph Edwards</h2>
                        <span class="subtitle">Communications Strategist</span>
                        <ul class="social-share list-unstyled">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fab fa-behance"></i></a></li>
                        </ul>
                        <p>Phasellus in libero et nunc malesuada tincidunt. Morbi auctor tristique semper. Nunc condimentum dapibus felis, non volutpat ligula dapibus non. Quisque varius massa magna, eget iaculis ipsum tincidunt sed. Sed tempus magna id nunc posuere auctor. Morbi aliquam a justo eget cursus. Donec at quam id ex mollis dapibus eget ac sem. Maecenas pharetra bibendum massa, ut tincidunt lectus.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="team-details-thumb">
                        <img class="paralax-image" src="{{ asset('assets/media/team/team-9.png') }}" alt="Thumbnail">
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
