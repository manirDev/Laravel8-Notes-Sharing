@extends('layouts.adminV1Home')

@section('title', 'Admine Gettir')

@section('cssx')
    <style>
        table {
            display: block;
            overflow-x: auto;
            white-space: nowrap;
        }
    </style>
@endsection

@section('jsx')
    <script>
        $(document).ready(function() {
            $('#example2').DataTable( {
                "scrollX": true
            } );
        } );
    </script>
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Messages</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Messages list</h3> <br><br>
            @include('home.flash-message')
        </div>
        <div class="card-body">

            <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Admin note</th>
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
                            {{ $rs->name}}
                        </td>
                        <td>{{ $rs->email}}</td>
                        <td>{{ $rs->phone}}</td>
                        <td>{{ $rs->subject}}</td>
                        <td>{{ $rs->message}}</td>
                        <td>{{ $rs->note}}</td>
                        <td>{{ $rs->status}}</td>
                        <td>
                            <a href="{{route('admin_message_edit', ['id' => $rs->id]) }}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=800 height=600')" >
                                <i class="fas fa-edit p-2 text-info" style="font-size: 24px"></i>
                            </a>
                        </td>
                        <td><a href="{{route('admin_message_delete', ['id' => $rs->id]) }}" onclick="return confirm('Delete! Are you sure?')" ><i class="fas fa-trash p-2 text-danger" style="font-size: 24px"></i></a></td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->

        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

@endsection
