<div class="search-overlay">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-layer"></div>
            <div class="search-overlay-close">
                <span class="search-overlay-close-line"></span>
                <span class="search-overlay-close-line"></span>
            </div>
            <div class="search-overlay-form">
                <form action="{{route('getcontent')}}" method="post">
                    @csrf
                    @livewire('search')
                    <button type="submit"><i class='bx bx-search-alt'></i></button>
                </form>

            </div>
        </div>
    </div>
</div>
