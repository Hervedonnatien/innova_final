@extends('layouts.front')

@section('banner')
    <!--=====================================-->
    <!--=        Banner Area Start         =-->
    <!--=====================================-->
    <section class="banner banner-style-1">
        <div class="container">
            <div class="row align-items-end align-items-xl-start">
                <div class="col-lg-6">
                    <div class="banner-content" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <h1 class="title">🌐Agence web digitale située à Madagascar.</h1>
                        <span class="subtitle" style="text-align: justify;"><strong>Innova</strong> est une entreprise spécialisée dans la transformation digitale. Laissez-nous vous aider à enrichir vos offres numériques et à créer de nouveaux produits et services numériques. Ensemble, ils permettent la croissance et l'acquisition, et réduisent les risques.

Nous avons travaillé avec de grands noms pour renforcer leur présence numérique. Les projets diffèrent à chaque fois, mais l'objectif est commun : <strong>s'assurer que le numérique est utilisé pour créer un impact maximal pour l'organisation</strong>. 

Quels que soient vos objectifs, même si vos plans ne sont pas encore totalement définis, contactez-nous pour découvrir ce qui nous distingue des autres fournisseurs de solutions de transformation numérique.
📈.</span>
                        <a href="{{ route('contact') }}" class="axil-btn btn-fill-primary btn-large"><strong>Nous contacter !</strong></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-thumbnail">
                        <div class="large-thumb" data-sal="zoom-in" data-sal-duration="800" data-sal-delay="300">
                            <img src="{{ asset('assets/media/banner/window.png') }}" alt="Laptop">
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <ul class="list-unstyled shape-group-21">
            <li class="shape shape-1" data-sal="slide-down" data-sal-duration="500" data-sal-delay="100">
                <img src="{{ asset('assets/media/others/bubble-39.png') }}" alt="Bubble">
            </li>
            <li class="shape shape-2" data-sal="zoom-in" data-sal-duration="800" data-sal-delay="500">
                <img src="{{ asset('assets/media/others/bubble-38.png') }}" alt="Bubble">
            </li>
            <li class="shape shape-3" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                <img src="{{ asset('assets/media/others/bubble-14.png') }}" alt="Bubble">
            </li>
            <li class="shape shape-4" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                <img src="{{ asset('assets/media/others/bubble-14.png') }}" alt="Bubble">
            </li>
            <li class="shape shape-5" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                <img src="{{ asset('assets/media/others/bubble-14.png') }}" alt="Bubble">
            </li>
            <li class="shape shape-6" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                <img src="{{ asset('assets/media/others/bubble-40.png') }}" alt="Bubble">
            </li>
            <li class="shape shape-7" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                <img src="{{ asset('assets/media/others/bubble-41.png') }}" alt="Bubble">
            </li>
        </ul>
    </section>
@endsection

@section('content')
    <!--=====================================-->
    <!--=        Service Area Start         =-->
    <!--=====================================-->
    <section class="section section-padding-2 bg-color-dark">
        <div class="container">
            <div class="section-heading heading-light-left">
                <span class="subtitle"></span>
                <h4 class="title" style="text-align: justify;">✅Nous prenons en charge la réalisation sur mesure de tous vos projets digitaux.</br>
                 Voici quelques unes de nos principales activités...</h4>
                <p class="opacity-50">.</p>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                    <div class="services-grid active">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/media/icon/icon-1.png') }}" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title" style="text-align: justify;"> <a href="{{ route('service') }}">Développement web</a></h5>
                            <p style="text-align: justify;">Innova est une entreprise spécialisée dans le développement d'application web sur mesure. </br>✔️Nous nous oeuvrons sur les technologies <strong>JavaScript</strong> que ce soit au niveau du <strong>Frontend et du Backend (MERN, MEAN & MEVN Stack)</strong>. 
</br>✔️Nous utilisons également d'autres technologies comme <strong>PHP Symfony, PHP Laravel, Python Django...</strong> </p>
                            <a href="{{ route('service') }}" class="more-btn">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                    <div class="services-grid">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/media/icon/icon-2.png') }}" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title" style="text-align: justify;"> <a href="{{ route('service') }}p">Développement mobile</a></h5>
                            <p style="text-align: justify;">Nous développons pour vous des applications mobiles pour une meilleure interaction avec vos prospects ou clients. 

                            </br>✔️Nous mettons à votre disposition <strong>nos experts en développement mobile</strong> pour la réalisation de votre aplication qui sera dotée d'un: </br>👉design très intuitif, et </br>👉réflète l'image de votre business et entreprise. 
