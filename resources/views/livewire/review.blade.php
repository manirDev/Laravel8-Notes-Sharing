
<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif

    <form class="review-form" wire:submit.prevent="store" >
            @csrf
                <div class="form-group col-12">
                    <input type="text" id="name" wire:model="subject" placeholder="Enter your Subject" class="form-control">
                    @error('subject') <span class="text-danger">{{$message}}</span>@enderror
                </div>

                <div class="form-group col-12">
                    <textarea type="text" id="name" wire:model="review" placeholder="Enter your Review" class="form-control" cols="30" rows="5"></textarea>
                    @error('review') <span class="text-danger">{{$message}}</span>@enderror
                </div>
                <br><BR>
                <div class="form-group">
                    <strong>Your Rating: </strong>
                    @error('subject') <span class="text-danger">{{$message}}</span>@enderror

                    <input type="radio" wire:model="rate" id="rating-5"  value="5" />
                    <input type="radio" wire:model="rate" id="rating-5"  value="4" />
                    <input type="radio" wire:model="rate" id="rating-5"  value="3" />
                    <input type="radio" wire:model="rate" id="rating-5"  value="2" />
                    <input type="radio" wire:model="rate" id="rating-5"  value="1" />
                </div>

            @auth
                <div class="col-lg-6 col-md-6">
                    <button type="submit" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Submit Review</span><i class="bx bx-paper-plane icon-arrow after"></i></button>
                </div>
            @else
                <a href="/login" class="primary-btn">To submit, Please Login</a>
            @endauth

    </form>

</div>
