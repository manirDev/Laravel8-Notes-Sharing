@extends('layouts.home')

@section('title', 'User-Not-Content-Edit')
<style>
    .ck-editor__editable {min-height: 100px; color: black;}
</style>
@section('hero')

    <div class="page-title-area jarallax" data-jarallax='{"speed": 0.3}' style="background-image:url({{asset('assets')}}/fhome/img/main-banner3.jpg);max-height: 50px">
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>My Account</li>
                </ul>
                <h2>My Account</h2>
            </div>
        </div>
    </div>

@endsection



@section('content')

    <section class="my-account-area ptb-100">
        <div class="container">
            <div class="row">

                <div class="myAccount-navigation col-2">
                    @include('home.user-header')
                </div>
                <div class="myAccount-content col-10">

                    <form action="{{route('user_content_update', ['id'=>$data->id])}}" role="form" id="quickForm" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">

                                <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label">Category</label>
                                    <select class="form-control select2" name="category_id" style="width: 100%;">

                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}" @if($rs->id==$data->category_id) selected="selected" @endif>
                                                {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Title</label>
                                    <input type="text" name="title" value="{{$data->title}}" class="form-control" id="inputProductTitle" >
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Keywords</label>
                                    <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" id="inputProductTitle" >
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" value="" id="inputProductDescription" rows="3">{{$data->description}}</textarea>
                                </div>
                                <div class="mb-3" >
                                    <label for="inputProductDescription" class="form-label">Content Image File </label> <br>
                                    <div class="card">
                                        <div class="card-body">
                                            <input id="fancy-file-upload" type="file" name="image" value="{{$data->image}}" multiple>

                                        </div>
                                        @if($data->image)
                                            <img src="{{Storage::url($data->image)}}"  width="70" height="70" style="border-radius: 10px;" >
                                        @endif
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Content Pdf File </label> <br>
                                    <div class="card">
                                        <div class="card-body">
                                            <input id="fancy-file-upload" type="file" name="file" value="{{$data->file}}" multiple>
                                        </div>
                                        @if($data->file)
                                            <a href="{{Storage::url($data->file)}}" target="_blank">
                                                <i class="bx bxs-file-pdf p2" style="font-size: 32px"><span style="font-size: 16px">{{$data->title}}</span></i>

                                            </a>
                                        @endif
                                    </div>
                                </div>
                                <div class="mb-3">

                                    <label for="inputProductDescription" class="form-label">Detail</label>
                                    <textarea id="editor2" name="detail">{{$data->detail}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Slug</label>
                                    <input type="text" name="slug" value="{{$data->slug}}" class="form-control" id="inputProductTitle" >
                                </div>
                                <div class="mb-3">
                                    <label for="inputVendor" class="form-label">Status</label>
                                    <select class="form-control select2" id="inputProductType" name="status" style="width: 100%;">
                                        <option selected="selected">{{$data->status}}</option>
                                        <option>False</option>
                                        <option>True</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save Not-Content</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

@endsection

@section('jsz')
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor2' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );

    </script>
@endsection
