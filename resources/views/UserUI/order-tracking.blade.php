@extends('UserUI.layout')
@section('item')

<main>
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-section">
            <div class="container-fluid custom-container">
                <div class="breadcrumb-wrapper text-center">
                    <h2 class="breadcrumb-wrapper__title">
                        Order Tracking
                    </h2>
                    <ul class="breadcrumb-wrapper__items justify-content-center">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop-fullwidth.html">Shop</a></li>
                        <li><span>Order Tracking</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Order Tracking Start -->
        <div class="order-tracking-section section-padding-2">
            <!-- Order Tracking wrapper Start -->
            <div class="order-tracking-wrapper">
                <div class="row g-0 flex-row-reverse">
                    <div class="col-md-6">
                        <!-- Order Tracking Form Start -->
                        <div class="order-tracking-form">
                            <div class="order-tracking-form__wrapper">
                                <p class="text-center">
                                    To track your order please enter your
                                    Order ID in the box below and press the
                                    "Track" button. This was given to you on
                                    your receipt and in the confirmation
                                    email you should have received.
                                </p>
                                <form action="#">
                                    <div class="single-form">
                                        <label class="single-form__label">Order ID</label>
                                        <input class="single-form__input" type="text" placeholder="Found in your order confirmation email." />
                                    </div>
                                    <div class="single-form">
                                        <label class="single-form__label">Billing email</label>
                                        <input class="single-form__input" type="text" placeholder="Email you used during checkout." />
                                    </div>
                                    <div class="single-form">
                                        <button class="single-form__btn btn">
                                            Track
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Order Tracking Form End -->
                    </div>
                    <div class="col-md-6">
                        <!-- Order Tracking Banner Start -->
                        <div class="order-tracking-banner text-center" style="
                                    background-image: url(assets/images/order-tracking.jpg);
                                ">
                            <h4 class="order-tracking-banner__sub-title">
                                New now
                            </h4>
                            <h2 class="order-tracking-banner__title">
                                Slim-fit cotton linen-blend shirt
                            </h2>
                            <a class="order-tracking-banner__btn btn" href="shop-fullwidth.html">
                                Shop Now
                            </a>
                        </div>
                        <!-- Order Tracking Banner End -->
                    </div>
                </div>
            </div>
            <!-- Order Tracking wrapper End -->
        </div>
        <!-- Order Tracking End -->

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