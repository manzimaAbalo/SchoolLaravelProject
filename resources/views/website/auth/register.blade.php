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
        
        <div class="contact-form-inner">
            <div class="pattern-overlay zigzag-patten"></div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="contact-detail-container">
                        <div class="section-head">
                            <div class="title-divider"></div>
                            <h2 class="section-title">Feel Free To Contact And Reach Us !</h2>
                            <div class="section-disc">
                                <p>Per sed, mattis. Integer viverra euismod maecenas incidunt, phasellus consequatur aliquam nihil temporibus in assumens deserunt.</p>
                            </div>
                        </div>
                        <div class="contact-details-list">
                            <ul>
                                <li>
                                    <span class="icon">
                                        <i aria-hidden="true" class="icon icon-phone1"></i>
                                    </span>
                                    <div class="details-content">
                                        <h5>Phone Number :</h5>
                                        <span>Head-Office : (+011) 948-5481 //</span>
                                        <span>Branch-Office : (+011) 948-56487</span>
                                    </div>
                                </li>
                                <li>
                                    <span class="icon">
                                        <i aria-hidden="true" class="icon icon-map-marker1"></i>
                                    </span>
                                    <div class="details-content">
                                        <h5>Location Address :</h5>
                                        <span>34th Bridge Road, San Francisco //</span>
                                        <span>3th New Street Road, London</span>
                                    </div>
                                </li>
                                <li>
                                    <span class="icon">
                                        <i aria-hidden="true" class="icon icon-envelope3"></i>
                                    </span>
                                    <div class="details-content">
                                        <h5>Email address :</h5>
                                        <span><a href="https://demo.bosathemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="51353e3c30383f11323e3c21303f287f323e3c">[email&#160;protected]</a> //</span>
                                        <span><a href="https://demo.bosathemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f49d9a929bab8c8d8eb4909b99959d9ada979b99">[email&#160;protected]</a></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-from-wrap">
                        <div class="pattern-overlay circle-patten"></div>
                        <form class="contact-from">
                            <p>
                                <input type="text" name="name" placeholder="Enter Name*">
                            </p>
                            <p>
                                <input type="email" name="email" placeholder="Enter Email*">
                            </p>
                            <p>
                                <input type="text" name="subject" placeholder="Enter Subject*">
                            </p>
                            <p>
                                <input type="number" name="name" placeholder="Enter Number*">
                            </p>
                            <p class="width-full">
                                <textarea rows="8" placeholder="Enter Message*"></textarea>
                            </p>
                            <p class="width-full">
                                <input type="submit" name="submit" value="Submit Now">
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact form html end -->
    
@endsection