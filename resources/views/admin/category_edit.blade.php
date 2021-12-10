@extends('layouts.adminHome')

@section('title', 'Admine Gettir')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Category Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Category edit</li>
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
                            <h3 class="card-title">Category Form </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin_category_update', ['id'=>$data->id])}}" role="form" id="quickForm" method="Post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Parents</label>

                                    <select class="form-control select2" name="parent_id" style="width: 100%;">

                                        <option value="0">Main Category</option>
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}" @if($rs->id==$data->parent_id) selected="selected" @endif>{{$rs->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Title</label>
                                    <input type="text" name="title" class="form-control" value="{{$data->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Keywords</label>
                                    <input type="text" name="keywords" class="form-control"  value="{{$data->keywords}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Description</label>
                                    <input type="text" name="description" class="form-control"  value="{{$data->description}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Slug</label>
                                    <input type="text" name="slug" class="form-control"  value="{{$data->slug}}">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control select2" name="status" style="width: 100%;">
                                        <option selected="selected">{{$data->status}}</option>
                                        <option>False</option>
                                        <option>True</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
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
