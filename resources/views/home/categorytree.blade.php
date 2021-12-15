@foreach($children as $subcategory)
    <ul class="nav nav-treeview">
        @if(count($subcategory->children))
            <li class="nav-item">{{$subcategory->title}}</li>
            <ul class="nav nav-treeview">
                @include('home.categorytree', ['children' => $subcategory->children])
            </ul>
            <hr>
        @else
            <li class="nav-item"><a href="#" class="nav-link active">{{$subcategory->title}}</a></li>
        @endif
    </ul>
@endforeach