</br>Le développement de votre <strong>application native ou hybride </strong> sera à notre porté.</p>
                            <a href="{{ route('service') }}p" class="more-btn">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="services-grid">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/media/icon/icon-5.png') }}" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title" style="text-align: justify;"> <a href="{{ route('service') }}">Développement logiciel</a></h5>
                            <p style="text-align: justify;">✔️Pour la réalisation de vos logiciels desktop, nous mettons à votre dispositions nos développeurs compétents et passionnés. Pour préciser, une <strong>application desktop</strong> s'exécute complètement sur ordinateur et peut <strong>fonctionner offline</strong>. 
                            Pour ce faire,
                                nous privilégions les technologies <strong>JAVA</strong> pour sa: 
                            </br>👉performance </br>👉rapidité </br>👉facilité d'accès à différentes fonctionnalités </br>👉possibilité d'utilisation hors connexion internet.
                            </p>
                            <a href="{{ route('service') }}" class="more-btn">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                    <div class="services-grid">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/media/icon/icon-3.png') }}" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title" style="text-align: justify;"> <a href="{{ route('service') }}">CMS</a></h5>
                            <p style="text-align: justify;">Les CMS permettent à votre entreprise de rationaliser le contenu numérique et le processus de création. Vous pouvez personnaliser le site Web, 
                            afin qu'il réponde aux besoins précis de votre entreprise, et assurer la cohérence de l'apparence du site.
Les CMS peuvent également être intégrés à d'autres applications commerciales, telles que les systèmes de gestion des actifs et de relation client. Vous pouvez également optimiser votre site web et 
son contenu afin qu'il soit adapté aux mobiles et qu'il soit performant sur les moteurs de recherche. 
Pour satisfaire vos besoins nous mettons à votre disposition nos développeurs experts en CMS.
</br>✔️Nous utilisons:<strong> WordPress, Drupal, Joomla, WooCommerce, etc </strong>
</p>
                            <a href="{{ route('service') }}" class="more-btn">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                    <div class="services-grid">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/media/icon/icon-4.png') }}" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title" style="text-align: justify;"> <a href="{{ route('service') }}">Rédaction web SEO</a></h5>
                            <p style="text-align: justify;">La rédaction de contenu web fait partie de nos activités principales. Chez Innova nous mettons à votre disposition des rédacteurs qualifiés et expérimentés pour garantir  des contenus de qualité, non dupliqués et optimisés pour un meilleur référencement. Nous rédigeons minutieusement les textes de votre demande pour toucher au mieux votre cible. Nos champs de compétence sont :
                            </br> ✔️Animation éditoriale de blogs.
                            </br> ✔️Rédaction de pages de sites web.
                            </br> ✔️Rédaction de fiches-produits pour les sites e-commerce.
                            </br> ✔️Réécriture de contenu.
                            </br> ✔️Correction de contenu.
</p>
                            <a href="{{ route('service') }}" class="more-btn">Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="services-grid">
                        <div class="thumbnail">
                            <img src="{{ asset('assets/media/icon/icon-6.png') }}" alt="icon">
                        </div>
                        <div class="content">
                            <h5 class="title" style="text-align: justify;"> <a href="service-content-strategy.blade.php">Saisie des données (OS)</a></h5>
                            <p style="text-align: justify;">Chez Innova, nous mettons à votre disposition plus d’une quarantaine d’opérateurs de saisie pour saisir tous vos types de données pour vous accompagner dans votre transformation digitale et aussi de vous faciliter les tâches 
                                (<strong>saisie d’actes d’état civil, actes de décès, fiche médical, facture, etc </strong>). Nous regroupons des opérateurs de saisie qui ont une vitesse d’exécution très rapide et expérimentés dans l’utilisation des différents outils de décodage et de saisie. La saisie de tous vos types de données sera à notre porté:
                                    </br> ✔️Données type caractère ou texte 
                                    </br> ✔️Données numériques 
                                    </br> ✔️Données monétaires 
                                    </br> ✔️Données date et heure 
                                    </br> ✔️Formules etc</p>
                            <a href="service-content-strategy.blade.php" class="more-btn">Voir plus</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="list-unstyled shape-group-10">
            <li class="shape shape-1"><img src="{{ asset('assets/media/others/line-9.png') }}" alt="Circle"></li>
            <li class="shape shape-2"><img src="{{ asset('assets/media/others/bubble-42.png') }}" alt="Circle"></li>
            <li class="shape shape-3"><img src="{{ asset('assets/media/others/bubble-43.png') }}" alt="Circle"></li>
        </ul>
    </section>
    <!--=====================================-->
    <!--=       Case Study Area Start       =-->
    <!--=====================================-->
    <section class="section section-padding-equal case-study-featured-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6" data-sal="slide-right" data-sal-duration="800">
                    <div class="slick-slider slick-dot-nav featured-content" data-slick='{"infinite": true,"arrows": false, "dots": true, "slidesToShow": 1, "asNavFor": ".featured-thumbnail"}'>
                        <div class="slick-slide">
                            <div class="case-study-featured">
                                <div class="section-heading heading-left">
                                    <span class="subtitle"></span>
                                    <h4 class="title" style="text-align: justify;">🎯Pourquoi choisir Innova ?💪</h4>
                                    <p style="text-align: justify;">Nous sommes conscients qu'il est difficile de choisir le bon partenaire pour votre projet. Il est impératif de poser les bonnes questions dès le départ si vous voulez éviter tout bouleversement inutile. Pour vous satisfaire, nous mettons à votre disposition:</p>
                                    
                                    <p style="text-align: justify;"><strong>👨‍👩‍👧‍👦Notre communauté </strong> </br>
                                    Nous regroupons une équipe de jeunes dynamiques, passionnés et créatifs. 
                                    Nos talents sont capables de vous offrir les meilleurs produits de qualité dans les meilleurs des délais tout en assurant la performance de tous vos projets digitaux✨.</p>
                                    <p style="text-align: justify;"><strong>⏳Nos expériences</strong>
