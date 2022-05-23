@extends('layouts.front')

@section('banner')
    <!--=====================================-->
    <!--=       Breadcrumb Area Start       =-->
    <!--=====================================-->
    <div class="breadcrum-area breadcrumb-banner">
            <div class="container">
                <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                    <h1 class="title h2">👨‍👩‍👧‍👦Confiez vos projets à notre équipe🚀.</h1>
                    <p style="text-align: justify;">✅Nous aimons utiliser le mot "équipe" car c'est ainsi que nous fonctionnons. Nous profitons constamment des avantages de notre esprit de ruche pour partager nos connaissances et notre expérience. Compte tenu de nos différents parcours dans le monde du digital, nous disposons d'une mine d'informations à exploiter lorsque nous travaillons pour vous. Cette approche 
                    d'équipe combinée à notre éthique de travail nous permet de livrer des projets rapidement et efficacement📈.</p>
                </div>
                <div class="banner-thumbnail" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                    <img class="paralax-image" src="{{ asset('assets/media/banner/banner-thumb-97.png') }}" alt="Illustration">
                </div>
            </div>
            <ul class="shape-group-8 list-unstyled">
                <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                    <img src="{{ asset('assets/media/others/bubble-9.png') }}" alt="Bubble">
                </li>
                
                <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                    <img src="{{ asset('assets/media/others/line-4.png') }}" alt="Line">
                </li>
            </ul>
        </div>
@endsection

@section('content')
    <!--=====================================-->
    <!--=       Experts  Area Start        =-->
    <!--=====================================-->
    <section class="section section-padding expert-counterup-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="section-heading heading-left">
                        <span class="subtitle"></span>
                        <h2>🍀Qu'est-ce qui nous rend spécial?</h2>
                        <p class="mb--50">Ayant travaillé avec de nombreux clients dans de nombreux secteurs et industries, nous pouvons 
                            vous aider à naviguer sur le marché dans le cas où vous avez peu ou pas d’équipe pour le faire. Nous adapterons notre équipe à votre activité et à vos projets, et nous en intégrerons d'autres si nécessaire. Que vos besoins soient entièrement spécifiés ou qu'ils n'en soient encore qu'au stade des idées, nous serions ravis 
                            de discuter de la manière dont nous pouvons vous aider. Vous avez le choix de la boisson.</p>
                        <a href="{{ route('team') }}" class="axil-btn btn-large btn-fill-primary"><strong>Nous contacter!</strong></a>
                    </div>
                </div>
                <div class="col-lg-6 offset-xl-1">
                    <div class="row" id="no-equal-gallery">
                        <div class="col-sm-6 no-equal-item" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="counterup-progress counterup-style-2 active">
                                <div class="icon">
                                    <img class="dark-icon" src="{{ asset('assets/media/icon/icon-9.png') }}" alt="Icon">
                                    <img class="light-icon" src="{{ asset('assets/media/icon/icon-7.png') }}" alt="Icon">
                                </div>
                                <div class="count-number h2">
                                    <span class="number count" data-count="50">50</span>
                                    <span class="symbol">+</span>
                                </div>
                                <h6 class="title">Projets livrés en développement d'application</h6>
                            </div>
                        </div>
                        <div class="col-sm-6 mt--90 mt_md--0 no-equal-item" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="counterup-progress counterup-style-2">
                                <div class="icon">
                                    <img class="dark-icon" src="{{ asset('assets/media/icon/icon-8.png') }}" alt="Icon">
                                    <img class="light-icon" src="{{ asset('assets/media/icon/icon-8.png') }}" alt="Icon">
                                </div>
                                <div class="count-number h2">
                                    <span class="number count" data-count="400000">400000</span>
                                    <span class="symbol">+</span>
                                </div>
                                <h6 class="title">Mots rédigés par mois en rédaction web</h6>
                            </div>
                        </div>
                        <div class="col-sm-6 no-equal-item" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="counterup-progress counterup-style-2">
                                <div class="icon">
                                    <img class="dark-icon" src="{{ asset('assets/media/icon/apple.png') }}" alt="Icon">
                                    <img class="light-icon" src="{{ asset('assets/media/icon/icon-9.png') }}" alt="Icon">
                                </div>
                                <div class="count-number h2">
                                    <span class="number count" data-count="2000000">2000000</span>
                                    <span class="symbol">+</span>
                                </div>
                                <h6 class="title">Caractères saisis par jour</h6>
                            </div>
                        </div>
                        <div class="col-sm-6 no-equal-item" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                            <div class="counterup-progress counterup-style-2">
                                <div class="icon">
                                    <img class="dark-icon" src="{{ asset('assets/media/icon/collaborateur.png') }}" alt="Icon">
                                    <img class="light-icon" src="{{ asset('assets/media/icon/apple.png') }}" alt="Icon">
                                </div>
                                <div class="count-number h2">
                                    <span class="number count" data-count="70">70</span>
                                    <span class="symbol">+</span>
                                </div>
                                <h6 class="title">Collaborateurs</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=           Team  Area Start        =-->
    <!--=====================================-->
    <section class="section section-padding bg-color-dark pb--70 pb_lg--20 pb_md--0">
        <div class="container">
            <div class="section-heading heading-light">
                <span class="subtitle"></span>
                <h2 class="title mb--50">Rencontrez notre équipe</h2>
                <p></p>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="team-grid active">
                        <div class="thumbnail">
                            <a href="https://www.linkedin.com/in/donnatien-jean-herve-noelson/">
                                <img src="{{ asset('assets/media/team/team-1.png') }}" alt="Team Member">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="{{ route('team') }}">NOELSON Donnatien Jean Hervé</a></h4>
                            <span class="designation">CEO</span>
                            <span class="designation">& Co-founder</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="team-grid">
                        <div class="thumbnail">
                            <a href="{{ route('team') }}">
                                <img src="{{ asset('assets/media/team/team-2.png') }}" alt="Team Member">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="{{ route('team') }}">SOAVANONA IDDIANE Djénissah</a></h4>
                            <span class="designation">Co-founder</span>
                            <span class="designation">& Lead Marketing</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="team-grid">
                        <div class="thumbnail">
                            <a href="{{ route('team') }}">
                                <img src="{{ asset('assets/media/team/team-3.png') }}" alt="Team Member">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="{{ route('team') }}">RAZAFINDRAIBE Raphaël Benja</a></h4>
                            <span class="designation">Co-Manager</span>
                            <span class="designation">& Lead Developer</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="team-grid">
                        <div class="thumbnail">
                            <a href="{{ route('team') }}">
                                <img src="{{ asset('assets/media/team/team-4.png') }}" alt="Team Member">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="{{ route('team') }}">MANANKASINA Harivony</a></h4>
                            <span class="designation">Business Developer</span>
                            <span class="designation"></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="team-grid">
                        <div class="thumbnail">
                            <a href="{{ route('team') }}">
                                <img src="{{ asset('assets/media/team/team-5.png') }}" alt="Team Member">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="{{ route('team') }}">IDDIANE Ingrid</a></h4>
                            <span class="designation">Chef de projet</span>
                            <span class="designation">en saisie des données & Assistante juridique</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="team-grid">
                        <div class="thumbnail">
                            <a href="{{ route('team') }}">
                                <img src="{{ asset('assets/media/team/team-6.png') }}" alt="Team Member">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="{{ route('team') }}">RAHARISATA Helina</a></h4>
                            <span class="designation">Chef de projet</span>
                            <span class="designation">en rédaction de contenu web</span>
                        </div>
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
@endsection
