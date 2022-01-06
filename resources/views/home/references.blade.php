@extends('layouts.home')

@section('title','References-' .$setting->title)

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
                    <li>References</li>
                </ul>
                <h2>References</h2>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <section class="about-area ptb-100">
        <h5  style="text-align: center; padding-bottom: 25px">University References</h5>
        <div class="container" style="text-align: center; margin-top: 25px">
            <div class="row align-items-center">

                    <div class="col-lg-12 col-md-12">
                        <div class="about-content">


                            {!! $setting->references !!}

                        </div>
                    </div>

            </div>

        </div>
    </section>

@endsection
