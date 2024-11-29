@extends('UserUI.layout')
@section('item')

<main>
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-section">
            <div class="container-fluid custom-container">
                <div class="breadcrumb-wrapper text-center">
                    <h2 class="breadcrumb-wrapper__title">Wishlist</h2>
                    <ul class="breadcrumb-wrapper__items justify-content-center">
                        <li><a href="index.html">Home</a></li>
                        <li><span>Wishlist</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Wishlist Start -->
        <div class="wishlist-section section-padding-2">
            <div class="container-fluid custom-container">
                <!-- Wishlist Table Start -->
                <div class="wishlist-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product-remove">&nbsp;</th>
                                <th class="product-thumbnail">&nbsp;</th>
                                <th class="product-name">Product</th>
                                <th class="product-price text-md-center">
                                    Price
                                </th>
                                <th class="product-stock text-md-center">
                                    Stock status
                                </th>
                                <th class="product-action text-md-end"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="wishlist-item">
                                <td class="product-remove">
                                    <a href="#" class="remove">×</a>
                                </td>
                                <td class="product-thumbnail">
                                    <a href="product-single.html">
                                        <img src="assets/images/products/product-02.png" alt="Product" width="90" height="114" />
                                    </a>
                                </td>
                                <td class="product-name">
                                    <a href="product-single.html">
                                        Princess set
                                    </a>
                                </td>
                                <td class="product-price text-md-center" data-title="Price">
                                    <span>
                                            <del>$89.99</del> <ins>$69.99</ins>
                                        </span>
                                </td>
                                <td class="product-stock text-md-center" data-title="Stock status">
                                    <span class="stock in-stock">
                                            In stock
                                        </span>
                                </td>
                                <td class="product-action text-md-end">
                                    <a href="#" class="wishlist-table__btn btn">
                                        Add to cart
                                    </a>
                                </td>
                            </tr>
                            <tr class="wishlist-item">
                                <td class="product-remove">
                                    <a href="#" class="remove">×</a>
                                </td>
                                <td class="product-thumbnail">
                                    <a href="product-single.html">
                                        <img src="assets/images/products/product-04.png" alt="Product" width="90" height="114" />
                                    </a>
                                </td>
                                <td class="product-name">
                                    <a href="product-single.html">
                                        Senecio stapeliiformis
                                    </a>
                                </td>
                                <td class="product-price text-md-center" data-title="Price">
                                    <span>
                                            <ins>$39.99</ins>
                                        </span>
                                </td>
                                <td class="product-stock text-md-center" data-title="Stock status">
                                    <span class="stock in-stock">
                                            In stock
                                        </span>
                                </td>
                                <td class="product-action text-md-end">
                                    <a href="#" class="wishlist-table__btn btn">
                                        Add to cart
                                    </a>
                                </td>
                            </tr>
                            <tr class="wishlist-item">
                                <td class="product-remove">
                                    <a href="#" class="remove">×</a>
                                </td>
                                <td class="product-thumbnail">
                                    <a href="product-single.html">
                                        <img src="assets/images/products/product-05.png" alt="Product" width="90" height="114" />
                                    </a>
                                </td>
                                <td class="product-name">
                                    <a href="product-single.html">
                                        Hoya burtoniae
                                    </a>
                                </td>
                                <td class="product-price text-md-center" data-title="Price">
                                    <span>
                                            <ins>$49.99</ins>
                                        </span>
                                </td>
                                <td class="product-stock text-md-center" data-title="Stock status">
                                    <span class="stock in-stock">
                                            In stock
                                        </span>
                                </td>
                                <td class="product-action text-md-end">
                                    <a href="#" class="wishlist-table__btn btn">
                                        Add to cart
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Wishlist Table End -->
            </div>
        </div>
        <!-- Wishlist End -->

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