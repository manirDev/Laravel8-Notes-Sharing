@extends('layouts.adminHome')

@section('title', 'Setting Edit')
@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
@endsection
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
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Setting Form </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin_setting_update')}}" role="form" id="quickForm" method="Post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

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
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Edit Product</button>
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

@endsection
