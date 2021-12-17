@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp

<li class="nav-item"><a href="#" class="nav-link">Category <i class='bx bx-chevron-down'></i></a>
    <ul class="dropdown-menu">
        @foreach($parentCategories as $rs)
        <li class="nav-item">
            <a href="#" class="nav-link">{{$rs->title}}<i class='bx bx-chevron-right'></i></a>

            @if(count($rs->children))
                @include('home.category-tree', ['children' => $rs->children])
            @endif

        </li>
        @endforeach
    </ul>
</li>
