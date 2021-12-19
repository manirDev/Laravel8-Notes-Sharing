<thead>
<tr>
    <th>Id</th>
    <th>User Id</th>
    <th>Category</th>
    <th>Title</th>
    <th>Keywords</th>
    <th>Description</th>
    <th>Image</th>
    <th>Gallery</th>
    <th>PDF File</th>
    <th>Slug</th>
    <th>Status</th>
    <th>Edit</th>
    <th>Delete</th>

</tr>
</thead>
<tbody>
@foreach ($datalist as $rs)

    <tr>
        <td>{{ $rs->id }}</td>
        <td>{{ $rs->user_id}}</td>
        <td>
            {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title) }}
        </td>
        <td>{{ $rs->title}}</td>
        <td>{{ $rs->keywords}}</td>
        <td>{{ $rs->description}}</td>
        <td>
            @if($rs->image)
                <img src="{{Storage::url($rs->image)}}" width="30" height="30" >
            @endif
        </td>
        <td><a href="{{route('admin_image_add', ['content_id' => $rs->id]) }}" >  <i class="fas fa-images p-2 text-info" style="font-size: 24px"></i> </a></td>
        <td>
            @if($rs->file)
                {{--                                <object data="{{Storage::url($rs->file)}}" type="application/pdf"  width="30" height="30">--}}
                {{--                                    <a href="{{Storage::url($rs->file)}}">{{ $rs->title}}.pdf</a>--}}
                {{--                                </object>--}}
                <a href="{{Storage::url($rs->file)}}" target="_blank"><i class="fas fa-file p-2 text-info" style="font-size: 24px"></i></a>
            @endif
        </td>
        <td>{{ $rs->slug}}</td>
        <td>{{ $rs->status}}</td>
        <td>
            <a href="{{route('admin_content_edit', ['id' => $rs->id]) }}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=800 height=600')" >
                <i class="fas fa-edit p-2 text-info" style="font-size: 24px"></i>
            </a>
        </td>
        <td><a href="{{route('admin_content_delete', ['id' => $rs->id]) }}" onclick="return confirm('Delete! Are you sure?')" > <i class="fas fa-trash p-2 text-danger" style="font-size: 24px"></i></a></td>
    </tr>

@endforeach
</tbody>











@extends('layouts.adminV1Home')

@section('title', 'Admine Gettir')

@section('content')
    <section class="courses-details-area pt-100 pb-70">
        <div class="container">
            <div class="courses-details-header">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="courses-title">
                            <h2>Photography Crash Course for Photographer</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                        </div>
                        <div class="courses-meta">
                            <ul>
                                <li>
                                    <i class='bx bx-folder-open'></i>
                                    <span>Category</span>
                                    <a href="#">Photography</a>
                                </li>
                                <li>
                                    <i class='bx bx-group'></i>
                                    <span>Students Enrolled</span>
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
                                <div class="review-stars">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <span class="reviews-total d-inline-block">(3 reviews)</span>
                            </div>
                            <div class="price">$150</div>
                            <a href="#" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Buy Course</span><i class="bx bx-paper-plane icon-arrow after"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="courses-details-image text-center">
                        <img src="assets/img/courses/3.jpg" alt="image">
                    </div>
                    <div class="courses-details-desc">
                        <h3>Description</h3>
                        <p><strong>Hi! Welcome to Photography Crash Course for Photographer, the only course you need to become a BI Analyst.</strong></p>
                        <p>Here are some more details of what you get with The Business Intelligence Analyst Course:</p>
                        <ul class="description-features-list">
                            <li><strong>Introduction to Data and Data Science</strong> – Make sense of terms like business intelligence, traditional and big data, traditional statistical methods, machine learning, predictive analytics, supervised learning, unsupervised learning, reinforcement learning, and many more;</li>
                            <li><strong>Database theory</strong> – Before you start using SQL, it is highly beneficial to learn about the underlying database theory and acquire an understanding of why databases are created and how they can help us manage data;</li>
                            <li><strong>SQL</strong> – when you can work with SQL, it means you don’t have to rely on others sending you data and executing queries for you. You can do that on your own. This allows you to be independent and dig deeper into the data to obtain the answers to questions that might improve the way your company does its business;</li>
                        </ul>
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
