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


<!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Message List </h3>
                            @include('home.flash-message')
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin_message_update', ['id'=>$data->id])}}" role="form" id="quickForm" method="Post">
                            @csrf
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">

                                    <tr>
                                        <th>Id</th><td>{{ $data->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Name</th><td>{{ $data->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th><td>{{ $data->email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th><td>{{ $data->phone }}</td>
                                    </tr>
                                    <tr>
                                        <th>Subject</th><td>{{ $data->subject }}</td>
                                    </tr>
                                    <tr>
                                        <th>Message</th><td>{{ $data->message }}</td>
                                    </tr>
                                    <tr>
                                        <th>Admin Note</th>
                                        <td>
                                            <textarea name="note" class="form-control" id="message" cols="20" rows="3">{{$data->note}}</textarea>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update Message</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

