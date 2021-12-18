
<section class="courses-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-left">
            <span class="sub-title">Discover Lessons</span>
            <h2> Popular Daily Students Shared Lessons</h2>
            <a href="courses-2-columns-style-2.html" class="default-btn"><i class='bx bx-show-alt icon-arrow before'></i><span class="label">All Lessons</span><i class="bx bx-show-alt icon-arrow after"></i></a>
        </div>
        <div class="shorting">
            <div class="row">
                @foreach($daily as $rs)
                    <div class="col-lg-4 col-md-6 mix business design language">
                        <div class="single-courses-item mb-30">
                            <div class="courses-image">
                                <a href="{{route('notContent', ['id'=>$rs->id, 'slug'=>$rs->slug])}}" class="d-block"><img src="{{ Storage::url($rs->image) }}" alt="image" style="height:200px;"></a>
                            </div>
                            <div class="courses-content">
                                <div class="d-flex justify-content-between align-items-center">
                                    @auth
                                        <div class="course-author d-flex align-items-center">
                                            <img src="{{Auth::user()->profile_photo_url}}" class="shadow" alt="image">
                                            <span>{{Auth::user()->name}}</span>
                                        </div>
                                    @endauth
                                    <div class="courses-rating">
                                        <div class="review-stars-rated">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star-half'></i>
                                        </div>
                                        <div class="rating-total">
                                            4.5 (2)
                                        </div>
                                    </div>
                                </div>
                                <h3><a href="single-courses.html" class="d-inline-block">{{$rs->title}}</a></h3>
                                <p>{{$rs->description}}</p>
                            </div>
                            <div class="courses-box-footer">
                                <ul>
                                    <li class="students-number">
                                        <i class='bx bx-user'></i> 10 students
                                    </li>
                                    <li class="courses-lesson">
                                        <i class='bx bx-book-open'></i> 6 lessons
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
    </div>
</section>


<section class="courses-categories-area pb-70">
    <div class="container">
        <div class="section-title text-left">
            <span class="sub-title">Courses Categories</span>
            <h2>Browse Trending Categories</h2>
            <a href="courses-category-style-2.html" class="default-btn"><i class='bx bx-show-alt icon-arrow before'></i><span class="label">View All</span><i class="bx bx-show-alt icon-arrow after"></i></a>
        </div>
        <div class="courses-categories-slides owl-carousel owl-theme">
            <div class="single-categories-courses-item bg1 mb-30">
                <div class="icon">
                    <i class='bx bx-code-alt'></i>
                </div>
                <h3>Web Development</h3>
                <span>60 Courses</span>
                <a href="#" class="learn-more-btn">Learn More <i class='bx bx-book-reader'></i></a>
                <a href="#" class="link-btn"></a>
            </div>
            <div class="single-categories-courses-item bg2 mb-30">
                <div class="icon">
                    <i class='bx bx-camera'></i>
                </div>
                <h3>Photography </h3>
                <span>21 Courses</span>
                <a href="#" class="learn-more-btn">Learn More <i class='bx bx-book-reader'></i></a>
                <a href="#" class="link-btn"></a>
            </div>
            <div class="single-categories-courses-item bg3 mb-30">
                <div class="icon">
                    <i class='bx bx-layer'></i>
                </div>
                <h3>Graphics Design</h3>
                <span>58 Courses</span>
                <a href="#" class="learn-more-btn">Learn More <i class='bx bx-book-reader'></i></a>
                <a href="#" class="link-btn"></a>
            </div>
            <div class="single-categories-courses-item bg4 mb-30">
                <div class="icon">
                    <i class='bx bxs-flag-checkered'></i>
                </div>
                <h3>Web Language</h3>
                <span>99 Courses</span>
                <a href="#" class="learn-more-btn">Learn More <i class='bx bx-book-reader'></i></a>
                <a href="#" class="link-btn"></a>
            </div>
            <div class="single-categories-courses-item bg5 mb-30">
                <div class="icon">
                    <i class='bx bx-health'></i>
                </div>
                <h3>Health & Fitness</h3>
                <span>21 Courses</span>
                <a href="#" class="learn-more-btn">Learn More <i class='bx bx-book-reader'></i></a>
                <a href="#" class="link-btn"></a>
            </div>
            <div class="single-categories-courses-item bg6 mb-30">
                <div class="icon">
                    <i class='bx bx-line-chart'></i>
                </div>
                <h3>Business Studies</h3>
                <span>49 Courses</span>
                <a href="#" class="learn-more-btn">Learn More <i class='bx bx-book-reader'></i></a>
                <a href="#" class="link-btn"></a>
            </div>
        </div>
    </div>
    <div id="particles-js-circle-bubble-2"></div>
</section>


<section class="partner-area pb-100">
    <div class="container">
        <div class="section-title">
            <h2>Our Company & Partners</h2>
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

