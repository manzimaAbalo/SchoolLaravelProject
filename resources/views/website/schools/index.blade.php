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
                <div class="col-sm-6 col-lg-4 pe-3 ps-3 pt-4 pt-lg-0 inner-course">
                    <article class="post">
                        <figure class="feature-image">
                            <img src="/assets/img/educator-img30.jpg" alt="">
                            <a href="course-detail.html" class="bookmark-icon">
                                <i aria-hidden="true" class="far fa-bookmark"></i>
                            </a>
                            <span class="cat-meta">
                                <a href="feature-course.html">Droit Privés & Publics</a>
                            </span>
                        </figure>
                        <div class="entry-content">
                            <h4>
                                <a href="course-detail.html">Une formation complete et garantie</a>
                            </h4>
                            <div class="rating-content">
                                <span class="rating-info">(4.5 ratings)</span>
                                <div class="rating-start-wrap">
                                    <div class="rating-start">
                                        <span style="width: 88%"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="author-content">
                                <figure class="author-img">
                                    <img src="/assets/img/educator-img21.jpg" alt="">
                                </figure>
                                <h6 class="author-name">Espoir ABALO</h6>
                            </div>
                            <div class="entry-meta">
                                <span class="student-number">
                                    <i aria-hidden="true" class="fas fa-user-friends"></i>
                                    150+ étudiants
                                </span>
                                <a href="{{route('schools')}}">
                                    VOIR PLUS
                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 pe-3 ps-3 pt-4 pt-lg-0 inner-course">
                    <article class="post">
                        <figure class="feature-image">
                            <img src="/assets/img/educator-img29.jpg" alt="">
                            <a href="course-detail.html" class="bookmark-icon">
                                <i aria-hidden="true" class="far fa-bookmark"></i>
                            </a>
                            <span class="cat-meta">
                                <a href="feature-course.html">Informatique</a>
                            </span>
                        </figure>
                        <div class="entry-content">
                            <h4>
                                <a href="course-detail.html">Objectif du débutant et diversité des cours </a>
                            </h4>
                            <div class="rating-content">
                                <span class="rating-info">(4 ratings)</span>
                                <div class="rating-start-wrap">
                                    <div class="rating-start">
                                        <span style="width: 80%"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="author-content">
                                <figure class="author-img">
                                    <img src="/assets/img/educator-img24.jpg" alt="">
                                </figure>
                                <h6 class="author-name">Natacha EGBAYI</h6>
                            </div>
                            <div class="entry-meta">
                                <span class="student-number">
                                    <i aria-hidden="true" class="fas fa-user-friends"></i>
                                    300+ étudiants
                                </span>
                                <a href="{{route('schools')}}">
                                    VOIR PLUS
                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 pe-3 ps-3 pt-4 pt-lg-0 inner-course">
                    <article class="post">
                        <figure class="feature-image">
                            <img src="/assets/img/educator-img31.jpg" alt="">
                            <a href="course-detail.html" class="bookmark-icon">
                                <i aria-hidden="true" class="far fa-bookmark"></i>
                            </a>
                            <span class="cat-meta">
                                <a href="feature-course.html">Architecture</a>
                            </span>
                        </figure>
                        <div class="entry-content">
                            <h4>
                                <a href="course-detail.html">Cours avancés en ligne et en présentiel</a>
                            </h4>
                            <div class="rating-content">
                                <span class="rating-info">(4.7 ratings)</span>
                                <div class="rating-start-wrap">
                                    <div class="rating-start">
                                        <span style="width: 91%"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="author-content">
                                <figure class="author-img">
                                    <img src="/assets/img/educator-img25.jpg" alt="">
                                </figure>
                                <h6 class="author-name">Kodjo AMEWOU</h6>
                            </div>
                            <div class="entry-meta">
                                <span class="student-number">
                                    <i aria-hidden="true" class="fas fa-user-friends"></i>
                                    70+ étudiants
                                </span>
                                <a href="{{route('schools')}}">
                                    VOIR PLUS
                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 pe-3 ps-3 pt-4 pt-lg-0 inner-course">
                    <article class="post">
                        <figure class="feature-image">
                            <img src="assets/img/educator-img12.jpg" alt="">
                            <a href="course-detail.html" class="bookmark-icon">
                                <i aria-hidden="true" class="far fa-bookmark"></i>
                            </a>
                            <span class="cat-meta">
                                <a href="feature-course.html">Droit Privés & Publics</a>
                            </span>
                        </figure>
                        <div class="entry-content">
                            <h4>
                                <a href="course-detail.html">Une formation complete et garantie</a>
                            </h4>
                            <div class="rating-content">
                                <span class="rating-info">(4.5 ratings)</span>
                                <div class="rating-start-wrap">
                                    <div class="rating-start">
                                        <span style="width: 88%"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="author-content">
                                <figure class="author-img">
                                    <img src="/assets/img/educator-img21.jpg" alt="">
                                </figure>
                                <h6 class="author-name">Espoir ABALO</h6>
                            </div>
                            <div class="entry-meta">
                                <span class="student-number">
                                    <i aria-hidden="true" class="fas fa-user-friends"></i>
                                    150+ étudiants
                                </span>
                                <a href="{{route('schools')}}">
                                    VOIR PLUS
                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 pe-3 ps-3 pt-4 pt-lg-0 inner-course">
                    <article class="post">
                        <figure class="feature-image">
                            <img src="/assets/img/educator-img29.jpg" alt="">
                            <a href="course-detail.html" class="bookmark-icon">
                                <i aria-hidden="true" class="far fa-bookmark"></i>
                            </a>
                            <span class="cat-meta">
                                <a href="feature-course.html">Informatique</a>
                            </span>
                        </figure>
                        <div class="entry-content">
                            <h4>
                                <a href="course-detail.html">Objectif du débutant et diversité des cours </a>
                            </h4>
                            <div class="rating-content">
                                <span class="rating-info">(4 ratings)</span>
                                <div class="rating-start-wrap">
                                    <div class="rating-start">
                                        <span style="width: 80%"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="author-content">
                                <figure class="author-img">
                                    <img src="/assets/img/educator-img24.jpg" alt="">
                                </figure>
                                <h6 class="author-name">Natacha EGBAYI</h6>
                            </div>
                            <div class="entry-meta">
                                <span class="student-number">
                                    <i aria-hidden="true" class="fas fa-user-friends"></i>
                                    300+ étudiants
                                </span>
                                <a href="{{route('schools')}}">
                                    VOIR PLUS
                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 pe-3 ps-3 pt-4 pt-lg-0 inner-course">
                    <article class="post">
                        <figure class="feature-image">
                            <img src="/assets/img/educator-img31.jpg" alt="">
                            <a href="course-detail.html" class="bookmark-icon">
                                <i aria-hidden="true" class="far fa-bookmark"></i>
                            </a>
                            <span class="cat-meta">
                                <a href="feature-course.html">Architecture</a>
                            </span>
                        </figure>
                        <div class="entry-content">
                            <h4>
                                <a href="course-detail.html">Cours avancés en ligne et en présentiel</a>
                            </h4>
                            <div class="rating-content">
                                <span class="rating-info">(4.7 ratings)</span>
                                <div class="rating-start-wrap">
                                    <div class="rating-start">
                                        <span style="width: 91%"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="author-content">
                                <figure class="author-img">
                                    <img src="/assets/img/educator-img25.jpg" alt="">
                                </figure>
                                <h6 class="author-name">Kodjo AMEWOU</h6>
                            </div>
                            <div class="entry-meta">
                                <span class="student-number">
                                    <i aria-hidden="true" class="fas fa-user-friends"></i>
                                    70+ étudiants
                                </span>
                                <a href="{{route('schools')}}">
                                    VOIR PLUS
                                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>
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