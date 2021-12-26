@extends('layouts.home')

@section('title','FAQ-' .$setting->title)

@section('description')
    {{$setting->description}}
@endsection

@section('keywords', $setting->keywords)


@section('hero')

    <div class="page-title-area item-bg1 jarallax" data-jarallax='{"speed": 0.3}' style="background-image:url({{asset('assets')}}/fhome/img/main-banner3.jpg);">
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>Faq</li>
                </ul>
                <h2>Frequently Asked Question</h2>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <section class="faq-area ptb-100">
        <div class="container">
            <div class="tab faq-accordion-tab">
                <ul class="tabs d-flex flex-wrap justify-content-center">
                    <li><a href="#"><i class='bx bx-flag'></i> <span>Getting Started</span></a></li>
                    <li><a href="#"><i class='bx bxs-badge-dollar'></i> <span>Pricing & Planes</span></a></li>
                    <li><a href="#"><i class='bx bx-shopping-bag'></i> <span>Sales Question</span></a></li>
                    <li><a href="#"><i class='bx bx-book-open'></i> <span>Usage Guides</span></a></li>
                    <li><a href="#"><i class='bx bx-info-circle'></i> <span>General Guide</span></a></li>
                </ul>
                <div class="tab-content">

                    <div class="tabs-item">
                        <div class="faq-accordion">
                            <ul class="accordion">
                                @foreach($datalist as $rs)
                                    <li class="accordion-item">
                                        <a class="accordion-title active" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            {{$rs->question}}
                                        </a>
                                        <div class="accordion-content show">
                                            <p>{!! $rs->answer !!}</p>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