</br>Nous collaborons avec des ingénieurs en informatique expérimentés (+5 ans d'expériences). Nous disposons également des rédacteurs expérimentés avec de belle plume et spécialisés en optimisation SEO, sans oublier nos spécialistes en saisie des données. 
                                    Nos expériences ainsi que nos compétences techniques vous garantissent des travaux de qualités et satisfaisants selon votre budget❤️.</p>
                                    <p style="text-align: justify;"><strong>🚀Nos challenges </strong></br>
                                    Les défis font parties du quotidien de notre entreprise. En tant que fournisseur de solutions de transformation numérique, nous travaillons avec vos systèmes pour vous aider à rendre vos processus et vos produits plus conviviaux sur le plan numérique et à faire en sorte qu'ils fonctionnent bien dans le monde connecté d'aujourd'hui🔥.</p>
                                    <a href="{{ route('case-study') }}" class="axil-btn btn-fill-primary btn-large"><strong>Nous contacter !</strong></a>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 d-none d-lg-block" data-sal="slide-left" data-sal-duration="800">
                    <div class="slick-slider slick-dot-nav featured-thumbnail" data-slick='{"infinite": true,"arrows": false, "dots": false, "fade": true, "slidesToShow": 1, "asNavFor": ".featured-content"}'>
                        <div class="slick-slide">
                            <div class="case-study-featured-thumb">
                                <img src="{{ asset('assets/media/others/case-study-4.png') }}" alt="travel">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=        About Area Start         =-->
    <!--=====================================-->
   
    <section class="section section-padding bg-color-dark2">
        <div class="container">
            <div class="section-heading heading-light">
                <span class="subtitle"></span>
                <h2 class="title">🚀Confiez tous vos projets digitaux entre les mains de notre équipe</h2>
            
            </div>
            <div class="row">
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                    <div class="counterup-progress active">
                        <div class="icon">
                            <img src="{{ asset('assets/media/icon/icon-9.png') }}" alt="Apple">
                        </div>
                        <div class="count-number h2">
                            <span class="number count" data-count="50">50</span>
                            <span class="symbol">+</span>
                        </div>
                        <h6 class="title">Projets livrés en développement d'application</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                    <div class="counterup-progress">
                        <div class="icon">
                            <img src="{{ asset('assets/media/icon/icon-8.png') }}" alt="Apple">
                        </div>
                        <div class="count-number h2">
                            <span class="number count" data-count="400000">400000</span>
                            <span class="symbol">+</span>
                        </div>
                        <h6 class="title">Mots rédigés par mois en rédaction web</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                    <div class="counterup-progress">
                        <div class="icon">
                            <img src="{{ asset('assets/media/icon/apple.png') }}" alt="Apple">
                        </div>
                        <div class="count-number h2">
                            <span class="number count" data-count="2000000">2000000</span>
                            <span class="symbol">+</span>
                        </div>
                        <h6 class="title">Caractères saisis par jour</h6>
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                    <div class="counterup-progress">
                        <div class="icon">
                            <img src="{{ asset('assets/media/icon/collaborateur.png') }}" alt="Apple">
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
        <ul class="list-unstyled shape-group-10">
            <!-- <li class="shape shape-1"><img src="assets/media/others/line-9.png" alt="Circle"></li> -->
            <li class="shape shape-2"><img src="{{ asset('assets/media/others/bubble-42.png') }}" alt="Circle"></li>
            <li class="shape shape-3"><img src="{{ asset('assets/media/others/bubble-43.png') }}" alt="Circle"></li>
        </ul>
    </section>
    <!--=====================================-->
    <!--=        Testimonial Area Start      =-->
    <!--=====================================-->
    <section class="section section-padding">
        <div class="container">
            <div class="section-heading heading-left">
                <span class="subtitle">Testimonial</span>
                <h2 class="title">From getting started</h2>
                <p>Nulla facilisi. Nullam in magna id dolor blandit rutrum eget vulputate augue sed eu leo eget risus imperdiet.</p>
            </div>
            <div class="row">
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                    <div class="testimonial-grid active">
                        <span class="social-media"><img src="{{ asset('assets/media/icon/yelp-2.png') }}" alt="Yelp"></span>
                        <p>“ Donec metus lorem, vulputate
                            at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. ”</p>
                        <div class="author-info">
                            <div class="thumb">
                                <img src="{{ asset('assets/media/testimonial/testimonial-1.png') }}" alt="Google Review">
                            </div>
                            <div class="content">
                                <span class="name">Darrell Steward</span>
                                <span class="designation">Executive Chairman</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="200">
                    <div class="testimonial-grid">
                        <span class="social-media"><img src="{{ asset('assets/media/icon/google-2.png') }}" alt="google"></span>
                        <p>“ Donec metus lorem, vulputate
                            at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. ”</p>
                        <div class="author-info">
                            <div class="thumb">
                                <img src="{{ asset('assets/media/testimonial/testimonial-2.png') }}" alt="Google Review">
                            </div>
                            <div class="content">
                                <span class="name">Savannah Nguyen</span>
                                <span class="designation">Executive Chairman</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="300">
                    <div class="testimonial-grid">
                        <span class="social-media"><img src="{{ asset('assets/media/icon/fb-2.png') }}" alt="Facebook"></span>
                        <p>“ Donec metus lorem, vulputate
                            at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. ”</p>
                        <div class="author-info">
                            <div class="thumb">
                                <img src="{{ asset('assets/media/testimonial/testimonial-3.png') }}" alt="Google Review">
                            </div>
                            <div class="content">
                                <span class="name">Floyd Miles</span>
                                <span class="designation">Executive Chairman</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <ul class="shape-group-4 list-unstyled">
            <li class="shape-1"><img src="{{ asset('assets/media/others/bubble-1.png') }}" alt="Bubble"></li>
        </ul>
    </section>
  


    <section class="section section-padding bg-color-dark2">
        <div class="container">
            <div class="section-heading heading-light">
               
                <h3 class="title" style="text-align: justify;">✅Quelques unes des solutions que nous utilisons au quotidient...</h3>
                
            </div>
            <div class="row">
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500">
                    <div class="brand-grid active">
                        <img src="{{ asset('assets/media/brand/brand-1.png') }}" alt="Brand">
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
                    <div class="brand-grid">
                        <img src="{{ asset('assets/media/brand/brand-2.png') }}" alt="Brand">
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="200">
                    <div class="brand-grid">
                        <img src="{{ asset('assets/media/brand/brand-3.png') }}" alt="Brand">
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                    <div class="brand-grid">
                        <img src="{{ asset('assets/media/brand/brand-4.png') }}" alt="Brand">
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="400">
                    <div class="brand-grid">
                        <img src="{{ asset('assets/media/brand/brand-5.png') }}" alt="Brand">
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="500">
                    <div class="brand-grid">
                        <img src="{{ asset('assets/media/brand/brand-6.png') }}" alt="Brand">
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="600">
                    <div class="brand-grid">
                        <img src="{{ asset('assets/media/brand/brand-7.png') }}" alt="Brand">
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="700">
                    <div class="brand-grid">
                        <img src="{{ asset('assets/media/brand/brand-8.png') }}" alt="Brand">
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="700">
                    <div class="brand-grid">
                        <img src="{{ asset('assets/media/brand/brand-9.png') }}" alt="Brand">
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="700">
                    <div class="brand-grid">
                        <img src="{{ asset('assets/media/brand/brand-12.png') }}" alt="Brand">
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="700">
                    <div class="brand-grid">
                        <img src="{{ asset('assets/media/brand/brand-10.png') }}" alt="Brand">
                    </div>
                </div>
                <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="700">
                    <div class="brand-grid">
                        <img src="{{ asset('assets/media/brand/brand-11.png') }}" alt="Brand">
                    </div>
                </div>
            </div>
            
        </div>
        <ul class="list-unstyled shape-group-10">
            <li class="shape shape-1"><img src="{{ asset('assets/media/others/line-9.png') }}" alt="Circle"></li>
        </ul>
    </section>
@endsection
