@extends('espace-admin.layouts.main')

@section('content')
    <div class="container-fluid">
        <div class="card bg-light-info shadow-none position-relative overflow-hidden">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Gestion des écoles</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-muted text-decoration-none"
                                        href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item" aria-current="page">Universités</li>
                                <li class="breadcrumb-item" aria-current="page">Nouvelle école</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <img src="/admin/dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <form action="{{ route('office.schools.save') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Informations générales de l'école</h4>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="name">Nom de l'université</label>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Entrez le nom de l'école">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email">Email de l'université</label>
                            <div class="input-group">
                                <span class="input-group-text" id="site_web">@</span>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Entrez l'adresse mail de l'établissement">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="name">Contact de l'université</label>
                                <input type="text" name="name" class="form-control" value="{{ old('contact') }}" placeholder="Entrez le numéro de contact de l'école" >
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="site_web">Site web de l'université</label>
                            <div class="input-group">
                                <span class="input-group-text" id="site_web">https://</span>
                                <input type="url" name="site_web" class="form-control" value="{{ old('site_web') }}" placeholder="Site web de l'école" >
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="address">Adresse de l'université</label>
                                <input type="text" name="address" class="form-control" value="{{ old('address') }}" placeholder="Entrez le numéro de contact de l'école" >
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="address">Logo de l'université</label>
                                <input type="file" name="logo" class="form-control" value="{{ old('logo') }}" placeholder="Entrez le numéro de contact de l'école" >
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="banner">Image bannière de l'université</label>
                                <input type="file" name="banner" class="form-control" value="{{ old('banner') }}" placeholder="Entrez le numéro de contact de l'école" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Informations du responsable l'école</h4>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="responsable_nom">Nom du responsable de l'école</label>
                                <input type="text" name="responsable_nom" class="form-control" value="{{ old('responsable_nom') }}" placeholder="Entrez le nom du responsable de l'école">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="responsable_nom">Prénoms du responsable de l'école</label>
                                <input type="text" name="responsable_prenoms" class="form-control" value="{{ old('responsable_prenoms') }}" placeholder="Entrez le prenoms du responsable de l'école">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="responsable_email">Email de l'université</label>
                                <input type="text" name="responsable_email" class="form-control" value="{{ old('responsable_email') }}" placeholder="Entrez l'adresse de l'école">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="responsable_phone">Téléphone du responsable de l'école</label>
                                <input type="text" name="responsable_phone" class="form-control" value="{{ old('responsable_phone') }}" placeholder="Entrez le nom du responsable de l'école">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-md btn-primary">
                        ENREGISTER
                    </button>
                    <a href="{{ route('office.schools') }}" class="btn btn-md btn-danger">ANNULER</a>
                </div>
            </form>
        </div>
    </div>
@endsection
