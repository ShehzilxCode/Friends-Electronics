@extends('UserUI.layout')
@section('item')

<main>
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-section">
            <div class="container-fluid custom-container">
                <div class="breadcrumb-wrapper text-center">
                    <h2 class="breadcrumb-wrapper__title">My Account</h2>
                    <ul class="breadcrumb-wrapper__items justify-content-center">
                        <li><a href="index.html">Home</a></li>
                        <li><span>My Account</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- My Account Start -->
        <div class="my-account-section section-padding-2">
            <div class="container-fluid custom-container">
                <!-- My Account Tabs Start -->
                <div class="my-account-tab">
                    <!-- My Account Tabs Menu Start -->
                    <div class="my-account-tab__menu">
                        <ul class="nav justify-content-center">
                            <li>
                                <button class="account-btn active" data-bs-toggle="tab" data-bs-target="#dashboard" type="button">
                                    Dashboard
                                </button>
                            </li>
                            <li>
                                <button class="account-btn" data-bs-toggle="tab" data-bs-target="#orders" type="button">
                                    Orders
                                </button>
                            </li>
                            <li>
                                <button class="account-btn" data-bs-toggle="tab" data-bs-target="#download" type="button">
                                    Download
                                </button>
                            </li>
                            <li>
                                <button class="account-btn" data-bs-toggle="tab" data-bs-target="#address" type="button">
                                    Address
                                </button>
                            </li>
                            <li>
                                <button class="account-btn" data-bs-toggle="tab" data-bs-target="#account-detail" type="button">
                                    Account Detail
                                </button>
                            </li>
                            <li>
                                <a class="account-btn" href="login-register.html">Logout</a>
                            </li>
                        </ul>
                    </div>
                    <!-- My Account Tabs Menu End -->

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="dashboard">
                            <!-- My Account Dashboard Start -->
                            <div class="my-account-dashboard">
                                <p>
                                    Hello <strong>diyetox631</strong> (not
                                    <strong>diyetox631</strong>?
                                    <a href="#">Log out</a>)
                                </p>
                                <p>
                                    From your account dashboard you can view
                                    your <a href="#">recent orders</a>,
                                    manage your
                                    <a href="#">shipping and billing addresses</a>, and
                                    <a href="#">edit your password and account
                                        details</a>.
                                </p>
                            </div>
                            <!-- My Account Dashboard End -->
                        </div>
                        <div class="tab-pane fade" id="orders">
                            <!-- My Account Orders Start -->
                            <div class="my-account-orders">
                                <div class="my-account-table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <span>Order</span>
                                                </th>
                                                <th>
                                                    <span>Date</span>
                                                </th>
                                                <th>
                                                    <span>Status</span>
                                                </th>
                                                <th>
                                                    <span>Total</span>
                                                </th>
                                                <th>
                                                    <span>Actions</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="#"> #6564 </a>
                                                </td>
                                                <td>
                                                    <time>May 29, 2023</time>
                                                </td>
                                                <td>On hold</td>
                                                <td>
                                                    <span>$216.97</span>
                                                    for 3 items
                                                </td>
                                                <td>
                                                    <a class="btn" href="#">View</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- My Account Orders End -->
                        </div>
                        <div class="tab-pane fade" id="download">
                            <!-- My Account Download Start -->
                            <div class="my-account-download">
                                <div class="my-account-table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <span>Order</span>
                                                </th>
                                                <th>
                                                    <span>Date</span>
                                                </th>
                                                <th>
                                                    <span>Expire</span>
                                                </th>
                                                <th>
                                                    <span>Actions</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="#"> #6564 </a>
                                                </td>
                                                <td>
                                                    <time>May 29, 2023</time>
                                                </td>
                                                <td>Never</td>
                                                <td>
                                                    <a class="btn" href="#">Download</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- My Account Download End -->
                        </div>
                        <div class="tab-pane fade" id="address">
                            <!-- My Account Address Start -->
                            <div class="my-account-address">
                                <p>
                                    The following addresses will be used on
                                    the checkout page by default.
                                </p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="my-account-address__content">
                                            <h4 class="my-account-address__title">
                                                Billing address
                                            </h4>
                                            <a class="my-account-address__edit" href="#">Edit</a>
                                            <address>
                                                Verna Cormier<br />Keebler
                                                    Group<br />House. #15, Block
                                                    #C, Level #5, Banasree Prime
                                                    Street<br />Dhaka<br />Dhaka<br />1219<br />Bangladesh
                                            </address>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="my-account-address__content">
                                            <h4 class="my-account-address__title">
                                                Shipping address
                                            </h4>
                                            <a class="my-account-address__edit" href="#">Edit</a>
                                            <address>
                                                Verna Cormier<br />Keebler
                                                    Group<br />House. #15, Block
                                                    #C, Level #5, Banasree Prime
                                                    Street<br />Dhaka<br />Dhaka<br />1219<br />Bangladesh
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- My Account Address End -->
                        </div>
                        <div class="tab-pane fade" id="account-detail">
                            <!-- My Account Account Detail Start -->
                            <div class="my-account-detail">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <label class="single-form__label">First name *</label>
                                                <input class="single-form__input" type="text" />
                                            </div>
                                            <!-- Single Form Start -->
                                        </div>
                                        <div class="col-md-6">
                                            <!-- Single Form Start -->
                                            <div class="single-form">
                                                <label class="single-form__label">Last name *</label>
                                                <input class="single-form__input" type="text" />
                                            </div>
                                            <!-- Single Form Start -->
                                        </div>
                                    </div>
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label class="single-form__label">Display name *</label>
                                        <input class="single-form__input" type="text" />
                                    </div>
                                    <!-- Single Form Start -->

                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label class="single-form__label">Email address *</label>
                                        <input class="single-form__input" type="email" />
                                    </div>
                                    <!-- Single Form Start -->

                                    <p class="my-account-detail__legend">
                                        Password change
                                    </p>

                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label class="single-form__label">Current password (leave blank
                                            to leave unchanged)</label>
                                        <input class="single-form__input" type="password" />
                                    </div>
                                    <!-- Single Form Start -->
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label class="single-form__label">New password (leave blank to
                                            leave unchanged)</label>
                                        <input class="single-form__input" type="password" />
                                    </div>
                                    <!-- Single Form Start -->
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <label class="single-form__label">Confirm new password</label>
                                        <input class="single-form__input" type="password" />
                                    </div>
                                    <!-- Single Form Start -->
                                    <!-- Single Form Start -->
                                    <div class="single-form">
                                        <button class="single-form__btn btn">
                                            Save Change
                                        </button>
                                    </div>
                                    <!-- Single Form Start -->
                                </form>
                            </div>
                            <!-- My Account Account Detail End -->
                        </div>
                    </div>
                </div>
                <!-- My Account Tabs End -->
            </div>
        </div>
        <!-- My Account End -->

        <!-- Newsletter Start -->
        <!-- Newsletter Start -->
        <div class="newsletter-section">
            <div class="newsletter-left" style="background-image: url(assets/images/newsletter-bg-1.jpg)">
                <!-- Newsletter Wrapper Start -->
                <div class="newsletter-wrapper text-center">
                    <h4 class="newsletter-wrapper__title">Follow us on</h4>
                    <p>
                        Proin volutpat vitae libero at tincidunt. Maecenas sapien
                        lectus, vehicula vel euismod sed, vulputate
                    </p>

                    <div class="newsletter-social">
                        <ul class="newsletter-social__list">
                            <li>
                                <a href="#" aria-label="facebook">
                                    <i class="lastudioicon-b-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-label="twitter">
                                    <i class="lastudioicon-b-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-label="instagram">
                                    <i class="lastudioicon-b-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-label="vimeo">
                                    <i class="lastudioicon-b-vimeo"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" aria-label="envato">
                                    <i class="lastudioicon-envato"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Newsletter Wrapper End -->
            </div>
            <div class="newsletter-right" style="background-image: url(assets/images/newsletter-bg-2.jpg)">
                <!-- Newsletter Wrapper Start -->
                <div class="newsletter-wrapper text-center">
                    <h4 class="newsletter-wrapper__title">10% off when you sign up</h4>
                    <p>
                        Proin volutpat vitae libero at tincidunt. Maecenas sapien
                        lectus, vehicula vel euismod sed, vulputate
                    </p>
                    <form action="#">
                        <div class="newsletter-form-style-1">
                            <input type="text" placeholder="Enter your email address..." />
                            <button>Subscribe</button>
                        </div>
                    </form>
                </div>
                <!-- Newsletter Wrapper End -->
            </div>
        </div>
        <!-- Newsletter End -->

        <!-- Newsletter End -->
    </main>

@endsection