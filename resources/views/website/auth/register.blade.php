@extends('website.layouts.master')

@section('content')

  <!-- Inner Banner html start-->
  <section class="inner-banner-wrap">
    <div class="inner-baner-container" style="background-image: url(assets/img/educator-img12.jpg);">
        <div class="container">
            <div class="inner-banner-content">
                <h1 class="inner-title">Inscription</h1>
            </div>
        </div>
    </div>
</section>
<!-- Inner Banner html end-->
<!-- contact form html start -->
<div class="contact-page-section">
    <div class="container">

        <div class="contact-form-inner" >
            <div class="pattern-overlay zigzag-patten"></div>
            <div class="row justify-content-center align-items-center w-100">

                <div class="col-lg-6" style="width: 900px">
                    <div class="contact-from-wrap">
                        <div class="position-relative text-center my-4">
                            <p class="mb-0 fs-4 px-3 d-inline-block bg-blue text-dark z-index-5 position-relative">
                                REJOIGNEZ SCHOOLRATE POUR LE DEVELOPPEMENT EDUCATIF
                            </p>
                            <span class="border-bottom w-100  top-30 start-50 translate-middle"></span>
                            <hr />
                        </div>
                        @include('messages')
                        <div class="pattern-overlay circle-patten"></div>
                        <form class="contact-from" action="{{ route('register.user') }}" method="POST" >
                            @csrf
                            <p>
                                <input type="text" name="nom" placeholder="Entrez votre nom*" value="{{ old('name') }}" >
                            </p>
                            <p>
                                <input type="text" name="prenoms" placeholder="Entrez votre prénoms*" value="{{ old('prenoms') }}">
                            </p>
                            <p>
                                <input type="email" name="email" placeholder="Entrez votre adresse email*" value="{{ old('email') }}">
                            </p>
                            <p>
                                <input type="number" name="phone" placeholder="Entrez votre numéro de contact*" value="{{ old('phone') }}">
                            </p>
                            <p>
                                <input type="text" name="profession" placeholder="Entrez votre profession*" value="{{ old('profession') }}">
                            </p>
                            <p>
                                <input type="password" name="password" placeholder="Entrez votre mot de passe*" value="{{ old('password') }}">
                            </p>
                            <p class="width-full">
                                <textarea rows="8" name="address" placeholder="Saisir votre adresse*" value="{{ old('address') }}"></textarea>
                            </p>
                            <p class="width-full">
                                <input type="submit" class="btn btn-primary " name="submit" value="S'INSCRIRE MAINTENANT">
                            </p>
                            <div class="width-full d-flex align-items-center">
                                <p class="fs-6 mb-0 text-dark">Vous avez déjà un compte ?</p>
                                <a class="text-primary fw-medium ms-2" href="{{ route('login') }}">Connectez-vous ici !</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact form html end -->

@endsection
