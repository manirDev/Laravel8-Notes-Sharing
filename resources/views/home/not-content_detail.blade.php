@extends('layouts.home')

@section('title', $data->title)

@section('description')
    {{$data->description}}
@endsection

@section('keywords', $data->keywords)
@section('csz')

    <script src="{{asset('assets')}}/pdfobject.js"></script>

    <style>
        .pdfobject-container {width:100%;height: 35rem; border: 1rem solid rgba(0,0,0,.1);}
        .pdfobject { border: 1px solid #666; }
        #word-break{
            display: block;
            width: 95%;
            overflow: hidden;
            word-wrap: break-word;
            text-overflow: ellipsis;
            max-height: 16px;
            line-height:16px;
        }
    </style>

    <style>

        @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

        fieldset, label { margin: 0; padding: 0; }

        h1 { font-size: 1.5em; margin: 10px; }

        /****** Style Star Rating Widget *****/

        .ratings {
            border: none;
            float: left;
        }

        .ratings > input { display: none; }
        .ratings > label:before {
            margin: 5px;
            font-size: 1.25em;
            font-family: FontAwesome;
            display: inline-block;
            content: "\f005";
        }

        .ratings > .half:before {
            content: "\f089";
            position: absolute;
        }

        .ratings > label {
            color: #ddd;
            float: right;

        }

        /***** CSS Magic to Highlight Stars on Hover *****/

        .ratings > input:checked ~ label, /* show gold star when clicked */
        .ratings:not(:checked) > label:hover, /* hover current star */
        .ratings:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

        .ratings > input:checked + label:hover, /* hover current star when changing rating */
        .ratings > input:checked ~ label:hover,
        .ratings > label:hover ~ input:checked ~ label, /* lighten current selection */
        .ratings > input:checked ~ label:hover ~ label { color: #FFED85;  }

    </style>
@endsection

@section('hero')
    <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}' style="background-image:url({{ Storage::url($setting->hero_images) }});">
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->title) }}</li>
                </ul>
                <h2>{{$data->title}}</h2>
            </div>
        </div>
    </div>
@endsection


@section('content')


    <section class="product-details-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="products-details-image">
                        <ul class="slickslide"  >
                            <li>
                                @if($data->file)

                                    <a href="{{Storage::url($data->file)}}" onclick="popupCenter({url: this.href, title: 'xtf', w: 900, h: 900});"target="_blank">
                                        <div id="example1"></div>
                                        <script>PDFObject.embed("{{Storage::url($data->file)}}", "#example1");</script>
                                    </a>
                                @endif
                            </li>
                        </ul>
{{--                        <ul class="slickslide"  >--}}
{{--                            @foreach($slider as $rs)--}}
{{--                                <li>--}}
{{--                                    <img src="{{Storage::url($rs->image)}}" style="height: 138px !important;width: 100px !important;" alt="image">--}}
{{--                                    {{$rs->title}}--}}
{{--                                </li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                        <b></b>--}}
{{--                        <div class="slick-thumbs">--}}
{{--                            <ul>--}}

{{--                                @foreach($slider as $rs)--}}
{{--                                    <li>--}}
{{--                                           <img src="{{Storage::url($rs->image)}}" style="height: 138px !important;width: 100px !important;" alt="image">--}}

