@extends('layouts.home')

@section('title', $data->title)

@section('description')
    {{$data->description}}
@endsection

@section('keywords', $data->keywords)
@section('csz')
    <!--plugins-->
    <link href="{{asset('assets')}}/Ahome/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>

    <link href="{{asset('assets')}}/Ahome/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/Ahome/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
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
@endsection

@section('hero')
    <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}' style="background-image:url({{asset('assets')}}/fhome/img/main-banner3.jpg);">
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
                        <b></b>
                        <div class="slick-thumbs">
                            <ul>
                                <li>
                                    @if($data->file)
                                       <img src="{{Storage::url($data->image)}}" style="height: 138px !important;width: 100px !important;"  alt="image">
                                    @endif
                                </li>
                                @foreach($datalist as $rs)
                                    <li>
                                           <img src="{{Storage::url($rs->image)}}" style="height: 138px !important;width: 100px !important;" alt="image">

                                    </li>
                                @endforeach
                            </ul>
                        </div>
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
                                                <li><span>Brand:</span> ThemeForest</li>
                                                <li><span>Color:</span> Brown</li>
                                                <li><span>Size:</span> Large, Medium</li>
                                                <li><span>Weight:</span> 27 kg</li>
                                                <li><span>Dimensions:</span> 16 x 22 x 123 cm</li>
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
                                                    <div class="col-6 review-comments" >
                                                        <table id="example2" class="table table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th> </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>

                                                            @foreach($reviews as $rs)
                                                                <tr>
                                                                <td>
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
                                                                </td>
                                                                </tr>
                                                            @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    @else
                                                        <div class="col-6 review-comments" ></div>
                                                    @endif
{{--                                                    <div id="show_paginator"></div>--}}

                                                    <div id="rev" class="col-6 review-form">
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
                @foreach($picked as $rs)
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
                                    @if($data->user->profile_photo_path)

                                        <img src="{{Storage::url($data->user->profile_photo_path)}}" style="width: 30px; height: 30px; border-radius: 100%;" class="shadow" alt="image">
                                    @endif
                                    By: <a href="#" class="d-inline-block">{{$data->user->name}}</a>
                                </li>
                                <li><a href="#">{{$rs->created_at}}</a></li>
                            </ul>
                            <p id="word-break"><a href="{{route('notContent', ['id'=>$rs->id, 'slug'=>$rs->slug])}}" class="d-inline-block">{{$rs->description}}</a>....</p>
                            <a href="{{route('notContent', ['id'=>$rs->id, 'slug'=>$rs->slug])}}" class="read-more-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                        </div>
                    </div>
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

<!-- Bootstrap JS -->
<script src="{{asset('assets')}}/Ahome/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{asset('assets')}}/Ahome/js/jquery.min.js"></script>
<script src="{{asset('assets')}}/Ahome/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>

<script src="{{asset('assets')}}/Ahome/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{asset('assets')}}/Ahome/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>

<script src="{{asset('assets')}}/Ahome/js/index.js"></script>
<!--app JS-->
<script src="{{asset('assets')}}/Ahome/js/app.js"></script>

<script src="{{asset('assets')}}/Ahome/js/pace.min.js"></script>

<script>

    $(document).ready(function() {
        $('#example2').DataTable({
            "iDisplayLength" : 3
        })
    });

</script>



@endsection
