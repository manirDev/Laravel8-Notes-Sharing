@extends('layouts.home')

@section('title', $data->title)

@section('description')
    {{$data->description}}
@endsection

@section('keywords', $data->keywords)
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
    <section class="courses-details-area pt-100 pb-70">
        <div class="container">
            <div class="courses-details-header">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="courses-title">
                            <h2>{{ $data->title}}</h2>
                        </div>
                        <div class="courses-meta">
                            <ul>
                                <li>
                                    <i class='bx bx-folder-open'></i>
                                    <span>Category</span>
                                    <a href="">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->title) }}</a>
                                </li>
                                <li>
                                    <i class='bx bx-group'></i>
                                    <span>Students downloaded</span>
                                    <a href="#">541,214</a>
                                </li>
                                <li>
                                    <i class='bx bx-calendar'></i>
                                    <span>Last Updated</span>
                                    <a href="#">01/14/2021</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="courses-price">
                            <div class="courses-review">


                            </div>

                            <a href="#" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">All Lessons</span><i class="bx bx-paper-plane icon-arrow after"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="courses-details-image text-center">
                        @if($data->file)
                            <object data="{{Storage::url($data->file)}}" type="application/pdf"  width="600" height="600">
                                <a href="{{Storage::url($data->file)}}">{{ $data->title}}.pdf</a>
                            </object>
                        @endif
                    </div>
                    <div class="courses-details-desc">
                        <h3>Description</h3>
                        <p>{{ $data->description}}</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="courses-sidebar-information">
                        <ul>
                            <li>
                                <span><i class='bx bx-group'></i> Lectures:</span>
                                40
                            </li>
                            <li>
                                <span><i class='bx bx-video-recording'></i> Video:</span>
                                200
                            </li>
                            <li>
                                <span><i class='bx bx-time'></i> Duration:</span>
                                200 Hours
                            </li>
                            <li>
                                <span><i class='bx bxs-graduation'></i> Subject:</span>
                                Photography
                            </li>
                            <li>
                                <span><i class='bx bx-atom'></i> Quizzes:</span>
                                Yes
                            </li>
                            <li>
                                <span><i class='bx bxs-badge-check'></i> Level:</span>
                                Introductory
                            </li>
                            <li>
                                <span><i class='bx bx-support'></i> Language:</span>
                                English
                            </li>
                            <li>
                                <span><i class='bx bx-text'></i> Video Subtitle:</span>
                                English
                            </li>
                            <li>
                                <span><i class='bx bx-certification'></i> Certificate:</span>
                                Yes
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
