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
    <div class="container">
        <div class="row">

            <div class="myAccount-navigation col-2">
                @include('home.user-header')
            </div>
            <div class="myAccount-content col-lg-10">

                <div class="recent-orders-table table-responsive">
                    <table id="example2" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Keywords</th>
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
                                <td>
                                    <div class="p-2">
                                        @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}"   width="50" height="50" style="border-radius: 10px;width:50px !important; height:50px !important;" >
                                        @endif
                                    </div>
                                </td>
                                <td>
                                    <a href="{{route('user_image_add', ['content_id' => $rs->id]) }}" >
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
                                    <a href="{{route('user_content_edit', ['id' => $rs->id]) }}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=800 height=600')" >
                                        <i class="bx bx-edit p-2 text-info" style="font-size: 24px"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{route('user_content_delete', ['id' => $rs->id]) }}" onclick="return confirm('Delete! Are you sure?')" >
                                        <i class="fadeIn animated bx bx-trash p-2 text-danger" style="font-size: 24px"></i>
                                    </a>
                                </td>

                            </tr>
                        @endforeach


                        </tbody>

                    </table>

                </div>
                <div class="card-footer">
                    <a href="{{route('user_content_add')}}"><button type="button" class="btn  btn-primary">Add Not-Content</button></a>
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
