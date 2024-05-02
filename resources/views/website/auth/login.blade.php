@extends('website.layouts.master')

@section('content')
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap">
        <div class="inner-baner-container" style="background-image: url(admin/assets/img/educator-img12.jpg);">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title">Connexion</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner Banner html end-->
    <!-- contact form html start -->
    <div class="contact-page-section">
        <div class="container">

            <div class="contact-form-inner">
                <div class="pattern-overlay zigzag-patten"></div>
                <div class="row justify-content-center align-items-center">

                    <div class="col-lg-6">
                        <div class="contact-from-wrap">
                            <div class="position-relative text-center my-2">
                                <p class="mb-0 fs-4 px-3 d-inline-block bg-white text-dark z-index-5 position-relative">
                                    CONNECTEZ VOUS A VOTRE ESPACE
                                </p>
                            </div>
                            <hr />
                            <div class="pattern-overlay circle-patten"></div>

                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="username" class="form-label">Utilisateur</label>
                                    <input type="text" class="form-control" name="username" id="username"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Mot de passe</label>
                                    <input type="password" name="password" class="form-control" id="password">
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <a class="text-primary fw-medium" href="authentication-forgot-password.html">Mot de
                                        passe oublié ?</a>
                                </div>
                                
                                <input type="submit" class="btn btn-primary w-100 py-8 mb-4" name="submit"
                                    value="S'INSCRIRE MAINTENANT">

                                <div class="d-flex align-items-center">
                                    <p class="fs-6 mb-0 text-dark">Vous n'avez pas de compte ?</p>
                                    <a class="text-primary fw-medium ms-2" href="{{ route('login') }}">Créez en une ici</a>
                                </div>
                            </form>
                            @include('messages')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact form html end -->
@endsection
