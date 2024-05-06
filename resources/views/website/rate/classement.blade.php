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
                    <form method="get">
                        <select name="orderby" class="orderby" aria-label="Shop order">
                            <option value="menu_order" selected="selected">Tri par défaut</option>
                            <option value="popularity">Trier par qualité de l'enseignement</option>
                            <option value="rating">Trier par infrastructures</option>
                            <option value="date">Trier par insertion professionnelle</option>
                        </select>
                    </form>
                </div>
                <div class="product-item-wrapper">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="product-item text-center">
                                <figure class="product-image">
                                    <a href="product-detail.html">
                                        <img src="assets/img/img034.jpg" alt="">
                                    </a>
                                    <span class="onsale">Sale</span>
                                </figure>
                                <div class="product-content">
                                    <h4>Acer Notebook</h4>
                                    <div class="product-price">
                                        <del>$350.00</del>
                                        <ins>$325.50</ins>
                                    </div>
                                    <a href="product-cart.html" class="button-round-secondary">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product-item text-center">
                                <figure class="product-image">
                                    <a href="product-detail.html">
                                        <img src="assets/img/img031.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h4>Desktop Set</h4>
                                    <div class="product-price">
                                        <ins>$650.00</ins>
                                    </div>
                                    <a href="product-cart.html" class="button-round-secondary">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- pagination html start-->
                    <div class="post-navigation-wrap">
                        <nav>
                            <ul class="pagination">
                                <li>
                                    <a href="#">
                                        <i class="fas fa-arrow-left"></i>
                                    </a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li>
                                    <a href="#">
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
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

@endsection
