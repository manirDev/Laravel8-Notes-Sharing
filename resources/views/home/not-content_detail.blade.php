@extends('layouts.home')

@section('title', $data->title)

@section('description')
    {{$data->description}}
@endsection

@section('keywords', $data->keywords)

@section('csz')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <ul class="slickslide">
                            <li>
                                @if($data->file)
                                    <a href="{{Storage::url($data->file)}}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=800 height=600')"> <img src="{{Storage::url($data->image)}}" style="height: 400px !important;width: 400px !important;" alt="image"></a>
                                @endif
                            </li>
                            @foreach($datalist as $rs)
                                <li>
                                    @if($data->file)
                                    <a href="{{Storage::url($data->file)}}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=800 height=600')"> <img src="{{Storage::url($rs->image)}}" style="height: 400px !important;width: 400px !important;"  alt="image"></a>
                                    @endif
                                </li>
                            @endforeach

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
                                @auth
                                    <img src="{{Auth::user()->profile_photo_url}}" style="width: 30px; height: 30px; border-radius: 100%;" class="shadow" alt="image">
                                    <span>{{Auth::user()->name}}</span>
                                @endauth
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
                                                    <div class="col-6 review-comments">
                                                        @foreach($reviews as $rs)
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
{{--                                                                    @if($rs->user->profile_photo_url)--}}
{{--                                                                     <img src="{{Storage::url($rs->user->profile_photo_url)}}" style="width: 30px; height: 30px; border-radius: 100%;" class="shadow" alt="image">--}}
{{--                                                                    @endif--}}
                                                                    <strong>{{$rs->user->name}}</strong> on <strong>{{$rs->created_at}}</strong>
                                                                </span>
                                                                <p>{{$rs->review}}.</p>
                                                            </div>
                                                        @endforeach
                                                    </div>
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


@endsection
