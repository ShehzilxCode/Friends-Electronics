<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Plantfy - Plants Store Website Template</title>

    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Plantfy - Plants Store Website Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300;400;500;600;700&amp;display=swap" rel="stylesheet" />

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lastudioicon.css" />

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/nice-select2.css" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.min.css" />
</head>


<body>

<!-- Header -->
     <!-- Header Start -->
     <header class="header bg-white header-height">
        <!-- Header Top Start -->
        <div class="header__top">
            <div class="container-fluid custom-container">
                <div class="header__top--wrapper justify-content-center">
                    <p>Free shipping order over $150</p>
                </div>
            </div>
        </div>
        <!-- Header Top End -->

        <!-- Header Middle Start -->
        <div class="header__middle d-flex align-items-center">
            <div class="container-fluid custom-container">
                <div class="header-mid-row align-items-center">
                    <div class="header-mid-col-1">
                        <!-- Header Middle Logo Start -->
                        <div class="header-mid-logo">
                            <a href="#">
                                <img src="assets/images/logo.png" alt="Logo" width="140" height="25" />
                            </a>
                        </div>
                        <!-- Header Middle Logo End -->
                    </div>
                    <div class="header-mid-col-2 d-none d-md-block">
                        <!-- Header Middle Search Start -->
                        <div class="header-mid-info">
                            <ul class="header-mid-info__items justify-content-center">
                                <li>
                                    <a href="mailto:info.expmale@mail.com" aria-label="mail">
                                        <i class="lastudioicon-mail-2"></i>
                                        <span>info.expmale@mail.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:+(867)195-6696" aria-label="phone">
                                        <i class="lastudioicon-phone-1"></i>
                                        <span>(867)195-6696</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" aria-label="map">
                                        <i class="lastudioicon-pin-3-1"></i>
                                        <span>Los Angeles</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Header Middle Search End -->
                    </div>
                    <div class="header-mid-col-1">
                        <div class="d-flex justify-content-end align-items-center">
                            <!-- Header Middle Meta Start -->
                            <div class="header-mid-meta">
                                <ul class="header-mid-meta__item justify-content-end">
                                    <li class="d-none d-md-block">
                                        <button data-bs-toggle="modal" data-bs-target="#SearchModal" aria-label="Search">
                                            <i class="lastudioicon-zoom-1"></i>
                                        </button>
                                    </li>
                                    <li>
                                        <a href="/my-account" aria-label="My Account">
                                            <i class="lastudioicon-single-01-2"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/wishlist" aria-label="Wishlist">
                                            <i class="lastudioicon-heart-2"></i>
                                            <span class="badge">03</span>
                                        </a>
                                    </li>
                                    <li>
                                        <button data-bs-toggle="offcanvas" data-bs-target="#cartSidebar" aria-label="Cart">
                                            <i class="lastudioicon-bag-20"></i>
                                            <span class="badge">03</span>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            <!-- Header Middle Meta End -->

                            <!-- Header Middle Toggle Start -->
                            <div class="header-mid-toggle text-end d-lg-none">
                                <button class="header__main--toggle header__main--toggle-dark" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-label="Menu">
                                    <i class="lastudioicon-menu-4-2"></i>
                                </button>
                            </div>
                            <!-- Header Middle Toggle End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Middle End -->

        <!-- Header Main Start -->
        <div class="header__main-2 d-none d-lg-flex align-items-center">
            <div class="container-fluid custom-container">
                <!-- Header Main Menu Start -->
                <div class="header__main-2-menu">
                    <!-- Menu Item List Start -->
                    <ul class="menu-items-list menu-items-list--2 justify-content-center d-flex">
                        <li>
                            <a class="active" href="/">
                                HOME 
                            </a>
                        
                        </li>
                        <li>
                            <a href="/shop">SHOP </a>             
                        </li>
                        <li class="position-static">
                             <a href="/about">ABOUT </a>
                            
                        </li>
                        <li class="position-static">
                            <a href="/contact">CONTACT </a>
                      
                        </li>
                     

                    </ul>
                    <!-- Menu Item List End -->
                </div>
                <!-- Header Main Menu Start -->
            </div>
        </div>
        <!-- Header Main End -->
    </header>

    <!-- Header End -->

    <!-- Cart Sidebar Start -->
    <!-- Cart Offcanvas Start -->
    <div class="offcanvas offcanvas-end cart-offcanvas" id="cartSidebar">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">My Cart</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="remove">
                <i class="lastudioicon-e-remove"></i>
            </button>
        </div>
        <div class="offcanvas-body">
            <ul class="offcanvas-cart-list">
                <li>
                    <!-- Offcanvas Cart Item Start -->
                    <div class="offcanvas-cart-item">
                        <div class="offcanvas-cart-item__thumbnail">
                            <a href="#">
                                <img src="assets/images/products/product-02.png" width="70" height="84" alt="product" />
                            </a>
                        </div>
                        <div class="offcanvas-cart-item__content">
                            <h4 class="offcanvas-cart-item__title">
                                <a href="#">Princess set</a>
                            </h4>
                            <span class="offcanvas-cart-item__quantity">
                            1 × $69.99
                        </span>
                        </div>
                        <a class="offcanvas-cart-item__remove" href="#" aria-label="remove">
                            <i class="lastudioicon-e-remove"></i>
                        </a>
                    </div>
                    <!-- Offcanvas Cart Item End -->
                </li>
                <li>
                    <!-- Offcanvas Cart Item Start -->
                    <div class="offcanvas-cart-item">
                        <div class="offcanvas-cart-item__thumbnail">
                            <a href="#">
                                <img src="assets/images/products/product-04.png" width="70" height="84" alt="product" />
                            </a>
                        </div>
                        <div class="offcanvas-cart-item__content">
                            <h4 class="offcanvas-cart-item__title">
                                <a href="#">Senecio stapeliiformis </a>
                            </h4>
                            <span class="offcanvas-cart-item__quantity">
                            1 × $89.99
                        </span>
                        </div>
                        <a class="offcanvas-cart-item__remove" href="#" aria-label="remove">
                            <i class="lastudioicon-e-remove"></i>
                        </a>
                    </div>
                    <!-- Offcanvas Cart Item End -->
                </li>
                <li>
                    <!-- Offcanvas Cart Item Start -->
                    <div class="offcanvas-cart-item">
                        <div class="offcanvas-cart-item__thumbnail">
                            <a href="#">
                                <img src="assets/images/products/product-05.png" width="70" height="84" alt="product" />
                            </a>
                        </div>
                        <div class="offcanvas-cart-item__content">
                            <h4 class="offcanvas-cart-item__title">
                                <a href="#">Hoya burtoniae </a>
                            </h4>
                            <span class="offcanvas-cart-item__quantity">
                            1 × $35.99
                        </span>
                        </div>
                        <a class="offcanvas-cart-item__remove" href="#" aria-label="remove">
                            <i class="lastudioicon-e-remove"></i>
                        </a>
                    </div>
                    <!-- Offcanvas Cart Item End -->
                </li>
            </ul>
        </div>
        <div class="offcanvas-footer">
            <!-- Free Shipping Goal Start-->
            <div class="free-shipping-goal">
                <div class="free-shipping-goal__label text-center">
                    Buy $3.03 more to enjoy
                    <strong>FREE Shipping</strong>
                </div>
                <div class="free-shipping-goal__loading-bar">
                    <div class="load-percent" style="width: 98.49%"></div>
                </div>
            </div>
            <!-- Free Shipping Goal End-->

            <!-- Cart Meta Start-->
            <ul class="cart-meta">
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                                <path d="m9.5 2.5 3 3M1.5 10.5l3 3M11.5.5l3 3-10 10-4 1 1-4Z"></path>
                            </g>
                        </svg>
                        <span>Note</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15.313" height="16" viewBox="0 0 15.313 16">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m.656 3.5 7 3 7-3M7.656 15.5v-9"></path>
                                <path d="m.656 12.5 7 3 7-3v-9l-7-3-7 3Z"></path>
                            </g>
                        </svg>
                        <span>Shipping</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14">
                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10">
                                <path d="M5.5 4.5h5M5.5 9.5h5M13.5 7.5a2 2 0 0 1 2-2v-4a1 1 0 0 0-1-1h-13a1 1 0 0 0-1 1V5a2 2 0 0 1 0 4v3.5a1 1 0 0 0 1 1h13a1 1 0 0 0 1-1v-3a2 2 0 0 1-2-2Z"></path>
                            </g>
                        </svg>
                        <span>Coupon</span>
                    </a>
                </li>
            </ul>
            <!-- Cart Meta End-->

            <!-- Cart Totals Table Start-->
            <div class="cart-totals-table">
                <table class="table">
                    <tbody>
                        <tr class="cart-subtotal">
                            <th>Subtotal</th>
                            <td>
                                <span>$195.97</span>
                            </td>
                        </tr>

                        <tr class="cart-shipping-totals">
                            <th>Shipping</th>
                            <td>
                                <ul class="shipping-methods">
                                    <li class="single-form">
                                        <input type="radio" name="shipping" id="flat-rate" />
                                        <label for="flat-rate" class="single-form__label radio-label">
                                            <span></span>
                                            Flat rate:
                                            <strong class="price">$20.00</strong>
                                        </label>
                                    </li>
                                    <li class="single-form">
                                        <input type="radio" name="shipping" id="local-pickup" />
                                        <label for="local-pickup" class="single-form__label radio-label">
                                            <span></span>
                                            Local pickup</label>
                                    </li>
                                </ul>
                            </td>
                        </tr>

                        <tr class="order-total">
                            <th>Total</th>
                            <td data-title="Total">
                                <strong><span>$215.97</span></strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Cart Totals Table End-->

            <!-- Cart Buttons End-->
            <div class="cart-buttons">
                <a href="/checkout" class="cart-buttons__btn-1 btn">Checkout</a>
                <a href="/cart" class="cart-buttons__btn-2 btn">View Cart</a>
            </div>
            <!-- Cart Buttons End-->
        </div>
    </div>
    <!-- Cart Offcanvas End -->

    <!-- Cart Sidebar End -->

    <!-- Search Start -->
    <div class="search-modal modal fade" id="SearchModal">
        <!-- Search Close Start -->
        <button class="search-modal__close" data-bs-dismiss="modal" aria-label="remove">
            <i class="lastudioicon-e-remove"></i>
        </button>
        <!-- Search Close End  -->

        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Search Form Start  -->
                <div class="search-modal__form">
                    <form action="#">
                        <input type="text" placeholder="Search product…" />
                        <button class="" aria-label="search">
                            <i class="lastudioicon-zoom-1"></i>
                        </button>
                    </form>
                </div>
                <!-- Search Form End  -->
            </div>
        </div>
    </div>

    <!-- Search End -->

    <!-- Offcanvas Menu Start -->
    <div class="offcanvas offcanvas-end offcanvas-sidebar" tabindex="-1" id="offcanvasSidebar">
        <button type="button" class="offcanvas-sidebar__close" data-bs-dismiss="offcanvas" aria-label="remove">
            <i class="lastudioicon-e-remove"></i>
        </button>
        <div class="offcanvas-body">
            <!-- Off Canvas Sidebar Menu Start -->
            <div class="offcanvas-sidebar__menu">
                <ul class="offcanvas-menu-list">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="blog.html">News & Events</a></li>
                    <li><a href="faqs.html">FAQs</a></li>
                    <li><a href="contact-us.html">Contact Us</a></li>
                </ul>
            </div>
            <!-- Off Canvas Sidebar Menu End -->

            <!-- Off Canvas Sidebar Banner Start -->
            <div class="offcanvas-sidebar__banner" style="
                background-image: url(assets/images/shop-sidebar-banner.jpg);
            ">
                <h3 class="banner-title">NEW NOW</h3>
                <h4 class="banner-sub-title">WARM WOOL PREMIUM COAT</h4>
                <a href="#" class="banner-btn">Discover</a>
            </div>
            <!-- Off Canvas Sidebar Banner End -->

            <!-- Off Canvas Sidebar Info Start -->
            <div class="offcanvas-sidebar__info">
                <ul class="offcanvas-info-list">
                    <li><a href="tel:+61225315600">(+612) 2531 5600</a></li>
                    <li><a href="mailto:info@exmple.com">info@exmple.com</a></li>
                    <li>
                        <span>
                        PO Box 1622 Colins Street West Victoria 8077 Australia
                    </span>
                    </li>
                </ul>
            </div>
            <!-- Off Canvas Sidebar Info End -->

            <!-- Off Canvas Sidebar Social Start -->
            <div class="offcanvas-sidebar__social">
                <ul class="offcanvas-social">
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
                </ul>
            </div>
            <!-- Off Canvas Sidebar Social End -->

            <!-- Off Canvas Sidebar Social End -->
            <div class="offcanvas-sidebar__copyright">
                <p>
                    &copy;
                    <span class="current-year">2023</span>
                    <span> Plantfy </span> Made with by
                    <a href="https://hasthemes.com/">HasThemes</a>
                </p>
            </div>
            <!-- Off Canvas Sidebar Social End -->
        </div>
    </div>

    <!-- Offcanvas Menu End -->

    <!-- Mobile Menu Start -->
    <div class="mobile-menu offcanvas offcanvas-start" tabindex="-1" id="mobileMenu">
        <!-- offcanvas-header Start -->
        <div class="offcanvas-header">
            <button type="button" class="mobile-menu__close" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="lastudioicon-e-remove"></i>
            </button>
        </div>
        <!-- offcanvas-header End -->

        <!-- offcanvas-body Start -->
        <div class="offcanvas-body">
            <nav class="navbar-mobile-menu">
                <ul class="mobile-menu-items">
                    <li>
                        <a href="#">
                            HOME
                            <span class="menu-expand" aria-label="down-arrow">
                           
                        </span>
                        </a>
                    
                    </li>
                    <li>
                        <a href="#">
                            Pages
                            <span class="menu-expand" aria-label="down-arrow">
                            <i class="lastudioicon-down-arrow"></i>
                        </span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="about.html">About us</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                            <li><a href="our-team.html">Our Team</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="faqs.html">FAQ's</a></li>
                            <li><a href="term-of-use.html">term of use</a></li>
                            <li><a href="404.html">404 Page</a></li>
                            <li>
                                <a href="login-register.html">Login & Register</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            Shop
                            <span class="menu-expand" aria-label="down-arrow">
                            <i class="lastudioicon-down-arrow"></i>
                        </span>
                        </a>
                        <div class="mega-menu">
                            <div class="mega-menu-col">
                                <h5 class="mega-menu-title">Shop Layout</h5>
                                <ul class="">
                                    <li>
                                        <a href="shop-fullwidth.html">Shop Fullwidth</a>
                                    </li>
                                    <li>
                                        <a href="shop-sidebar.html">Shop Sidebar</a>
                                    </li>
                                    <li>
                                        <a href="shop-masonry.html">Shop Masonry</a>
                                    </li>
                                    <li>
                                        <a href="shop-3-columns.html">Shop 03 Columns</a>
                                    </li>
                                    <li>
                                        <a href="shop-4-columns.html">Shop 04 Columns</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mega-menu-col">
                                <ul class="">
                                    <li><a href="#">Featured Banner</a></li>
                                    <li class="mega-menu-title">Hover Style</li>
                                    <li><a href="#">Hover Style 01</a></li>
                                </ul>
                            </div>
                            <div class="mega-menu-col">
                                <h5 class="mega-menu-title">Shop Pages</h5>
                                <ul class="">
                                    <li>
                                        <a href="my-account.html">My Account</a>
                                    </li>
                                    <li><a href="cart.html">Cart</a></li>
                                    <li>
                                        <a href="order-tracking.html">Order Tracking</a>
                                    </li>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="compare.html">Compare</a></li>
                                    <li>
                                        <a href="empty-cart.html">Cart Empty</a>
                                    </li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="thank-you.html">Thank You</a></li>
                                </ul>
                            </div>
                            <div class="mega-menu-col">
                                <h5 class="mega-menu-title">Product Pages</h5>
                                <ul class="">
                                    <li>
                                        <a href="product-single.html">
                                            Product Simple
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product-single-variable.html">
                                            Product Variable
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product-single-carousel.html">
                                            Product Carousel
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product-single-affiliate.html">
                                            Product Affiliate
                                        </a>
                                    </li>
                                    <li>
                                        <a href="product-single-countdown.html">
                                            Product CountDown
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            Collections
                            <span class="menu-expand" aria-label="down-arrow">
                            <i class="lastudioicon-down-arrow"></i>
                        </span>
                        </a>
                        <div class="mega-menu">
                            <div class="mega-menu__banner">
                                <a href="#">
                                    <div class="mega-menu__banner--image">
                                        <img src="assets/images/megamenu-fashion-01.jpg" alt="Fashion Banner" width="269" height="271" />
                                    </div>
                                    <div class="mega-menu__banner--caption">
                                        <h4 class="caption-title">New Arrival</h4>
                                        <p class="caption-desc">
                                            Non curabitur gravida
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="mega-menu__content">
                                <h4 class="mega-menu__content--title">
                                    Summer Collection 2023
                                </h4>
                                <div class="d-flex flex-wrap">
                                    <ul class="mega-menu__content--list">
                                        <li>
                                            <a href="#">Dresses and jumpsuits</a>
                                        </li>
                                        <li><a href="#">Shirts</a></li>
                                        <li><a href="#">T-shirts and tops</a></li>
                                        <li>
                                            <a href="#">Jackets and Suit Jackets</a>
                                        </li>
                                        <li>
                                            <a href="#">Cardigans and sweaters</a>
                                        </li>
                                        <li><a href="#">Sweatshirts</a></li>
                                        <li><a href="#">Coats</a></li>
                                    </ul>
                                    <ul class="mega-menu__content--list">
                                        <li><a href="#">Trousers</a></li>
                                        <li><a href="#">Jeans</a></li>
                                        <li><a href="#">Skirts</a></li>
                                        <li><a href="#">Shorts</a></li>
                                        <li>
                                            <a href="#">Bikinis and swimsuits</a>
                                        </li>
                                        <li><a href="#">Sportswear</a></li>
                                        <li>
                                            <a href="#">Underwear and lingerie</a>
                                        </li>
                                        <li><a href="#">Pyjamas</a></li>
                                    </ul>
                                </div>
                                <div class="mt-auto">
                                    <ul class="mega-menu__info">
                                        <li><a href="#">info@exmple.com</a></li>
                                        <li><a href="#">(626)997-4298</a></li>
                                    </ul>
                                    <div class="mega-menu__social">
                                        <div class="mega-menu__social--lable">
                                            Connect with us
                                        </div>
                                        <ul class="mega-menu__social--social">
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
                                                <a href="#" aria-label="instagram">
                                                    <i
                                                    class="lastudioicon-b-instagram"
                                                ></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#">
                            Blog
                            <span class="menu-expand" aria-label="down-arrow">
                            <i class="lastudioicon-down-arrow"></i>
                        </span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="blog-right-sidebar.html">
                                    Blog Right Sidebar
                                </a>
                            </li>
                            <li>
                                <a href="blog-left-sidebar.html">
                                    Blog Left Sidebar
                                </a>
                            </li>
                            <li><a href="blog.html">Blog No Sidebar</a></li>
                            <li><a href="blog-single.html">Single Post</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <!-- offcanvas-body end -->
    </div>

    <!-- Mobile Menu End -->

    <!-- Mobile Meta Start -->
    <div class="mobile-meta d-md-none">
        <ul class="mobile-meta-items">
            <li>
                <button data-bs-toggle="modal" data-bs-target="#SearchModal" aria-label="search">
                    <i class="lastudioicon-zoom-1"></i>
                </button>
            </li>
            <li>
                <a href="wishlist.html" aria-label="wishlist">
                    <i class="lastudioicon-heart-1"></i>
                    <span class="badge">03</span>
                </a>
            </li>
            <li>
                <a href="compare.html" aria-label="compare">
                    <i class="lastudioicon-ic_compare_arrows_24px"> </i>
                    <span class="badge">03</span>
                </a>
            </li>
            <li>
                <button data-bs-toggle="offcanvas" data-bs-target="#cartSidebar" aria-label="cart">
                    <i class="lastudioicon-shopping-cart-1"></i>
                    <span class="badge">03</span>
                </button>
            </li>
        </ul>
    </div>

    <!-- Mobile Meta End -->
