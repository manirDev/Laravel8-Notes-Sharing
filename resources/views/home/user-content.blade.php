
<section class="my-account-area ptb-100">
    <div class="container">
        <div class="myAccount-profile">
            <div class="row align-items-center">
                @auth
                <div class="col-lg-4 col-md-5">
                    <div class="profile-image">
                        <img src="{{ Auth::user()->profile_photo_url }}" alt="image">
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="profile-content">

                        <h3>{{Auth::user()->name}}</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore atque officiis maxime suscipit expedita obcaecati nulla in ducimus.</p>
                        <ul class="contact-info">
                            <li><i class='bx bx-envelope'></i> <a href="#"><span class="__cf_email__" data-cfemail="28404d444447684249454d5b49464c4d5a5b4746064b4745">{{Auth::user()->email}}</span></a></li>
                            <li><i class='bx bx-phone'></i> <a href="#">{{Auth::user()->phone}}</a></li>
                            <li><i class='bx bx-map'></i> <a href="#" target="_blank">{{Auth::user()->address}}</a></li>
                        </ul>
                @endauth
                        <ul class="social">
                            <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                            <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                            <li><a href="#" class="d-block" target="_blank"><i class='bx bxl-pinterest-alt'></i></a></li>
                        </ul>
                        <a href="{{route('admin_logout')}}" class="myAccount-logout">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="myAccount-navigation">
            @include('home.user-header')
        </div>
        <div class="myAccount-content">
            <p>Hello <strong>James Anderson</strong> (not <strong>James Anderson</strong>? <a href="#">Log out</a>)</p>
            <p>From your account dashboard you can view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a>, and <a href="#">edit your password and account details</a>.</p>
            <h3>Recent Orders</h3>
            <div class="recent-orders-table table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Order</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>#074145O5</td>
                        <td>October 18, 2021</td>
                        <td>Completed</td>
                        <td>$49.00 for 1 item</td>
                        <td><a href="#" class="view-button">View</a></td>
                    </tr>
                    <tr>
                        <td>#074145O6</td>
                        <td>October 18, 2021</td>
                        <td>On Hold</td>
                        <td>$49.00 for 1 item</td>
                        <td><a href="#" class="view-button">View</a></td>
                    </tr>
                    <tr>
                        <td>#074145O7</td>
                        <td>October 18, 2021</td>
                        <td>Completed</td>
                        <td>$49.00 for 1 item</td>
                        <td><a href="#" class="view-button">View</a></td>
                    </tr>
                    <tr>
                        <td>#074145O5</td>
                        <td>October 18, 2021</td>
                        <td>Completed</td>
                        <td>$49.00 for 1 item</td>
                        <td><a href="#" class="view-button">View</a></td>
                    </tr>
                    <tr>
                        <td>#074145O6</td>
                        <td>October 18, 2021</td>
                        <td>On Hold</td>
                        <td>$49.00 for 1 item</td>
                        <td><a href="#" class="view-button">View</a></td>
                    </tr>
                    <tr>
                        <td>#074145O7</td>
                        <td>October 18, 2021</td>
                        <td>Completed</td>
                        <td>$49.00 for 1 item</td>
                        <td><a href="#" class="view-button">View</a></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
