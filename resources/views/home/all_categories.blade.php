@extends('layouts.home')


@section('title','ALL-Notes-' .$setting->title)

@section('description')
    {{$setting->description}}
@endsection

@section('keywords', $setting->keywords)


@section('hero')
    <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}' style="background-image:url({{ Storage::url($setting->hero_images) }});">
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>All Categories</li>
                </ul>
                <h2>All Categories</h2>
            </div>
        </div>
    </div>
@endsection


@section('content')


    <section class="courses-categories-area ptb-100">
        <div class="container">
            <div class="row">
                @foreach($datalist as $rs)
                    <div class="col-lg-3 col-sm-6 col-md-4">
                        <div class="single-courses-category mb-30">
                            <a href="#">
                                <i class='bx bx-shape-triangle'></i>
                                {{$rs->title}}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <span>{{ $datalist->links("pagination::bootstrap-4") }}</span>
        </div>
        <div id="particles-js-circle-bubble-2"></div>
    </section>



@endsection