<!-- yield -->
@yield('item')

    <!-- Footer Start -->
    <footer class="footer-section footer-dark">
        <div class="container-fluid custom-container">
            <!-- Footer Main Start -->
            <div class="footer-main footer-padding">
                <div class="footer-main-wrapper">
                    <!-- Footer About Start -->
                    <div class="footer-about text-center">
                        <a class="footer-about__logo" href="#">
                            <img src="assets/images/logo-white.png" alt="Logo" width="190" height="35" loading="lazy" />
                        </a>
                        <p>
                            Proin volutpat vitae libero at tincidunt. Maecenas
                            sapien lectus,
                        </p>
                    </div>
                    <!-- Footer About End -->

                    <!-- Footer Newsletter Start -->
                    <div class="footer-newsletter">
                        <form action="#">
                            <input class="footer-newsletter__input" type="text" placeholder="Sign up for newsletter" />
                            <button class="footer-newsletter__btn">
                                Subscribe
                            </button>
                        </form>
                    </div>
                    <!-- Footer Newsletter End -->

                    <!-- Footer Link Start -->
                    <div class="footer-link">
                        <div class="footer-link__wrapper">
                            <h4 class="footer-title">Company links</h4>

                            <ul class="footer-link__list">
                                <li><a href="about.html">About us</a></li>
                                <li><a href="shop-fullwidth.html">Shop</a></li>
                                <li><a href="term-of-use.html">Help Center</a></li>
                                <li>
                                    <a href="term-of-use.html">
                                        Policy &amp; Privacy
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-link__wrapper">
                            <h4 class="footer-title">Category</h4>

                            <ul class="footer-link__list">
                                <li><a href="shop-fullwidth.html">Man</a></li>
                                <li><a href="shop-fullwidth.html">Woman</a></li>
                                <li><a href="shop-fullwidth.html">Kids</a></li>
                                <li>
                                    <a href="shop-fullwidth.html">Accessories</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-link__wrapper">
                            <h4 class="footer-title">Contact</h4>

                            <ul class="footer-link__list">
                                <li>
                                    <span>
                                    4517 Washington Ave. Manchester, Kentucky
                                    39495
                                </span>
                                </li>
                                <li>
                                    <a href="mailto:info@example.com">
                                        info@example.com
                                    </a>
                                </li>
                                <li>
                                    <a href="tel:626997-4298">(626)997-4298</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Link End -->
                </div>
            </div>
            <!-- Footer Main End -->

            <!-- Footer Wrapper Start -->
            <div class="footer-wrapper">
                <div class="row align-items-center gy-3">
                    <div class="col-lg-8">
                        <!-- Footer store & social Start -->
                        <div class="footer-store-social">
                            <!-- Footer store Start -->
                            <div class="footer-store">
                                <h4 class="footer-store-social__title">
                                    Available on
                                </h4>
                                <ul class="footer-store__btns">
                                    <li>
                                        <a href="#">
                                            <img src="assets/images/apple-store.png" alt="Apple Store" width="130" height="38" loading="lazy" />
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="assets/images/google-store.png" alt="Google Store" width="130" height="38" loading="lazy" />
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Footer store End -->

                            <!-- Footer social Start -->
                            <div class="footer-social">
                                <h4 class="footer-store-social__title">
                                    Connect with us
                                </h4>
                                <ul class="footer-social__icon">
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
                                </ul>
                            </div>
                            <!-- Footer social End -->
                        </div>
                        <!-- Footer store & social End -->
                    </div>
                    <div class="col-lg-4">
                        <!-- Footer Payment Start -->
                        <div class="footer-payment text-center text-lg-end">
                            <img src="assets/images/footer-payment-white.png" alt="Footer Payment" width="310" height="38" loading="lazy" />
                        </div>
                        <!-- Footer Payment End -->
                    </div>
                </div>
            </div>
            <!-- Footer Wrapper End -->

            <!-- Footer CopyRight Start -->
            <div class="footer-copyright">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="text-center text-md-start">
                            <p>
                                ©
                                <span class="current-year">2023</span>
                                <span> Plantfy </span> Made with
                                <i class="lastudioicon-heart-1"></i>
                                by
                                <a href="https://hasthemes.com/">HasThemes</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="d-flex justify-content-center justify-content-md-end">
                            <li><a href="term-of-use.html">Term of user</a></li>
                            <li><a href="#">Payment refund</a></li>
                            <li><a href="#">Accessibility</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Footer CopyRight End -->
        </div>
    </footer>

    <!-- Footer End -->

    <!-- Quick View Start -->
    <!-- Modal Start -->
    <div class="modal quickview-modal fade" id="quickView">
        <div class="modal-dialog modal-dialog-centered">
            <!-- Modal Content Start -->
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="remove">
                    <i class="lastudioicon-e-remove"></i>
                </button>
                <div class="modal-body">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <!-- Product Single image Start -->
                            <div class="product-single-image">
                                <div class="quick-view-product-slide navigation-arrows-style-2">
                                    <div class="swiper">
                                        <div class="swiper-wrapper">
                                            <div class="product-single-slide-item swiper-slide">
                                                <img src="assets/images/products/product-single-01.png" width="742" height="778" loading="lazy" />
                                            </div>
                                            <div class="product-single-slide-item swiper-slide">
                                                <img src="assets/images/products/product-single-02.png" width="742" height="778" loading="lazy" />
                                            </div>
                                            <div class="product-single-slide-item swiper-slide">
                                                <img src="assets/images/products/product-single-03.png" width="742" height="778" loading="lazy" />
                                            </div>
                                            <div class="product-single-slide-item swiper-slide">
                                                <img src="assets/images/products/product-single-04.png" width="742" height="778" loading="lazy" />
                                            </div>
                                        </div>
                                        <div class="swiper-button-next" aria-label="arrow-right">
                                            <i class="lastudioicon-arrow-right"></i>
                                        </div>
                                        <div class="swiper-button-prev" aria-label="arrow-left">
                                            <i class="lastudioicon-arrow-left"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product Single image End -->
                        </div>
                        <div class="col-md-6">
                            <!-- Product Single Content Start -->
                            <div class="product-single-content quick-view-product-content">
                                <h2 class="product-single-content__title">
                                    Product Simple
                                </h2>
                                <div class="product-single-content__price-stock">
                                    <div class="product-single-content__price">
                                        <ins>$36.99</ins>
                                    </div>
                                    <div class="product-single-content__stock">
                                        <span
                                        class="stock-icon"
                                        aria-label="check-circle"
                                    >
                                        <i
                                            class="dlicon ui-1_check-circle-08"
                                        ></i>
                                    </span>
                                        <span class="stock-text">97 in stock</span>
                                    </div>
                                </div>
                                <div class="product-single-content__short-description">
                                    <p>
                                        Proin volutpat vitae libero at tincidunt.
                                        Maecenas sapien lectus, vehicula vel euismod
                                        sed, vulputate a lorem. Integer at tristique
                                        libero. Nullam porta eleifend metus a
                                        interdum.
                                    </p>
                                </div>
                                <div class="product-single-content__add-to-cart-wrapper">
                                    <div class="product-single-content__quantity-add-to-cart">
                                        <div class="product-single-content__quantity product-quantity">
                                            <button type="button" class="decrease" aria-label="delete">
                                                <i
                                                class="lastudioicon-i-delete-2"
                                            ></i>
                                            </button>
                                            <input class="quantity-input" type="text" value="1" />
                                            <button type="button" class="increase" aria-label="add">
                                                <i class="lastudioicon-i-add-2"></i>
                                            </button>
                                        </div>
                                        <button class="product-single-content__add-to-cart btn">
                                            Add to cart
                                        </button>
                                    </div>

                                    <a href="#" class="product-add-compare">Add to Compare</a>
                                    <a href="#" class="product-add-wishlist">Add to Wishlist</a>
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
                            </div>
                            <!-- Product Single Content End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Content End -->
        </div>
    </div>
    <!-- Modal End -->

    <!-- Quick View End -->

    <!-- Popup Modal Start -->
    <!-- Popup Modal Start -->
    {{-- <div class="popup-modal">
        <div class="popup-modal-overlay"></div>
        <div class="popup-modal-content">
            <div class="popup-modal-row flex-row-reverse">
                <div class="popup-modal-col-2">
                    <!-- Popup Discount Background Start -->
                    <div class="popup-discount-background" style="background-image: url(assets/images/popup-bg.jpg)"></div>
                    <!-- Popup Discount Background End -->
                </div>
                <div class="popup-modal-col-1">
                    <!-- Popup Discount Content Start -->
                    <div class="popup-discount-content">
                        <h3 class="popup-discount-content__title">
                            Get 7% discount
                        </h3>
                        <p class="popup-discount-content__sub-title">
                            Register and get a discount on your first purchase!
                        </p>

                        <form action="#">
                            <div class="popup-discount-content__form">
                                <input type="text" placeholder="Email address..." />
                                <button type="button">Subscribe</button>
                            </div>
                        </form>
                        <p class="popup-discount-content__text">
                            *Limited time offer. Free USPS shipping only. Only
                            available for US
                        </p>

                        <div class="popup-discount-content__wrapper">
                            <div class="popup-discount-content__dont-show">
                                <a href="#">Don’t show this popup again</a>
                            </div>
                            <ul class="popup-discount-content__social">
                                <li>
                                    <a href="#" aria-label="twitter">
                                        <i class="lastudioicon-b-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" aria-label="facebook">
                                        <i class="lastudioicon-b-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" aria-label="instagram">
                                        <i class="lastudioicon-b-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" aria-label="youtube">
                                        <i class="lastudioicon-b-youtube-play"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Popup Discount Content End -->
                </div>
            </div>

            <div class="popup-close">
                <button class="popup-close__btn" aria-label="close">
                    <svg viewBox="0 0 1000 1000" class="eicon-close">
                        <path d="M742 167L500 408 258 167C246 154 233 150 217 150 196 150 179 158 167 167 154 179 150 196 150 212 150 229 154 242 171 254L408 500 167 742C138 771 138 800 167 829 196 858 225 858 254 829L496 587 738 829C750 842 767 846 783 846 800 846 817 842 829 829 842 817 846 804 846 783 846 767 842 750 829 737L588 500 833 258C863 229 863 200 833 171 804 137 775 137 742 167Z"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div> --}}
    <!-- Popup Modal End -->

    <!-- Popup Modal End -->

    <!-- JS Vendor, Plugins & Activation Script Files -->

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/masonry.pkgd.min.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/nice-select2.js"></script>

    <!-- Activation JS -->
    <script src="assets/js/main.js"></script>

    {{-- Custom JS --}}
    <script src="{{ URL::asset('assets/js/custom/ajaxPost.js')}}"></script>
    <script src="{{ URL::asset('assets/js/custom/status-update.js')}}"></script>
    <script src="{{ URL::asset('assets/js/custom/form-upload.js')}}"></script>
    <script src="{{ URL::asset('assets/js/custom/image-preview.js')}}"></script>
    <script src="{{ URL::asset('assets/js/custom/pagination.js')}}"></script>
    <script src="{{ URL::asset('assets/js/custom/filemanager.js')}}"></script>

    @stack('scripts')

</body>

</html>