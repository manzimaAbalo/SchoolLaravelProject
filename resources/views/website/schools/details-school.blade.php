@extends('website.layouts.master')

@section('content')
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
        @if (isset($school->banner))
            <div class="inner-baner-container" style="background-image: url(/uploads/schools/logo/{{ $school->banner }});">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">{{ $school->name }}</h1>
                    </div>
                </div>
            </div>
        @else
            <div class="inner-baner-container" style="background-image: url(/uploads);">
                <div class="container">
                    <div class="inner-banner-content">
                        <h1 class="inner-title">{{ $school->name }}</h1>
                    </div>
                </div>
            </div>
        @endif

    </section>
    <div class="col-lg-12">
        @include('messages')
    </div>
    <!-- Inner Banner html end-->
    <!--  course detail section html start -->
    <div class="course-detail-section">
        <div class="pattern-overlay circle-patten"></div>
        <div class="course-detail-inner">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8">
                        <div class="course-detail-container">
                            <div class="course-description">
                                <div class="course-tag">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-md-4 text-center pink-border">
                                            <div class="course-teach-tag d-flex align-items-end justify-content-center">
                                                <figure class="author-img">
                                                    <img src="assets/img/educator-img23.jpg" alt="">
                                                </figure>
                                                <div>
                                                    <h6 class="author-name">{{ $school->responsable['responsable_nom'] }}
                                                        {{ $school->responsable['responsable_prenoms'] }}</h6>
                                                    <span class="tag-discription">Responsable</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 text-center pink-border">
                                            <span>Email:</span>
                                            <h5>{{ $school->email }}</h5>
                                        </div>
                                        {{-- <div class="col-md-2 text-center pink-border">
                                        <span>20 Note :</span>
                                        <div class="rating-start-wrap">
                                            <div class="rating-start">
                                                <span style="width: 80%"></span>
                                            </div>
                                        </div>
                                    </div> --}}
                                        <div class="col-md-4 text-center pink-border">
                                            <span>Contact :</span>
                                            <h3>{{ $school->contact }}</h3>
                                        </div>
                                    </div>
                                </div>
                                <figure class="course-imgage figure-round-border">
                                    <img src="assets/img/educator-img14.jpg" alt="">
                                </figure>
                            </div>
                            <div class="tab-container">
                                <div class="responsive-tabs">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab"
                                                role="tab">
                                                A propos
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab"
                                                role="tab">
                                                Programmes
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a id="tab-C" href="#pane-C" class="nav-link" data-bs-toggle="tab"
                                                role="tab">
                                                Notation
                                            </a>
                                        </li>
                                    </ul>
                                    <div id="nav-tab-content" class="tab-content" role="tablist">
                                        <div id="pane-A" class="card tab-pane fade show active" role="tabpanel"
                                            aria-labelledby="tab-A">
                                            <div class="card-header" role="tab" id="heading-A">
                                                <h5 class="mb-0">
                                                    <a data-bs-toggle="collapse" href="#collapse-A" aria-expanded="true"
                                                        aria-controls="collapse-A">
                                                        Overview
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-A" class="collapse show" data-bs-parent="#nav-tab-content"
                                                role="tabpanel" aria-labelledby="heading-A">
                                                <div class="card-body">
                                                    <h5>DESCRIPTION</h5>
                                                    {{ $school->description }}
                                                </div>
                                            </div>
                                        </div>
                                        <div id="pane-B" class="card tab-pane fade" role="tabpanel"
                                            aria-labelledby="tab-B">
                                            <div class="card-header" role="tab" id="heading-B">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B"
                                                        aria-expanded="false" aria-controls="collapse-B">
                                                        Instructor
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-B" class="collapse" data-bs-parent="#nav-tab-content"
                                                role="tabpanel" aria-labelledby="heading-B">
                                                <div class="card-body">

                                                </div>
                                            </div>
                                        </div>
                                        <div id="pane-C" class="card tab-pane fade" role="tabpanel"
                                            aria-labelledby="tab-C">
                                            <div class="card-header" role="tab" id="heading-C">
                                                <h5 class="mb-0">
                                                    <a data-bs-toggle="collapse" href="#collapse-C" aria-expanded="true"
                                                        aria-controls="collapse-C">
                                                        Commentaires
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-C" class="collapse" data-bs-parent="#nav-tab-content"
                                                role="tabpanel" aria-labelledby="heading-C">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 order-lg-first">
                        <div class="sidebar">
                            <div class="video-widget">
                                <img src="/uploads/schools/logo/{{ $school->logo }}" alt="">
                            </div>
                            <div class="widget-bg widget-service icon-list-content brochure">
                                <ul>
                                    <li>
                                        <i aria-hidden="true" class="far fa-clock"></i>
                                        <span>Adresse : {{ $school->address }}</span>
                                    </li>
                                    <li>
                                        <i aria-hidden="true" class="far fa-clock"></i>
                                        <span>Email : {{ $school->email }}</span>
                                    </li>
                                    <li>
                                        <i aria-hidden="true" class="far fa-clock"></i>
                                        <span>Contact : {{ $school->contact }}</span>
                                    </li>
                                    <li>
                                        <i aria-hidden="true" class="fas fa-book-open"></i>
                                        <span>SiteWeb: <a href="{{ $school->site_web }}" target="_blank" >{{ $school->site_web }}</a> </span>
                                    </li>
                                </ul>
                                @auth()
                                    <div class="enroll-coures-btn">
                                        <button id="btn_notation" class="button-round-primary">
                                            Noter {{ $school->name }}
                                        </button>
                                        <button id="btn_close_notation" class="button-round-primary " style="display: none" >
                                            Fermer la notation
                                        </button>
                                    </div>
                                @endauth
                            </div>
                            {{-- <div class="widget widget-bg widget-post-thumb">
                                <h5 class="bg-title">More Courses For You !</h5>
                                <ul>
                                    <li>
                                        <figure class="post-thumb">
                                            <a href="single-blog.html"><img src="assets/img/educator-img12.jpg" alt=""></a>
                                        </figure>
                                        <div class="post-content">
                                            <h5>
                                                <a href="single-blog.html">Begineer's Managing Course</a>
                                            </h5>
                                        </div>
                                    </li>
                                    <li>
                                        <figure class="post-thumb">
                                            <a href="single-blog.html"><img src="assets/img/educator-img13.jpg" alt=""></a>
                                        </figure>
                                        <div class="post-content">
                                            <h5>
                                                <a href="single-blog.html">Advance Business Study</a>
                                            </h5>
                                        </div>
                                    </li>
                                    <li>
                                        <figure class="post-thumb">
                                            <a href="single-blog.html"><img src="assets/img/educator-img14.jpg" alt=""></a>
                                        </figure>
                                        <div class="post-content">
                                            <h5>
                                                <a href="single-blog.html">
                                                    Advance Tech & Art Course</a>
                                            </h5>
                                        </div>
                                    </li>
                                    <li>
                                        <figure class="post-thumb">
                                            <a href="single-blog.html"><img src="assets/img/educator-img15.jpg" alt=""></a>
                                        </figure>
                                        <div class="post-content">
                                            <h5>
                                                <a href="single-blog.html">
                                                    Begineer's Science Course</a>
                                            </h5>
                                        </div>
                                    </li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                    @auth()
                        <div class="col-lg-12 col-sm-12 col-xs-12 mb-3" id="notation" style="display: none">
                            <div class="text-left">
                                <h4>Noter l'école sur les différents critères</h4>
                            </div>
                            <form action="{{ route('school.notation.add') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <input type="hidden" name="school_id" value="{{ $school->id }}" >
                                    @foreach ($categories as $key => $category)
                                        <div class="col-md-12 col-sm-12">
                                            <div id="accordion-tab-{{ $category->id }}" class="accordion-content" role="tablist">
                                                <div id="accordion-{{ $school->id }}" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="accordion-A">
                                                    <div class="card-header" role="tab" id="qus-A">
                                                        <h5 class="mb-0">
                                                            <a data-bs-toggle="collapse" href="#collapse-{{ $category->id }}" aria-expanded="true" aria-controls="collapse-{{ $category->id }}">
                                                                <h4>{{ ++$key }} ) {{ $category->name }}</h4>
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapse-{{ $category->id }}" class="collapse " data-bs-parent="#accordion-tab-{{ $category->id }}" role="tabpanel" aria-labelledby="qus-A">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                @foreach ($category->rules as $item)
                                                                    <div class="col-lg-6 col-sm-12">
                                                                        <div class="mb-3">
                                                                            <label for="username" class="form-label">
                                                                                {{ $item->libelle }}
                                                                            </label>
                                                                            <!-- Utilisez le nommage de champs correct pour chaque note et ID de règle -->
                                                                            <input type="hidden" name="notes[{{ $item->id }}][rule_id]" value="{{ $item->id }}" >
                                                                            <input type="number" class="form-control" name="notes[{{ $item->id }}][note]"  min="{{ $item->min_note }}" max="{{ $item->max_note  }}" required  placeholder="Entrez la note du critère" >
                                                                            <span>
                                                                                Note MIN: {{ $item->min_note }}
                                                                                Note MAX: {{ $item->max_note }}
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <p class="full-width">
                                    <input type="submit" name="submit" value="Envoyer">
                                </p>
                            </form>
                        </div>
                    @endauth
                </div>
                <div class="row">
                    @include('website.schools.school-comments')
                </div>

            </div>
        </div>
    </div>
    </div>
    <!--  course detail section html end -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('#btn_notation').click(function (e) {
                e.preventDefault();
                $('#notation').show();
                $('#btn_notation').hide();
                $('#btn_close_notation').show();
            });
            $('#btn_close_notation').click(function (e) {
                e.preventDefault();
                $('#notation').hide();
                $('#btn_close_notation').hide();
                $('#btn_notation').show();

            });
        });
    </script>

@endsection

