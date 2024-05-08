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
                                <li class="breadcrumb-item" aria-current="page">{{ $school->name }}</li>
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
            <form action="{{ route('office.schools.update') }}" method="post" enctype="multipart/form-data" >
                @method('PUT')
                @csrf
                <div class="card-header bg-primary">
                    <div class="card-title text-white">Modification des infos de l'école</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            @include('messages')
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Informations générales de l'école</h4>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <input type="hidden" name="school_id" value="{{ $school->id }}">
                                <label for="name">Nom de l'université</label>
                                <input type="text" name="name" class="form-control" value="{{  $school->name }}" placeholder="Entrez le nom de l'école">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email">Email de l'université</label>
                            <div class="input-group">
                                <span class="input-group-text" id="site_web">@</span>
                                <input type="email" name="email" class="form-control" value="{{  $school->email }}" placeholder="Entrez l'adresse mail de l'établissement">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="contact">Contact de l'université</label>
                                <input type="text" name="contact" class="form-control" value="{{  $school->contact }}" placeholder="Entrez le numéro de contact de l'école" >
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="site_web">Site web de l'université</label>
                            <div class="input-group">
                                <span class="input-group-text" id="site_web">https://</span>
                                <input type="url" name="site_web" class="form-control" value="{{  $school->site_web }}" placeholder="Site web de l'école" >
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="address">Adresse de l'université</label>
                                <input type="text" name="address" class="form-control" value="{{  $school->address }}" placeholder="Entrez le numéro de contact de l'école" >
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="logo">Logo de l'université</label>
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
                                <input type="text" name="responsable_nom" class="form-control" value="{{  $school->responsable['responsable_nom'] }}" placeholder="Entrez le nom du responsable de l'école">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="responsable_nom">Prénoms du responsable de l'école</label>
                                <input type="text" name="responsable_prenoms" class="form-control" value="{{ $school->responsable['responsable_prenoms'] }}" placeholder="Entrez le prenoms du responsable de l'école">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="responsable_email">Email de l'université</label>
                                <input type="text" name="responsable_email" class="form-control" value="{{ $school->responsable['responsable_email'] }}" placeholder="Entrez l'adresse de l'école">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="responsable_phone">Téléphone du responsable de l'école</label>
                                <input type="text" name="responsable_phone" class="form-control" value="{{ $school->responsable['responsable_phone'] }}" placeholder="Entrez le nom du responsable de l'école">
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label for="description">Description de l'école</label>
                                <textarea name="description" id="description" class="form-control" placeholder="Entrez une brève description de l'école" >
                                    {{ $school->description }}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Infrastructures l'école</h4>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="infrastructures"></label>
                            <div id="infrastructures">
                                <!-- Champs dynamiques seront ajoutés ici -->
                            </div>
                            <button type="button" class="btn btn-sm btn-primary mt-2" onclick="addInfrastructureField()">Ajouter une infrastructure</button>
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


    {{-- <script>
        function addInfrastructureField() {
            const infrastructuresDiv = document.getElementById('infrastructures');
            const newField = document.createElement('div');
            newField.classList.add('card', 'mb-3');

            newField.innerHTML = `
                <div class="card-header bg-primary ">
                    <h5 class="card-title text-white">Catégorie : <span class="category-value"></span></h5>
                    <button type="button" class="btn btn-sm btn-danger float-end" onclick="removeInfrastructure(this)">Supprimer</button>
                    <button type="button" class="btn btn-sm btn-secondary float-end" onclick="addInfrastructureItem(this)">Ajouter un item</button>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="category">Catégorie</label>
                        <select name="category[]" class="form-control" onchange="updateCategoryValue(this)">
                            <option value="">Choisir une catégorie</option>
                            <option value="Bâtiment">Bâtiment</option>
                            <option value="TIC">TIC</option>
                            <option value="Restauration">Restauration</option>
                            <option value="Installations Sportives">Installations Sportives</option>
                        </select>
                    </div>
                    <div class="mb-2">
                        <label for="items">Items</label>
                        <input type="text" name="items[]" class="form-control" placeholder="Entrez les éléments">
                    </div>
                </div>
            `;

            infrastructuresDiv.appendChild(newField);
        }

        function addInfrastructureItem(button) {
            const cardBody = button.parentElement.nextElementSibling;
            const itemsDiv = document.createElement('div');
            itemsDiv.classList.add('mb-2');

            itemsDiv.innerHTML = `
                <input type="text" name="items[]" class="form-control mt-2" placeholder="Entrez un élément">
                <button type="button" class="btn btn-sm btn-danger mt-2" onclick="removeItem(this)">Supprimer</button>
            `;

            cardBody.appendChild(itemsDiv);
        }

        function removeItem(button) {
            button.parentElement.remove();
        }

        function updateCategoryValue(selectElement) {
            const cardHeader = selectElement.closest('.card').querySelector('.card-header .category-value');
            if (cardHeader) {
                cardHeader.textContent = selectElement.value;
            }
        }

        function removeInfrastructure(button) {
            button.closest('.card').remove();
        }
    </script> --}}

    <script src="{{ asset('/admin/assets/js/add-school.js') }}"></script>




@endsection