{{--                                    </li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-desc">
                        <h3> {{ $data->title}}</h3>
                        @php
                            $avgrev = App\Http\Controllers\HomeController::avgreview($data->id);
                            $countrev = App\Http\Controllers\HomeController::countreview($data->id);
                        @endphp
                        <div class="product-review">
                            <div class="rating">
                                @for ($i = 0; $i < 5; $i++)
                                    @if ($i < $avgrev)
                                        <i class='bx bxs-star'></i>
                                    @else
                                        <span class="star"></span>
                                    @endif
                                @endfor
                            </div>
                            <a href="#rev" ><span class="label">{{$countrev}} Reviews {{$avgrev}}</span></a>

                        </div>
                        <h3>Description</h3>
                        <p> {{ $data->description}}</p>
                        <div class="product-meta">
                        <span>Publisher:
                            <span class="sku">
                                @if($data->user->profile_photo_path)

                                    <img src="{{Storage::url($data->user->profile_photo_path)}}" style="width: 30px; height: 30px; border-radius: 100%;" class="shadow" alt="image">
                                @endif
                                    <span>{{$data->user->name}}</span>

                            </span>
                        </span>
                            <span>Category: <a href="{{route('categorycontents',['id'=>$data->id, 'slug'=>$data->title])}}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->title) }}</a></span>
                            <span>Tag: <a href="{{route('categorycontents',['id'=>$data->id, 'slug'=>$data->title])}}">{{ $data->slug}}</a></span>
                        </div>

                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="tab products-details-tab">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <ul class="tabs">
                                    <li><a href="#">
                                            <div class="dot"></div> Detail
                                        </a></li>
                                    <li><a href="#">
                                            <div class="dot"></div> Additional information
                                        </a></li>
                                    <li><a href="#">
                                            <div class="dot"></div> Reviews
                                        </a></li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="tab-content">
                                    <div class="tabs-item">
                                        <div class="products-details-tab-content">
                                            <p>{!! $data->detail !!}</p>
                                        </div>
                                    </div>
                                    <div class="tabs-item">
                                        <div class="products-details-tab-content">
                                            <ul class="additional-information">
                                                <li><span>Title:</span> {{ $data->title}}</li>
                                                <li><span>View's Number:</span> {{ $data->reads}}</li>
                                                <li><span>Publisher:</span>{{$data->user->name}}</li>
                                                <li><span>Category</span> {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category, $data->category->title) }}</li>
                                                <li><span>Slug:</span> {{ $data->slug}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tabs-item">
                                        <div class="products-details-tab-content">
                                            <div class="product-review-form">

                                                <h3>User Reviews</h3>

                                                    <div class="review-title">
                                                        <div class="rating">
                                                            @for ($i = 0; $i < 5; $i++)
                                                                @if ($i < $avgrev)
                                                                    <i class='bx bxs-star'></i>
                                                                @else
                                                                    <span class="star"></span>
                                                                @endif
                                                            @endfor
                                                                <a href="#rev" ><span class="label">{{$countrev}} Reviews {{$avgrev}}</span></a>
                                                        </div>

                                                </div>
                                                <div class="row">
                                                    @if($avgrev)
                                                    <div class="col-lg-6 col-md-6 review-comments">
{{--                                                        <table id="example2" class="table table-bordered">--}}
{{--                                                            <thead>--}}
{{--                                                                <tr>--}}
{{--                                                                    <th> </th>--}}
{{--                                                                </tr>--}}
{{--                                                            </thead>--}}
{{--                                                            <tbody>--}}

                                                            @foreach($reviews as $rs)
{{--                                                                <tr>--}}
{{--                                                                <td>--}}
                                                                <div class="review-item">
                                                                    <div class="rating">
                                                                        @for ($i = 0; $i < 5; $i++)
                                                                            @if ($i < $rs->rate)
                                                                                <i class='bx bxs-star'></i>
                                                                            @else
                                                                                <span class="star"></span>
                                                                            @endif
                                                                        @endfor

                                                                    </div>
                                                                    <h3>{{$rs->subject}}</h3>
                                                                    <span>
                                                                        @if($rs->user->profile_photo_path)
                                                                          <img src="{{Storage::url($rs->user->profile_photo_path)}}" style="width: 30px; height: 30px; border-radius: 100%;" class="shadow" alt="image">
                                                                          @endif
                                                                        <strong>{{$rs->user->name}}</strong> on <strong>{{$rs->created_at}}</strong>
                                                                    </span>
                                                                    <p>{{$rs->review}}.</p>
                                                                </div>
{{--                                                                </td>--}}
{{--                                                                </tr>--}}
                                                            @endforeach
                                                        <span>{{ $reviews->links("pagination::bootstrap-4") }}</span>
{{--                                                            </tbody>--}}
{{--                                                        </table>--}}
                                                    </div>
                                                    @else
                                                        <div class="col-6 review-comments" ></div>
                                                    @endif
{{--                                                    <div id="show_paginator"></div>--}}

                                                    <div id="rev" class="col-lg-6 col-md-6 review-form">
                                                        <h3>Write a Review</h3>

                                                        @livewire('review', ['id' => $data->id])

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title text-left">

                <h2>Related Notes</h2>

            </div>
            <div class="blog-slides owl-carousel owl-theme">
                @php
                  $current = \App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category, $data->category->title);
                @endphp
                @foreach($picked as $rs)
                    @php
                        //$current = \App\Http\Controllers\Admin\CategoryController::getParentsTree($data->category, $data->category->title);
                        $this_one = \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title);
                    @endphp
                    @if($current == $this_one)
                    <div class="single-blog-post mb-30">
                        <div class="post-image">
                            <a href="{{route('notContent', ['id'=>$rs->id, 'slug'=>$rs->slug])}}" class="d-block">
                                <img src="{{Storage::url($rs->image)}}" style="height:200px;" alt="image">
                            </a>
                            <div class="tag">
                                <a href="#">{{$rs->title}}</a>
                            </div>
                        </div>
                        <div class="post-content">
                            <ul class="post-meta">
                                <li class="post-author">
                                    @if($rs->user->profile_photo_path)

                                        <img src="{{Storage::url($rs->user->profile_photo_path)}}" style="width: 30px; height: 30px; border-radius: 100%;" class="shadow" alt="image">
                                    @endif
                                    By: <a href="#" class="d-inline-block">{{$rs->user->name}}</a>
                                </li>
                                <li><a href="#">{{$rs->created_at}}</a></li>
                            </ul>
                            <p id="word-break"><a href="{{route('notContent', ['id'=>$rs->id, 'slug'=>$rs->slug])}}" class="d-inline-block">{{$rs->description}}</a>....</p>
                            <a href="{{route('notContent', ['id'=>$rs->id, 'slug'=>$rs->slug])}}" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
                    @endif
                @endforeach

            </div>
        </div>
    </section>


@endsection

@section('jsz')
<script>
    const popupCenter = ({url, title, w, h}) => {
        // Fixes dual-screen position                             Most browsers      Firefox
        const dualScreenLeft = window.screenLeft !==  undefined ? window.screenLeft : window.screenX;
        const dualScreenTop = window.screenTop !==  undefined   ? window.screenTop  : window.screenY;

        const width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
        const height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;

        const systemZoom = width / window.screen.availWidth;
        const left = (width - w) / 2 / systemZoom + dualScreenLeft
        const top = (height - h) / 2 / systemZoom + dualScreenTop
        const newWindow = window.open(url, title,
            `
      scrollbars=yes,
      width=${w / systemZoom},
      height=${h / systemZoom},
      top=${top},
      left=${left}
      `
        )

       // if (window.focus) newWindow.focus();
    }
</script>

@endsection
