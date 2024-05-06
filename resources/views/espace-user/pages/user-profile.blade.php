@extends('website.layouts.master')

@section('content')
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap ">
        <div class="inner-baner-container" style="background-image: url(/assets/img/educator-img12.jpg);">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title">Bonjour {{ $user->name }} </h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner Banner html end-->

    <!--  career detail section html start -->
    <div class="career-detail-section">
        <div class="career-detail-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="career-detail-container">
                            <div class="job-description">
                                <ul>
                                    <li>
                                        <span>Post :</span>
                                        <h5>Engineer</h5>
                                    </li>
                                    <li>
                                        <span>Time :</span>
                                        <h5>Full Time</h5>
                                    </li>
                                    <li>
                                        <span>Salary :</span>
                                        <h5>Negotaible</h5>
                                    </li>
                                    <li>
                                        <span>No. of Vacancy :</span>
                                        <h4>8</h4>
                                    </li>
                                </ul>
                                <figure class="job-imgage">
                                    <img src="assets/img/educator-img14.jpg" alt="">
                                </figure>
                            </div>
                            <div class="tab-container">
                                <div class="responsive-tabs">
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li class="nav-item">
                                            <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">
                                                Profile
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab">
                                                Sécurité
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a id="tab-C" href="#pane-C" class="nav-link" data-bs-toggle="tab" role="tab">
                                                Paramètres
                                            </a>
                                        </li>
                                    </ul>
                                    <div id="nav-tab-content" class="tab-content" role="tablist">
                                        <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                                            <div class="card-header" role="tab" id="heading-A">
                                                <h5 class="mb-0">
                                                    <a data-bs-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                                                        Mon profile
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-A" class="collapse show" data-bs-parent="#nav-tab-content" role="tabpanel" aria-labelledby="heading-A">
                                                <div class="card-body">
                                                    <h5>#Mon profile</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                                            <div class="card-header" role="tab" id="heading-B">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                                                        <h5>#Mon profile</h5>
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-B" class="collapse" data-bs-parent="#nav-tab-content" role="tabpanel" aria-labelledby="heading-B">
                                                <div class="card-body">
                                                    <h5>#Informations de connexion</h5>

                                                </div>
                                            </div>
                                        </div>
                                        <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
                                            <div class="card-header" role="tab" id="heading-C">
                                                <h5 class="mb-0">
                                                    <a data-bs-toggle="collapse" href="#collapse-C" aria-expanded="true" aria-controls="collapse-C">
                                                        Sécurité
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-C" class="collapse" data-bs-parent="#nav-tab-content" role="tabpanel" aria-labelledby="heading-C">
                                                <div class="card-body">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--  career detail section html end -->
@endsection
