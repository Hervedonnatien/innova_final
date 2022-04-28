@extends('layouts.front')

@section('banner')
        <!--=====================================-->
        <!--=       Breadcrumb Area Start       =-->
        <!--=====================================-->
        <div class="breadcrum-area breadcrumb-banner">
            <div class="container">
                <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                    <h1 class="title h2">🚀Nos vous garantissons les meilleures solutions pour votre business process🎯</h1>
                    <p style="text-align: justify;">✅Nous pensons que vous devez commencer à récolter un retour sur investissement dès que possible. 
                        C'est pourquoi nous adoptons une approche d’exécution flexible qui nous permet de mettre en ligne un sous-ensemble de tous vos projets dès que possible, en fonction de vos besoins. Elle nous permet également de tenir compte de toute nouvelle idée intéressante qui se présente. Pour ce faire, nos collaborateurs et chefs de projet 
                        expérimentés conviennent de processus et de cycles de développement personnalisés pour chaque nouveau projet📈.</p>
                </div>
                <div class="banner-thumbnail" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                    <img class="paralax-image" src="{{ asset('assets/media/banner/banner-thumb-47.png') }}" alt="Illustration">
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
        <!--=        Service Area Start         =-->
        <!--=====================================-->
        <div class="service-scroll-navigation-area">
            <!-- Service Nav -->
            <nav id="onepagenav" class="service-scroll-nav navbar onepagefixed">
                <div class="container">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link" href="#section1">Développement d'application</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section2">Développement CMS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section3">Rédaction web SEO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section4">Saisie des données (OS)</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- Design Service -->
            <div class="section section-padding " id="section1">
                <div class="container">
                    <div class="section-heading">
                        <h3 class="title">Développement d'application web, mobile & desktop</h3>
                        <span class="subtitle">Nos processus d'intervention</span>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-29.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="{{ route('service') }}">Prototypage</a></h5>
                                    <p style="text-align: justify;">Après avoir compris ce que les utilisateurs attendent de l'application, nous passons au processus de prototypage. Une interface bien conçue est la garantie que l'utilisateur saura rapidement comment l'application l'aidera à résoudre son problème. 
Vous avez la possibilité d'examiner la fonctionnalité de la future application sans la partie logicielle.</p>
                                    <a href="{{ route('service') }}" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-27.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5> <a href="{{ route('service') }}">Conception du produit</a></h5>
                                    <p style="text-align: justify;">Dessinez le design de tous les écrans et états des éléments. Nous utilisons les recommandations de Google et d'Apple pour concevoir l'application. Nous veillons à ce que les solutions graphiques 
                                        soient compréhensibles et pratiques. Vous obtenez un design qui vous distinguera de la concurrence.</p>
                                    <a href="{{ route('service') }}" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-28.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="{{ route('service') }}">Élaboration des spécifications techniques</a></h5>
                                    <p style="text-align: justify;">Le cahier des charges est un document élaboré sur la base d'un prototype interactif et d'un design de produit 
                                        approuvés dont les développeurs, les ingénieurs d'essai ont besoin pour concevoir et tester le projet.</p>
                                    <a href="{{ route('service') }}" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-90.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="{{ route('service') }}">Programmation et test de l'application</a></h5>
                                    <p style="text-align: justify;">La programmation d'une ressource web ou d'une application mobile est réalisée selon la méthodologie SCRUM - planification 
                                        des tâches étape par étape et répartition de leur exécution en sprints.</p>
                                    <a href="{{ route('service') }}" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-30.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="{{ route('service') }}">Rétrospective</a></h5>
                                    <p style="text-align: justify;">Démonstration au client des résultats pour une durée déterminée. L'équipe analyse 
                                        les risques et les problèmes, termine le sprint, optimise le développement ultérieur de l'application.</p>
                                    <a href="{{ route('service') }}" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-91.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="{{ route('service') }}">Déploiement ou la mise en production</a></h5>
                                    <p style="text-align: justify;">Une étape éssentielle après le développement de l'application est la phase de déploiement. Nos ingénieurs qualités vous garantiront la performance 
                                        et assureront la qualité de votre application une fois fini pour assurer son bon fonctionnement.</p>
                                    <a href="{{ route('service') }}" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Development Service -->
            <div class="section section-padding bg-color-dark" id="section2">
                <div class="container">
                    <div class="section-heading heading-light">
                        <h3 class="title">Développement CMS</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-31.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="{{ route('service') }}">WordPress</a></h5>
                                    <p style="text-align: justify;">WordPress vous offre la flexibilité et la liberté de créer n'importe quel type de site web (boutique en ligne, site de vente aux enchères, site d'adhésion, etc.)

WordPress est vraiment bien conçu pour l'optimisation des moteurs de recherche (SEO). Il est facile de créer des URL, des catégories et des balises adaptées au référencement pour vos articles. Vous pouvez également choisir parmi de nombreux plugins de référencement pour vous aider à en faire plus.

Traduit avec www.DeepL.com/Translator (version gratuite)</p>
                                    <a href="{{ route('service') }}" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-32.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="{{ route('service') }}">Drupal</a></h5>
                                    <p style="text-align: justify;">Drupal est une autre plateforme CMS open source. C'est le CMS qui se cache derrière certains sites web importants.
