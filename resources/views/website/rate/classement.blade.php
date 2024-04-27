@extends('website.layouts.master')

@section('content')

   <!-- Inner Banner html start-->
   <section class="inner-banner-wrap mb-0">
    <div class="inner-baner-container" style="background-image: url(assets/img/educator-img12.jpg);">
        <div class="container">
            <div class="inner-banner-content">
                <h1 class="inner-title">Archives: Shop</h1>
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
                    <p class="product-result-count">Showing all 6 results</p>
                    <form method="get">
                        <select name="orderby" class="orderby" aria-label="Shop order">
                            <option value="menu_order" selected="selected">Default sorting</option>
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date">Sort by latest</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
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
                        <div class="col-sm-6">
                            <div class="product-item text-center">
                                <figure class="product-image">
                                    <a href="product-detail.html">
                                        <img src="assets/img/img029.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h4>Lenevo Laptop</h4>
                                    <div class="product-price">
                                        <ins>$250.00</ins>
                                    </div>
                                    <a href="product-cart.html" class="button-round-secondary">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product-item text-center">
                                <figure class="product-image">
                                    <a href="product-detail.html">
                                        <img src="assets/img/img030.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h4>Office Chair</h4>
                                    <div class="product-price">
                                        <del>$85.00</del>
                                        <ins>$80.00</ins>
                                    </div>
                                    <a href="product-cart.html" class="button-round-secondary">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product-item text-center">
                                <figure class="product-image">
                                    <a href="product-detail.html">
                                        <img src="assets/img/img032.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="product-content">
                                    <h4>Office Table</h4>
                                    <div class="product-price">
                                        <ins>$135.50</ins>
                                    </div>
                                    <a href="product-cart.html" class="button-round-secondary">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="product-item text-center">
                                <figure class="product-image">
                                    <a href="product-detail.html">
                                        <img src="assets/img/img033.jpg" alt="">
                                    </a>
                                    <span class="onsale">Sale</span>
                                </figure>
                                <div class="product-content">
                                    <h4>Stationary Set</h4>
                                    <div class="product-price">
                                        <del>$55.00</del>
                                        <ins>$48.50</ins>
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
                    <aside class="widget price_handel_widget text-center">
                        <p class="widget-title-dash-border">Filter Price</p>
                        <form class="price-handel">
                            <div id="slider-range"></div>
                            <div class="price-amout">
                                <button type="submit" class="button-round-secondary">Filter</button>
                                <div class="price-label">
                                    <span class="symbol">$</span>
                                    <input type="text" id="maxAmount" readonly>
                                </div>
                            </div>
                        </form>
                    </aside>
                    <aside class="widget widget_category_product_thumb colum-3">
                        <div class="text-center">
                            <p class="widget-title-dash-border">Categories</p>
                        </div>
                        <ul>
                            <li>
                                <figure class="product-thumb">
                                    <a href="product-detail.html"><img src="assets/img/img029.jpg" alt=""></a>
                                </figure>
                                <div class="product-content">
                                    <h5>Electronics </h5>
                                    <span class="count">(2)</span>
                                </div>
                            </li>
                            <li>
                                <figure class="product-thumb">
                                    <a href="product-detail.html"><img src="assets/img/img033.jpg" alt=""></a>
                                </figure>
                                <div class="product-content">
                                    <h5>Office kits</h5>
                                    <span class="count">(4)</span>
                                </div>
                            </li>
                            <li>
                                <figure class="product-thumb">
                                    <a href="product-detail.html"><img src="assets/img/img031.jpg" alt=""></a>
                                </figure>
                                <div class="product-content">
                                    <h5>Accessories</h5>
                                    <span class="count">(5)</span>
                                </div>
                            </li>
                        </ul>
                    </aside>
                    <aside class="widget widget_product_post widget-product-thumb">
                        <div class="text-center">
                            <p class="widget-title-dash-border">Recent Product</p>
                        </div>
                        <ul>
                            <li>
                                <figure class="product-thumb">
                                    <a href="product-detail.html"><img src="assets/img/img029.jpg" alt=""></a>
                                </figure>
                                <div class="product-content">
                                    <h5>
                                        <a href="product-detail.html">Acer Notebook</a>
                                    </h5>
                                    <div class="entry-meta">
                                        <span class="byline">
                                            <a href="product-detail.html">Demoteam</a>
                                        </span>
                                        <span class="posted-on">
                                            <a href="product-detail.html">August 17, 2023</a>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <figure class="product-thumb">
                                    <a href="product-detail.html"><img src="assets/img/img030.jpg" alt=""></a>
                                </figure>
                                <div class="product-content">
                                    <h5>
                                        <a href="product-detail.html">Office Chair</a>
                                    </h5>
                                    <div class="entry-meta">
                                        <span class="byline">
                                            <a href="product-detail.html">Demoteam</a>
                                        </span>
                                        <span class="posted-on">
                                            <a href="product-detail.html">August 17, 2023</a>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <figure class="product-thumb">
                                    <a href="product-detail.html"><img src="assets/img/img031.jpg" alt=""></a>
                                </figure>
                                <div class="product-content">
                                    <h5>
                                        <a href="product-detail.html">Desktop Set</a>
                                    </h5>
                                    <div class="entry-meta">
                                        <span class="byline">
                                            <a href="product-detail.html">Demoteam</a>
                                        </span>
                                        <span class="posted-on">
                                            <a href="product-detail.html">August 17, 2023</a>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <figure class="product-thumb">
                                    <a href="product-detail.html"><img src="assets/img/img032.jpg" alt=""></a>
                                </figure>
                                <div class="product-content">
                                    <h5>
                                        <a href="product-detail.html">Study Table</a>
                                    </h5>
                                    <div class="entry-meta">
                                        <span class="byline">
                                            <a href="product-detail.html">Demoteam</a>
                                        </span>
                                        <span class="posted-on">
                                            <a href="product-detail.html">August 17, 2023</a>
                                        </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </aside>
                    <aside class="widget widget_gallery">
                        <div class="text-center">
                            <p class="widget-title-dash-border">Product Gallery</p>
                        </div>
                        <div class="gallery gallery-colum-3">
                            <figure class="gallery-item">
                                <a href="product-detail.html"><img src="assets/img/img029.jpg" alt=""></a>
                            </figure>
                            <figure class="gallery-item">
                                <a href="product-detail.html"><img src="assets/img/img030.jpg" alt=""></a>
                            </figure>
                            <figure class="gallery-item">
                                <a href="product-detail.html"><img src="assets/img/img031.jpg" alt=""></a>
                            </figure>
                            <figure class="gallery-item">
                                <a href="product-detail.html"><img src="assets/img/img032.jpg" alt=""></a>
                            </figure>
                            <figure class="gallery-item">
                                <a href="product-detail.html"><img src="assets/img/img033.jpg" alt=""></a>
                            </figure>
                            <figure class="gallery-item">
                                <a href="product-detail.html"><img src="assets/img/img034.jpg" alt=""></a>
                            </figure>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product section html end -->

@endsection