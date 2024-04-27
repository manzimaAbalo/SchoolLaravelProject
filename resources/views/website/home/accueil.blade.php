@extends('website.layouts.master')

@section('content')

@include('website.home.sections.banner')
<!-- home about section html start -->
@include('website.home.sections.about')
<!-- home service section html start -->
@include('website.home.sections.services')
<!-- home Course section html start -->
@include('website.home.sections.course')
<!-- home fact section html start -->
@include('website.home.sections.fact')
<!-- home feature section html start -->
{{-- @include('website.home.sections.feature') --}}
<!-- home team section html start -->
{{-- @include('website.home.sections.team') --}}
<!-- home goal section html start -->
@include('website.home.sections.goal')
<!-- home progress section html start -->
{{-- <div class="home-progress-section"> --}}
    <div class="overlay"></div>
    <div class="container">
        <div class="counter-inner">
            <div class="counter-item-wrap row">
                <div class="col-lg-3 col-sm-6 counter-item">
                    <div class="counter-no">
                        <span class="counter">45</span>k+
                    </div>
                    <div class="Completed">
                        Active Students
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 counter-item">
                    <div class="counter-no">
                        <span class="counter">72</span>+
                    </div>
                    <div class="Completed">
                        Faculty Courses
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 counter-item">
                    <div class="counter-no">
                        <span class="counter">90</span>+
                    </div>
                    <div class="Completed">
                        Best Professors
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 counter-item">
                    <div class="counter-no">
                        <span class="counter">35</span>
                    </div>
                    <span class="Completed">
                        Award Achieved
                    </span>
                </div>
            </div>
        </div>
    </div>
{{-- </div> --}}
<!-- home testimonial section html start -->
<section class="home-testimonial-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="title-divider-center"></div>
                <h2 class="testimonial-section-title text-center">Review's From Students</h2>
                <p class="testimonial-section-info text-center">Saepe quo labore aenean dictumst expedita commodi auctor, nisl, lorem iusto feugiat nemo reiciendis laboris.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="client-content left-content">
                    <div class="pattern-overlay circle-patten"></div>
                    <p class="client-review">
                        “Per sed, mattis. Integer viverra euismod maecenas incidunt, phasellus consequatur aliquam nihil temporibus in assumenda? Aute praesentium fugiat. Perspiciatis, ultrices deserunt convallis, eius at non.”
                    </p>
                    <div class="author-content">
                        <div class="author-info">
                            <h5 class="author-name">Jenny Wilson</h5>
                            <span class="author-title">SCIENCE STUDENT</span>
                        </div>
                        <figure class="author-img">
                            <img src="/assets/img/educator-img22.jpg" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="client-content right-content">
                    <div class="pattern-overlay circle-patten"></div>
                    <p class="client-review">
                        “Per sed, mattis. Integer viverra euismod maecenas incidunt, phasellus consequatur aliquam nihil temporibus in assumenda? Aute praesentium fugiat. Perspiciatis, ultrices deserunt convallis, eius at non.”
                    </p>
                    <div class="author-content">
                        <div class="author-info">
                            <h5 class="author-name">William Wright</h5>
                            <span class="author-title">ART STUDENT</span>
                        </div>
                        <figure class="author-img">
                            <img src="/assets/img/educator-img21.jpg" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-btn text-center">
            <a href="testimonial.html" class="button-round-primary">MORE REVIEWS NOW</a>
        </div>
    </div>
</section>
<!-- home blog section html start -->

<!-- home slider section html start -->
<div class="slider-section">
    <div class="container">
        <div class="client-slider text-center">
            <div class="client-item">
                <figure>
                    <img src="/assets/img/educator-img16.png" alt="">
                </figure>
            </div>
            <div class="client-item">
                <figure>
                    <img src="/assets/img/educator-img17.png" alt="">
                </figure>
            </div>
            <div class="client-item">
                <figure>
                    <img src="/assets/img/educator-img18.png" alt="">
                </figure>
            </div>
            <div class="client-item">
                <figure>
                    <img src="/assets/img/educator-img19.png" alt="">
                </figure>
            </div>
            <div class="client-item">
                <figure>
                    <img src="/assets/img/educator-img20.png" alt="">
                </figure>
            </div>
            <div class="client-item">
                <figure>
                    <img src="/assets/img/educator-img18.png" alt="">
                </figure>
            </div>
        </div>
    </div>
</div>

@endsection