Il existe de nombreux modules différents que vous pouvez ajouter à votre site (ils fonctionnent comme des plugins WordPress).
La gestion des utilisateurs est facile, avec un système intégré où vous pouvez créer de nouveaux rôles et spécifier leurs permissions.</p>
                                    <a href="{{ route('service') }}" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-33.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="{{ route('service') }}">Joomla</a></h5>
                                    <p style="text-align: justify;">Joomla vous offre une grande flexibilité et de nombreuses options. C'est un bon choix si vous voulez construire quelque chose de compliqué ou sur mesure.
Joomla peut être utilisé pour gérer un magasin de commerce électronique, car des extensions sont disponibles à cet effet.</p>
                                    <a href="{{ route('service') }}" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-93.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="{{ route('service') }}">Prestashop</a></h5>
                                    <p style="text-align: justify;">PrestaShop est une plateforme CMS eCommerce open source. Vous l'hébergez vous-même, vous pouvez donc l'installer sur n'importe quel hôte web qui le supporte.
Vous n'aurez pas à payer de supplément au fur et à mesure que votre boutique se développe (sauf si vous devez mettre à niveau votre plan d'hébergement).
Il existe de nombreux modules PrestaShop, vous pouvez donc ajouter de nouvelles fonctionnalités facilement.
Il ne coûte pas cher de commencer avec PrestaShop, surtout si vous êtes sur un plan d'hébergement partagé bon marché.</p>
                                    <a href="{{ route('service') }}" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Online Marketing Service -->
            <div class="section section-padding" id="section3">
                <div class="container">
                    <div class="section-heading">
                        <h3 class="title">Rédaction web SEO</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-34.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-marketing.blade.php">Animation éditoriale de blogs</a></h5>
                                    <p style="text-align: justify;">Nous rédigeons des textes personnalisés pour animer vos blogs. Nos rédacteurs mobilisent toutes leurs ressources 
                                        afin de garantir la livraison des textes de meilleure qualité.</p>
                                    <a href="service-marketing.blade.php" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-35.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-marketing.blade.php">Rédaction de pages de sites web</a></h5>
                                    <p style="text-align: justify;">Nos rédacteurs sont là pour vous assurer la rédaction du contenu de votre site web. Nous vous garantissons des 
                                        textes de qualités et optimisés adaptés à vos besoins pour une meilleure visibilité.
                                    </p>
                                    <a href="service-marketing.blade.php" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-36.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-marketing.blade.php">Rédaction de fiches-produits pour les sites e-commerce</a></h5>
                                    <p style="text-align: justify;">Nous rédigons des articles pour vos produits. Nous vous garantissons une meilleure visibilité pour votre marque et vos produits 
                                        pour attirer plus d'audiences grâce aux rédactions de qualité que nous vous livrons.
                                    </p>
                                    <a href="service-marketing.blade.php" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-37.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-marketing.blade.php">Réécriture de contenu</a></h5>
                                    <p style="text-align: justify;">Nous assurons également la réécriture de vos textes pour apporter 
                                        de plus de valeurs et une meilleure lecture pour vos cibles.</p>
                                    <a href="service-marketing.blade.php" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-38.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-marketing.blade.php">Correction de contenu</a></h5>
                                    <p style="text-align: justify;">Nous prenons aussi en charge la correction de tous types de contenu. Nous disposons des
                                        correcteurs compétents, passionnés et expérimentés pour assurer une meilleure qualité de tous vos contenus.
                                    </p>
                                    <a href="service-marketing.blade.php" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Business Service -->
            <div class="section section-padding bg-color-dark" id="section4">
                <div class="container">
                    <div class="section-heading heading-light">
                        <h3 class="title">Saisie des données (OS)</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-39.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-business.blade.php">Données type caractère ou texte</a></h5>
                                    <p style="text-align: justify;">Formées exclusivement de caractères alphabétiques, elles sont très utilisées dans la majorité des domaines, 
                                    et ce sont également les plus faciles à saisir. Il peut être question de noms propres, de lieux… </p>
                                    <a href="service-business.blade.php" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-40.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-business.blade.php">Données numériques</a></h5>
                                    <p style="text-align: justify;">Il est question ici de saisir des données composées exclusivement de chiffres. 
                                    Nos opérateurs de saisie assurent le traitement de vos données numériques dans le temps convenu. </p>
                                    <a href="service-business.blade.php" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-41.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-business.blade.php">Données monétaires</a></h5>
                                    <p style="text-align: justify;">Nos opérateurs saisissent des montants en devise, avec un certain nombre de décimales, qui sont dans la majorité des cas limitées à 2 après la virgule. 
                                    Ces données sont très utilisées dans le domaine de la comptabilité, des finances et dans le commerce.</p>
                                    <a href="service-business.blade.php" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-42.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-business.blade.php">Données date et heure</a></h5>
                                    <p style="text-align: justify;">Les données type date sont variées, il peut s’agir de dates de naissance, d’échéance, 
                                    d'événements historiques… Nos opérateurs de saisie respectent les formats connus selon votre demande. </p>
                                    <a href="service-business.blade.php" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('assets/media/icon/icon-97.png') }}" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-business.blade.php">Formules</a></h5>
                                    <p style="text-align: justify;">Il existe des données englobant les données numériques 
                                    et les données alphabétiques.Nous traitons également ce type de données en fonction de votre demande.</p>
                                    <a href="service-business.blade.php" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
