<style>
    .star-cb-group {
        /* remove inline-block whitespace */
        font-size: 0;
        /* flip the order so we can use the + and ~ combinators */
        unicode-bidi: bidi-override;
        direction: rtl;
        /* the hidden clearer */
    }
    .star-cb-group * {
        font-size: 1.4rem;
    }
    .star-cb-group > input {
        display: none;
    }
    .star-cb-group > input + label {
        /* only enough room for the star */
        display: inline-block;
        overflow: hidden;
        text-indent: 9999px;
        width: 1em;
        white-space: nowrap;
        cursor: pointer;
    }
    .star-cb-group > input + label:before {
        display: inline-block;
        text-indent: -9999px;
        content: "☆";
        color: #888;
    }
    .star-cb-group > input:checked ~ label:before, .star-cb-group > input + label:hover ~ label:before, .star-cb-group > input + label:hover:before {
        content: "★";
        color: #ffba0a;
        text-shadow: 0 0 1px #333;
    }
    .star-cb-group > .star-cb-clear + label {
        text-indent: -9999px;
        width: .5em;
        margin-left: -.5em;
    }
    .star-cb-group > .star-cb-clear + label:before {
        width: .5em;
    }
    .star-cb-group:hover > input + label:before {
        content: "☆";
        color: #888;
        text-shadow: none;
    }
    .star-cb-group:hover > input + label:hover ~ label:before, .star-cb-group:hover > input + label:hover:before {
        content: "★";
        color: #ffba0a;
        text-shadow: 0 0 1px #333;
</style>

<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    @if(session()->has('message'))
        <div class="alert alert-success">
            {{session('message')}}
        </div>
    @endif

    <form class="review-form" wire:submit.prevent="store">
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
                    <fieldset>
                        <span class="star-cb-group">
                          <input type="radio" wire:model="rate" id="rating-5"  value="5" />
                          <label for="rating-5">5</label>
                          <input type="radio" wire:model="rate" id="rating-4"  value="4" />
                          <label for="rating-4">4</label>
                          <input type="radio" wire:model="rate" id="rating-3" value="3" />
                          <label for="rating-3">3</label>
                          <input type="radio" wire:model="rate" id="rating-2"  value="2" />
                          <label for="rating-2">2</label>
                          <input type="radio" wire:model="rate" id="rating-1" value="1" />
                          <label for="rating-1">1</label>
                          <input type="radio" wire:model="rate" id="rating-0"  value="0" class="star-cb-clear" />
                          <label for="rating-0">0</label>
                        </span>
                    </fieldset>
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
