<!--favicon-->
<link rel="icon" href="{{asset('assets')}}/Ahome/images/favicon-32x32.png" type="image/png" />
<!--plugins-->
<!-- Bootstrap CSS -->
<link href="{{asset('assets')}}/Ahome/css/bootstrap.min.css" rel="stylesheet">


<!-- Main content -->

<body>
<h5 class="card-title p-4">Message from {{$data->name}} </h5>

<div class="card" >
    <div class="card-body">
        @include('home.flash-message')
        <div class="table-responsive">
            <form action="{{route('admin_message_update', ['id'=>$data->id])}}" role="form" id="quickForm" method="Post">
                @csrf
                <div class="card-body">
                    <table id="example2" class="table table-striped table-bordered">

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
    </div>
</div>
</body>

