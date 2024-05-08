@extends('website.layouts.master')

@section('content')
    <!-- Inner Banner html start-->
    <section class="inner-banner-wrap mb-0">
        <div class="inner-baner-container" style="background-image: url(assets/img/educator-img12.jpg);">
            <div class="container">
                <div class="inner-banner-content">
                    <h1 class="inner-title">Classements : Critères</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- Inner Banner html end-->
    <!-- product section html start -->
    <div class="product-outer-wrap product-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 right-sidebar">
                    <div class="product-notices-wrapper">
                        <p class="product-result-count">5 résultats affichés</p>
                        <form method="get" id="categoryForm">
                            <select name="orderby" id="categorySelect" class="orderby" aria-label="Shop order">
                                <option value="" selected="selected">Tri par défaut</option>
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                    <div class="product-item-wrapper">
                        <div class="row">
                            @foreach ($schools as $key => $school)
                                <div class="col-sm-6">
                                    <div class="product-item text-center">
                                        <figure class="product-image">
                                            <a href="{{ route('school.details', ['school_id' => $school->id]) }}">
                                                <img src="/uploads/schools/logo/{{ $school->logo }}" alt="" height="50px">
                                            </a>
                                            <span class="onsale">N° {{ $key + 1 }} </span>
                                        </figure>
                                        <div class="product-content">
                                            <h4>{{ $school->name }}</h4>
                                            <div class="product-price">
                                                <ins>Moyenne: {{ $school->average }}</ins><br>
                                                {{-- <ins>Rank: {{ $key + 1 }}</ins><br> --}}
                                                <ins>Total Notes: {{ $school->notes->count() }}</ins><br>
                                                <ins>Total Notants: {{ $school->notes->unique('user_id')->count() }}</ins>
                                            </div>
                                            <a href="{{ route('school.details', ['school_id' => $school->id]) }}" class="button-round-secondary">Voir</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <!-- pagination html start-->
                        <div class="post-navigation-wrap">

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 secondary">
                    <div class="sidebar">
                        <aside class="widget search_widget">
                            <form>
                                <input type="text" name="search" placeholder="Search..">
                                <button class="search-btn">
                                    <i class="fas fa-search"></i>
                                </button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- product section html end -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('select[name="orderby"]').change(function() {
                var selectedCategory = $(this).val();
                $.ajax({
                    url: "{{ route('rate') }}", // URL de la route Laravel
                    method: 'GET',
                    data: { orderby: selectedCategory }, // Passer la catégorie sélectionnée en tant que paramètre
                    success: function(response) {
                        // Mettre à jour le contenu de la section des écoles avec les nouvelles données
                        $('.product-item-wrapper').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>

@endsection
