@extends('website.layouts.master')

@section('content')

 <!-- Inner Banner html start-->
 <section class="inner-banner-wrap mb-0">
    <div class="inner-baner-container" style="background-image: url(assets/img/educator-img12.jpg);">
        <div class="container">
            <div class="inner-banner-content">
                <h1 class="inner-title">Découvrez les universités</h1>
            </div>
        </div>
    </div>
</section>
<!-- Inner Banner html end-->
<!-- feature page html start -->
<!-- home Course section html start -->
<div class="home-course-section feature-page-section">
    <div class="container">
        <div class="inner-course-wrap">
            <div class="row d-flex justify-content-center justify-content-xl-start">
                @foreach ($schools as $item)
                    @include('website.schools.school-item',['school'=>$item])
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- feature coure result html start -->
<section class="course-result-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 left-content">
                <div class="pattern-overlay zigzag-patten"></div>
                <div class="feature-left-content">
                    <div class="title-divider"></div>
                    <h2 class="feature-course-title">Pourquoi évaluer les écoles et découvrir les meilleures universités du Togo ?</h2>
                    <p class="feature-course-desc">
                        SchoolRate TOGO offre une plateforme intuitive pour aider les étudiants à trouver les meilleures universités du Togo. Nous sommes déterminés à fournir des informations précises et objectives pour vous guider dans les choix éducatifs.</p>
                    <div class="skill-container">
                        <div class="skill-wrapper">
                            <h6 class="skill-titile">Universités enregistrées</h6>
                            <div class="progress-wrapper">
                                <div class="ab-progress example" data-progress data-value="80"></div>
                            </div>
                        </div>
                        <div class="skill-wrapper">
                            <h6 class="skill-titile">Compétences techniques</h6>
                            <div class="progress-wrapper">
                                <div class="ab-progress example" data-progress data-value="68"></div>
                            </div>
                        </div>
                        <div class="skill-wrapper">
                            <h6 class="skill-titile">Fiabilité des informations</h6>
                            <div class="progress-wrapper">
                                <div class="ab-progress example" data-progress data-value="90"></div>
                            </div>
                        </div>
                    </div>
                    <div class="about-btn">
                        <a href="{{route('about')}}" class="button-round-secondary">EN SAVOIR PLUS</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feature-right-content">
                    <div class="pattern-overlay c-patten"></div>
                    <div class="pattern-overlay circle-patten"></div>
                    <figure class="feature-image">
                        <img src="assets/img/educator-img33.png" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature coure result html end -->
<!-- feature page html end -->

@endsection
