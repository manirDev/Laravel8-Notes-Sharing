@extends('layouts.home')

@section('title', 'All Notes')


@section('hero')
    <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}' style="background-image:url({{asset('assets')}}/fhome/img/main-banner3.jpg);">
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>All Notes</li>
                </ul>
                <h2>All Notes</h2>
            </div>
        </div>
    </div>
@endsection


@section('content')



    <section class="blog-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 ">
                    <div class="row">

                        @foreach($rand as $rs)
                            <div class="col-lg-6 col-md-6">
                                <div class="single-blog-post mb-30">
                                    <div class="post-image">
                                        <a href="{{route('notContent', ['id'=>$rs->id, 'slug'=>$rs->slug])}}" class="d-block">
                                            <img src="{{ Storage::url($rs->image) }}" alt="image" style="height: 200px">
                                        </a>
                                        <div class="tag">
                                            <a href="#">{{$rs->slug}}</a>
                                        </div>
                                    </div>
                                    <div class="post-content">
                                        <ul class="post-meta">
                                            <li class="post-author">
                                                @if($rs->user->profile_photo_path)
                                                    <img src="{{Storage::url($rs->user->profile_photo_path)}}" class="d-inline-block rounded-circle mr-2" alt="image">
                                                @endif
                                                By: <a href="#" class="d-inline-block">{{$rs->user->name}}</a>
                                            </li>
                                            <li><a href="#">{{$rs->created_at}}</a></li>
                                        </ul>
                                        <h3><a href="{{route('notContent', ['id'=>$rs->id, 'slug'=>$rs->slug])}}" class="d-inline-block">{{$rs->title}}</a></h3>
                                        <a href="{{route('notContent', ['id'=>$rs->id, 'slug'=>$rs->slug])}}" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <aside class="widget-area">
                        <section class="widget widget_search">

                            <form action="{{route('getcontent')}}" method="post" class="search-form">
                                @csrf
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                   @livewire('search')
                                </label>
                                <button type="submit"><i class="bx bx-search-alt"></i></button>
                            </form>

                        </section>
                        <section class="widget widget_raque_posts_thumb">
                            <h3 class="widget-title">Most Reviewed Notes</h3>
                            @foreach($rand as $rs)



                                    @php
                                        $avgmax = App\Http\Controllers\HomeController::avgmax($rs->id);
                                        $avgrev = App\Http\Controllers\HomeController::avgreview($rs->id);
                                        $count = count($avgmax)
                                    @endphp

                                    @for ($i = 0; $i < 3; $i++)
                                         @if ($avgrev>4)
                                        <article class="item">
                                            <a href="{{route('notContent', ['id'=>$rs->id, 'slug'=>$rs->slug])}}" class="thumb">
                                                <img src="{{ Storage::url($rs->image) }}"   style="border-radius: 10px; height:50px !important;">
                                            </a>
                                            <div class="info">
                                                <time datetime="2021-06-30">{{$rs->created_at}}</time>
                                                <h4 class="title usmall"><a href="{{route('notContent', ['id'=>$rs->id, 'slug'=>$rs->slug])}}">{{$rs->title}}</a></h4>
                                            </div>
                                        <div class="clear"></div>
                                        </article>
                                    @endif
                                    @endfor


                            @endforeach
                        </section>
                        <section class="widget widget_categories">
                            <h3 class="widget-title"> Some Categories</h3>
                            <ul>
                                @foreach($rand as $rs)
                                    <li><a href="{{route('categorycontents', ['id'=>$rs->id, 'slug'=>$rs->slug])}}"> {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title) }} <span class="post-count"></span></a></li>
                                @endforeach
                            </ul>
                        </section>
                        <section class="widget widget_tag_cloud">
                            <h3 class="widget-title">Some Tags</h3>
                            @php
                                $tag = App\Http\Controllers\HomeController::gettags();
                                //$countrev = App\Http\Controllers\HomeController::countreview($rs->id);
                            @endphp
                            <div class="tagcloud">
                                @foreach($rand as $rs)
                                    <a href="{{route('notContent', ['id'=>$rs->id, 'slug'=>$rs->slug])}}">{{$rs->slug}} <span class="tag-link-count"></span></a>
                                @endforeach
                            </div>
                        </section>

                    </aside>
                </div>
            </div>
        </div>
    </section>




@endsection
