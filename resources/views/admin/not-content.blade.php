
@extends('layouts.adminHome')

@section('title', 'Note Content')

@section('cssx')
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Data</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('admin_home')}}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Not-Content</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                <a href="{{route('admin_content_add')}}"><button type="button" class="btn  btn-primary">Add a Note</button></a>
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Title</th>
                        <th>Keywords</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Gallery</th>
                        <th>PDF-File</th>
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
                        <td>
                            {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title) }}
                        </td>
                        <td>{{ $rs->title}}</td>
                        <td>{{ $rs->keywords}}</td>
                        <td>{{ $rs->description}}</td>
                        <td>
                            <div class="p-2">
                                @if($rs->image)
                                    <img src="{{Storage::url($rs->image)}}" width="50" height="50" style="border-radius: 10px;" >
                                @endif
                            </div>
                        </td>
                        <td>
                            <a href="{{route('admin_image_add', ['content_id' => $rs->id]) }}" >
                                <i class="fadeIn animated bx bx-images p-2 text-info" style="font-size: 32px"></i>
                            </a>
                        </td>
                        <td>
                            @if($rs->file)
                                <a href="{{Storage::url($rs->file)}}" target="_blank">
                                    <i class="bx bxs-file-pdf p2" style="font-size: 32px"><span style="font-size: 16px">{{$rs->title}}</span></i>

                                </a>
                            @endif
                        </td>
                        <td>{{ $rs->slug}}</td>
                        <td>{{ $rs->status}}</td>
                        <td>
                            <a href="{{route('admin_content_edit', ['id' => $rs->id]) }}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=800 height=600')" >
                                <i class="bx bx-edit p-2 text-info" style="font-size: 24px"></i>
                            </a>
                        </td>
                        <td>
                            <a href="{{route('admin_content_delete', ['id' => $rs->id]) }}" onclick="return confirm('Delete! Are you sure?')" >
                                <i class="fadeIn animated bx bx-trash p-2 text-danger" style="font-size: 24px"></i>
                            </a>
                        </td>

                    </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <a href="{{route('admin_content_add')}}"><button type="button" class="btn  btn-primary">Add Not-Content</button></a>
        </div>
        <!-- /.card-footer-->
    </div>

@endsection



@section('jsz')
    <!-- <script>
		$(document).ready(function() {
			$('#example').DataTable(

			  );
			$("div.dataTables_filter input").focus();
		  } );
	</script> -->


    <script>

        $(document).ready(function() {
            $('#example').DataTable()
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
