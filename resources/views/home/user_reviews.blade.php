@section('csz')
    <!--plugins-->
    <link href="{{asset('assets')}}/Ahome/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>

    <link href="{{asset('assets')}}/Ahome/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/Ahome/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />




@endsection

@extends('layouts.home')

@section('title', 'User-Not-Content')



@section('hero')

    <div class="page-title-area jarallax" data-jarallax='{"speed": 0.3}' style="background-image:url({{asset('assets')}}/fhome/img/main-banner3.jpg);max-height: 50px">
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li>My Account</li>
                </ul>
                <h2>My Account</h2>
            </div>
        </div>
    </div>

@endsection



@section('content')

<section class="my-account-area ptb-100">
    @include('home.flash-message')
    <div class="container">
        <div class="row">

            <div class="myAccount-navigation col-2">
                @include('home.user-header')
            </div>

            <div class="myAccount-content col-10">

                <div class="recent-orders-table table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Not-Content</th>
                            <th>Subject</th>
                            <th>Review</th>
                            <th>Rate</th>
                            <th>Status</th>
                            <th>Delete</th>

                        </tr>
                        </thead>
                        <tbody>


                        @foreach ($datalist as $rs)
                            <tr>
                                <td>{{ $rs->id }}</td>
                                <td>
                                    <a href="{{route('notContent', ['id'=>$rs->content->id, 'slug'=>$rs->content->slug])}}" target="_blank">
                                        {{$rs->content->title}}
                                    </a>
                                </td>
                                <td>{{ $rs->subject}}</td>
                                <td>{{ $rs->review}}</td>
                                <td>{{ $rs->rate}}</td>
                                <td>{{ $rs->status}}</td>
                                <td>
                                    <a href="{{route('user_review_delete', ['id' => $rs->id]) }}" onclick="return confirm('Delete! Are you sure?')" >
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
    </div>
</section>


@endsection

@section('jsz')



    <!-- Bootstrap JS -->
    <script src="{{asset('assets')}}/Ahome/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="{{asset('assets')}}/Ahome/js/jquery.min.js"></script>
    <script src="{{asset('assets')}}/Ahome/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>

    <script src="{{asset('assets')}}/Ahome/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('assets')}}/Ahome/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>

    <script src="{{asset('assets')}}/Ahome/js/index.js"></script>
    <!--app JS-->
    <script src="{{asset('assets')}}/Ahome/js/app.js"></script>

    <script src="{{asset('assets')}}/Ahome/js/pace.min.js"></script>





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
