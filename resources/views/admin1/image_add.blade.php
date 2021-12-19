@extends('layouts.adminV1Home')

@section('title', 'Admine Gettir')

@section('content')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Image add</li>
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
                            <h3 class="card-title">{{$data->title}} Gallery </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                    </div>
                    <!-- /.card -->
                </div>

                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form action="{{route('admin_image_store', ['content_id'=>$data->id])}}" role="form" id="quickForm" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                <label for="exampleInputPassword1">Title</label>
                                <input type="text" name="title" class="form-control" id="exampleInputPassword1" >
                            </div>

                            <div class="form-group">
                                <label for="exampleInputPassword1">Image</label>
                                <input type="file" name="image" class="form-control" >
                            </div>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add Image</button>
                        </div>
                    </form>
                </div>

                <div class="col-md-6">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Content Id</th>
                            <th>Title</th>
                            <th>Image</th>
                            <th>Delete</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($images as $rs)

                            <tr>
                                <td>{{ $rs->id }}</td>
                                <td>{{ $rs->content_id}}</td>
                                <td>{{ $rs->title}}</td>
                                <td>
                                    @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" height="30" >
                                    @endif
                                </td>


                                <td><a href="{{route('admin_content_delete', ['id' => $rs->id, 'content_id'=>$data->id]) }}" onclick="return confirm('Delete! Are you sure?')" > <i class="fas fa-trash p-2 text-danger" style="font-size: 24px"></i> </a></td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

@endsection
