
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
                <div class="form-group  ">
                    <strong>Your Rating: </strong>
                    <br>
                    @error('subject') <span class="text-danger">{{$message}}</span>@enderror

                    <div class="ratings">
                        <input type="radio" wire:model="rate" id="star5"  value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" wire:model="rate" id="star4"  value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" wire:model="rate" id="star3"  value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" wire:model="rate" id="star2"  value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" wire:model="rate" id="star1"  value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                    </div>   <br>
                    </div>   <br>
            @auth
                <div class="col-lg-6 col-md-6">
                    <button type="submit" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Submit Review</span><i class="bx bx-paper-plane icon-arrow after"></i></button>
                </div>
            @else
                <a href="/login" class="primary-btn">To submit, Please Login</a>
            @endauth

    </form>

</div>
