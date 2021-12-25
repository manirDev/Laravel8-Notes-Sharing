<div class="courses-sidebar-information">
    <ul>
        <li>
            <span><i class='bx bx-group'></i> Title:</span>
            {{ $data->title}}
        </li>
        <li>
            <span><i class='bx bx-time'></i> Reviews:</span>
            <div class="product-review">
                <div class="rating">
                    @for ($i = 0; $i < 5; $i++)
                        @if ($i < $avgrev)
                            <i class='bx bxs-star'></i>
                        @else
                            <span class="star"></span>
                        @endif
                    @endfor
                </div>
                <a href="#rev" ><span class="label">{{$countrev}} Reviews {{$avgrev}}</span></a>

            </div>
        </li>
        <li>
            <span><i class='bx bx-tachometer'></i> Description:</span>
            {{ $data->description}}
        </li>
        <li>
            <span><i class='bx bxs-institution'></i> Publisher:</span>
            @if($data->user->profile_photo_path)

                <img src="{{Storage::url($data->user->profile_photo_path)}}" style="width: 30px; height: 30px; border-radius: 100%;" class="shadow" alt="image">
            @endif
            <span>{{$data->user->name}}</span>
        </li>
        <li>
            <span><i class='bx bxs-graduation'></i> Category:</span>
            <a href="{{route('categorycontents',['id'=>$data->id, 'slug'=>$data->title])}}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->title) }}</a>
        </li>
        <li>
            <span><i class='bx bx-atom'></i> Tag:</span>
            <a href="{{route('categorycontents',['id'=>$data->id, 'slug'=>$data->title])}}">{{ $data->slug}}</a>
        </li>

    </ul>
</div>
