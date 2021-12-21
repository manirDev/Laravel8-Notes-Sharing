<thead>
<tr>
    <th>Id</th>
    <th>Image</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Roles</th>
    <th colspan="2">Actions</th>

</tr>
</thead>
<tbody>
@foreach ($datalist as $rs)

    <tr>
        <td>{{ $rs->id }}</td>
        <td>
            @if($rs->profile_photo_path)
                <img src="{{Storage::url($rs->profile_photo_path)}}" height="50" style="border-radius: 10px;">
            @endif
        </td>
        <td>{{ $rs->name}}</td>
        <td>{{ $rs->email}}</td>
        <td>{{ $rs->phone}}</td>
        <td>{{ $rs->address}}</td>
        <td>
            @foreach($rs->roles as $row)
                {{$row->name}} |
            @endforeach
            <a href="{{route('admin_user_roles', ['id' => $rs->id]) }}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=800 height=600')" >
                <i class="bx bx-plus-circle text-info" ></i>
            </a>
        </td>
        <td>
            <a href="{{route('admin_user_edit', ['id' => $rs->id]) }}" onclick="return !window.open(this.href, '', 'top=50 left=100 width=800 height=600')" >
                <i class="bx bx-edit p-2 text-info" style="font-size: 24px"></i>
            </a>
        </td>
        <td>
            <a href="{{route('admin_user_delete', ['id' => $rs->id]) }}" onclick="return confirm('Delete! Are you sure?')" >
                <i class="bx bx-trash p-2 text-danger" style="font-size: 24px"></i>
            </a>
        </td>
    </tr>

@endforeach
</tbody>
