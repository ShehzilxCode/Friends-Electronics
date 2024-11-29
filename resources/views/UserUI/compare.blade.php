@extends('UserUI.layout')
@section('item')

<main>
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-section">
            <div class="container-fluid custom-container">
                <div class="breadcrumb-wrapper text-center">
                    <h2 class="breadcrumb-wrapper__title">Compare</h2>
                    <ul class="breadcrumb-wrapper__items justify-content-center">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Compare</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Compare Start -->
        <div class="compare-section section-padding-2">
            <div class="container-fluid custom-container">
                <!-- Compare Table Start -->
                <div class="compare-table">
                    <table class="table">
                        <tbody>
                            <tr class="compare-tr-info">
                                <th>Product Info</th>
                                <td>
                                    <div class="remove">
                                        <a href="#">
                                            <i
                                                    class="lastudioicon-e-remove"
                                                >
                                                </i>
                                        </a>
                                    </div>
                                    <div class="product-name">
                                        <a href="product-single.html">
                                            <img src="assets/images/products/product-02.png" alt="Product" width="120" height="152" />
                                        </a>
                                        <h4 class="name">
                                            <a href="product-single.html">
                                                Princess set
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="product-action">
                                        <a class="btn" href="#">
                                            Add to cart
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="remove">
                                        <a href="#">
                                            <i
                                                    class="lastudioicon-e-remove"
                                                ></i>
                                        </a>
                                    </div>
                                    <div class="product-name">
                                        <a href="product-single.html">
                                            <img src="assets/images/products/product-04.png" alt="Product" width="120" height="152" />
                                        </a>
                                        <h4 class="name">
                                            <a href="product-single.html">
                                                Senecio stapeliiformis
                                            </a>
                                        </h4>
                                    </div>
                                    <div class="product-action">
                                        <a class="btn" href="#">
                                            Add to cart
                                        </a>
                                    </div>
                                </td>
                                <td class="td-placeholder"></td>
                                <td class="td-placeholder"></td>
                                <td class="td-placeholder"></td>
                            </tr>
                            <tr class="compare-tr-price">
                                <th>Price</th>
                                <td>
                                    <span>
                                            <del>$89.99</del> <ins>$69.99</ins>
                                        </span>
                                </td>
                                <td>
                                    <span>
                                            <del>$89.99</del> <ins>$69.99</ins>
                                        </span>
                                </td>
                                <td class="td-placeholder"></td>
                                <td class="td-placeholder"></td>
                                <td class="td-placeholder"></td>
                            </tr>
                            <tr class="compare-tr-sku">
                                <th>Sku</th>
                                <td>REF. LA-942</td>
                                <td>REF. LA-344</td>
                                <td class="td-placeholder"></td>
                                <td class="td-placeholder"></td>
                                <td class="td-placeholder"></td>
                            </tr>
                            <tr class="compare-tr-description">
                                <th>Description</th>
                                <td>
                                    Proin volutpat vitae libero at
                                    tincidunt. Maecenas sapien lectus,
                                    vehicula…
                                </td>
                                <td>
                                    Proin volutpat vitae libero at
                                    tincidunt. Maecenas sapien lectus,
                                    vehicula…
                                </td>
                                <td class="td-placeholder"></td>
                                <td class="td-placeholder"></td>
                                <td class="td-placeholder"></td>
                            </tr>
                            <tr class="compare-tr-stock">
                                <th>Availability</th>
                                <td>
                                    <p class="stock in-stock">In stock</p>
                                </td>
                                <td>
                                    <p class="stock in-stock">In stock</p>
                                </td>
                                <td class="td-placeholder"></td>
                                <td class="td-placeholder"></td>
                                <td class="td-placeholder"></td>
                            </tr>
                            <tr class="compare-tr-weight">
                                <th>Weight</th>
                                <td>N/A</td>
                                <td>N/A</td>
                                <td class="td-placeholder"></td>
                                <td class="td-placeholder"></td>
                                <td class="td-placeholder"></td>
                            </tr>
                            <tr class="compare-tr-dimensions">
                                <th>Dimensions</th>
                                <td>N/A</td>
                                <td>N/A</td>
                                <td class="td-placeholder"></td>
                                <td class="td-placeholder"></td>
                                <td class="td-placeholder"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Compare Table End -->
            </div>
        </div>
        <!-- Compare End -->

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