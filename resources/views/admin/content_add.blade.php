@extends('layouts.adminHome')

@section('title', 'Admine Gettir')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Content Add</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Content add</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Not-Content Form </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin_content_store')}}" role="form" id="quickForm" method="Post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Categories</label>

                                    <select class="form-control select2" name="category_id" style="width: 100%;">

                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}">{{$rs->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputPassword1" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Keywords</label>
                                    <input type="text" name="keywords" class="form-control" id="exampleInputPassword1" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <input type="text" name="description" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Image</label>
                                    <input type="file" name="image" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label for="">Detail</label>
                                    <textarea id="summernote" name="detail"></textarea>
                                    <script>
                                        $('#summernote').summernote({

                                        });
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Slug</label>
                                    <input type="text" name="slug" class="form-control" id="exampleInputPassword1" >
                                </div>

                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control select2" name="status" style="width: 100%;">
                                        <option selected="selected">False</option>
                                        <option>True</option>

                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Add Product</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection
