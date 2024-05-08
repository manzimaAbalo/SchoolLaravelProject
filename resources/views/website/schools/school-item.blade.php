<div class="col-sm-6 col-lg-4 pe-3 ps-3 pt-4 pt-lg-0 inner-course">
    <article class="post">
        <figure class="feature-image">
            {{-- <img src="{{ asset('/public/uploads/schools/logo/{{ $scool->logo }}') }}" alt=""> --}}
            <img src="/uploads/schools/logo/{{ $school->logo }}" alt=""   >

            <a href="{{ route('school.details', ['school_id'=>$school->id]) }}" class="bookmark-icon">
                <i aria-hidden="true" class="far fa-bookmark"></i>
            </a>
            <span class="cat-meta">
                <a href="#">{{ $school->address }}</a>
            </span>
        </figure>
        <div class="entry-content">
            <h4>
                <a href="{{ route('school.details', ['school_id'=>$school->id]) }}">{{ $school->name }}</a>
            </h4>
            <div class="rating-content">
                <span class="rating-info">
                    {{ Str::limit($school->description, 50, '...') }}
                </span>
                <div class="rating-start-wrap">
                    <div class="rating-start">
                        <span style="width: 88%"></span>
                    </div>
                </div>
            </div>
            <div class="author-content">
                <figure class="author-img">
                    <img src="/assets/img/educator-img21.jpg" alt="">
                </figure>
                <h6 class="author-name">(+228){{ $school->contact }}</h6>
            </div>
            <div class="entry-meta">
                <span class="student-number">
                    <i aria-hidden="true" class="fas fa-user-friends"></i>
                    150+ étudiants
                </span>
                <a href="{{ route('school.details', ['school_id'=>$school->id]) }}">
                    DETAILS
                    <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i>
                </a>
            </div>
        </div>
    </article>
</div>
