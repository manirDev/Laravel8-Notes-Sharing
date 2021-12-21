@section('csz')
    <!--plugins-->
    <link href="{{asset('assets')}}/Ahome/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>

    <link href="{{asset('assets')}}/Ahome/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/Ahome/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

    <link href="{{asset('assets')}}/Ahome/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />


@endsection

@extends('layouts.home')

@section('title', 'User-Not-Content-Image-Add')



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
                <div class="myAccount-content col-10">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="border border-3 p-4 rounded">
                                <form action="{{route('user_image_store', ['content_id'=>$data->id])}}" role="form" id="quickForm" method="Post" enctype="multipart/form-data">
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
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-lg-10">
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
                                                        <img src="{{Storage::url($rs->image)}}" style="height: 30px;width: 30px" >
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{route('user_content_delete', ['id' => $rs->id, 'content_id'=>$data->id]) }}" onclick="return confirm('Delete! Are you sure?')" >
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
                    </div>
                    </div><!--end row-->

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

    <script src="{{asset('assets')}}/Ahome/plugins/Drag-And-Drop/dist/imageuploadify.min.js"></script>



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

    <script>
        $(document).ready(function () {
            $('#image-uploadify').imageuploadify();
        })
    </script>
@endsection

