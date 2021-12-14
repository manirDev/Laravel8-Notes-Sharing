@extends('layouts.adminHome')

@section('title', 'Admine Gettir')

@section('cssx')
<style>
    table {
        display: block;
        overflow-x: auto;
        white-space: nowrap;
    }
</style>
@endsection

@section('jsx')
<script>
    $(document).ready(function() {
        $('#example2').DataTable( {
            "scrollX": true
        } );
    } );
</script>
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Not-Content</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Not-Content list</h3> <br><br>
        </div>
        <div class="card-body">

            <table id="example2" class="table table-bordered table-hover" style="overflow: auto;">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>User Id</th>
                    <th>Category Id</th>
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
                        <td>{{ $rs->category_id}}</td>
                        <td>{{ $rs->user_id}}</td>
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
                        <td><a href="{{route('admin_content_edit', ['id' => $rs->id]) }}" >  <i class="fas fa-edit p-2 text-info" style="font-size: 24px"></i> </a></td>
                        <td><a href="{{route('admin_content_delete', ['id' => $rs->id]) }}" onclick="return confirm('Delete! Are you sure?')" > <i class="fas fa-trash p-2 text-danger" style="font-size: 24px"></i></a></td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <a href="{{route('admin_content_add')}}"><button type="button" class="btn  btn-primary">Add Content</button></a>
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

@endsection
