@extends('UserUI.layout')
@section('item')


<main>
    <!-- Breadcrumbs Start -->
    <div class="single-breadcrumbs">
        <div class="container-fluid custom-container">
            <ul class="single-breadcrumbs-list">
                <li><a href="#">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Fashion </a></li>
                <li><span>Product Simple</span></li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Product Single Start -->
    <div class="product-single-section section-padding-2">
        <div class="container-fluid custom-container">
            <!-- Product Single Wrapper Start -->
            <div class="product-single-wrapper">
                <div class="product-single-col-1">
                    <!-- Product Single image Start -->
                    <div class="product-single-image">
                        <div class="product-single-slide navigation-arrows-style-3">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="product-single-slide-item swiper-slide">
                                        <img src="assets/images/products/product-single-01.png" width="694" height="728" />
                                    </div>
                                    <div class="product-single-slide-item swiper-slide">
                                        <img src="assets/images/products/product-single-02.png" width="694" height="728" />
                                    </div>
                                    <div class="product-single-slide-item swiper-slide">
                                        <img src="assets/images/products/product-single-03.png" width="694" height="728" />
                                    </div>
                                    <div class="product-single-slide-item swiper-slide">
                                        <img src="assets/images/products/product-single-04.png" width="694" height="728" />
                                    </div>
                                </div>
                                <div class="swiper-button-next">
                                    <i
                                            class="lastudioicon-arrow-right"
                                        ></i>
                                </div>
                                <div class="swiper-button-prev">
                                    <i
                                            class="lastudioicon-arrow-left"
                                        ></i>
                                </div>
                                <div class="product-single-zoom">
                                    <div class="zoom">
                                        <a class="product-glightbox" href="assets/images/products/product-single-01.png"></a>
                                        <a class="product-glightbox" href="assets/images/products/product-single-02.png"></a>
                                        <a class="product-glightbox" href="assets/images/products/product-single-03.png"></a>
                                        <a class="product-glightbox" href="assets/images/products/product-single-04.png"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-single-thumb">
                            <div class="swiper">
                                <div class="swiper-wrapper">
                                    <div class="product-single-thumb-item swiper-slide">
                                        <img src="assets/images/products/product-single-01.png" width="144" height="155" />
                                    </div>
                                    <div class="product-single-thumb-item swiper-slide">
                                        <img src="assets/images/products/product-single-02.png" width="144" height="155" />
                                    </div>
                                    <div class="product-single-thumb-item swiper-slide">
                                        <img src="assets/images/products/product-single-03.png" width="144" height="155" />
                                    </div>
                                    <div class="product-single-thumb-item swiper-slide">
                                        <img src="assets/images/products/product-single-04.png" width="144" height="155" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product Single image End -->
                </div>

                <div class="product-single-col-2">
                    <!-- Product Single content Start -->
                    <div class="product-single-content">
                        <h2 class="product-single-content__title">
                            Product Simple
                        </h2>
                        <div class="product-single-content__price-stock">
                            <div class="product-single-content__price">
                                <ins>$36.99</ins>
                            </div>
                            <div class="product-single-content__stock">
                                <span class="stock-icon">
                                        <i
                                            class="dlicon ui-1_check-circle-08"
                                        ></i>
                                    </span>
                                <span class="stock-text">
                                        97 in stock
                                    </span>
                            </div>
                        </div>
                        <div class="product-single-content__short-description">
                            <p>
                                Proin volutpat vitae libero at
                                tincidunt. Maecenas sapien lectus,
                                vehicula vel euismod sed, vulputate a
                                lorem. Integer at tristique libero.
                                Nullam porta eleifend metus a interdum.
                            </p>
                        </div>
                        <div class="product-single-content__add-to-cart-wrapper">
                            <div class="product-single-content__quantity-add-to-cart">
                                <div class="product-single-content__quantity product-quantity">
                                    <button type="button" class="decrease">
                                        <i
                                                class="lastudioicon-i-delete-2"
                                            ></i>
                                    </button>
                                    <input class="quantity-input" type="text" value="1" />
                                    <button type="button" class="increase">
                                        <i
                                                class="lastudioicon-i-add-2"
                                            ></i>
                                    </button>
                                </div>
                                <button class="product-single-content__add-to-cart btn">
                                    Add to cart
                                </button>
                            </div>

                            <a href="#" class="product-add-compare">
                                Add to Compare
                            </a>
                            <a href="#" class="product-add-wishlist">
                                Add to Wishlist
                            </a>
                        </div>
                        <div class="product-single-content__meta">
                            <div class="product-single-content__meta--item">
                                <div class="label">SKU:</div>
                                <div class="content">REF. HT-5732</div>
                            </div>
                            <div class="product-single-content__meta--item">
                                <div class="label">Categories:</div>
                                <div class="content">
                                    <a href="#">Fashion</a>
                                    <a href="#">Women</a>
                                </div>
                            </div>
                            <div class="product-single-content__meta--item">
                                <div class="label">Tag:</div>
                                <div class="content">
                                    <a href="#">Teen</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-single-content__social">
                            <div class="label">Share</div>
                            <ul class="socail-icon">
                                <li>
                                    <a href="#" aria-label="facebook">
                                        <i
                                                class="lastudioicon-b-facebook"
                                            ></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" aria-label="twitter">
                                        <i
                                                class="lastudioicon-b-twitter"
                                            ></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" aria-label="linkedin">
                                        <i
                                                class="lastudioicon-b-linkedin"
                                            ></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Product Single content End -->
                </div>
            </div>
            <!-- Product Single Wrapper End -->
        </div>
    </div>
    <!-- Product Single End -->

    <!-- Product Single Tabs Start -->
    <div class="product-single-tabs-section section-padding-2">
        <div class="container-fluid custom-container">
            <!-- Product Single Tabs Start -->
            <div class="product-single-tabs">
                <ul class="nav justify-content-center">
                    <li>
                        <button class="active" data-bs-toggle="pill" data-bs-target="#description" type="button">
                            Description
                        </button>
                    </li>
                    <li>
                        <button data-bs-toggle="pill" data-bs-target="#additionalInformation " type="button">
                            Additional information
                        </button>
                    </li>
                    <li>
                        <button data-bs-toggle="pill" data-bs-target="#reviews" type="button">
                            Reviews (03)
                        </button>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade show active" id="description">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-6">
                                <!-- Product Single Tab Description Start -->
                                <div class="product-single-tab-description">
                                    <!-- Product Single Tab Description Item Start -->
                                    <div class="product-single-tab-description-item">
                                        <h4 class="product-single-tab-description-item__title">
                                            + USEFUL INFORMATION
                                        </h4>
                                        <p>
                                            Cotton-blend fabric.
                                            Textured fabric. Long
                                            design. Evasé design. Wrap
                                            collar. Puffed short sleeve.
                                            Front slit. Knot detail. Bow
                                            closing on the back. Button
                                            fastening at back.
                                        </p>
                                    </div>
                                    <!-- Product Single Tab Description Item End -->

                                    <!-- Product Single Tab Description Item Start -->
                                    <div class="product-single-tab-description-item">
                                        <h4 class="product-single-tab-description-item__title">
                                            + MATERIAL AND WASHING
                                            INSTRUCTIONS
                                        </h4>
                                        <p>
                                            Composition: 70% viscose,30%
                                            cotton
                                        </p>
                                        <p>
                                            <img src="assets/images/content-single-product-image-2.png" alt="Product Icon" width="150" height="33" />
                                        </p>
                                    </div>
                                    <!-- Product Single Tab Description Item End -->
                                </div>
                                <!-- Product Single Tab Description End -->
                            </div>
                            <div class="col-lg-5">
                                <!-- Product Single Tab Image Start -->
                                <div class="product-single-tab-image">
                                    <h5 class="product-single-tab-image__title">
                                        Video review product
                                    </h5>
                                    <div class="product-single-tab-image__image">
                                        <a class="glightbox" href="https://www.youtube.com/watch?v=I2P22HzEVjs&amp;ab_channel=LAStudio"></a>
                                        <img src="assets/images/content-single-product-image-1.jpg" alt="product-image" width="320" height="218" />
                                    </div>
                                </div>
                                <!-- Product Single Tab Image End -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="additionalInformation">
                        <!-- Product Single Table Start -->
                        <div class="product-single-table">
                            <div class="table-responsive">
                                <table class="table align-middle">
                                    <tbody>
                                        <tr>
                                            <th>Color</th>
                                            <td>
                                                <p>Blue, Green, Red</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- Product Single Table End -->
                    </div>
                    <div class="tab-pane fade" id="reviews">
                        <!-- Product Single Review Start -->
                        <div class="product-single-review">
                            <!-- Product Comment Start -->
                            <div class="product-comment">
                                <h3 class="comment-title">
                                    3 review for Product Simple
                                </h3>

                                <!-- Comment Items Start -->
                                <ul class="comment-items">
                                    <!-- Comment Item Start -->
                                    <li class="comment-item">
                                        <div class="comment-item__author">
                                            <img src="assets/images/user/user-1.jpg" alt="Author" width="90" height="90" />
                                        </div>
                                        <div class="comment-item__content">
                                            <div class="comment-item__rating">
                                                <span
                                                        class="star-rating"
                                                    >
                                                        <span
                                                            style="
                                                                width: 80%;
                                                            "
                                                        ></span>
                                                </span>
                                            </div>
                                            <p class="comment-item__description">
                                                Fringed jacquard
                                                cardigan
                                            </p>
                                            <p class="comment-item__meta">
                                                <strong
                                                        >HasTheme</strong>
                                                - June 3, 2024
                                            </p>
                                        </div>
                                    </li>
                                    <!-- Comment Item End -->

                                    <!-- Comment Item Start -->
                                    <li class="comment-item">
                                        <div class="comment-item__author">
                                            <img src="assets/images/user/user-2.jpg" alt="Author" width="90" height="90" />
                                        </div>
                                        <div class="comment-item__content">
                                            <div class="comment-item__rating">
                                                <span
                                                        class="star-rating"
                                                    >
                                                        <span
                                                            style="
                                                                width: 80%;
                                                            "
                                                        ></span>
                                                </span>
                                            </div>
                                            <p class="comment-item__description">
                                                Fringed jacquard
                                                cardigan
                                            </p>
                                            <p class="comment-item__meta">
                                                <strong
                                                        >HasTheme</strong>
                                                - June 3, 2024
                                            </p>
                                        </div>
                                    </li>
                                    <!-- Comment Item End -->

                                    <!-- Comment Item Start -->
                                    <li class="comment-item">
                                        <div class="comment-item__author">
                                            <img src="assets/images/user/user-3.jpg" alt="Author" width="90" height="90" />
                                        </div>
                                        <div class="comment-item__content">
                                            <div class="comment-item__rating">
                                                <span
                                                        class="star-rating"
                                                    >
                                                        <span
                                                            style="
                                                                width: 80%;
                                                            "
                                                        ></span>
                                                </span>
                                            </div>
                                            <p class="comment-item__description">
                                                Fringed jacquard
                                                cardigan
                                            </p>
                                            <p class="comment-item__meta">
                                                <strong
                                                        >HasTheme</strong>
                                                - June 3, 2024
                                            </p>
                                        </div>
                                    </li>
                                    <!-- Comment Item End -->
                                </ul>
                                <!-- Comment Items End -->
                            </div>
                            <!-- Product Comment End -->

                            <!-- Product Comment Form Start -->
                            <div class="product-comment-form">
                                <h3 class="comment-title">
                                    Add a review
                                </h3>

                                <form action="#">
                                    <!-- comment Form Start -->
                                    <div class="comment-form">
                                        <div class="comment-form__notes">
                                            Your email address will not
                                            be published.
                                        </div>
                                        <div class="product-review-form__rating">
                                            <div class="label">
                                                Your rating *
                                            </div>
                                            <span class="star-rating">
                                                    <span
                                                        style="width: 80%"
                                                    ></span>
                                            </span>
                                        </div>
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label class="single-form__label">Your review *</label>
                                            <textarea class="single-form__input"></textarea>
                                        </div>
                                        <!-- Single Form Start -->

                                        <div class="row">
                                            <div class="col-md-6">
                                                <!-- Single Form Start -->
                                                <div class="single-form">
                                                    <label class="single-form__label">Name *
                                                    </label>
                                                    <input type="text" class="single-form__input" />
                                                </div>
                                                <!-- Single Form Start -->
                                            </div>
                                            <div class="col-md-6">
                                                <!-- Single Form Start -->
                                                <div class="single-form">
                                                    <label class="single-form__label">Email *</label>
                                                    <input type="email" class="single-form__input" />
                                                </div>
                                                <!-- Single Form Start -->
                                            </div>
                                        </div>

                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <input type="checkbox" name="save" id="save" />
                                            <label class="single-form__label checkbox-label" for="save">
                                                <span></span>
                                                Save my name, email, and
                                                website in this browser
                                                for the next time I
                                                comment.
                                            </label>
                                        </div>
                                        <!-- Single Form Start -->

                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <button class="single-form__btn btn">
                                                Submit
                                            </button>
                                        </div>
                                        <!-- Single Form Start -->
                                    </div>
                                    <!-- comment Form End -->
                                </form>
                            </div>
                            <!-- Product Comment Form End -->
                        </div>
                        <!-- Product Single Review End -->
                    </div>
                </div>
            </div>
            <!-- Product Single Tabs End -->
        </div>
    </div>

    <!-- Related Product Start -->
    <div class="related-product-section section-padding-2">
        <div class="container-fluid custom-container">
            <!-- Related Title Start -->
            <div class="related-title text-center">
                <h2 class="related-title__title">Related Products</h2>
            </div>
            <!-- Related Title End -->

            <!-- Related Product Start -->
            <div class="related-product-active swiper-dot-style-1">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- Single product Start -->
                            <div class="single-product js-scroll ShortFadeInUp">
                                <div class="single-product__thumbnail">
                                    <div class="single-product__thumbnail--meta-3">
                                        <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="heart"><i class="lastudioicon-heart-2"></i></a>
                                    </div>
                                    <div class="single-product__thumbnail--badge onsale">
                                        Sale
                                    </div>
                                    <div class="single-product__thumbnail--holder">
                                        <a href="product-single.html">
                                            <img src="assets/images/products/product-01.png" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="single-product__thumbnail--meta-2">
                                        <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i
                                        class="lastudioicon-shopping-cart-3"
                                    ></i></a>
                                        <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i
                                        class="lastudioicon-ic_compare_arrows_24px"
                                    ></i></a>
                                        <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                            <i
                                        class="lastudioicon-search-zoom-in"
                                    ></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="single-product__info text-center">
                                    <div class="single-product__info--tags">
                                        <a href="#">Plant</a>
                                    </div>
                                    <h3 class="single-product__info--title">
                                        <a href="product-single.html">
                                            Viksberg planter
                                        </a>
                                    </h3>
                                    <div class="single-product__info--price">
                                        <del>$39.99</del>
                                        <ins>$29.99</ins>
                                    </div>
                                </div>
                            </div>
                            <!-- Single product End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Single product Start -->
                            <div class="single-product js-scroll ShortFadeInUp">
                                <div class="single-product__thumbnail">
                                    <div class="single-product__thumbnail--meta-3">
                                        <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="heart"><i class="lastudioicon-heart-2"></i></a>
                                    </div>
                                    <div class="single-product__thumbnail--badge onsale">
                                        Sale
                                    </div>
                                    <div class="single-product__thumbnail--holder">
                                        <a href="product-single.html">
                                            <img src="assets/images/products/product-02.png" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="single-product__thumbnail--meta-2">
                                        <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i
                                        class="lastudioicon-shopping-cart-3"
                                    ></i></a>
                                        <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i
                                        class="lastudioicon-ic_compare_arrows_24px"
                                    ></i></a>
                                        <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                            <i
                                        class="lastudioicon-search-zoom-in"
                                    ></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="single-product__info text-center">
                                    <div class="single-product__info--tags">
                                        <a href="#">Plant</a>
                                    </div>
                                    <h3 class="single-product__info--title">
                                        <a href="product-single.html">
                                            Princess set
                                        </a>
                                    </h3>
                                    <div class="single-product__info--price">
                                        <ins>$39.99</ins>
                                    </div>
                                </div>
                            </div>
                            <!-- Single product End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Single product Start -->
                            <div class="single-product js-scroll ShortFadeInUp">
                                <div class="single-product__thumbnail">
                                    <div class="single-product__thumbnail--meta-3">
                                        <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="heart"><i class="lastudioicon-heart-2"></i></a>
                                    </div>
                                    <div class="single-product__thumbnail--holder">
                                        <a href="product-single.html">
                                            <img src="assets/images/products/product-03.png" alt="Product" />
                                            <img class="product-hover" src="assets/images/products/product-11.png" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="single-product__thumbnail--meta-2">
                                        <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i
                                        class="lastudioicon-shopping-cart-3"
                                    ></i></a>
                                        <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i
                                        class="lastudioicon-ic_compare_arrows_24px"
                                    ></i></a>
                                        <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                            <i
                                        class="lastudioicon-search-zoom-in"
                                    ></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="single-product__info text-center">
                                    <div class="single-product__info--tags">
                                        <a href="#">Plant</a>
                                    </div>
                                    <h3 class="single-product__info--title">
                                        <a href="product-single.html">
                                            Senecio stapeliiformis
                                        </a>
                                    </h3>
                                    <div class="single-product__info--price">
                                        <ins>$49.99</ins>
                                    </div>
                                </div>
                            </div>
                            <!-- Single product End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Single product Start -->
                            <div class="single-product js-scroll ShortFadeInUp">
                                <div class="single-product__thumbnail">
                                    <div class="single-product__thumbnail--meta-3">
                                        <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="heart"><i class="lastudioicon-heart-2"></i></a>
                                    </div>
                                    <div class="single-product__thumbnail--badge onsale">
                                        Sale
                                    </div>
                                    <div class="single-product__thumbnail--holder">
                                        <a href="product-single.html">
                                            <img src="assets/images/products/product-04.png" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="single-product__thumbnail--meta-2">
                                        <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i
                                        class="lastudioicon-shopping-cart-3"
                                    ></i></a>
                                        <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i
                                        class="lastudioicon-ic_compare_arrows_24px"
                                    ></i></a>
                                        <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                            <i
                                        class="lastudioicon-search-zoom-in"
                                    ></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="single-product__info text-center">
                                    <div class="single-product__info--tags">
                                        <a href="#">Plant</a>
                                    </div>
                                    <h3 class="single-product__info--title">
                                        <a href="product-single.html">
                                            Outlet bundles
                                        </a>
                                    </h3>
                                    <div class="single-product__info--price">
                                        <del>$59.99</del>
                                        <ins>$39.99</ins>
                                    </div>
                                </div>
                            </div>
                            <!-- Single product End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Single product Start -->
                            <div class="single-product js-scroll ShortFadeInUp">
                                <div class="single-product__thumbnail">
                                    <div class="single-product__thumbnail--meta-3">
                                        <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="heart"><i class="lastudioicon-heart-2"></i></a>
                                    </div>
                                    <div class="single-product__thumbnail--holder">
                                        <a href="product-single.html">
                                            <img src="assets/images/products/product-05.png" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="single-product__thumbnail--meta-2">
                                        <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i
                                        class="lastudioicon-shopping-cart-3"
                                    ></i></a>
                                        <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i
                                        class="lastudioicon-ic_compare_arrows_24px"
                                    ></i></a>
                                        <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                            <i
                                        class="lastudioicon-search-zoom-in"
                                    ></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="single-product__info text-center">
                                    <div class="single-product__info--tags">
                                        <a href="#">Plant</a>
                                    </div>
                                    <h3 class="single-product__info--title">
                                        <a href="product-single.html">
                                            Hoya burtoniae
                                        </a>
                                    </h3>
                                    <div class="single-product__info--price">
                                        <ins>$29.99</ins>
                                    </div>
                                </div>
                            </div>
                            <!-- Single product End -->
                        </div>
                        <div class="swiper-slide">
                            <!-- Single product Start -->
                            <div class="single-product js-scroll ShortFadeInUp">
                                <div class="single-product__thumbnail">
                                    <div class="single-product__thumbnail--meta-3">
                                        <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="heart"><i class="lastudioicon-heart-2"></i></a>
                                    </div>
                                    <div class="single-product__thumbnail--badge onsale">
                                        Sale
                                    </div>
                                    <div class="single-product__thumbnail--holder">
                                        <a href="product-single.html">
                                            <img src="assets/images/products/product-06.png" alt="Product" />
                                        </a>
                                    </div>
                                    <div class="single-product__thumbnail--meta-2">
                                        <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart"><i
                                        class="lastudioicon-shopping-cart-3"
                                    ></i></a>
                                        <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare"><i
                                        class="lastudioicon-ic_compare_arrows_24px"
                                    ></i></a>
                                        <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                            <i
                                        class="lastudioicon-search-zoom-in"
                                    ></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="single-product__info text-center">
                                    <div class="single-product__info--tags">
                                        <a href="#">Plant</a>
                                    </div>
                                    <h3 class="single-product__info--title">
                                        <a href="product-single.html">
                                            Parodia chrysacanthion
                                        </a>
                                    </h3>
                                    <div class="single-product__info--price">
                                        <ins>$46.99</ins>
                                        <ins>$36.99</ins>
                                    </div>
                                </div>
                            </div>
                            <!-- Single product End -->
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <!-- Related Product End -->
        </div>
    </div>

    <!-- Related Product End -->

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