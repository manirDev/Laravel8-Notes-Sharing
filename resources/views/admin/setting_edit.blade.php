@extends('layouts.adminHome')

@section('title', 'Admine Gettir')
@section('jsx')
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>
@endsection
<style>
    .ck-editor__editable {min-height: 100px; color: black;}
</style>
@section('csx')
    <link href="{{asset('assets')}}/css/pace.min.css" rel="stylesheet"/>
    <script src="{{asset('assets')}}/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="{{asset('assets')}}/images/favicon.ico" type="image/x-icon">
    <!-- Vector CSS -->
    <link href="{{asset('assets')}}/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
    <!-- simplebar CSS-->
    <link href="{{asset('assets')}}/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="{{asset('assets')}}/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="{{asset('assets')}}/css/animate.css" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="{{asset('assets')}}/css/icons.css" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="{{asset('assets')}}/css/sidebar-menu.css" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="{{asset('assets')}}/css/app-style.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

    <link href="{{asset('assets')}}/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
@endsection
@section('content')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Settings</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('admin_home')}}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit  Settings</li>
                </ol>
            </nav>
        </div>
    </div>

    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body p-4">
            <h5 class="card-title">Settings</h5>
            <hr/>
            <div class="form-body mt-4">
                <div class="row">
                                <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                                    <li class="nav-item">
                                        <a href="javascript:void();" data-target="#general" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs" style="color: #ccc; font-size: 16px">General</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void();" data-target="#smtp" data-toggle="pill" class="nav-link"><i class="icon-envelope-open"></i> <span class="hidden-xs" style="color: #ccc; font-size: 16px">Smtp Email</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void();" data-target="#social-medial" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs" style="color: #ccc; font-size: 16px">Social Media</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void();" data-target="#aboutus" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs" style="color: #ccc; font-size: 16px"> About Us</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void();" data-target="#contact" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs" style="color: #ccc; font-size: 16px"> Contact </span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void();" data-target="#reference" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs" style="color: #ccc; font-size: 16px"> References </span></a>
                                    </li>
                                </ul>
                                <form action="{{route('admin_setting_update')}}" role="form" id="quickForm" method="Post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="tab-content p-3">
                                        <div class="tab-pane active" id="general">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">ID</label>
                                                <input type="text" name="id" value="{{$data->id}}" class="form-control" id="exampleInputPassword1" >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Title</label>
                                                <input type="text" name="title" value="{{$data->title}}" class="form-control" id="exampleInputPassword1" >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Keywords</label>
                                                <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" id="exampleInputPassword1" >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Description</label>
                                                <input type="text" name="description" value="{{$data->description}}" class="form-control" id="exampleInputPassword1">
                                            </div>

                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Company</label>
                                                <input type="text" name="company" value="{{$data->company}}" class="form-control" id="exampleInputPassword1" >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Address</label>
                                                <input type="text" name="address" value="{{$data->address}}" class="form-control" id="exampleInputPassword1" >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Phone</label>
                                                <input type="text" name="phone" value="{{$data->phone}}" class="form-control" id="exampleInputPassword1" >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Fax</label>
                                                <input type="number" name="fax" value="{{$data->fax}}" class="form-control" id="exampleInputPassword1" >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Email</label>
                                                <input type="email" name="email" value="{{$data->email}}" class="form-control" id="exampleInputPassword1" >
                                            </div>
                                            <!--/row-->
                                        </div>
                                        <div class="tab-pane" id="smtp">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Smtpserver</label>
                                                <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control" id="exampleInputPassword1" >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Stpemail</label>
                                                <input type="email" name="smtpemail" value="{{$data->smtpemail}}" class="form-control" id="exampleInputPassword1" >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Smtppassword</label>
                                                <input type="type" name="smtppassword" value="{{$data->smtppassword}}" class="form-control" id="exampleInputPassword1" >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Smtpport</label>
                                                <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control" id="exampleInputPassword1" >
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="social-medial">
                                            <!-- form start -->


                                            <div class="card-body">


                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Facebook</label>
                                                    <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control" id="exampleInputPassword1" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">instagram</label>
                                                    <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control" id="exampleInputPassword1" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Twitter</label>
                                                    <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control" id="exampleInputPassword1" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Youtube</label>
                                                    <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control" id="exampleInputPassword1" >
                                                </div>
                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control select2" name="status" style="width: 100%;">
                                                        <option selected="selected">{{$data->status}}</option>
                                                        <option>False</option>
                                                        <option>True</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->

                                        </div>

                                        <div class="tab-pane" id="aboutus">
                                            <!-- form start -->


                                            <div class="card-body">
                                                <label for="">Aboutus</label>
                                                <textarea id="editor1" name="aboutus" >{{$data->aboutus}}</textarea>
                                                <script>
                                                    ClassicEditor
                                                        .create( document.querySelector( '#editor1' ) )
                                                        .then( editor => {
                                                            console.log( editor );
                                                        } )
                                                        .catch( error => {
                                                            console.error( error );
                                                        } );

                                                </script>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="tab-pane" id="contact">
                                            <!-- form start -->
                                            <div class="form-group">
                                                <label for="">Contact</label>
                                                <textarea id="editor2" name="contact" >{{$data->contact}}</textarea>
                                                <script>
                                                    ClassicEditor
                                                        .create( document.querySelector( '#editor2' ) )
                                                        .then( editor => {
                                                            console.log( editor );
                                                        } )
                                                        .catch( error => {
                                                            console.error( error );
                                                        } );

                                                </script>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="reference">
                                            <!-- form start -->
                                            <div class="form-group">
                                                <label for="">References</label>
                                                <textarea id="editor3" name="references" >{{$data->references}}</textarea>
                                                <script>
                                                    ClassicEditor
                                                        .create( document.querySelector( '#editor3' ) )
                                                        .then( editor => {
                                                            console.log( editor );
                                                        } )
                                                        .catch( error => {
                                                            console.error( error );
                                                        } );

                                                </script>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Save Settings</button>
                                    </div>
                                </form>
                    <!--row end--->
                </div>
            </div>
        </div>
    </div>


@endsection

@section('jsz')
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assets')}}/js/jquery.min.js"></script>
    <script src="{{asset('assets')}}/js/popper.min.js"></script>
    <script src="{{asset('assets')}}/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="{{asset('assets')}}/plugins/simplebar/js/simplebar.js"></script>
    <!-- sidebar-menu js -->

    <!-- loader scripts -->
    <script src="{{asset('assets')}}/js/jquery.loading-indicator.js"></script>
    <!-- Custom scripts -->
    <script src="{{asset('assets')}}/js/app-script.js"></script>
    <!-- Chart js -->


    <!-- Index js -->
    <script src="{{asset('assets')}}/js/index.js"></script>




@endsection
