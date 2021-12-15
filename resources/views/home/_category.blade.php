@php
    $parentCategories = \App\Http\Controllers\HomeController::categoryList()
@endphp

<div class="well well-small">
    <span class="category-header">Categories <i class="icon-chevron-right"></i> </span>
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @foreach($parentCategories as $rs)
            <li class="nav-item has-treeview menu-open">
                <a href="" class="nav-link> {{$rs->title}} <i class="icon-chevron-right"></i></a>
                <div class="navbar-custom-menu">
                    <div class="row">
                        @if(count($rs->children))
                            @include('home.categorytree', ['children' => $rs->children])
                        @endif
                    </div>
                </div>
            </li>

        @endforeach
    </ul>
</div>
