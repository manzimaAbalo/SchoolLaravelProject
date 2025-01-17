@extends('website.layouts.master')

@section('content')
 <!-- Inner Banner html start-->
 <section class="inner-banner-wrap">
    <div class="inner-baner-container" style="background-image: url(assets/img/educator-img12.jpg);">
        <div class="container">
            <div class="inner-banner-content">
                <h1 class="inner-title">A propos de nous</h1>
            </div>
        </div>
    </div>
</section>
<!-- Inner Banner html end-->
<!-- About page html start -->
<section class="about-section">
    <div class="container">
        <div class="title-divider-center"></div>
        <h2 class="about-title text-center">Introduction de notre plateforme</h2>
        <div class="row">
            <div class="col-md-6">
                <p class="about-describe info-left">
                    SchoolRate TOGO offre une plateforme intuitive pour aider les étudiants à trouver les meilleures universités du Togo. Nous sommes déterminés à fournir des informations précises et objectives pour vous guider dans les choix éducatifs.</p>
            </div>
            <div class="col-md-6">
                <p class="about-describe info-right">
                    Nous vous offrons des opportunités d'apprentissages infinies pour les étudiants au Togo. Notre plateforme fournit des informations précieuses sur les écoles et les universités, permettant aux étudiants de prendre des décisions éclairées sur leur choix du futur.</p>
            </div>
        </div>
        <div class="counter-inner">
            <div class="counter-item-wrap row">
                <div class="col-lg-3 col-sm-6 counter-item">
                    <div class="counter-no">
                        <span class="counter">45</span>k+
                    </div>
                    <div class="Completed">
                        Etudiants Actifs
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 counter-item">
                    <div class="counter-no">
                        <span class="counter">72</span>+
                    </div>
                    <div class="Completed">
                        Rendez-vous
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 counter-item">
                    <div class="counter-no">
                        <span class="counter">90</span>+
                    </div>
                    <div class="Completed">
                        Filières & Facultés
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 counter-item">
                    <div class="counter-no">
                        <span class="counter">60</span>+
                    </div>
                    <span class="Completed">
                        Universités consultées
                    </span>
                </div>
            </div>
        </div>
        <div class="about-banner">
            <figure class="about-image figure-round-border">
                <img src="assets/img/educator-img14.jpg" alt="">
            </figure>
            <div class="about-left-banner">
                <div class="banner-icon">
                    <i aria-hidden="true" class="icon icon-trophy1"></i>
                </div>
                <h3>15+ ANS D'EXPERIENCE</h3>
            </div>
            <div class="about-right-banner">
                <h5>Découvrez-nous</h5>
                <div class="video-button">
                    <a id="video-container" data-video-id="IUN664s7N-c">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
                <h4>SchoolRate TOGO</h4>
                <p>
                    En quelques minutes, découvrez nous entièrement à travers cette vidéo réalisée exprès pour vous!
                </p>
            </div>
        </div>
    </div>
</section>
<div class="slider-section about-slider">
    <div class="container">
        <div class="client-slider text-center">
            <div class="client-item">
                <figure>
                    <img src="assets/img/educator-img16.png" alt="">
                </figure>
            </div>
            <div class="client-item">
                <figure>
                    <img src="assets/img/educator-img17.png" alt="">
                </figure>
            </div>
            <div class="client-item">
                <figure>
                    <img src="assets/img/educator-img18.png" alt="">
                </figure>
            </div>
            <div class="client-item">
                <figure>
                    <img src="assets/img/educator-img19.png" alt="">
                </figure>
            </div>
            <div class="client-item">
                <figure>
                    <img src="assets/img/educator-img20.png" alt="">
                </figure>
            </div>
            <div class="client-item">
                <figure>
                    <img src="assets/img/educator-img18.png" alt="">
                </figure>
            </div>
        </div>
    </div>
</div>
<!-- About page html end -->

@endsection