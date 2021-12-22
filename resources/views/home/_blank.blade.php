
<section class="product-details-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="products-details-image">
                    <ul class="slickslide">
                        @if($data->file)
                            <object data="{{Storage::url($data->file)}}" type="application/pdf"  width="600" height="600">
                                <a href="{{Storage::url($data->file)}}">{{ $data->title}}.pdf</a>
                            </object>
                        @endif
                    </ul>
                    <div class="slick-thumbs">
                        <ul>
                            <li><img src="assets/img/shop/1.jpg" alt="image"></li>
                            <li><img src="assets/img/shop/2.jpg" alt="image"></li>
                            <li><img src="assets/img/shop/3.jpg" alt="image"></li>
                            <li><img src="assets/img/shop/4.jpg" alt="image"></li>
                            <li><img src="assets/img/shop/5.jpg" alt="image"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="product-details-desc">
                    <h3> {{ $data->title}}</h3>
                    <div class="price">
                        <span class="new-price">$541.00</span>
                        <span class="old-price">$652.00</span>
                    </div>
                    <div class="product-review">
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <a href="#" class="rating-count">3 reviews</a>
                    </div>
                    <h3>Description</h3>
                    <p> {{ $data->description}}</p>
                    <div class="product-meta">
                        <span>Publisher:
                            <span class="sku">
                                @auth
{{--                                    <img src="{{Auth::user()->profile_photo_url}}" class="shadow" alt="image">--}}
                                    <span>{{Auth::user()->name}}</span>
                                @endauth
                            </span>
                        </span>
                        <span>Availability: <span class="in-stock">In Stock</span></span>
                        <span>Category: <a href="">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($data, $data->title) }}</a></span>
                        <span>Tag: <a href="#">{{ $data->description}}</a></span>
                    </div>
                    <div class="product-add-to-cart">
                        <div class="input-counter">
                            <span class="minus-btn"><i class='bx bx-minus'></i></span>
                            <input type="text" min="1" value="1">
                            <span class="plus-btn"><i class='bx bx-plus'></i></span>
                        </div>
                        <button type="submit" class="default-btn"><i class='bx bx-plus icon-arrow before'></i><span class="label">Add to Cart</span><i class="bx bx-plus icon-arrow after"></i></button>
                    </div>
                    <div class="custom-payment-options">
                        <span>Guaranteed safe checkout:</span>
                        <div class="payment-methods">
                            <a href="#"><img src="assets/img/payment/1.svg" alt="image"></a>
                            <a href="#"><img src="assets/img/payment/2.svg" alt="image"></a>
                            <a href="#"><img src="assets/img/payment/3.svg" alt="image"></a>
                            <a href="#"><img src="assets/img/payment/4.svg" alt="image"></a>
                            <a href="#"><img src="assets/img/payment/5.svg" alt="image"></a>
                            <a href="#"><img src="assets/img/payment/6.svg" alt="image"></a>
                            <a href="#"><img src="assets/img/payment/7.svg" alt="image"></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="tab products-details-tab">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <ul class="tabs">
                                <li><a href="#">
                                        <div class="dot"></div> Detail
                                    </a></li>
                                <li><a href="#">
                                        <div class="dot"></div> Additional information
                                    </a></li>
                                <li><a href="#">
                                        <div class="dot"></div> Reviews
                                    </a></li>
                            </ul>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="tab-content">
                                <div class="tabs-item">
                                    <div class="products-details-tab-content">
                                        <p>Design inspiration lorem ipsum dolor sit amet, consectetuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim. Suspendisse id velit vitae ligula volutpat condimentum. Aliquam erat volutpat. Sed quis velit. Nulla facilisi. Nulla libero. Vivamus pharetra posuere sapien. Nam consectetuer. Sed aliquam, nunc eget euismod ullamcorper, lectus nunc ullamcorper orci, fermentum bibendum enim nibh eget ipsum. Nam consectetuer. Sed aliquam, nunc eget euismod ullamcorper, lectus nunc ullamcorper orci, fermentum bibendum enim nibh eget ipsum. Nulla libero. Vivamus pharetra posuere sapien.</p>
                                    </div>
                                </div>
                                <div class="tabs-item">
                                    <div class="products-details-tab-content">
                                        <ul class="additional-information">
                                            <li><span>Brand:</span> ThemeForest</li>
                                            <li><span>Color:</span> Brown</li>
                                            <li><span>Size:</span> Large, Medium</li>
                                            <li><span>Weight:</span> 27 kg</li>
                                            <li><span>Dimensions:</span> 16 x 22 x 123 cm</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tabs-item">
                                    <div class="products-details-tab-content">
                                        <div class="product-review-form">
                                            <h3>Customer Reviews</h3>
                                            <div class="review-title">
                                                <div class="rating">
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bxs-star'></i>
                                                    <i class='bx bx-star'></i>
                                                </div>
                                                <p>Based on 3 reviews</p>
                                                <a href="#" class="default-btn"><i class='bx bx-plus icon-arrow before'></i><span class="label">Write a Review</span><i class="bx bx-plus icon-arrow after"></i></a>
                                            </div>
                                            <div class="review-comments">
                                                <div class="review-item">
                                                    <div class="rating">
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bx-star'></i>
                                                    </div>
                                                    <h3>Good</h3>
                                                    <span><strong>Admin</strong> on <strong>Sep 21, 2021</strong></span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                                </div>
                                                <div class="review-item">
                                                    <div class="rating">
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bx-star'></i>
                                                    </div>
                                                    <h3>Good</h3>
                                                    <span><strong>Admin</strong> on <strong>Sep 21, 2021</strong></span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                                </div>
                                                <div class="review-item">
                                                    <div class="rating">
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bxs-star'></i>
                                                        <i class='bx bx-star'></i>
                                                    </div>
                                                    <h3>Good</h3>
                                                    <span><strong>Admin</strong> on <strong>Sep 21, 2021</strong></span>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                                </div>
                                            </div>
                                            <div class="review-form">
                                                <h3>Write a Review</h3>
                                                <form>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6">
                                                            <div class="form-group">
                                                                <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <input type="text" id="review-title" name="review-title" placeholder="Enter your review a title" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <textarea name="review-body" id="review-body" cols="30" rows="6" placeholder="Write your comments here" class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12">
                                                            <button type="submit" class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Submit Review</span><i class="bx bx-paper-plane icon-arrow after"></i></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

