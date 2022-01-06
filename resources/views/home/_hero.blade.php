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


