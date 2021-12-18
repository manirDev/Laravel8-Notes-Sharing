
<ul class="dropdown-menu">
    @foreach($children as $subcategory)
    @if(!count($subcategory->children))
        <li class="nav-item"><a href="{{route('categorycontents',['id'=>$subcategory->id, 'slug'=>$subcategory->title])}}" class="nav-link">{{$subcategory->title}}<i class='bx bx-chevron-right'></i></a></li>
    @else
        <li class="nav-item">
            <a href="#" class="nav-link">{{$subcategory->title}}<i class='bx bx-chevron-right'></i></a>
            @include('home.category-tree', ['children' => $subcategory->children])
        </li>
    @endif
  @endforeach
</ul>

