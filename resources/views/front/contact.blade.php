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
                        <li class="active">Contact</li>
                        
                    </ul>
                    <h2 class="title h2">Contact</h2>
                    <div class="section-heading heading-left">
                <span class="subtitle"></span>
                <p class="title" style="text-align: justify;">🚀Si vous souhaitez en savoir plus sur la façon dont nous pouvons vous aider </br> 
                dans votre projet de transformation numérique, 
ou sur ce que la transformation </br> numérique peut apporter à votre entreprise, contactez-nous. 
</br> Nous sommes une agence de transformation numérique toujours prête à discuter✅...</p>
           
            </div>
                    <p></p>
                </div>
            </div>
            <ul class="shape-group-8 list-unstyled">
                <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                    <img src="{{ asset('assets/media/others/bubble-17.png') }}" alt="Bubble">
                </li>
                
            </ul>
        </div>
@endsection

@section('content')
        <!--=====================================-->
        <!--=       Contact  Area Start        =-->
        <!--=====================================-->
        <section class="section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="contact-form-box shadow-box mb--30">
                            <h3 class="title">Vous avez des projets?</h3>
                            <form method="POST" action="https://axilthemes.com/demo/template/abstrak/mail.php" class="axil-contact-form">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" class="form-control" name="contact-name">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="contact-email">
                                </div>
                                <div class="form-group">
                                    <label>Entreprise</label>
                                    <input type="text" class="form-control" name="contact-company">
                                </div>
                                <div class="form-group mb--40">
                                    <label>Comment pouvons-nous vous aider?</label>
                                    <textarea name="contact-message" id="contact-message" class="form-control textarea" cols="30" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="axil-btn btn-fill-primary btn-fluid btn-primary" name="submit-btn"><strong>Envoyer</strong></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 offset-xl-1">
                        <div class="contact-info mb--100 mb_md--30 mt_md--0 mt--150">
                            <h4 class="title">Téléphone</h4>
                            <p></p>
                            <h4 class="phone-number"><a href="tel:1234567890">+261 34 40 079 99</a></h4>
                        </div>
                        <div class="contact-info mb--30">
                            <h4 class="title">Email</h4>
                            <p></p>
                            <h4 class="phone-number"><a href="mailto:info@innova-freelance.com">innovafreelance@gmail.com</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-12">
                <li class="shape shape-1"><img src="{{ asset('assets/media/others/bubble-2.png') }}" alt="Bubble"></li>
                <li class="shape shape-2"><img src="{{ asset('assets/media/others/bubble-1.png') }}" alt="Bubble"></li>
                <li class="shape shape-3"><img src="{{ asset('assets/media/others/circle-3.png') }}" alt="Circle"></li>
            </ul>
        </section>

@endsection
