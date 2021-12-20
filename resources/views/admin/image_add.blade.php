@extends('layouts.adminHome')

@section('title', 'Admine Gettir')

@section('content')

@section('content')

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">eCommerce</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add New Product</li>
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
            <h5 class="card-title">Add New Image</h5>
            <hr/>
            <div class="form-body mt-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="border border-3 p-4 rounded">
                            <form action="{{route('admin_image_store', ['content_id'=>$data->id])}}" role="form" id="quickForm" method="Post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label">Image Title</label>
                                    <input type="text" name="title" class="form-control" id="inputProductTitle" placeholder="Enter product title">
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Content Images</label>
                                    <input id="image-uploadify" type="file" name="image" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                                </div>
                                <br>
                                <br>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Save Image</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="border border-3 p-4 rounded">
                            <div class="row g-3">
                                <table id="example2" class="table table-striped table-bordered" width="100%">
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
                                            <td>
                                                <a href="{{route('admin_content_delete', ['id' => $rs->id, 'content_id'=>$data->id]) }}" onclick="return confirm('Delete! Are you sure?')" >
                                                    <i class="bx bx-trash p-2 text-danger" style="font-size: 24px"></i>
                                                </a>
                                            </td>
                                        </tr>

                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
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
@endsection
