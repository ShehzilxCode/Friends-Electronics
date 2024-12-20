@extends('UserUI.layout')
@section('item')

<main>
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-section">
        <div class="container-fluid custom-container">
            <div class="breadcrumb-wrapper text-center">
                <h2 class="breadcrumb-wrapper__title">Shop Sidebar</h2>
                <ul class="breadcrumb-wrapper__items justify-content-center">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Shop</span></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Start -->
    <div class="shop-section section-padding-2">
        <div class="container-fluid custom-container">
            <!-- Shop Wrapper Start -->
            <div class="shop-wrapper">
                <div class="row gy-5">
                    <div class="col-lg-9">
                        <!-- Shop Filter Start -->
                        <div class="shop-filter">
                            <!-- Shop Filter Default Start -->
                            <div class="shop-filter-default justify-content-between align-items-center">
                                <!-- Shop Filter Count Start -->
                                <div class="shop-filter-count d-none d-sm-block">
                                    Showing 1–12 of 90 results
                                </div>
                                <!-- Shop Filter Count End -->

                                <!-- Shop Filter Sort By Start -->
                                <div class="shop-filter-sort-by">
                                    <div class="shop-filter-sort-by__label">
                                        <span>Sort by Default</span>
                                        <i
                                                class="lastudioicon-down-arrow"
                                            ></i>
                                    </div>
                                    <ul class="shop-filter-sort-by__dropdown">
                                        <li class="active">
                                            <a href="#">Sort by Default</a>
                                        </li>
                                        <li>
                                            <a href="#">Sort by Popularity</a>
                                        </li>
                                        <li>
                                            <a href="#">Sort by Rated</a>
                                        </li>
                                        <li>
                                            <a href="#">Sort by Latest</a>
                                        </li>
                                        <li>
                                            <a href="#">Sort by Price:
                                                <i
                                                        class="lastudioicon-arrow-up"
                                                    ></i></a>
                                        </li>
                                        <li>
                                            <a href="#">Sort by Price:
                                                <i
                                                        class="lastudioicon-arrow-down"
                                                    ></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Shop Filter Sort By End -->
                            </div>
                            <!-- Shop Filter Default End -->
                        </div>
                        <!-- Shop Filter End -->

                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <!-- Single product Start -->
                                <div class="single-product js-scroll ShortFadeInUp">
                                    <div class="single-product__thumbnail">
                                        <div class="single-product__thumbnail--meta-3">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                        class="lastudioicon-heart-2"
                                                    ></i></a>
                                        </div>
                                        <div class="single-product__thumbnail--badge onsale">
                                            Sale
                                        </div>
                                        <div class="single-product__thumbnail--holder">
                                            <a href="product-single.html">
                                                <img src="assets/images/products/product-01.png" alt="Product" width="344" height="370" />
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
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <!-- Single product Start -->
                                <div class="single-product js-scroll ShortFadeInUp">
                                    <div class="single-product__thumbnail">
                                        <div class="single-product__thumbnail--meta-3">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                        class="lastudioicon-heart-2"
                                                    ></i></a>
                                        </div>
                                        <div class="single-product__thumbnail--badge onsale">
                                            Sale
                                        </div>
                                        <div class="single-product__thumbnail--holder">
                                            <a href="product-single.html">
                                                <img src="assets/images/products/product-02.png" alt="Product" width="344" height="370" />
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
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <!-- Single product Start -->
                                <div class="single-product js-scroll ShortFadeInUp">
                                    <div class="single-product__thumbnail">
                                        <div class="single-product__thumbnail--meta-3">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                        class="lastudioicon-heart-2"
                                                    ></i></a>
                                        </div>
                                        <div class="single-product__thumbnail--holder">
                                            <a href="product-single.html">
                                                <img src="assets/images/products/product-03.png" alt="Product" width="344" height="370" />
                                                <img class="product-hover" src="assets/images/products/product-11.png" alt="Product" width="344" height="370" />
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
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <!-- Single product Start -->
                                <div class="single-product js-scroll ShortFadeInUp">
                                    <div class="single-product__thumbnail">
                                        <div class="single-product__thumbnail--meta-3">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                        class="lastudioicon-heart-2"
                                                    ></i></a>
                                        </div>
                                        <div class="single-product__thumbnail--badge onsale">
                                            Sale
                                        </div>
                                        <div class="single-product__thumbnail--holder">
                                            <a href="product-single.html">
                                                <img src="assets/images/products/product-04.png" alt="Product" width="344" height="370" />
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
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <!-- Single product Start -->
                                <div class="single-product js-scroll ShortFadeInUp">
                                    <div class="single-product__thumbnail">
                                        <div class="single-product__thumbnail--meta-3">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                        class="lastudioicon-heart-2"
                                                    ></i></a>
                                        </div>
                                        <div class="single-product__thumbnail--holder">
                                            <a href="product-single.html">
                                                <img src="assets/images/products/product-05.png" alt="Product" width="344" height="370" />
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
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <!-- Single product Start -->
                                <div class="single-product js-scroll ShortFadeInUp">
                                    <div class="single-product__thumbnail">
                                        <div class="single-product__thumbnail--meta-3">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                        class="lastudioicon-heart-2"
                                                    ></i></a>
                                        </div>
                                        <div class="single-product__thumbnail--badge onsale">
                                            Sale
                                        </div>
                                        <div class="single-product__thumbnail--holder">
                                            <a href="product-single.html">
                                                <img src="assets/images/products/product-06.png" alt="Product" width="344" height="370" />
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
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <!-- Single product Start -->
                                <div class="single-product js-scroll ShortFadeInUp">
                                    <div class="single-product__thumbnail">
                                        <div class="single-product__thumbnail--meta-3">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                        class="lastudioicon-heart-2"
                                                    ></i></a>
                                        </div>
                                        <div class="single-product__thumbnail--holder">
                                            <a href="product-single.html">
                                                <img src="assets/images/products/product-07.png" alt="Product" width="344" height="370" />
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
                                                Spathiphyllum domino
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
                                <div class="single-product js-scroll ShortFadeInUp">
                                    <div class="single-product__thumbnail">
                                        <div class="single-product__thumbnail--meta-3">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                        class="lastudioicon-heart-2"
                                                    ></i></a>
                                        </div>
                                        <div class="single-product__thumbnail--holder">
                                            <a href="product-single.html">
                                                <img src="assets/images/products/product-08.png" alt="Product" width="344" height="370" />
                                                <img class="product-hover" src="assets/images/products/product-06.png" alt="Product" width="344" height="370" />
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
                                                Syngonium pink spot
                                            </a>
                                        </h3>
                                        <div class="single-product__info--price">
                                            <ins>$79.99</ins>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single product End -->
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <!-- Single product Start -->
                                <div class="single-product js-scroll ShortFadeInUp">
                                    <div class="single-product__thumbnail">
                                        <div class="single-product__thumbnail--meta-3">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                        class="lastudioicon-heart-2"
                                                    ></i></a>
                                        </div>
                                        <div class="single-product__thumbnail--holder">
                                            <a href="product-single.html">
                                                <img src="assets/images/products/product-09.png" alt="Product" width="344" height="370" />
                                                <img class="product-hover" src="assets/images/products/product-10.png" alt="Product" width="344" height="370" />
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
                                            <ins>$55.99</ins>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single product End -->
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <!-- Single product Start -->
                                <div class="single-product js-scroll ShortFadeInUp">
                                    <div class="single-product__thumbnail">
                                        <div class="single-product__thumbnail--meta-3">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                        class="lastudioicon-heart-2"
                                                    ></i></a>
                                        </div>
                                        <div class="single-product__thumbnail--badge out-of-stock">
                                            Out of stock
                                        </div>
                                        <div class="single-product__thumbnail--holder">
                                            <a href="product-single.html">
                                                <img src="assets/images/products/product-11.png" alt="Product" width="344" height="370" />
                                                <img class="product-hover" src="assets/images/products/product-02.png" alt="Product" width="344" height="370" />
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
                                                Vassunda planter
                                            </a>
                                        </h3>
                                        <div class="single-product__info--price">
                                            <ins>$45.99</ins>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single product End -->
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <!-- Single product Start -->
                                <div class="single-product js-scroll ShortFadeInUp">
                                    <div class="single-product__thumbnail">
                                        <div class="single-product__thumbnail--meta-3">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                        class="lastudioicon-heart-2"
                                                    ></i></a>
                                        </div>
                                        <div class="single-product__thumbnail--holder">
                                            <a href="product-single.html">
                                                <img src="assets/images/products/product-03.png" alt="Product" width="344" height="370" />
                                                <img class="product-hover" src="assets/images/products/product-08.png" alt="Product" width="344" height="370" />
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
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <!-- Single product Start -->
                                <div class="single-product js-scroll ShortFadeInUp">
                                    <div class="single-product__thumbnail">
                                        <div class="single-product__thumbnail--meta-3">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                        class="lastudioicon-heart-2"
                                                    ></i></a>
                                        </div>
                                        <div class="single-product__thumbnail--holder">
                                            <a href="product-single.html">
                                                <img src="assets/images/products/product-07.png" alt="Product" width="344" height="370" />
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
                                                Spathiphyllum domino
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
                                <div class="single-product js-scroll ShortFadeInUp">
                                    <div class="single-product__thumbnail">
                                        <div class="single-product__thumbnail--meta-3">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                        class="lastudioicon-heart-2"
                                                    ></i></a>
                                        </div>
                                        <div class="single-product__thumbnail--badge onsale">
                                            Sale
                                        </div>
                                        <div class="single-product__thumbnail--holder">
                                            <a href="product-single.html">
                                                <img src="assets/images/products/product-01.png" alt="Product" width="344" height="370" />
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
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <!-- Single product Start -->
                                <div class="single-product js-scroll ShortFadeInUp">
                                    <div class="single-product__thumbnail">
                                        <div class="single-product__thumbnail--meta-3">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                        class="lastudioicon-heart-2"
                                                    ></i></a>
                                        </div>
                                        <div class="single-product__thumbnail--holder">
                                            <a href="product-single.html">
                                                <img src="assets/images/products/product-03.png" alt="Product" width="344" height="370" />
                                                <img class="product-hover" src="assets/images/products/product-11.png" alt="Product" width="344" height="370" />
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
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <!-- Single product Start -->
                                <div class="single-product js-scroll ShortFadeInUp">
                                    <div class="single-product__thumbnail">
                                        <div class="single-product__thumbnail--meta-3">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                        class="lastudioicon-heart-2"
                                                    ></i></a>
                                        </div>
                                        <div class="single-product__thumbnail--badge onsale">
                                            Sale
                                        </div>
                                        <div class="single-product__thumbnail--holder">
                                            <a href="product-single.html">
                                                <img src="assets/images/products/product-06.png" alt="Product" width="344" height="370" />
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
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <!-- Single product Start -->
                                <div class="single-product js-scroll ShortFadeInUp">
                                    <div class="single-product__thumbnail">
                                        <div class="single-product__thumbnail--meta-3">
                                            <a href="#" data-bs-tooltip="tooltip" data-bs-placement="top" data-bs-title="Add to wishlist" data-bs-custom-class="p-meta-tooltip" aria-label="wishlist"><i
                                                        class="lastudioicon-heart-2"
                                                    ></i></a>
                                        </div>
                                        <div class="single-product__thumbnail--holder">
                                            <a href="product-single.html">
                                                <img src="assets/images/products/product-08.png" alt="Product" width="344" height="370" />
                                                <img class="product-hover" src="assets/images/products/product-02.png" alt="Product" width="344" height="370" />
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
                                                Syngonium pink spot
                                            </a>
                                        </h3>
                                        <div class="single-product__info--price">
                                            <ins>$79.99</ins>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single product End -->
                            </div>
                        </div>

                        <!-- Pagination Start -->
                        <div class="paginations">
                            <ul class="paginations-list">
                                <li>
                                    <a href="#"><i
                                                class="lastudioicon-arrow-left"
                                            ></i></a>
                                </li>
                                <li>
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a class="active" href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">...</a>
                                </li>
                                <li>
                                    <a href="#">10</a>
                                </li>
                                <li>
                                    <a href="#"><i
                                                class="lastudioicon-arrow-right"
                                            ></i></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Pagination End -->
                    </div>
                    <div class="col-lg-3">
                        <!-- Sidebar Shop Filter widget Start -->
                        <div class="sidebar-shop-filter-widget">
                            <!-- Sidebar widget Item Start -->
                            <div class="sidebar-widget-item">
                                <h4 class="sidebar-widget-item__title">
                                    Category
                                </h4>
                                <div class="sidebar-widget-item__filter category-filter">
                                    <ul class="sidebar-widget-item__list category" id="category-section">
                                    

                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar widget Item End -->

                            <!-- Sidebar widget Item Start -->
                            <div class="sidebar-widget-item">
                                <h4 class="sidebar-widget-item__title">
                                    Price
                                </h4>
                                <div class="sidebar-widget-item__filter price-range-filter">
                                    <form action="#">
                                        <div class="filter-slider">
                                            <div class="filter-progress"></div>
                                        </div>
                                        <div class="filter-range-input">
                                            <input type="range" class="range-min" min="0" max="500" value="10" step="10" />
                                            <input type="range" class="range-max" min="0" max="500" value="90" step="10" />
                                        </div>
                                        <p class="filter-price-value">
                                            Price:
                                            <input type="text" class="input-min" value="$10" />
                                            <span>—</span>
                                            <input type="text" class="input-max" value="$90" />
                                        </p>
                                        <button type="button" class="filter-price-btn">
                                            Filter
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!-- Sidebar widget Item End -->

                            <!-- Sidebar widget Item Start -->
                            <div class="sidebar-widget-item">
                                <h4 class="sidebar-widget-item__title">
                                    Size
                                </h4>
                                <div class="sidebar-widget-item__filter">
                                    <ul class="sidebar-widget-item__list-2">
                                        <li>
                                            <input type="checkbox" id="size-1" />
                                            <label for="size-1">
                                                09</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size-2" />
                                            <label for="size-2">
                                                10</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size-3" />
                                            <label for="size-3">
                                                12</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size-4" />
                                            <label for="size-4">
                                                14</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size-5" />
                                            <label for="size-5">
                                                18</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size-6" />
                                            <label for="size-6">
                                                M</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size-7" />
                                            <label for="size-7">
                                                S</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="size-8" />
                                            <label for="size-8">
                                                X</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar widget Item End -->

                            <!-- Sidebar widget Item Start -->
                            <div class="sidebar-widget-item">
                                <h4 class="sidebar-widget-item__title">
                                    Color
                                </h4>
                                <div class="sidebar-widget-item__filter">
                                    <ul class="sidebar-widget-item__color">
                                        <li>
                                            <input type="checkbox" id="blue" />
                                            <label for="blue">
                                                <span
                                                        class="blue"
                                                    ></span>Blue</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="bronze" />
                                            <label for="bronze">
                                                <span
                                                        class="bronze"
                                                    ></span>Bronze</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="green" />
                                            <label for="green">
                                                <span
                                                        class="green"
                                                    ></span>Green</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="pink" />
                                            <label for="pink">
                                                <span
                                                        class="pink"
                                                    ></span>Pink</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="polar-blue" />
                                            <label for="polar-blue">
                                                <span
                                                        class="polar-blue"
                                                    ></span>Polar Blue</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="red" />
                                            <label for="red">
                                                <span class="red"></span>Red</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="white" />
                                            <label for="white">
                                                <span
                                                        class="white"
                                                    ></span>White</label>
                                        </li>
                                        <li>
                                            <input type="checkbox" id="yellow" />
                                            <label for="yellow">
                                                <span
                                                        class="yellow"
                                                    ></span>Yellow</label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar widget Item End -->

                            <!-- Sidebar widget Banner Start -->
                            <div class="sidebar-widget-banner" style="
                                        background-image: url(assets/images/shop-sidebar-banner.jpg);
                                    ">
                                <h2 class="sidebar-widget-banner__title">
                                    NEW NOW
                                </h2>
                                <h4 class="sidebar-widget-banner__sub-title">
                                    WARM WOOL PREMIUM COAT
                                </h4>
                                <a href="#" class="sidebar-widget-banner__btn">Add to bag</a>
                            </div>
                            <!-- Sidebar widget Banner End -->
                        </div>
                        <!-- Sidebar Shop Filter widget End -->
                    </div>
                </div>
            </div>
            <!-- Shop Wrapper End -->
        </div>
    </div>
    <!-- Shop End -->

    <!-- Newsletter Start -->
    <div class="newsletter-section">
        <div class="newsletter-left" style="
                    background-image: url(assets/images/newsletter-bg-1.jpg);
                ">
            <div class="newsletter-social">
                <h4 class="newsletter-social__label">Follow us on</h4>
                <ul class="newsletter-social__list">
                    <li>
                        <a href="#" aria-label="facebook"><i class="lastudioicon-b-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#" aria-label="twitter"><i class="lastudioicon-b-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#" aria-label="instagram"><i class="lastudioicon-b-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#" aria-label="vimeo"><i class="lastudioicon-b-vimeo"></i></a>
                    </li>
                    <li>
                        <a href="#" aria-label="envato"><i class="lastudioicon-envato"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="newsletter-right" style="
                    background-image: url(assets/images/newsletter-bg-2.jpg);
                ">
            <!-- Newsletter Wrapper Start -->
            <div class="newsletter-wrapper text-center">
                <h4 class="newsletter-wrapper__title-2">
                    10% off when you sign up
                </h4>
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
</main>

@endsection

@push('scripts')
<script>
          function fetchdata() {
            $.ajax({
                url: '{{ route('categroy.fetch') }}',
                type: 'get',
                success: function(response) {
                    console.log(response)
                    if (response.data.length > 0) {

                        $('#categorydropdown').append(`
                                <option selected disabled>Choose Category</option>
                            `)
                        for (let i = 0; i < response.data.length; i++) {
                            var status = response.data[i]['Status']
                            console.log(status)
                            if(status == 0){

                                $('#category-section').append(`
                                   <li>
                                            <input type="checkbox" id="category-1" value="`+ response.data[i]['id'] +`" />
                                            <label for="category-1">
                                                <span></span>` + response.data[i]['Category'] + `</label>
                                        </li>

                                `)
                            }

                        }
                    } else {
                        $('#category-section').append('<option selected disabled >No Data</option>')
                    }
                },
                error: function(e) {
                    console.log(e.responseText)
                }
            })
        };
        fetchdata();
</script>

@endpush
