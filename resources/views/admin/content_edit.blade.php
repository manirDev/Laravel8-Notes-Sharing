@extends('layouts.adminHome')

@section('title', 'Content Edit')

@section('content')

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Not-Content</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('admin_home')}}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit  {{$data->title}}</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <button type="button" class="btn btn-light">Settings</button>
                <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                    <a class="dropdown-item" href="javascript:;">Another action</a>
                    <a class="dropdown-item" href="javascript:;">Something else here</a>
                    <div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
                </div>
            </div>
        </div>
    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body p-4">
            <h5 class="card-title">Edit Content of the {{$data->title}} </h5>
            <hr/>
            <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin_content_update', ['id'=>$data->id])}}" role="form" id="quickForm" method="Post" enctype="multipart/form-data">
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
                                            <input id="fancy-file-upload" type="file" name="file" value="{{$data->image}}" multiple>

                                        </div>
                                        @if($data->image)
                                            <img src="{{Storage::url($data->image)}}" width="60" height="60" >
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
                                    <textarea id="mytextarea" name="detail">{{$data->detail}}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Slug</label>
                                    <input type="text" name="slug" value="{{$data->slug}}" class="form-control" id="inputProductTitle" >
                                </div>
                                <div class="mb-3">
                                    <label for="inputVendor" class="form-label">Vendor</label>
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

    <script>

        $(document).ready(function() {
            $('#example').DataTable({
                lengthChange: false,
                buttons: [ 'copy', 'excel', 'pdf', 'print']
            })
        });

    </script>


    <script>
        $(document).ready(function() {
            var table = $('#example2').DataTable( {
                lengthChange: false,
                buttons: [ 'copy', 'excel', 'pdf', 'print']
            } );

            table.buttons().container()
                .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
        } );
    </script>

    <script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin">
    </script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>

@endsection
