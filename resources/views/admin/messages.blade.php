@extends('layouts.adminHome')

@section('title', 'Admine Gettir')

@section('cssx')

@endsection

@section('jsx')

@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Tables</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Data Table</li>
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


    <div class="card">
        <div class="card-body">
            @include('home.flash-message')
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Admin note</th>
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
                                {{ $rs->name}}
                            </td>
                            <td>{{ $rs->email}}</td>
                            <td>{{ $rs->phone}}</td>
                            <td>{{ $rs->subject}}</td>
                            <td>{{ $rs->message}}</td>
                            <td>{{ $rs->note}}</td>
                            <td>{{ $rs->status}}</td>
                            <td>
                                <a href="{{route('admin_message_edit', ['id' => $rs->id]) }}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=800 height=600')" >
                                    <i class="bx bx-edit p-2 text-info" style="font-size: 24px"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('admin_message_delete', ['id' => $rs->id]) }}" onclick="return confirm('Delete! Are you sure?')" >
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
