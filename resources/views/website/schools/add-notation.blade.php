<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" id="openDialogBtn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    NOTER L'ECOLE
</button>

<!-- Modal -->
<div id="dialog" class="dialog">
    <div class="dialog-content">
        <span class="close" onclick="closeDialog()">&times;</span>
        <h2>Dialogue</h2>
        <div class="card-body">
            <div class="row">
                @php
                    $i = 1;
                @endphp
                @foreach ($categories as $key=> $category)
                    <div class="col-md-12 col-sm-12">
                        <div id="accordion-tab-{{ $category->id }}" class="accordion-content" role="tablist">
                            <div id="accordion-{{ $school->id }}" class="card tab-pane fade show active"
                                role="tabpanel" aria-labelledby="accordion-A">
                                <div class="card-header" role="tab" id="qus-A">
                                    <h5 class="mb-0">
                                        <a data-bs-toggle="collapse" href="#collapse-{{ $category->id }}"
                                            aria-expanded="true" aria-controls="collapse-{{ $category->id }}">
                                            <h4> {{ $category->name }}</h4>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse-{{ $category->id }}" class="collapse "
                                    data-bs-parent="#accordion-tab-{{ $category->id }}" role="tabpanel"
                                    aria-labelledby="qus-A">
                                    <div class="card-body">
                                        <div class="row">
                                            @foreach ($category->rules as $item)
                                                <div class="col-lg-6 col-sm-12">
                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">{{ $item->libelle }}</label>
                                                        <input type="number" class="form-control" name="username" id="username"  placeholder="Entrez la note du critère" >
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
        </div>
    </div>
</div>

<script>
    const dialog = document.getElementById('dialog');
    const openDialogBtn = document.getElementById('openDialogBtn');

    // Fonction pour ouvrir le dialogue
    function openDialog() {
        dialog.style.display = 'block';
    }

    // Fonction pour fermer le dialogue
    function closeDialog() {
        dialog.style.display = 'none';
    }

    // Ajouter un écouteur d'événements pour le bouton d'ouverture du dialogue
    openDialogBtn.addEventListener('click', openDialog);
</script>


<style>
    .dialog {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .dialog-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>
