@extends('layouts.adminHome')

@section('title', $setting->title.'-User Edit')

@section('description')
    {{$setting->description}}
@endsection

@section('keywords', $setting->keywords)

@section('content')

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Users</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{route('admin_home')}}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit User {{$data->name}}</li>
                </ol>
            </nav>
        </div>

    </div>
    <!--end breadcrumb-->

    <div class="card">
        <div class="card-body p-4">
            <h5 class="card-title">Information of user {{$data->name}} </h5>
            <hr/>
            <div class="form-body mt-4">
                <div class="row">
                    <form action="{{route('admin_user_update', ['id'=>$data->id])}}" role="form" id="quickForm" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Name</label>
                                    <input type="text" name="name" value="{{$data->name}}" class="form-control" id="inputProductTitle" >
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Email</label>
                                    <input type="text" name="email" value="{{$data->email}}" class="form-control" id="inputProductTitle" >
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Phone</label>
                                    <input type="text" name="phone" value="{{$data->phone}}" class="form-control" id="inputProductTitle" >
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Address</label>
                                    <input type="text" name="address" value="{{$data->address}}" class="form-control" id="inputProductTitle" >
                                </div>
                                <div class="mb-3" >
                                    <label for="inputProductDescription" class="form-label">User Image </label> <br>
                                    <div class="card">
                                        <div class="card-body">
                                            <input id="fancy-file-upload" type="file" name="image" value="{{$data->image}}" multiple>

                                        </div>
                                        @if($data->profile_photo_path)
                                            <img src="{{Storage::url($data->profile_photo_path)}}" width="100" height="100" style="border-radius: 10px;" >
                                        @endif
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save Information</button>
                        </div>
                    </form>
                </div><!--end row-->
            </div>
        </div>
    </div>
@endsection

@section('jsz')
    <script>
        $(document).ready(function () {
            $('#image-uploadify').imageuploadify();
        })
    </script>

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

    <script src='https://cdn.tiny.cloud/1/vdqx2klew412up5bcbpwivg1th6nrh3murc6maz8bukgos4v/tinymce/5/tinymce.min.js' referrerpolicy="origin">
    </script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>

@endsection
