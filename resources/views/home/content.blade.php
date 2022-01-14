@section('csz')

    <style>
        .word-break{
            display: block;
            width: 95%;
            overflow: hidden;
            word-wrap: break-word;
            text-overflow: ellipsis;
            max-height: 26px;
            line-height:16px;
        }
    </style>
@endsection


<section class="courses-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-left">
            <span class="sub-title">Discover Lessons</span>
            <h2> Popular Daily Students Shared Lessons</h2>
            <a href="{{route('all_notes')}}" class="default-btn"><i class='bx bx-show-alt icon-arrow before'></i><span class="label">All Notes</span><i class="bx bx-show-alt icon-arrow after"></i></a>
        </div>
        <div class="shorting">
            <div class="row">
                <div class="courses-slides owl-carousel owl-theme">
                @foreach($daily as $rs)

                        <div class="single-courses-item mb-30">
                            <div class="courses-image">
                                <a href="{{route('notContent', ['id'=>$rs->id, 'slug'=>$rs->slug])}}" class="d-block"><img src="{{ Storage::url($rs->image) }}" alt="image" style="height:200px;"></a>
                            </div>
                            <div class="courses-content">

                                <div class="d-flex justify-content-between align-items-center">

                                        <div class="course-author d-flex align-items-center">
                                            @if($rs->user->profile_photo_path)

                                                <img src="{{Storage::url($rs->user->profile_photo_path)}}" style="width: 30px; height: 30px; border-radius: 100%;" class="shadow" alt="image">
                                            @endif
                                            By: <a href="#" class="d-inline-block">{{$rs->user->name}}</a>
                                        </div>
                                    @php
                                        $avgrev = App\Http\Controllers\HomeController::avgreview($rs->id);
                                        $countrev = App\Http\Controllers\HomeController::countreview($rs->id);
                                    @endphp

                                    <div class="courses-rating">
                                        <div class="review-stars-rated">
                                            @for ($i = 0; $i < 5; $i++)
                                                @if ($i < $avgrev)
                                                    <i class='bx bxs-star'></i>
                                                @else
                                                    <span class="star"></span>
                                                @endif
                                            @endfor
                                        </div>
                                        <div class="rating-total">
                                            {{$avgrev}} ({{$countrev}})
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="single-courses.html" class="d-inline-block">{{$rs->title}}</a></h3>
                                <p class="word-break">{{$rs->description}}...</p>
                            </div>
                            <div class="courses-box-footer">
                                <ul>
                                    <li class="students-number">
                                        <i class='bx bxs-show'></i> {{$rs->reads}}
                                    </li>
                                    <li class="courses-lesson">
                                        <i class='bx bx-book-open'></i> {{$noteCount}} lessons
                                    </li>
                                    <li class="courses-price">
                                        Free
                                    </li>
                                </ul>
                            </div>
                        </div>

                @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


<section class="courses-categories-area pb-70">
    <div class="container">
        <div class="section-title text-left">
            <span class="sub-title">Notes Categories</span>
            <h2>Browse Trending Categories</h2>
            <a href="{{route('all_categories')}}" class="default-btn"><i class='bx bx-show-alt icon-arrow before'></i><span class="label">View All</span><i class="bx bx-show-alt icon-arrow after"></i></a>
        </div>
        <div class="courses-categories-slides owl-carousel owl-theme">
            @foreach($categories as $rs)
                <div class="single-categories-courses-item  mb-30" style="background-image:url({{ Storage::url($rs->image) }}); ">
                    <div class="icon" style="color: #1CB5A3">
                        <i class='bx bx-search'></i>
                    </div>
                    <h3 style="color: #FEA116">{{$rs->title}}</h3>
                    <span style="color: #FEA116">{{$noteCount}}0 Courses</span>
                    <a href="#" class="learn-more-btn">Learn More <i class='bx bx-book-reader'></i></a>
                    <a href="#" class="link-btn"></a>
                </div>
            @endforeach
        </div>
    </div>
    <div id="particles-js-circle-bubble-2"></div>
</section>


<section class="partner-area pb-100">
    <div class="container">
        <div class="section-title">
            <h2>Our Partner Universities</h2>
        </div>
        <div class="partner-slides owl-carousel owl-theme">
            <div class="single-partner-item">
                <a href="#" class="d-block">
                    <img src="{{asset('assets')}}/fhome/img/partner/7.png" alt="image">
                </a>
            </div>
            <div class="single-partner-item">
                <a href="#" class="d-block">
                    <img src="{{asset('assets')}}/fhome/img/partner/8.png" alt="image">
                </a>
            </div>
            <div class="single-partner-item">
                <a href="#" class="d-block">
                    <img src="{{asset('assets')}}/fhome/img/partner/9.png" alt="image">
                </a>
            </div>
            <div class="single-partner-item">
                <a href="#" class="d-block">
                    <img src="{{asset('assets')}}/fhome/img/partner/10.png" alt="image">
                </a>
            </div>
            <div class="single-partner-item">
                <a href="#" class="d-block">
                    <img src="{{asset('assets')}}/fhome/img/partner/11.png" alt="image">
                </a>
            </div>
            <div class="single-partner-item">
                <a href="#" class="d-block">
                    <img src="{{asset('assets')}}/fhome/img/partner/12.png" alt="image">
                </a>
            </div>
        </div>
    </div>
</section>




<section class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-left">

            <h2>Picked Notes Lessons</h2>

        </div>
        <div class="blog-slides owl-carousel owl-theme">
            @foreach($picked as $rs)
                <div class="single-blog-post mb-30">
                    <div class="single-courses-item mb-30">
                        <div class="courses-image">
                            <a href="{{route('notContent', ['id'=>$rs->id, 'slug'=>$rs->slug])}}" class="d-block"><img src="{{ Storage::url($rs->image) }}" alt="image" style="height:200px;"></a>
                        </div>
                        <div class="courses-content">
                            <div class="d-flex justify-content-between align-items-center">

                                   <div class="course-author d-flex align-items-center">
                                       @if($rs->user->profile_photo_path)

                                           <img src="{{Storage::url($rs->user->profile_photo_path)}}" style="width: 30px; height: 30px; border-radius: 100%;" class="shadow" alt="image">
                                       @endif
                                       By: <a href="#" class="d-inline-block">{{$rs->user->name}}</a>
                                   </div>
                                @php
                                    $avgrev = App\Http\Controllers\HomeController::avgreview($rs->id);
                                    $countrev = App\Http\Controllers\HomeController::countreview($rs->id);
                                @endphp

                                <div class="courses-rating">
                                    <div class="review-stars-rated">
                                        @for ($i = 0; $i < 5; $i++)
                                            @if ($i < $avgrev)
                                                <i class='bx bxs-star'></i>
                                            @else
                                                <span class="star"></span>
                                            @endif
                                        @endfor
                                    </div>
                                    <div class="rating-total">
                                        {{$avgrev}} ({{$countrev}})
                                    </div>
                                </div>
                            </div>
                            <h3><a href="{{route('notContent', ['id'=>$rs->id, 'slug'=>$rs->slug])}}" class="d-inline-block">{{$rs->title}}</a></h3>
                            <p class="word-break">{{$rs->description}}</p>
                        </div>
                        <div class="courses-box-footer">
                            <ul>
                                <li class="students-number">
                                    <i class='bx bxs-show'></i> {{$rs->reads}}
                                </li>
                                <li class="courses-lesson">
                                    <i class='bx bx-book-open'></i> {{$noteCount}} lessons
                                </li>
                                <li class="courses-price">
                                    Free
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
