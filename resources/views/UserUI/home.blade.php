@extends('UserUI.layout')
@section('item')

<main>
        <!-- Slider Start -->
        <div class="slider-section slider-active">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <!-- Slider Item Start -->
                    <div class="slider-item home-1-slider-style-1 swiper-slide d-md-flex align-items-center">
                        <!-- Slider Image Start -->
                        <div class="home-1-slider-style-1__image">
                            <img src="assets/images/slider/slider-1.png" alt="slider" width="740" height="744" />
                        </div>
                        <!-- Slider Image End -->

                        <div class="container-fluid custom-container">
                            <!-- Slider Content Start -->
                            <div class="home-1-slider-content-style-1">
                                <h4 class="home-1-slider-content-style-1__sub-title">
                                    Design your home with passion
                                </h4>
                                <h2 class="home-1-slider-content-style-1__title">
                                    House Plant & Office Plant
                                </h2>

                                <ul class="home-1-slider-content-style-1__btns">
                                    <li class="button-01">
                                        <a class="home-1-slider-content-style-1__btn" href="shop-fullwidth.html">
                                            Shop now
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Slider Content End -->
                        </div>
                    </div>
                    <!-- Slider Item End -->

                    <!-- Slider Item Start -->
                    <div class="slider-item home-1-slider-style-1 swiper-slide d-md-flex align-items-center" style="
                                background-image: url(assets/images/slider/slider-bg-1.jpg);
                            ">
                        <div class="container-fluid custom-container">
                            <!-- Slider Content Start -->
                            <div class="home-1-slider-content-style-1">
                                <h4 class="home-1-slider-content-style-1__sub-title">
                                    Design your home with passion
                                </h4>
                                <h2 class="home-1-slider-content-style-1__title">
                                    Make your home green
                                </h2>

                                <ul class="home-1-slider-content-style-1__btns">
                                    <li class="button-01">
                                        <a class="home-1-slider-content-style-1__btn" href="shop-fullwidth.html">
                                            Shop now
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Slider Content End -->
                        </div>
                    </div>
                    <!-- Slider Item End -->

                    <!-- Slider Item Start -->
                    <div class="slider-item home-1-slider-style-2 swiper-slide d-md-flex align-items-center">
                        <!-- Slider Image Start -->
                        <div class="home-1-slider-style-1__image">
                            <img src="assets/images/slider/slider-2.jpg" alt="slider" width="818" height="818" />
                        </div>
                        <!-- Slider Image End -->

                        <div class="container-fluid custom-container">
                            <!-- Slider Content Start -->
                            <div class="home-1-slider-content-style-1">
                                <h4 class="home-1-slider-content-style-1__sub-title">
                                    Design your home with passion
                                </h4>
                                <h2 class="home-1-slider-content-style-1__title">
                                    Make your home green
                                </h2>

                                <ul class="home-1-slider-content-style-1__btns">
                                    <li class="button-01">
                                        <a class="home-1-slider-content-style-1__btn" href="shop-fullwidth.html">
                                            Shop now
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Slider Content End -->
                        </div>
                    </div>
                    <!-- Slider Item End -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <!-- Slider End -->

        <!-- Banner Start -->
        <div class="banner-section section-padding-1">
            <div class="container-fluid custom-container">
                <div class="row gy-4 g-xxl-5">
                    <div class="col-md-6">
                        <!-- Single Banner Start -->
                        <div class="single-banner js-scroll ShortFadeInUp">
                            <a class="single-banner__link" href="shop-fullwidth.html">
                                <div class="single-banner__image">
                                    <img src="assets/images/banner/banner-1.jpg" alt="banner" width="699" height="402" loading="lazy" />
                                </div>
                                <div class="single-banner__content">
                                    <h4 class="single-banner__title">
                                        Plant for office
                                    </h4>
                                    <p class="single-banner__sale">
                                        Sale 40%
                                    </p>
                                    <span class="single-banner__btn">
                                            Shop now
                                        </span>
                                </div>
                            </a>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                    <div class="col-md-6">
                        <!-- Single Banner Start -->
                        <div class="single-banner js-scroll ShortFadeInUp">
                            <a class="single-banner__link" href="shop-fullwidth.html">
                                <div class="single-banner__image">
                                    <img src="assets/images/banner/banner-2.jpg" alt="banner" width="699" height="402" loading="lazy" />
                                </div>
                                <div class="single-banner__content">
                                    <h4 class="single-banner__title">
                                        Rose for home
                                    </h4>
                                    <p class="single-banner__sale">
                                        Sale 40%
                                    </p>
                                    <span class="single-banner__btn">
                                            Shop now
                                        </span>
                                </div>
                            </a>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- New Arrival Start -->
        <div class="product-section section-padding-1">
            <div class="container-fluid custom-container">
                <!-- Section Title Start -->
                <div class="section-title text-center js-scroll ShortFadeInUp">
                    <h3 class="section-title__title">New Arrival</h3>
                </div>
                <!-- Section Title End -->

                <!-- Product Tab Menu Start -->
                <div class="product-tab-menu js-scroll ShortFadeInUp">
                    <ul class="nav justify-content-center" role="tablist">
                        <li role="presentation">
                            <button class="active" data-bs-toggle="tab" data-bs-target="#all" role="tab" aria-controls="all">
                                ALL
                            </button>
                        </li>
                        <li role="presentation">
                            <button data-bs-toggle="tab" data-bs-target="#offices" role="tab" aria-controls="offices">
                                OFFICES
                            </button>
                        </li>
                        <li role="presentation">
                            <button data-bs-toggle="tab" data-bs-target="#for-home" role="tab" aria-controls="for-home">
                                FOR HOME
                            </button>
                        </li>
                        <li role="presentation">
                            <button data-bs-toggle="tab" data-bs-target="#outdoor" role="tab" aria-controls="outdoor">
                                OUTDOOR
                            </button>
                        </li>
                    </ul>
                </div>
                <!-- Product Tab Menu End -->

                <!-- Product Wrapper Start -->
                <div class="product-wrapper">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="all">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-01.png" alt="Product" width="344" height="370" loading="lazy" loading="lazy" />
                                                    <img class="product-hover" src="assets/images/products/product-10.png" alt="Product" width="344" height="370" loading="lazy" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-02.png" alt="Product" width="344" height="370" loading="lazy" loading="lazy" />
                                                    <img class="product-hover" src="assets/images/products/product-11.png" alt="Product" width="344" height="370" loading="lazy" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Vassunda planter
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>$39.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-03.png" alt="Product" width="344" height="370" loading="lazy" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Plant seeds
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>$29.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-04.png" alt="Product" width="344" height="370" loading="lazy" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Parodia chrysacanthion
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>$39.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-08.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Syngonium pink spot
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-07.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Spathiphyllum domino
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>$29.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-06.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Parodia chrysacanthion
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>$19.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-05.png" alt="Product" width="344" height="370" loading="lazy" />
                                                    <img class="product-hover" src="assets/images/products/product-02.png" alt="Product" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="offices">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-01.png" alt="Product" width="344" height="370" loading="lazy" />
                                                    <img class="product-hover" src="assets/images/products/product-10.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-02.png" alt="Product" width="344" height="370" loading="lazy" />
                                                    <img class="product-hover" src="assets/images/products/product-11.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Vassunda planter
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>$39.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-03.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Plant seeds
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>$29.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-04.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Parodia chrysacanthion
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>$39.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-08.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Syngonium pink spot
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-07.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Spathiphyllum domino
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>$29.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-06.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Parodia chrysacanthion
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>$19.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-05.png" alt="Product" width="344" height="370" loading="lazy" />
                                                    <img class="product-hover" src="assets/images/products/product-02.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="for-home">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-01.png" alt="Product" width="344" height="370" loading="lazy" />
                                                    <img class="product-hover" src="assets/images/products/product-10.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-02.png" alt="Product" width="344" height="370" loading="lazy" />
                                                    <img class="product-hover" src="assets/images/products/product-11.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Vassunda planter
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>$39.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-03.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Plant seeds
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>$29.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-04.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Parodia chrysacanthion
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>$39.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-08.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Syngonium pink spot
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-07.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Spathiphyllum domino
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>$29.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-06.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Parodia chrysacanthion
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>$19.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-05.png" alt="Product" width="344" height="370" loading="lazy" />
                                                    <img class="product-hover" src="assets/images/products/product-02.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
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
                            </div>
                        </div>
                        <div class="tab-pane fade" id="outdoor">
                            <div class="row">
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-01.png" alt="Product" width="344" height="370" loading="lazy" />
                                                    <img class="product-hover" src="assets/images/products/product-10.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-02.png" alt="Product" width="344" height="370" loading="lazy" />
                                                    <img class="product-hover" src="assets/images/products/product-11.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Vassunda planter
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>$39.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-03.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Plant seeds
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>$29.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-04.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Parodia chrysacanthion
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>$39.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-08.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Syngonium pink spot
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
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-07.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Spathiphyllum domino
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>$29.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--badge onsale">
                                                Sale
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-06.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
                                            <div class="single-product__info--tags">
                                                <a href="#">Plant</a>
                                            </div>
                                            <h3 class="single-product__info--title">
                                                <a href="product-single.html">
                                                    Parodia chrysacanthion
                                                </a>
                                            </h3>
                                            <div class="single-product__info--price">
                                                <ins>$19.99</ins>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single product End -->
                                </div>
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <!-- Single product Start -->
                                    <div class="single-product js-scroll ShortFadeInUp scrolled">
                                        <div class="single-product__thumbnail">
                                            <div class="single-product__thumbnail--meta-3">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist">
                                                    <i
                                                            class="lastudioicon-heart-2"
                                                        ></i>
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--holder">
                                                <a href="product-single.html">
                                                    <img src="assets/images/products/product-05.png" alt="Product" width="344" height="370" loading="lazy" />
                                                    <img class="product-hover" src="assets/images/products/product-02.png" alt="Product" width="344" height="370" loading="lazy" />
                                                </a>
                                            </div>
                                            <div class="single-product__thumbnail--meta-2">
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to cart" data-bs-custom-class="p-meta-tooltip" aria-label="cart">
                                                    <i
                                                            class="lastudioicon-shopping-cart-3"
                                                        ></i>
                                                </a>
                                                <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to compare" data-bs-custom-class="p-meta-tooltip" aria-label="compare">
                                                    <i
                                                            class="lastudioicon-ic_compare_arrows_24px"
                                                        ></i>
                                                </a>
                                                <button data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Quickview" data-bs-custom-class="p-meta-tooltip" data-bs-toggle="modal" data-bs-target="#quickView" aria-label="zoom-in">
                                                    <i
                                                            class="lastudioicon-search-zoom-in"
                                                        ></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="single-product__info">
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
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product Wrapper End -->
            </div>
        </div>
        <!-- New Arrival End -->

        <!-- Trending Start -->
        <div class="trending-section section-padding-1 overflow-hidden">
            <div class="container-fluid custom-container">
                <!-- Section Title Start -->
                <div class="section-title text-center js-scroll ShortFadeInUp">
                    <h3 class="section-title__title">Hand pick by staff</h3>
                </div>
                <!-- Section Title End -->

                <!-- Trending Active Start -->
                <div class="trending-active">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <!-- Trending Item Start -->
                            <div class="trending-item swiper-slide js-scroll ShortFadeInUp">
                                <a class="trending-item__link" href="shop-fullwidth.html">
                                    <div class="trending-item__image">
                                        <img src="assets/images/trending/trending-1.jpg" alt="Trending" width="708" height="553" loading="lazy" />
                                    </div>
                                    <div class="trending-item__content">
                                        <p class="trending-item__title">
                                            Outdoor Plants
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <!-- Trending Item End -->

                            <!-- Trending Item Start -->
                            <div class="trending-item swiper-slide js-scroll ShortFadeInUp">
                                <a class="trending-item__link" href="shop-fullwidth.html">
                                    <div class="trending-item__image">
                                        <img src="assets/images/trending/trending-2.jpg" alt="Trending" width="708" height="553" loading="lazy" />
                                    </div>
                                    <div class="trending-item__content">
                                        <p class="trending-item__title">
                                            Office Plants
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <!-- Trending Item End -->

                            <!-- Trending Item Start -->
                            <div class="trending-item swiper-slide js-scroll ShortFadeInUp">
                                <a class="trending-item__link" href="shop-fullwidth.html">
                                    <div class="trending-item__image">
                                        <img src="assets/images/trending/trending-3.jpg" alt="Trending" width="708" height="553" loading="lazy" />
                                    </div>
                                    <div class="trending-item__content">
                                        <p class="trending-item__title">
                                            Low water
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <!-- Trending Item End -->

                            <!-- Trending Item Start -->
                            <div class="trending-item swiper-slide js-scroll ShortFadeInUp">
                                <a class="trending-item__link" href="shop-fullwidth.html">
                                    <div class="trending-item__image">
                                        <img src="assets/images/trending/trending-4.jpg" alt="Trending" width="708" height="553" loading="lazy" />
                                    </div>
                                    <div class="trending-item__content">
                                        <p class="trending-item__title">
                                            Home Plants
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <!-- Trending Item End -->
                        </div>

                        <div class="swiper-button-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
                                <path d="m11.229 1.395-10 14 10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
                            </svg>
                        </div>
                        <div class="swiper-button-next">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
                                <path d="m1.395 1.395 10 14-10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
                            </svg>
                        </div>
                    </div>
                </div>
                <!-- Trending Active End -->
            </div>
        </div>
        <!-- Trending End -->

        <!-- Testimonial Start -->
        <div class="testimonial-section section-padding">
            <div class="container-fluid custom-container">
                <!-- Section Title Start -->
                <div class="section-title text-center js-scroll ShortFadeInUp">
                    <h3 class="section-title__title">Hand pick by staff</h3>
                </div>
                <!-- Section Title End -->

                <!-- Testimonial Wrapper Start -->
                <div class="testimonial-active js-scroll ShortFadeInUp">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <!-- Testimonial Item Start -->
                            <div class="testimonial-item text-center swiper-slide">
                                <div class="testimonial-item__quote mx-auto">
                                    <div class="quote-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="67" height="67" viewBox="0 0 67 56">
                                            <path d="M0 37.882Q0 25.324 10.04 14T27.046 0l3.073 4.941a33.306 33.306 0 0 0-11.884 10.912A32.278 32.278 0 0 0 12.5 30.676a14.7 14.7 0 0 1 6.557-1.235 8.735 8.735 0 0 1 7.171 3.706q3.072 3.706 3.072 9.882A11.566 11.566 0 0 1 25 52.5 16.65 16.65 0 0 1 14.138 56a13.126 13.126 0 0 1-10.245-4.324Q0 47.147 0 37.882Zm36.881 0q0-12.559 10.04-23.882T63.927 0L67 4.941a33.306 33.306 0 0 0-11.884 10.912 32.278 32.278 0 0 0-5.737 14.824 14.7 14.7 0 0 1 6.557-1.235 8.735 8.735 0 0 1 7.171 3.706q3.073 3.706 3.073 9.882a11.566 11.566 0 0 1-4.3 9.471A16.65 16.65 0 0 1 51.018 56a13.126 13.126 0 0 1-10.245-4.324q-3.892-4.529-3.892-13.794Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="testimonial-item__description">
                                    <p>
                                        The best customer support I have
                                        ever had with themeforest templates.
                                        Thank you so much for your support,
                                        I will buy other themes by you!
                                    </p>
                                    <p>Very goog job!</p>
                                </div>
                                <div class="testimonial-item__image">
                                    <img src="assets/images/author/m2-testimonial-1.jpg" alt="Testimonial" width="80" height="80" loading="lazy" />
                                </div>
                            </div>
                            <!-- Testimonial Item End -->

                            <!-- Testimonial Item Start -->
                            <div class="testimonial-item text-center swiper-slide">
                                <div class="testimonial-item__quote mx-auto">
                                    <div class="quote-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="67" height="67" viewBox="0 0 67 56">
                                            <path d="M0 37.882Q0 25.324 10.04 14T27.046 0l3.073 4.941a33.306 33.306 0 0 0-11.884 10.912A32.278 32.278 0 0 0 12.5 30.676a14.7 14.7 0 0 1 6.557-1.235 8.735 8.735 0 0 1 7.171 3.706q3.072 3.706 3.072 9.882A11.566 11.566 0 0 1 25 52.5 16.65 16.65 0 0 1 14.138 56a13.126 13.126 0 0 1-10.245-4.324Q0 47.147 0 37.882Zm36.881 0q0-12.559 10.04-23.882T63.927 0L67 4.941a33.306 33.306 0 0 0-11.884 10.912 32.278 32.278 0 0 0-5.737 14.824 14.7 14.7 0 0 1 6.557-1.235 8.735 8.735 0 0 1 7.171 3.706q3.073 3.706 3.073 9.882a11.566 11.566 0 0 1-4.3 9.471A16.65 16.65 0 0 1 51.018 56a13.126 13.126 0 0 1-10.245-4.324q-3.892-4.529-3.892-13.794Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="testimonial-item__description">
                                    <p>
                                        The best customer support I have
                                        ever had with themeforest templates.
                                        Thank you so much for your support,
                                        I will buy other themes by you!
                                    </p>
                                    <p>Very goog job!</p>
                                </div>
                                <div class="testimonial-item__image">
                                    <img src="assets/images/author/m2-testimonial-2.jpg" alt="Testimonial" width="80" height="80" loading="lazy" />
                                </div>
                            </div>
                            <!-- Testimonial Item End -->
                        </div>
                    </div>

                    <div class="swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
                            <path d="m11.229 1.395-10 14 10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
                        </svg>
                    </div>
                    <div class="swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
                            <path d="m1.395 1.395 10 14-10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
                        </svg>
                    </div>
                </div>
                <!-- Testimonial Wrapper End -->
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Video Promotion Start -->
        <div class="video-promotion-section" style="background-image: url(assets/images/background-1.jpg)">
            <div class="container-fluid custom-container">
                <!-- Video Promotion Content Start -->
                <div class="video-promotion-content text-center js-scroll ShortFadeInUp">
                    <h4 class="video-promotion-content__sub-title">
                        Video promotion
                    </h4>
                    <h2 class="video-promotion-content__title">
                        Let make a Fresh & Green Life
                    </h2>
                    <a class="video-promotion-content__video glightbox" href="https://www.youtube.com/watch?v=haoQM8kCM6U&amp;ab_channel=LAStudio" aria-label="video">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" width="512" height="512">
                            <path d="M24.52 38.13C39.66 29.64 58.21 29.99 73.03 39.04L361 215C375.3 223.8 384 239.3 384 256C384 272.7 375.3 288.2 361 296.1L73.03 472.1C58.21 482 39.66 482.4 24.52 473.9C9.377 465.4 0 449.4 0 432V80C0 62.64 9.377 46.63 24.52 38.13V38.13zM56.34 66.35C51.4 63.33 45.22 63.21 40.17 66.04C35.13 68.88 32 74.21 32 80V432C32 437.8 35.13 443.1 40.17 445.1C45.22 448.8 51.41 448.7 56.34 445.7L344.3 269.7C349.1 266.7 352 261.6 352 256C352 250.4 349.1 245.3 344.3 242.3L56.34 66.35z" fill="currentColor"></path>
                        </svg>
                    </a>
                </div>
                <!-- Video Promotion Content End -->
            </div>
        </div>
        <!-- Video Promotion End -->

        <!-- About Start -->
        <div class="about-section section-padding">
            <div class="container-fluid about-container">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-5">
                        <!-- About Content Start -->
                        <div class="about-content js-scroll ShortFadeInUp">
                            <h4 class="about-content__sub-title">
                                Little about us
                            </h4>
                            <h2 class="about-content__title">
                                Designed to Fit your Home
                            </h2>
                            <div class="about-content__description">
                                <p>
                                    Proin volutpat vitae libero at
                                    tincidunt. Maecenas sapien lectus,
                                    vehicula vel euismod sed, vulputate a
                                    lorem. Integer at tristique libero.
                                    Nullam porta eleifend metus a interdum.
                                    Pellentesque vehicula rutrum gravida.
                                    Maecenas ullamcorper
                                </p>
                            </div>
                            <a class="about-content__btn" href="about.html">
                                Learn more
                            </a>
                        </div>
                        <!-- About Content End -->
                    </div>
                    <div class="col-lg-7">
                        <!-- About Image Start -->
                        <div class="about-image js-scroll ShortFadeInUp">
                            <img src="assets/images/about-bg-2.jpg" alt="About Image" width="1053" height="730" loading="lazy" />
                        </div>
                        <!-- About Image End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Discover Start -->
        <div class="discover-section section-padding">
            <div class="container-fluid custom-container">
                <!-- Section Title Start -->
                <div class="section-title text-center js-scroll ShortFadeInUp">
                    <h3 class="section-title__title">Discover more</h3>
                </div>
                <!-- Section Title End -->

                <!-- Discover Wrapper Start -->
                <div class="discover-wrapper discover-active navigation-arrows-style-3">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <!-- Discover Item Start -->
                            <div class="discover-item swiper-slide js-scroll ShortFadeInUp">
                                <a class="discover-item__link" href="shop-fullwidth.html">
                                    <div class="discover-item__image">
                                        <img src="assets/images/discover/discover-1.jpg" alt="Discover" width="290" height="240" loading="lazy" />
                                    </div>
                                    <div class="discover-item__content text-center">
                                        Name of item
                                    </div>
                                </a>
                            </div>
                            <!-- Discover Item End -->

                            <!-- Discover Item Start -->
                            <div class="discover-item swiper-slide js-scroll ShortFadeInUp">
                                <a class="discover-item__link" href="shop-fullwidth.html">
                                    <div class="discover-item__image">
                                        <img src="assets/images/discover/discover-2.jpg" alt="Discover" width="290" height="240" loading="lazy" />
                                    </div>
                                    <div class="discover-item__content text-center">
                                        Name of item
                                    </div>
                                </a>
                            </div>
                            <!-- Discover Item End -->

                            <!-- Discover Item Start -->
                            <div class="discover-item swiper-slide js-scroll ShortFadeInUp">
                                <a class="discover-item__link" href="shop-fullwidth.html">
                                    <div class="discover-item__image">
                                        <img src="assets/images/discover/discover-3.jpg" alt="Discover" width="290" height="240" loading="lazy" />
                                    </div>
                                    <div class="discover-item__content text-center">
                                        Name of item
                                    </div>
                                </a>
                            </div>
                            <!-- Discover Item End -->

                            <!-- Discover Item Start -->
                            <div class="discover-item swiper-slide js-scroll ShortFadeInUp">
                                <a class="discover-item__link" href="shop-fullwidth.html">
                                    <div class="discover-item__image">
                                        <img src="assets/images/discover/discover-4.jpg" alt="Discover" width="290" height="240" loading="lazy" />
                                    </div>
                                    <div class="discover-item__content text-center">
                                        Name of item
                                    </div>
                                </a>
                            </div>
                            <!-- Discover Item End -->
                        </div>
                    </div>

                    <div class="swiper-button-prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
                            <path d="m11.229 1.395-10 14 10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
                        </svg>
                    </div>
                    <div class="swiper-button-next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12.624" height="30.79" viewBox="0 0 12.624 30.79">
                            <path d="m1.395 1.395 10 14-10 14" fill="none" stroke="currentColor" stroke-linecap="square" stroke-miterlimit="10" stroke-width="2"></path>
                        </svg>
                    </div>
                </div>
                <!-- Discover Wrapper End -->
            </div>
        </div>
        <!-- Discover End -->

        <!-- Instagram Start -->
        <div class="instagram-section section-padding">
            <div class="container-fluid custom-container">
                <!-- Section Title Start -->
                <div class="section-title text-center js-scroll ShortFadeInUp">
                    <h3 class="section-title__title">
                        #Follow us on Instagram
                    </h3>
                </div>
                <!-- Section Title End -->

                <!-- Instagram Wrapper Start -->
                <div class="instagram-wrapper">
                    <div class="row gy-4">
                        <div class="col-md-6">
                            <!-- Instagram Item Start -->
                            <div class="instagram-item js-scroll ShortFadeInUp">
                                <a href="#">
                                    <div class="instagram-item__image">
                                        <img src="assets/images/instagram/instagram-01.jpg" alt="Instagram" width="711" height="716" loading="lazy" />
                                    </div>
                                    <div class="instagram-item__icon">
                                        <i
                                                class="lastudioicon-b-instagram"
                                            ></i>
                                    </div>
                                </a>
                            </div>
                            <!-- Instagram Item End -->
                        </div>
                        <div class="col-md-6">
                            <!-- Instagram Item Start -->
                            <div class="instagram-item js-scroll ShortFadeInUp">
                                <a href="#">
                                    <div class="instagram-item__image">
                                        <img src="assets/images/instagram/instagram-02.jpg" alt="Instagram" width="711" height="342" loading="lazy" />
                                    </div>
                                    <div class="instagram-item__icon">
                                        <i
                                                class="lastudioicon-b-instagram"
                                            ></i>
                                    </div>
                                </a>
                            </div>
                            <!-- Instagram Item End -->

                            <!-- Instagram Item Start -->
                            <div class="instagram-item js-scroll ShortFadeInUp">
                                <a href="#">
                                    <div class="instagram-item__image">
                                        <img src="assets/images/instagram/instagram-03.jpg" alt="Instagram" width="711" height="342" loading="lazy" />
                                    </div>
                                    <div class="instagram-item__icon">
                                        <i
                                                class="lastudioicon-b-instagram"
                                            ></i>
                                    </div>
                                </a>
                            </div>
                            <!-- Instagram Item End -->
                        </div>
                    </div>
                </div>
                <!-- Instagram Wrapper End -->
            </div>
        </div>
        <!-- Instagram End -->
    </main>

@endsection
