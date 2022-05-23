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
                            <a href="https://www.kicklabel.studio/">
                                <img src="{{ asset('assets/media/project/project-1.png') }}" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="https://www.kicklabel.studio/">kick label</a></h4>
                            <span class="subtitle">Plateforme de distribution de music (deezer,soundcloud,spotify, etc)</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="https://www.stock-inventory.net/">
                                <img src="{{ asset('assets/media/project/project-2.png') }}" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="https://www.stock-inventory.net/">Stock inventory</a></h4>
                            <span class="subtitle">Plateforme de gestion d'un marketplace (stock, produit, vente, achat, etc)</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="https://aptekagest.com/login?fbclid=IwAR03uXzEjUaElLl8vRHn3TMO4uq1Fri9KMoRNxuDW6JXsYZ44ngAk1h-vkk">
                                <img src="{{ asset('assets/media/project/project-3.png') }}" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="https://aptekagest.com/login?fbclid=IwAR03uXzEjUaElLl8vRHn3TMO4uq1Fri9KMoRNxuDW6JXsYZ44ngAk1h-vkk">aptekagest</a></h4>
                            <span class="subtitle">Plateforme ou application de gestion des pharmacies</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="https://gestionparking.innova-freelance.com/login?fbclid=IwAR2Mdy9WG9geOrPwfzo9rf5ZpMDLQDOILswMuouMsOHScv3840SA-rXxgAs">
                                <img src="{{ asset('assets/media/project/project-4.png') }}" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="https://gestionparking.innova-freelance.com/login?fbclid=IwAR2Mdy9WG9geOrPwfzo9rf5ZpMDLQDOILswMuouMsOHScv3840SA-rXxgAs">TranscoPub</a></h4>
                            <span class="subtitle">Application web pour la gestion de parking</span>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="project-grid">
                        <div class="thumbnail">
                            <a href="https://personnel.innova-freelance.com/?fbclid=IwAR3W5EBj0EBb7oskJLmznanN7ycU9rROo9nAVysBHruXG6owA2nbrxN6uw4">
                                <img src="{{ asset('assets/media/project/project-5.png') }}" alt="project">
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="title"><a href="https://personnel.innova-freelance.com/?fbclid=IwAR3W5EBj0EBb7oskJLmznanN7ycU9rROo9nAVysBHruXG6owA2nbrxN6uw4">Adiresiko</a></h4>
                            <span class="subtitle">Application web pour la gestion des personnels</span>
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
                            <h4 class="title"><a href="{{ route('portfolio') }}">E-varotra</a></h4>
                            <span class="subtitle">Plateforme E-commerce (en cours...)</span>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
@endsection
