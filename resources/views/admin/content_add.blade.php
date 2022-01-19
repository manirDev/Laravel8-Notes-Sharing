@extends('layouts.adminHome')

@section('title', $setting->title.'-Note-Content Add')

@section('description')
    {{$setting->description}}
@endsection

@section('keywords', $setting->keywords)

@section('content')

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Note-Content</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('admin_home')}}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add a Note</li>
                </ol>
            </nav>
        </div>

    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body p-4">
            <h5 class="card-title">Add a Not Content </h5>
            <hr/>
            <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin_content_store')}}" role="form" id="quickForm" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">

                                <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label">Category</label>
                                    <select class="form-control select2" name="category_id" style="width: 100%;">


                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}">
                                                {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Title</label>
                                    <input type="text" name="title" class="form-control" id="inputProductTitle" >
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Keywords</label>
                                    <input type="text" name="keywords"  class="form-control" id="inputProductTitle" >
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" value="" id="inputProductDescription" rows="3"></textarea>
                                </div>
                                <div class="mb-3" >
                                    <label for="inputProductDescription" class="form-label">Content Image File </label> <br>
                                    <div class="card">
                                        <div class="card-body">
                                            <input id="fancy-file-upload" type="file" name="image"  multiple>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Content Pdf File </label> <br>
                                    <div class="card">
                                        <div class="card-body">
                                            <input id="fancy-file-upload" type="file" name="file"  multiple>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">

                                    <label for="inputProductDescription" class="form-label">Detail</label>
                                    <textarea id="mytextarea" name="detail"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Slug</label>
                                    <input type="text" name="slug"  class="form-control" id="inputProductTitle" >
                                </div>
                                <div class="mb-3">
                                    <label for="inputVendor" class="form-label">Status</label>
                                    <select class="form-control select2" id="inputProductType" name="status" style="width: 100%;">
                                        <option selected="selected">False</option>
                                        <option>True</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add Not-Content</button>
                        </div>
                    </form>
                </div><!--end row-->
            </div>
        </div>
    </div>
@endsection


@section('jsz')
    <script>
        $(document).ready(function () {
            $('#image-uploadify').imageuploadify();
        })
    </script>



    <script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin">
    </script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>

@endsection
