@extends('layouts.adminHome')

@section('title', 'Reviews')

@section('cssx')

@endsection

@section('jsx')

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
                    <li class="breadcrumb-item active" aria-current="page">Reviews</li>
                </ol>
            </nav>
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
                        <th>Not-Content</th>
                        <th>Subject</th>
                        <th>Review</th>
                        <th>Rate</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Edit</th>
                        <th>Delete</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($datalist as $rs)

                        <tr>
                            <td>{{ $rs->id }}</td>
                            <td>{{ $rs->user->name }}</td>
                            <td>
                                <a href="{{route('notContent', ['id'=>$rs->content->id, 'slug'=>$rs->content->slug])}}" target="_blank">
                                    {{$rs->content->title}}
                                </a>
                            </td>
                            <td>{{ $rs->subject}}</td>
                            <td>{{ $rs->review}}</td>
                            <td>{{ $rs->rate}}</td>
                            <td>{{ $rs->status}}</td>
                            <td>{{ $rs->created_at}}</td>
                            <td>
                                <a href="{{route('admin_review_show', ['id' => $rs->id]) }}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=800 height=600')" >
                                    <i class="fadeIn animated bx bx-edit p-2 text-info" style="font-size: 24px"></i>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('admin_review_delete', ['id' => $rs->id]) }}" onclick="return confirm('Delete! Are you sure?')" >
                                    <i class="fadeIn animated bx bx-trash p-2 text-danger" style="font-size: 24px"></i>
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
