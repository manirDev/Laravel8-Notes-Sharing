@extends('layouts.adminHome')

@section('title', 'Users')

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
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <div class="btn-group">
                @include('home.flash-message')
            </div>
        </div>
    </div>


    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="users" class="table table-striped table-bordered" width="100%">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Roles</th>
                        <th colspan="2">Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($datalist as $rs)

                        <tr>
                            <td>{{ $rs->id }}</td>
                            <td>
                                @if($rs->profile_photo_path)
                                    <img src="{{Storage::url($rs->profile_photo_path)}}" height="50" style="border-radius: 10px;">
                                @endif
                            </td>
                            <td>{{ $rs->name}}</td>
                            <td>{{ $rs->email}}</td>
                            <td>{{ $rs->phone}}</td>
                            <td>{{ $rs->address}}</td>
                            <td>
                                @foreach($rs->roles as $row)
                                    {{$row->name}},
                                @endforeach
                                <a href="{{route('admin_user_roles', ['id' => $rs->id]) }}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=800 height=600')" >
                                    <i class="bx bx-plus-circle text-info" ></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('admin_user_edit', ['id' => $rs->id]) }}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=800 height=600')" >
                                    <i class="bx bx-edit p-2 text-info" style="font-size: 24px"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('admin_user_delete', ['id' => $rs->id]) }}" onclick="return confirm('Delete! Are you sure?')" >
                                    <i class="bx bx-trash p-2 text-danger" style="font-size: 24px"></i>
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
            <a href="{{route('admin_category_add')}}"><button type="button" class="btn  btn-primary">Add Category</button></a>
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

@section('jsz')


    <script>
        $(document).ready(function() {
            var table = $('#users').DataTable( {
                lengthChange: false,
                buttons: [ 'copy', 'excel', 'pdf', 'print']
            } );

            table.buttons().container()
                .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
        } );
    </script>
@endsection
