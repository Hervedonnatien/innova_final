@extends('layouts.front')

@section('banner')
    <!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area breadcrumb-banner">
            <div class="container">
                <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                    <h2 class="title h2">🚀Parmi les projets que nous avons réalisés, nous vous présentons quelques uns...</h2>
                    <p style="text-align: justify;"></p>
                </div>
                <div class="banner-thumbnail" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                    <img class="paralax-image" src="{{ asset('assets/media/banner/banner-thumb-98.png') }}" alt="Illustration">
                </div>
            </div>
            
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
@endsection
