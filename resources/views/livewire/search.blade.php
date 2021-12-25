<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <input wire:model="search" name="search" type="text" class="input-search search-field" list="mylist" placeholder="Search here...">
    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
</div>
