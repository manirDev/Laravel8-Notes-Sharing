@extends('layouts.adminHome')

@section('title', 'Admine Gettir')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Setting Edit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Setting edit</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row mt-3">
                <div class="col-lg-4">
                    <div class="card profile-card-2">
                        <div class="card-img-block">
                            <img class="img-fluid" src="https://via.placeholder.com/800x500" alt="Card image cap">
                        </div>
                        <div class="card-body pt-5">
                            <img src="https://via.placeholder.com/110x110" alt="profile-image" class="profile">
                            <h5 class="card-title">
                                @auth
                                    <a href="#" class="d-block">{{Auth::user()->name}}</a>

                                @endauth
                            </h5>
                            <h6>
                                @auth
                                    <a href="#" class="d-block">{{Auth::user()->email}}</a>

                                @endauth
                            </h6>
                            <br>
                            <hr>
                            <p class="card-text">
                                I'm a Self-thaught Front-end Developer and friendly with Back-End Development.
                                I Spend most of time on learning more about front-end and back-end development
                            </p>
                            <div class="icon-block">
                                <a href="javascript:void();"><i class="fa fa-facebook bg-facebook text-white"></i></a>
                                <a href="javascript:void();"> <i class="fa fa-twitter bg-twitter text-white"></i></a>
                                <a href="javascript:void();"> <i class="fa fa-google-plus bg-google-plus text-white"></i></a>
                            </div>
                        </div>

                        <h5 class="mt-2 mb-3" style="margin-left: 25px;"><span class="fa fa-clock-o ion-clock"></span> Recent Activity</h5>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <tbody>
                                <tr>
                                    <td>
                                        <strong>Abby</strong> joined ACME Project Team in <strong>`Collaboration`</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Gary</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Kensington</strong> deleted MyBoard3 in <strong>`Discussions`</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>John</strong> deleted My Board1 in <strong>`Discussions`</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <strong>Skell</strong> deleted his post Look at Why this is.. in <strong>`Discussions`</strong>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-tabs-primary top-icon nav-justified">
                                <li class="nav-item">
                                    <a href="javascript:void();" data-target="#profile" data-toggle="pill" class="nav-link active"><i class="icon-user"></i> <span class="hidden-xs">General</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void();" data-target="#messages" data-toggle="pill" class="nav-link"><i class="icon-envelope-open"></i> <span class="hidden-xs">Smtp Email</span></a>
                                </li>
                                <li class="nav-item">
                                    <a href="javascript:void();" data-target="#edit" data-toggle="pill" class="nav-link"><i class="icon-note"></i> <span class="hidden-xs">Social Media</span></a>
                                </li>
                            </ul>
                            <form action="{{route('admin_setting_update')}}" role="form" id="quickForm" method="Post" enctype="multipart/form-data">
                                @csrf
                            <div class="tab-content p-3">
                                <div class="tab-pane active" id="profile">
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
                                <div class="tab-pane" id="messages">
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
                                <div class="tab-pane" id="edit">
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
                                                <label for="">Aboutus</label>
                                                <textarea id="summernote" name="aboutus"></textarea>
                                                <script>
                                                    $('#summernote').summernote({

                                                    });
                                                </script>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Contact</label>
                                                <textarea id="Csummernote" name="contact"></textarea>
                                                <script>
                                                    $('#Csummernote').summernote({

                                                    });
                                                </script>
                                            </div>
                                            <div class="form-group">
                                                <label for="">References</label>
                                                <textarea id="Rsummernote" name="references"></textarea>
                                                <script>
                                                    $('#Rsummernote').summernote({

                                                    });
                                                </script>
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
                            </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Edit Settings</button>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
