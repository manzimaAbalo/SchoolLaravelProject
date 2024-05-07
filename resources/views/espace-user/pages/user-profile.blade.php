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
                                            <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab"
                                                role="tab">
                                                Profile
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab"
                                                role="tab">
                                                Sécurité
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a id="tab-C" href="#pane-C" class="nav-link" data-bs-toggle="tab"
                                                role="tab">
                                                Paramètres
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
                                                        Mon profile
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-A" class="collapse show" data-bs-parent="#nav-tab-content"
                                                role="tabpanel" aria-labelledby="heading-A">
                                                <div class="card-body">
                                                    <h5>Modifiez vos informations personnelles</h5>
                                                        <br>
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="text" name="nom" placeholder="Nom"
                                                            value="{{ old('name') }}">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" name="prenoms" placeholder="Prénoms"
                                                            value="{{ old('prenoms') }}">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <div class="col">
                                                        <input type="email" name="email" placeholder="Email"
                                                            value="{{ old('email') }}">
                                                    </div>
                                                    <div class="col">
                                                        <input type="number" name="phone" placeholder="Contact"
                                                            value="{{ old('phone') }}">
                                                    </div>
                                                </div>
                                                <br>

                                                <div class="row">
                                                    <div class="col">
                                                        <input type="text" name="profession"
                                                            placeholder="Profession"
                                                            value="{{ old('profession') }}">
                                                    </div>
                                                    <div class="col">
                                                        <input type="text" name="address" placeholder="Adresse"
                                                            value="{{ old('address') }}">
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="d-grid gap-2 col-6 mx-auto">
                                                    <input type="submit" class="#d63384" name="submit"
                                                        value="ENREGISTRER LES MODIFICATIONS">
                                                </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="pane-B" class="card tab-pane fade" role="tabpanel"
                                            aria-labelledby="tab-B">
                                            <div class="card-header" role="tab" id="heading-B">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B"
                                                        aria-expanded="false" aria-controls="collapse-B">
                                                        Sécurité
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-B" class="collapse" data-bs-parent="#nav-tab-content"
                                                role="tabpanel" aria-labelledby="heading-B">
                                                <div class="card-body">
                                                    <h5>Modifiez votre mot de passe</h5>
                                                    <div class="col">
                                                        <br>
                                                        <input type="password" name="password"
                                                            placeholder="Mot de passe"
                                                            value="{{ old('password') }}">
                                                    </div>
                                                    <br>
                                                    <div class="d-grid gap-2 col-6 mx-auto">
                                                    <input type="submit" class="#d63384" name="submit"
                                                        value="ENREGISTRER LES MODIFICATIONS">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="pane-C" class="card tab-pane fade" role="tabpanel"
                                            aria-labelledby="tab-C">
                                            <div class="card-header" role="tab" id="heading-C">
                                                <h5 class="mb-0">
                                                    <a data-bs-toggle="collapse" href="#collapse-C" aria-expanded="true"
                                                        aria-controls="collapse-C">
                                                        Paramètres
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapse-C" class="collapse" data-bs-parent="#nav-tab-content"
                                                role="tabpanel" aria-labelledby="heading-C">
                                                <div class="card-body">
                                                    <h5>Les paramètres du compte</h5>
                                                    <div>
                                                    <button type="button" style="text- " class="btn btn-secondary">
                                                        Notifications <span class="badge bg-secondary">4</span>
                                                      </button>
                                                      </div>
                                                      <br>
                                                    <div class="mb-3">
                                                        <h6>Langues</h6>
                                                        <select id="disabledSelect" class="form-select">
                                                          <option value="fr">Français</option>
                                                          <option value="ang">Anglais</option>
                                                          <option value="ch">Chinois</option>
                                                          <option value="es">Espagnol</option>
                                                          <option value="lt">Latin</option>
                                                          <option value="rs">Russe</option>
                                                        </select>
                                                      </div>

                                                      <div class="row">
                                                        <h6 for="">Thème</h6>
                                                        <label for="exampleColorInput" class="form-label">Par défaut du système | Sombre | Clair</label>
                                                        <div style="text-align:center;">
                                                        <input type="color" class="form-control form-control-color" id="exampleColorInput" 
                                                            value="#FFFFFF" title="Choose your color">
                                                        </div>
                                                      </div>
                                                      <br>
                                                      
                                                      <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                                        <h6>Activez la sauvegarde de vos informations : </h6>
                                                        
                                                        <div>
                                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                                                        <label class="btn btn-outline-primary" for="btnradio1">Non</label>
                                                      
                                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                                                        <label class="btn btn-outline-primary" for="btnradio2">Oui</label>
                                                    </div>
                                                      </div>
                                                      <br>
                                                      <br>
                                                      <div class="d-grid gap-2 col-6 mx-auto">
                                                        <input class="#d63384" type="submit" name="submit" value="ENREGISTRER LES MODIFICATIONS"/>
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
    </div>
    <!--  career detail section html end -->
@endsection
