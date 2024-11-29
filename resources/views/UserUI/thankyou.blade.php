@extends('UserUI.layout')
@section('item')

<main>
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-section">
            <div class="container-fluid custom-container">
                <div class="breadcrumb-wrapper text-center">
                    <h2 class="breadcrumb-wrapper__title">Thank you</h2>
                    <ul class="breadcrumb-wrapper__items justify-content-center">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Thank you</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Thank You Start -->
        <div class="thank-you-section section-padding-2">
            <div class="container-fluid custom-container">
                <!-- Thank You Table Start -->
                <div class="thank-you">
                    <p class="thank-you-notice">
                        Thank you. Your order has been received.
                    </p>

                    <!-- Thank You Order Overview Start -->
                    <ul class="thank-you-order-overview">
                        <li>
                            <span> Order number: </span>
                            <strong>6564</strong>
                        </li>
                        <li>
                            <span> Date: </span>
                            <strong>May 29, 2023</strong>
                        </li>
                        <li>
                            <span> Email: </span>
                            <strong>diyetox631@farebus.com</strong>
                        </li>
                        <li>
                            <span> Total: </span>
                            <strong>$216.97</strong>
                        </li>
                        <li>
                            <span> Payment method: </span>
                            <strong>Direct bank transfer</strong>
                        </li>
                    </ul>
                    <!-- Thank You Order Overview End -->

                    <!-- Thank You Order Details Start -->
                    <div class="thank-you-order-details">
                        <h3 class="thank-you-title">Order details</h3>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-total">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="order-item">
                                    <td class="product-name">
                                        <a href="#">Bomber jacket</a>
                                        <strong>×&nbsp;1</strong>
                                    </td>
                                    <td class="product-total">
                                        <span class="amount"> $69.99 </span>
                                    </td>
                                </tr>
                                <tr class="order-item">
                                    <td class="product-name">
                                        <a href="#">Double strap mini basket bag</a>
                                        <strong>×&nbsp;1</strong>
                                    </td>
                                    <td class="product-total">
                                        <span class="amount"> $89.99 </span>
                                    </td>
                                </tr>
                                <tr class="order-item">
                                    <td class="product-name">
                                        <a href="#">Frills cotton t-shirt</a>
                                        <strong>×&nbsp;1</strong>
                                    </td>
                                    <td class="product-total">
                                        <span class="amount"> $36.99 </span>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Subtotal:</th>
                                    <td>
                                        <span class="amount">$196.97</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Shipping:</th>
                                    <td>
                                        <span class="amount"
                                                >$20.00
                                                <small>via Flat rate</small>
                                            </span>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Payment method:</th>
                                    <td>Direct bank transfer</td>
                                </tr>
                                <tr>
                                    <th>Total:</th>
                                    <td>
                                        <span class="amount">$216.97 </span>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- Thank You Order Details End -->

                    <!-- Thank You Customer Details Start -->
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Thank You Customer Billing Start -->
                            <div class="thank-you-customer-details">
                                <h3 class="thank-you-title">
                                    Billing address
                                </h3>

                                <address>
                                    Verna Cormier <br />
                                        Keebler Group <br />
                                        House. #15, Block #C, Level #5, Banasree
                                        Prime Street <br />
                                        Dhaka <br />
                                        Dhaka <br />
                                        1219 <br />
                                        Bangladesh <br />
                                        504-668-7841 <br />
                                    <br />

                                        diyetox631@farebus.com
                                </address>
                            </div>
                            <!-- Thank You Customer Billing End -->
                        </div>
                        <div class="col-md-6">
                            <!-- Thank You Customer Shipping Start -->
                            <div class="thank-you-customer-details">
                                <h3 class="thank-you-title">
                                    Shipping address
                                </h3>

                                <address>
                                    Verna Cormier <br />
                                        Keebler Group <br />
                                        House. #15, Block #C, Level #5, Banasree
                                        Prime Street <br />
                                        Dhaka <br />
                                        Dhaka <br />
                                        1219 <br />
                                        Bangladesh <br />
                                        504-668-7841 <br />
                                </address>
                            </div>
                            <!-- Thank You Customer Shipping End -->
                        </div>
                    </div>
                    <!-- Thank You Customer Details End -->
                </div>
                <!-- Thank You Table End -->
            </div>
        </div>
        <!-- Thank You End -->

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