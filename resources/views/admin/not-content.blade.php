@extends('layouts.adminHome')

@section('title', 'Admine Gettir')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Categories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Category</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Category list</h3> <br><br>
            <a href="{{route('admin_content_add')}}"><button type="button" class="btn  btn-primary">Add Category</button></a>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fas fa-times"></i></button>
            </div>
        </div>
        <div class="card-body">

            <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>User Id</th>
                    <th>Category Id</th>
                    <th>Title</th>
                    <th>Keywords</th>
                    <th>Description</th>
                    <th>Image</th>
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
                        <td>{{ $rs->category_id}}</td>
                        <td>{{ $rs->user_id}}</td>
                        <td>{{ $rs->title}}</td>
                        <td>{{ $rs->keywords}}</td>
                        <td>{{ $rs->description}}</td>
                        <td>
                            @if($rs->image)
                                <img src="{{Storage::url($rs->image)}}" height="30" >
                            @endif
                        </td>
{{--                        <td><a href="{{route('admin_image_add', ['product_id' => $rs->id]) }}" >  <i class="nav-icon fas fa-images"></i> </a></td>--}}
                        <td>{{ $rs->slug}}</td>
                        <td>{{ $rs->status}}</td>
                        <td><a href="{{route('admin_content_edit', ['id' => $rs->id]) }}" >  <i class="nav-icon fas fa-edit"></i> </a></td>
                        <td><a href="{{route('admin_content_delete', ['id' => $rs->id]) }}" onclick="return confirm('Delete! Are you sure?')" > <i class="nav-icon fas fa-trash"></i> </a></td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            Footer
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

@endsection