<!--favicon-->
<link rel="icon" href="{{asset('assets')}}/Ahome/images/favicon-32x32.png" type="image/png" />
<!--plugins-->
<!-- Bootstrap CSS -->
<link href="{{asset('assets')}}/Ahome/css/bootstrap.min.css" rel="stylesheet">


<!-- Main content -->

<body>
<h5 class="card-title p-4">Review from {{$data->user->name}} </h5>

<div class="card" >
    <div class="card-body">
        @include('home.flash-message')
        <div class="table-responsive">
            <form action="{{route('admin_review_update', ['id'=>$data->id])}}" role="form" id="quickForm" method="Post">
                @csrf
                <div class="card-body">
                    <table id="example2" class="table table-striped table-bordered">

                        <tr>
                            <th>Id</th><td>{{ $data->id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th><td>{{ $data->user->name }}</td>
                        </tr>
                        <tr>
                            <th>Not-Content</th><td>{{ $data->content->title }}</td>
                        </tr>
                        <tr>
                            <th>Subject</th><td>{{ $data->subject }}</td>
                        </tr>
                        <tr>
                            <th>Review</th><td>{{ $data->review }}</td>
                        </tr>
                        <tr>
                            <th>Rate</th><td>{{ $data->rate }}</td>
                        </tr>
                        <tr>
                            <th>IP </th><td>{{ $data->ip }}</td>
                        </tr>
                        <tr>
                            <th>Created Date</th><td>{{ $data->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Updated Date</th><td>{{ $data->updated_at}}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                               <select name="status">
                                   <option selected>{{$data->status}}</option>
                                   <option>True</option>
                                   <option>False</option>
                               </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update Review</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>

