<!--favicon-->
<link rel="icon" href="{{asset('assets')}}/Ahome/images/favicon-32x32.png" type="image/png" />
<!--plugins-->
<!-- Bootstrap CSS -->
<link href="{{asset('assets')}}/Ahome/css/bootstrap.min.css" rel="stylesheet">

<link href="{{asset('assets')}}/Ahome/css/icons.css" rel="stylesheet">

<!-- Main content -->

<body>
<h5 class="card-title p-4">Role of user/admin {{$data->name}} </h5>

<div class="card" >
    <div class="card-body">
        @include('home.flash-message')
        <div class="table-responsive">


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
                            <th>Roles</th>
                            <td>
                               <table>
                                   @foreach($data->roles as $row)
                                       <tr>
                                           <td>{{$row->name}}</td>
                                           <td>
                                               <a href="{{route('admin_user_role_delete', ['userid'=>$data->id, 'roleid'=>$row->id])}}" onclick="return confirm('Delete! Are you sure?')" >
                                                     <i class="bx bx-trash p-2 text-danger" style="font-size: 24px"></i>
                                               </a>
                                           </td>
                                       </tr>
                                   @endforeach
                               </table>
                            </td>
                        </tr>
                            <tr>
                                <th>Add Role</th>
                                <td>
                                    <form action="{{route('admin_user_role_add', ['id'=>$data->id])}}"  id="quickForm" method="Post">
                                        @csrf
                                        <select  name="roleid">
                                            @foreach($datalist as $rs)
                                                <option value="{{$rs->id}}" >
                                                    {{$rs->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                        <button type="submit" class="btn btn-primary">Add Role</button>
                                    </form>
                                </td>
                                </tr>
                    </table>
                </div>
        </div>
    </div>
</div>
</body>

