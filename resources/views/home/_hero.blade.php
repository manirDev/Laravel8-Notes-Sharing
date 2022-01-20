<div class="banner-section" style="background-image:url({{ Storage::url($setting->hero_images) }});" >
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="banner-content">
                    <span class="sub-title">{{$setting->hero_title}}</span>
                    <h1>{{$setting->hero_subtitle}}</h1>
                    <p>{{$setting->hero_description}}.</p>
                    <div class="btn-box">
                        <a href="{{route('register')}}" class="default-btn"><i class='bx bx-move-horizontal icon-arrow before'></i><span class="label">Get Started</span><i class="bx bx-move-horizontal icon-arrow after"></i></a>
                        <a href="{{route('all_notes')}}" class="default-btn"><i class='bx bx-show-alt icon-arrow before'></i><span class="label">All Notes</span><i class='bx bx-show-alt icon-arrow after'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="divider"></div>
</div>


{{--<section class="home-slides owl-carousel owl-theme">--}}
{{--    @foreach($slider as $rs)--}}
{{--    <div class="main-banner item-bg1" style="background-image:url({{ Storage::url($rs->image) }});">--}}
{{--        <div class="d-table">--}}
{{--            <div class="d-table-cell">--}}
{{--                <div class="container">--}}
{{--                    <div class="main-banner-content">--}}
{{--                        <span class="sub-title">{{$rs->title}}</span>--}}
{{--                        <h1>{{$rs->title}}</h1>--}}
{{--                        <p>{{$rs->description}}</p>--}}
{{--                        <div class="btn-box">--}}
{{--                            <a href="courses-2-columns-style-1.html" class="default-btn"><i class='bx bx-move-horizontal icon-arrow before'></i><span class="label">View Courses</span><i class="bx bx-move-horizontal icon-arrow after"></i></a>--}}
{{--                            <a href="contact.html" class="optional-btn">Get Started Free</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    @endforeach--}}
{{--</section>--}}
