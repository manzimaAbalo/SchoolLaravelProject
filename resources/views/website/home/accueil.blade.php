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
{{-- @include('website.home.sections.goal') --}}
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
    </div>
{{-- </div> --}}
<!-- home testimonial section html start -->
@include('website.home.sections.testimonial')
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
