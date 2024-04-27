@extends('website.layouts.master')

@section('content')

<!-- Inner Banner html start-->
<section class="inner-banner-wrap">
    <div class="inner-baner-container" style="background-image: url(assets/img/educator-img12.jpg);">
        <div class="container">
            <div class="inner-banner-content">
                <h1 class="inner-title">Course Detail</h1>
            </div>
        </div>
    </div>
</section>
<!-- Inner Banner html end-->
<!--  course detail section html start -->
<div class="course-detail-section">
    <div class="pattern-overlay circle-patten"></div>
    <div class="course-detail-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="course-detail-container">
                        <div class="course-description">
                            <div class="course-tag">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-md-4 text-center pink-border">
                                        <div class="course-teach-tag d-flex align-items-end justify-content-center">
                                            <figure class="author-img">
                                                <img src="assets/img/educator-img23.jpg" alt="">
                                            </figure>
                                            <div>
                                                <h6 class="author-name">James mdith</h6>
                                                <span class="tag-discription">Chief Instructor</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-center pink-border">
                                        <span>Category :</span>
                                        <h5>Management</h5>
                                    </div>
                                    <div class="col-md-2 text-center pink-border">
                                        <span>20 Reviews :</span>
                                        <div class="rating-start-wrap">
                                            <div class="rating-start">
                                                <span style="width: 80%"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-center pink-border">
                                        <span>Price :</span>
                                        <h3>$39.99</h3>
                                    </div>
                                </div>
                            </div>
                            <figure class="course-imgage figure-round-border">
                                <img src="assets/img/educator-img14.jpg" alt="">
                            </figure>
                        </div>
                        <div class="tab-container">
                            <div class="responsive-tabs">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">
                                            Overview
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab">
                                            Instructor
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="tab-C" href="#pane-C" class="nav-link" data-bs-toggle="tab" role="tab">
                                            Reviews
                                        </a>
                                    </li>
                                </ul>
                                <div id="nav-tab-content" class="tab-content" role="tablist">
                                    <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
                                        <div class="card-header" role="tab" id="heading-A">
                                            <h5 class="mb-0">
                                                <a data-bs-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
                                                    Overview
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse-A" class="collapse show" data-bs-parent="#nav-tab-content" role="tabpanel" aria-labelledby="heading-A">
                                            <div class="card-body">
                                                <h5>COURSE DESCRIPTION</h5>
                                                <p>
                                                    Reprehenderit hic bibendum repellendus, repellat auctor! Integer temporibus, facilisis iaculis alias senectus, non quam molestiae incidunt cubilia, fuga? Quasi natoque dicta a fuga dapibus dolore molestie sociis erat, convallis quibusdam possimus semper nonummy mattis, quasi.
                                                </p>
                                                <h5>
                                                    CERTIFICATION
                                                </h5>
                                                <p>
                                                    Autem nec quaerat cubilia magnam eu mauris hic hac nisi eos nobis officiis corrupti consequuntur molestie urna volutpat! Quos diamlorem convallis vestibulum doloremque iste facilisi.
                                                </p>
                                                <h5>LEARNING OUTCOMES</h5>
                                                <ul>
                                                    <li>Over 37 lectures and 55.5 hours of content!</li>
                                                    <li>Testing Training Included.</li>
                                                    <li>Learn Software Testing and Automation basics from a professional trainer from your own desk.</li>
                                                    <li>Information packed practical training starting from basics to advanced testing techniques.</li>
                                                    <li>Best suitable for beginners to advanced level users and who learn faster when demonstrated.</li>
                                                    <li>Course content designed by considering current software testing technology and the job market.</li>
                                                    <li>Practical assignments at the end of every session.</li>
                                                    <li>Practical learning experience with live project work and examples.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
                                        <div class="card-header" role="tab" id="heading-B">
                                            <h5 class="mb-0">
                                                <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
                                                    Instructor
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse-B" class="collapse" data-bs-parent="#nav-tab-content" role="tabpanel" aria-labelledby="heading-B">
                                            <div class="card-body">
                                                <div class="instructor-detail">
                                                    <figure class="instructor-img">
                                                        <img src="assets/img/educator-img26.jpg" alt="">
                                                    </figure>
                                                    <strong>James Scott</strong>
                                                    <em>Management Instructor</em>
                                                    <p>
                                                        Smply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Smply dummy text of the printing and typesetting industry
                                                    </p>
                                                </div>
                                                <div class="instructor-detail">
                                                    <figure class="instructor-img">
                                                        <img src="assets/img/educator-img21.jpg" alt="">
                                                    </figure>
                                                    <strong>Sammy Alam</strong>
                                                    <em>Business Instructor</em>
                                                    <p>
                                                        Smply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Smply dummy text of the printing and typesetting industry
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="pane-C" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-C">
                                        <div class="card-header" role="tab" id="heading-C">
                                            <h5 class="mb-0">
                                                <a data-bs-toggle="collapse" href="#collapse-C" aria-expanded="true" aria-controls="collapse-C">
                                                    Reviews
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapse-C" class="collapse" data-bs-parent="#nav-tab-content" role="tabpanel" aria-labelledby="heading-C">
                                            <div class="card-body">
                                                <p>
                                                    Veritatis quae necessitatibus provident qui consectetuer, quaerat adipiscing dignissimos? Class penatibus posuere odio ultrices delectus iure, consectetuer mollis eros ut? Sunt ultrices. Euismod parturient corporis, nemo iaculis montes voluptate architecto.
                                                </p>
                                                <p>
                                                    ” Montes vel pellentesque amet, viverra officiis. Metus conubia illo aut doloribus exercitation, potenti, cupidatat ullam. “
                                                </p>
                                                <p>
                                                    ” Voluptate sapiente. Quibusdam nostrud consectetuer id, architecto tellus placerat veniam enim arcu. “
                                                </p>
                                                <p>
                                                    ” Enim dui ipsa egestas tortor cum adipiscing. Natoque magnam ridiculus eaque impedit pellentesque ornare non. “
                                                </p>
                                                <p>
                                                    ” Fermentum excepturi. Per, etiam harum sociosqu eu per aperiam commodo ultrices eros voluptates, ligula consectetuer. “
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-first">
                    <div class="sidebar">
                        <div class="video-widget">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/IUN664s7N-c" title="video" allowfullscreen=""></iframe>
                        </div>
                        <div class="widget-bg widget-service icon-list-content brochure">
                            <ul>
                                <li>
                                    <i aria-hidden="true" class="far fa-clock"></i>
                                    <span>Time Duration : 12 weeks</span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-book-open"></i>
                                    <span>Study Lecture : 20 Lectures</span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-list"></i>
                                    <span>Skill Level : Advance Course</span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-users"></i>
                                    <span>No. Of Students : 120 Students</span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-percent"></i>
                                    <span>Pass Percentage : 90%</span>
                                </li>
                                <li>
                                    <i aria-hidden="true" class="fas fa-file-alt"></i>
                                    <span>Certificate : Yes</span>
                                </li>
                            </ul>
                            <div class="enroll-coures-btn">
                                <a href="contact.html" class="button-round-primary">Enroll course</a>
                            </div>
                        </div>
                        <div class="widget widget-bg widget-post-thumb">
                            <h5 class="bg-title">More Courses For You !</h5>
                            <ul>
                                <li>
                                    <figure class="post-thumb">
                                        <a href="single-blog.html"><img src="assets/img/educator-img12.jpg" alt=""></a>
                                    </figure>
                                    <div class="post-content">
                                        <h5>
                                            <a href="single-blog.html">Begineer's Managing Course</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <figure class="post-thumb">
                                        <a href="single-blog.html"><img src="assets/img/educator-img13.jpg" alt=""></a>
                                    </figure>
                                    <div class="post-content">
                                        <h5>
                                            <a href="single-blog.html">Advance Business Study</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <figure class="post-thumb">
                                        <a href="single-blog.html"><img src="assets/img/educator-img14.jpg" alt=""></a>
                                    </figure>
                                    <div class="post-content">
                                        <h5>
                                            <a href="single-blog.html">
                                                Advance Tech & Art Course</a>
                                        </h5>
                                    </div>
                                </li>
                                <li>
                                    <figure class="post-thumb">
                                        <a href="single-blog.html"><img src="assets/img/educator-img15.jpg" alt=""></a>
                                    </figure>
                                    <div class="post-content">
                                        <h5>
                                            <a href="single-blog.html">
                                                Begineer's Science Course</a>
                                        </h5>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  course detail section html end -->

@endsection