<section class="testimonials-area pt-100">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Testimonials</span>
            <h2>What Students Says</h2>
        </div>
        <div class="testimonials-slides owl-carousel owl-theme">
            <div class="single-testimonials-item">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <div class="info">
                    <img src="{{asset('assets')}}/fhome/img/user1.jpg" class="shadow rounded-circle" alt="image">
                    <h3>John Smith</h3>
                    <span>Student</span>
                </div>
            </div>
            <div class="single-testimonials-item">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <div class="info">
                    <img src="{{asset('assets')}}/fhome/img/user2.jpg" class="shadow rounded-circle" alt="image">
                    <h3>Sarah Taylor</h3>
                    <span>Student</span>
                </div>
            </div>
            <div class="single-testimonials-item">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <div class="info">
                    <img src="{{asset('assets')}}/fhome/img/user3.jpg" class="shadow rounded-circle" alt="image">
                    <h3>David Warner</h3>
                    <span>Student</span>
                </div>
            </div>
            <div class="single-testimonials-item">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <div class="info">
                    <img src="{{asset('assets')}}/fhome/img/user4.jpg" class="shadow rounded-circle" alt="image">
                    <h3>James Anderson</h3>
                    <span>Student</span>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-left">
            <span class="sub-title">Explore News</span>
            <h2>Our Latest Insights</h2>
            <a href="blog-style-2.html" class="default-btn"><i class='bx bx-book-reader icon-arrow before'></i><span class="label">Read All</span><i class="bx bx-book-reader icon-arrow after"></i></a>
        </div>
        <div class="blog-slides owl-carousel owl-theme">
            <div class="single-blog-post mb-30">
                <div class="post-image">
                    <a href="single-blog.html" class="d-block">
                        <img src="{{asset('assets')}}/fhome/img/blog/1.jpg" alt="image">
                    </a>
                    <div class="tag">
                        <a href="#">Learning</a>
                    </div>
                </div>
                <div class="post-content">
                    <ul class="post-meta">
                        <li class="post-author">
                            <img src="{{asset('assets')}}/fhome/img/user1.jpg" class="d-inline-block rounded-circle mr-2" alt="image">
                            By: <a href="#" class="d-inline-block">Steven Smith</a>
                        </li>
                        <li><a href="#">August 30, 2021</a></li>
                    </ul>
                    <h3><a href="single-blog.html" class="d-inline-block">World largest elephant toothpaste experiment in 2021</a></h3>
                    <a href="single-blog.html" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                </div>
            </div>
            <div class="single-blog-post mb-30">
                <div class="post-image">
                    <a href="single-blog.html" class="d-block">
                        <img src="{{asset('assets')}}/fhome/img/blog/2.jpg" alt="image">
                    </a>
                    <div class="tag">
                        <a href="#">Education</a>
                    </div>
                </div>
                <div class="post-content">
                    <ul class="post-meta">
                        <li class="post-author">
                            <img src="{{asset('assets')}}/fhome/img/user2.jpg" class="d-inline-block rounded-circle mr-2" alt="image">
                            By: <a href="#" class="d-inline-block">Lina D'Souja</a>
                        </li>
                        <li><a href="#">August 29, 2021</a></li>
                    </ul>
                    <h3><a href="single-blog.html" class="d-inline-block">Most Popular Education Posts Of The Week 20-26 Aug</a></h3>
                    <a href="single-blog.html" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                </div>
            </div>
            <div class="single-blog-post mb-30">
                <div class="post-image">
                    <a href="single-blog.html" class="d-block">
                        <img src="{{asset('assets')}}/fhome/img/blog/3.jpg" alt="image">
                    </a>
                    <div class="tag">
                        <a href="#">Management</a>
                    </div>
                </div>
                <div class="post-content">
                    <ul class="post-meta">
                        <li class="post-author">
                            <img src="{{asset('assets')}}/fhome/img/user3.jpg" class="d-inline-block rounded-circle mr-2" alt="image">
                            By: <a href="#" class="d-inline-block">David Malan</a>
                        </li>
                        <li><a href="#">August 28, 2021</a></li>
                    </ul>
                    <h3><a href="single-blog.html" class="d-inline-block">How to enhance education quality management system</a></h3>
                    <a href="single-blog.html" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                </div>
            </div>
            <div class="single-blog-post mb-30">
                <div class="post-image">
                    <a href="single-blog.html" class="d-block">
                        <img src="{{asset('assets')}}/fhome/img/blog/4.jpg" alt="image">
                    </a>
                    <div class="tag">
                        <a href="#">Ideas</a>
                    </div>
                </div>
                <div class="post-content">
                    <ul class="post-meta">
                        <li class="post-author">
                            <img src="{{asset('assets')}}/fhome/img/user5.jpg" class="d-inline-block rounded-circle mr-2" alt="image">
                            By: <a href="#" class="d-inline-block">David Warner</a>
                        </li>
                        <li><a href="#">August 27, 2021</a></li>
                    </ul>
                    <h3><a href="single-blog.html" class="d-inline-block">Global education: Ideas for the way move forward</a></h3>
                    <a href="single-blog.html" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                </div>
            </div>
            <div class="single-blog-post mb-30">
                <div class="post-image">
                    <a href="single-blog.html" class="d-block">
                        <img src="{{asset('assets')}}/fhome/img/blog/5.jpg" alt="image">
                    </a>
                    <div class="tag">
                        <a href="#">Workforce</a>
                    </div>
                </div>
                <div class="post-content">
                    <ul class="post-meta">
                        <li class="post-author">
                            <img src="{{asset('assets')}}/fhome/img/user6.jpg" class="d-inline-block rounded-circle mr-2" alt="image">
                            By: <a href="#" class="d-inline-block">Olivar Waise</a>
                        </li>
                        <li><a href="#">August 26, 2021</a></li>
                    </ul>
                    <h3><a href="single-blog.html" class="d-inline-block">New report reimagines the broader education workforce</a></h3>
                    <a href="single-blog.html" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
