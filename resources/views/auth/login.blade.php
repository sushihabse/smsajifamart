<!doctype html>
<html lang="en" dir="ltr"> <!-- This "custom-app.blade.php" master page is used only for "custom" page content present in "views/livewire" Ex: login, 404 -->

<!-- Mirrored from laravel8.spruko.com/noa/login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 May 2023 13:11:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Noa - Laravel Bootstrap 5 Admin & Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="laravel admin template, bootstrap admin template, admin dashboard template, admin dashboard, admin template, admin, bootstrap 5, laravel admin, laravel admin dashboard template, laravel ui template, laravel admin panel, admin panel, laravel admin dashboard, laravel template, admin ui dashboard">

        <!-- TITLE -->
		<title>SAJIFAMART -LOGIN</title>

        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}admin/assets/images/brand/favicon.ico" />

        <!-- BOOTSTRAP CSS -->
        <link id="style" href="{{asset('/')}}admin/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

        <!-- STYLE CSS -->
        <link href="{{asset('/')}}admin/assets/css/style.css" rel="stylesheet" />
        <link href="{{asset('/')}}admin/assets/css/skin-modes.css" rel="stylesheet" />

        <link rel="stylesheet" href="{{asset('/')}}admin/assets/fonts/icomoon/style.css">
        <link rel="stylesheet" href="{{asset('/')}}admin/assets/css/owl.carousel.min.css">

 <!-- Favicon -->
 <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}website/assets/imgs/theme/favicon.svg">
 <!-- Template CSS -->
 <link rel="stylesheet" href="{{asset('/')}}website/assets/css/maind134.css?v=3.4">


        <link rel="stylesheet" href="{{asset('/')}}admin/assets/css/style.css">

        <!--- FONT-ICONS CSS -->
        <link href="{{asset('/')}}admin/assets/plugins/icons/icons.css" rel="stylesheet" />



    </head>


        <body>

            <header class="header-area header-style-1 header-height-2">
                <div class="header-top header-top-ptb-1 d-none d-lg-block">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-4">
                                <div class="header-info">
                                    <ul>
                                        <li><i class="fi-rs-smartphone"></i> <a href="#">01722441150</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-4">
                                <div class="text-center">
                                    <div id="news-flash" class="d-inline-block">

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4">
                                <div class="header-info header-info-right">
                                    <ul>
                                        <li>
                                            <a class="language-dropdown-active" href="#"> <i class="fi-rs-world"></i> English <i class="fi-rs-angle-small-down"></i></a>
                                            <ul class="language-dropdown">
                                                <li><a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/flag-fr.png" alt="">Français</a></li>
                                                <li><a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/flag-dt.png" alt="">Deutsch</a></li>
                                                <li><a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/flag-ru.png" alt="">Pусский</a></li>
                                            </ul>
                                        </li>
                                        <li><i class="fi-rs-user"></i><a href="page-login-register.html">Log In / Sign Up</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-middle header-middle-ptb-1 d-none d-lg-block">
                    <div class="container">
                        <div class="header-wrap">
                            <div class="logo logo-width-1">
                                <a href="{{route('home')}}"><img src="{{asset('/')}}website/assets/imgs/theme/logo.svg" alt="logo"></a>
                            </div>
                            <div class="header-right">
                                <div class="search-style-2">
                                    <form action="#">
                                        <select class="select-active">
                                            <option>All Categories</option>
                                            <option>Women's</option>
                                            <option>Men's</option>
                                            <option>Cellphones</option>
                                            <option>Computer</option>
                                            <option>Electronics</option>
                                            <option> Accessories</option>
                                            <option>Home & Garden</option>
                                            <option>Luggage</option>
                                            <option>Shoes</option>
                                            <option>Mother & Kids</option>
                                        </select>
                                        <input type="text" placeholder="Search for items...">
                                    </form>
                                </div>
                                <div class="header-action-right">
                                    <div class="header-action-2">
                                        <div class="header-action-icon-2">
                                            <a href="shop-wishlist.html">
                                                <img class="svgInject" alt="Evara" src="{{asset('/')}}website/assets/imgs/theme/icons/icon-heart.svg">
                                                <span class="pro-count blue">4</span>
                                            </a>
                                        </div>
                                        <div class="header-action-icon-2">
                                            <a class="mini-cart-icon" href="shop-cart.html">
                                                <img alt="Evara" src="{{asset('/')}}website/assets/imgs/theme/icons/icon-cart.svg">
                                                <span class="pro-count blue">2</span>
                                            </a>
                                            <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                                <ul>
                                                    <li>
                                                        <div class="shopping-cart-img">
                                                            <a href="shop-product-right.html"><img alt="Evara" src="{{asset('/')}}website/assets/imgs/shop/thumbnail-3.jpg"></a>
                                                        </div>
                                                        <div class="shopping-cart-title">
                                                            <h4><a href="shop-product-right.html">Daisy Casual Bag</a></h4>
                                                            <h4><span>1 × </span>$800.00</h4>
                                                        </div>
                                                        <div class="shopping-cart-delete">
                                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="shopping-cart-img">
                                                            <a href="shop-product-right.html"><img alt="Evara" src="{{asset('/')}}website/assets/imgs/shop/thumbnail-2.jpg"></a>
                                                        </div>
                                                        <div class="shopping-cart-title">
                                                            <h4><a href="shop-product-right.html">Corduroy Shirts</a></h4>
                                                            <h4><span>1 × </span>$3200.00</h4>
                                                        </div>
                                                        <div class="shopping-cart-delete">
                                                            <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="shopping-cart-footer">
                                                    <div class="shopping-cart-total">
                                                        <h4>Total <span>$4000.00</span></h4>
                                                    </div>
                                                    <div class="shopping-cart-button">
                                                        <a href="shop-cart.html" class="outline">View cart</a>
                                                        <a href="shop-checkout.html">Checkout</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom header-bottom-bg-color sticky-bar">
                    <div class="container">
                        <div class="header-wrap header-space-between position-relative">
                            <div class="logo logo-width-1 d-block d-lg-none">
                                <a href="{{route('home')}}"><img src="{{asset('/')}}website/assets/imgs/theme/logo.svg" alt="logo"></a>
                            </div>
                            <div class="header-nav d-none d-lg-flex">
                                <div class="main-categori-wrap d-none d-lg-block">
                                    <a class="categori-button-active" href="#">
                                        <span class="fi-rs-apps"></span> Browse Categories
                                    </a>
                                    <div class="categori-dropdown-wrap categori-dropdown-active-large">
                                        <ul>
                                            <li class="has-children">
                                                <a href="shop-grid-right.html"><i class="evara-font-dress"></i>Women's Clothing</a>
                                                <div class="dropdown-menu">
                                                    <ul class="mega-menu d-lg-flex">
                                                        <li class="mega-menu-col col-lg-7">
                                                            <ul class="d-lg-flex">
                                                                <li class="mega-menu-col col-lg-6">
                                                                    <ul>
                                                                        <li><span class="submenu-title">Hot & Trending</span></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Dresses</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Blouses & Shirts</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Hoodies & Sweatshirts</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Women's Sets</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Suits & Blazers</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Bodysuits</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Tanks & Camis</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Coats & Jackets</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="mega-menu-col col-lg-6">
                                                                    <ul>
                                                                        <li><span class="submenu-title">Bottoms</span></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Leggings</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Skirts</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Shorts</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Jeans</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Pants & Capris</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Bikini Sets</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Cover-Ups</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Swimwear</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-5">
                                                            <div class="header-banner2">
                                                                <img src="{{asset('/')}}website/assets/imgs/banner/menu-banner-2.jpg" alt="menu_banner1">
                                                                <div class="banne_info">
                                                                    <h6>10% Off</h6>
                                                                    <h4>New Arrival</h4>
                                                                    <a href="#">Shop now</a>
                                                                </div>
                                                            </div>
                                                            <div class="header-banner2">
                                                                <img src="{{asset('/')}}website/assets/imgs/banner/menu-banner-3.jpg" alt="menu_banner2">
                                                                <div class="banne_info">
                                                                    <h6>15% Off</h6>
                                                                    <h4>Hot Deals</h4>
                                                                    <a href="#">Shop now</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="has-children">
                                                <a href="shop-grid-right.html"><i class="evara-font-tshirt"></i>Men's Clothing</a>
                                                <div class="dropdown-menu">
                                                    <ul class="mega-menu d-lg-flex">
                                                        <li class="mega-menu-col col-lg-7">
                                                            <ul class="d-lg-flex">
                                                                <li class="mega-menu-col col-lg-6">
                                                                    <ul>
                                                                        <li><span class="submenu-title">Jackets & Coats</span></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Down Jackets</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Jackets</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Parkas</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Faux Leather Coats</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Trench</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Wool & Blends</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Vests & Waistcoats</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Leather Coats</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="mega-menu-col col-lg-6">
                                                                    <ul>
                                                                        <li><span class="submenu-title">Suits & Blazers</span></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Blazers</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Suit Jackets</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Suit Pants</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Suits</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Vests</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Tailor-made Suits</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Cover-Ups</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-5">
                                                            <div class="header-banner2">
                                                                <img src="{{asset('/')}}website/assets/imgs/banner/menu-banner-4.jpg" alt="menu_banner1">
                                                                <div class="banne_info">
                                                                    <h6>10% Off</h6>
                                                                    <h4>New Arrival</h4>
                                                                    <a href="#">Shop now</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="has-children">
                                                <a href="shop-grid-right.html"><i class="evara-font-smartphone"></i> Cellphones</a>
                                                <div class="dropdown-menu">
                                                    <ul class="mega-menu d-lg-flex">
                                                        <li class="mega-menu-col col-lg-7">
                                                            <ul class="d-lg-flex">
                                                                <li class="mega-menu-col col-lg-6">
                                                                    <ul>
                                                                        <li><span class="submenu-title">Hot & Trending</span></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Cellphones</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">iPhones</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Refurbished Phones</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Mobile Phone</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Mobile Phone Parts</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Phone Bags & Cases</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Communication Equipments</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Walkie Talkie</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="mega-menu-col col-lg-6">
                                                                    <ul>
                                                                        <li><span class="submenu-title">Accessories</span></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Screen Protectors</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Wire Chargers</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Wireless Chargers</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Car Chargers</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Power Bank</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Armbands</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Dust Plug</a></li>
                                                                        <li><a class="dropdown-item nav-link nav_item" href="#">Signal Boosters</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="mega-menu-col col-lg-5">
                                                            <div class="header-banner2">
                                                                <img src="{{asset('/')}}website/assets/imgs/banner/menu-banner-5.jpg" alt="menu_banner1">
                                                                <div class="banne_info">
                                                                    <h6>10% Off</h6>
                                                                    <h4>New Arrival</h4>
                                                                    <a href="#">Shop now</a>
                                                                </div>
                                                            </div>
                                                            <div class="header-banner2">
                                                                <img src="{{asset('/')}}website/assets/imgs/banner/menu-banner-6.jpg" alt="menu_banner2">
                                                                <div class="banne_info">
                                                                    <h6>15% Off</h6>
                                                                    <h4>Hot Deals</h4>
                                                                    <a href="#">Shop now</a>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="{{route('product-category')}}"><i class="evara-font-desktop"></i>Computer & Office</a></li>
                                            <li><a href="shop-grid-right.html"><i class="evara-font-cpu"></i>Consumer Electronics</a></li>
                                            <li><a href="shop-grid-right.html"><i class="evara-font-diamond"></i>Jewelry & Accessories</a></li>
                                            <li><a href="shop-grid-right.html"><i class="evara-font-home"></i>Home & Garden</a></li>
                                            <li><a href="shop-grid-right.html"><i class="evara-font-high-heels"></i>Shoes</a></li>
                                            <li><a href="shop-grid-right.html"><i class="evara-font-teddy-bear"></i>Mother & Kids</a></li>
                                            <li><a href="shop-grid-right.html"><i class="evara-font-kite"></i>Outdoor fun</a></li>
                                            <li>
                                                <ul class="more_slide_open" style="display: none;">
                                                    <li><a href="shop-grid-right.html"><i class="evara-font-desktop"></i>Beauty, Health</a></li>
                                                    <li><a href="shop-grid-right.html"><i class="evara-font-cpu"></i>Bags and Shoes</a></li>
                                                    <li><a href="shop-grid-right.html"><i class="evara-font-diamond"></i>Consumer Electronics</a></li>
                                                    <li><a href="shop-grid-right.html"><i class="evara-font-home"></i>Automobiles & Motorcycles</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <div class="more_categories">Show more...</div>
                                    </div>
                                </div>
                                <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
                                    <nav>
                                        <ul>
                                            <li><a class="active" href="index-2.html">Home</a>

                                            </li>
                                            <li>
                                                <a href="page-about.html">All Brands</a>
                                            </li>
                                            <li><a href="shop-grid-right.html">Discounted Products</a>

                                            </li>
                                            <li class="position-static"><a href="#">All Sellers</i></a>

                                            </li>



                                            <li><a href="#">Seller Zone <i class="fi-rs-angle-down"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="page-about.html">About Us</a></li>

                                                </ul>
                                            </li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>

                            <p class="mobile-promotion">Happy <span class="text-brand">Mother's Day</span>. Big Sale Up to 40%</p>
                            <div class="header-action-right d-block d-lg-none">
                                <div class="header-action-2">
                                    <div class="header-action-icon-2">
                                        <a href="shop-wishlist.html">
                                            <img alt="Evara" src="{{asset('/')}}website/assets/imgs/theme/icons/icon-heart.svg">
                                            <span class="pro-count white">4</span>
                                        </a>
                                    </div>
                                    <div class="header-action-icon-2">
                                        <a class="mini-cart-icon" href="shop-cart.html">
                                            <img alt="Evara" src="{{asset('/')}}website/assets/imgs/theme/icons/icon-cart.svg">
                                            <span class="pro-count white">2</span>
                                        </a>
                                        <div class="cart-dropdown-wrap cart-dropdown-hm2">
                                            <ul>
                                                <li>
                                                    <div class="shopping-cart-img">
                                                        <a href="shop-product-right.html"><img alt="Evara" src="{{asset('/')}}website/assets/imgs/shop/thumbnail-3.jpg"></a>
                                                    </div>
                                                    <div class="shopping-cart-title">
                                                        <h4><a href="shop-product-right.html">Plain Striola Shirts</a></h4>
                                                        <h3><span>1 × </span>$800.00</h3>
                                                    </div>
                                                    <div class="shopping-cart-delete">
                                                        <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="shopping-cart-img">
                                                        <a href="shop-product-right.html"><img alt="Evara" src="{{asset('/')}}website/assets/imgs/shop/thumbnail-4.jpg"></a>
                                                    </div>
                                                    <div class="shopping-cart-title">
                                                        <h4><a href="shop-product-right.html">Macbook Pro 2022</a></h4>
                                                        <h3><span>1 × </span>$3500.00</h3>
                                                    </div>
                                                    <div class="shopping-cart-delete">
                                                        <a href="#"><i class="fi-rs-cross-small"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="shopping-cart-footer">
                                                <div class="shopping-cart-total">
                                                    <h4>Total <span>$383.00</span></h4>
                                                </div>
                                                <div class="shopping-cart-button">
                                                    <a href="shop-cart.html">View cart</a>
                                                    <a href="shop-checkout.html">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-action-icon-2 d-block d-lg-none">
                                        <div class="burger-icon burger-icon-white">
                                            <span class="burger-icon-top"></span>
                                            <span class="burger-icon-mid"></span>
                                            <span class="burger-icon-bottom"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="mobile-header-active mobile-header-wrapper-style">
                <div class="mobile-header-wrapper-inner">
                    <div class="mobile-header-top">
                        <div class="mobile-header-logo">
                            <a href="index-2.html"><img src="{{asset('/')}}website/assets/imgs/theme/logo.svg" alt="logo"></a>
                        </div>
                        <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                            <button class="close-style search-close">
                                <i class="icon-top"></i>
                                <i class="icon-bottom"></i>
                            </button>
                        </div>
                    </div>
                    <div class="mobile-header-content-area">
                        <div class="mobile-search search-style-3 mobile-header-border">
                            <form action="#">
                                <input type="text" placeholder="Search for items…">
                                <button type="submit"><i class="fi-rs-search"></i></button>
                            </form>
                        </div>
                        <div class="mobile-menu-wrap mobile-header-border">
                            <div class="main-categori-wrap mobile-header-border">
                                <a class="categori-button-active-2" href="#">
                                    <span class="fi-rs-apps"></span> Browse Categories
                                </a>
                                <div class="categori-dropdown-wrap categori-dropdown-active-small">
                                    <ul>
                                        <li><a href="shop-grid-right.html"><i class="evara-font-dress"></i>Women's Clothing</a></li>
                                        <li><a href="shop-grid-right.html"><i class="evara-font-tshirt"></i>Men's Clothing</a></li>
                                        <li> <a href="shop-grid-right.html"><i class="evara-font-smartphone"></i> Cellphones</a></li>
                                        <li><a href="shop-grid-right.html"><i class="evara-font-desktop"></i>Computer & Office</a></li>
                                        <li><a href="shop-grid-right.html"><i class="evara-font-cpu"></i>Consumer Electronics</a></li>
                                        <li><a href="shop-grid-right.html"><i class="evara-font-home"></i>Home & Garden</a></li>
                                        <li><a href="shop-grid-right.html"><i class="evara-font-high-heels"></i>Shoes</a></li>
                                        <li><a href="shop-grid-right.html"><i class="evara-font-teddy-bear"></i>Mother & Kids</a></li>
                                        <li><a href="shop-grid-right.html"><i class="evara-font-kite"></i>Outdoor fun</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- mobile menu start -->
                            <nav>
                                <ul class="mobile-menu">
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="index-2.html">Home</a>

                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="shop-grid-right.html">shop</a>
                                        <ul class="dropdown">
                                            <li><a href="shop-grid-right.html">Shop Grid – Right Sidebar</a></li>
                                            <li><a href="shop-grid-left.html">Shop Grid – Left Sidebar</a></li>
                                            <li><a href="shop-list-right.html">Shop List – Right Sidebar</a></li>
                                            <li><a href="shop-list-left.html">Shop List – Left Sidebar</a></li>
                                            <li><a href="shop-fullwidth.html">Shop - Wide</a></li>
                                            <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Single Product</a>
                                                <ul class="dropdown">
                                                    <li><a href="shop-product-right.html">Product – Right Sidebar</a></li>
                                                    <li><a href="shop-product-left.html">Product – Left Sidebar</a></li>
                                                    <li><a href="shop-product-full.html">Product – No sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="shop-filter.html">Shop – Filter</a></li>
                                            <li><a href="shop-wishlist.html">Shop – Wishlist</a></li>
                                            <li><a href="shop-cart.html">Shop – Cart</a></li>
                                            <li><a href="shop-checkout.html">Shop – Checkout</a></li>
                                            <li><a href="shop-compare.html">Shop – Compare</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Mega menu</a>

                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="blog-category-fullwidth.html">Blog</a>

                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Pages</a>
                                        <ul class="dropdown">
                                            <li><a href="page-about.html">About Us</a></li>
                                            <li><a href="page-contact.html">Contact</a></li>
                                            <li><a href="page-account.html">My Account</a></li>
                                            <li><a href="page-login-register.html">login/register</a></li>
                                            <li><a href="page-purchase-guide.html">Purchase Guide</a></li>
                                            <li><a href="page-privacy-policy.html">Privacy Policy</a></li>
                                            <li><a href="page-terms.html">Terms of Service</a></li>
                                            <li><a href="page-404.html">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Language</a>
                                        <ul class="dropdown">
                                            <li><a href="#">English</a></li>
                                            <li><a href="#">French</a></li>
                                            <li><a href="#">German</a></li>
                                            <li><a href="#">Spanish</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <!-- mobile menu end -->
                        </div>
                        <div class="mobile-header-info-wrap mobile-header-border">
                            <div class="single-mobile-header-info mt-30">
                                <a  href="page-contact.html"> Our location </a>
                            </div>
                            <div class="single-mobile-header-info">
                                <a href="page-login-register.html">Log In / Sign Up </a>
                            </div>
                            <div class="single-mobile-header-info">
                                <a href="#">(+01) - 2345 - 6789 </a>
                            </div>
                        </div>
                        <div class="mobile-social-icon">
                            <h5 class="mb-15 text-grey-4">Follow Us</h5>
                            <a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                            <a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                            <a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                            <a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                            <a href="#"><img src="{{asset('/')}}website/assets/imgs/theme/icons/icon-youtube.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>

			<!-- PAGE -->

            <section class="bg-dark-subtle py-5">

                <div class="container">
                    <div class="row">


                        <div class="col-lg-10 col-md-10">
                           <h2 >Create your SajifaMart Account</h2>
                          <div class="card card body">
                                <div class="content">
                                     <div class="container">

                                              <div class="row align-items-center">
                                                     <div class="col-lg-5  col-md-5 ">
                                                    <div class="form-block">

                                                        <form action="{{route('login') }}" method="post">
                                                        @csrf
                                                            <div class="mb-3">
                                                            <label for="email" class="form-label">Email address</label>
                                                                <input type="email" class="form-control" name="email" id="email" >

                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="password" class="form-label">Password</label>
                                                                <input type="password" class="form-control" name="password" id="password">
                                                            </div>
                                                        <div class="d-flex mb-5 align-items-center">

                                                        <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password?</a></span>
                                                        </div>

                                                        </div>
                                                        </div>
                                                        <div class="col-lg-2 col-md-2 text-center">

                                                        </div>

                                                        <div class="col-lg-5 col-md-5">
                                                            <input type="submit" value="Log In" class="btn  text-white btn-block btn-danger">

                                                        </form>


                                                <span  class="d-block   text-center my-4 text-muted"> or Login with</span>
                                                <div class="social-login text-center">

                                                    <a href="#" class="btn text-white btn-block btn-dark">
                                                        <span class="icon-google mr-3">Google</span>

                                                        </a>
                                                    <a href="#" class="btn text-white btn-block btn-dark">
                                                    <span class="icon-facebook mr-3">Facebook</span>
                                                    </a>
                                                </div>
                                    </div>

                                    </div>

                                    </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>
			<!-- End PAGE -->


        <!-- JQUERY JS -->
        <script src="{{asset('/')}}admin/assets/plugins/jquery/jquery.min.js"></script>

        <!-- BOOTSTRAP JS -->
        <script src="{{asset('/')}}admin/assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="{{asset('/')}}admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- Perfect SCROLLBAR JS-->
        <script src="{{asset('/')}}admin/assets/plugins/p-scroll/perfect-scrollbar.js"></script>


        <script src="{{asset('/')}}admin/assets/js/bootstrap.bundle.js"></script>
        <script src="{{asset('/')}}admin/assets/js/jquery-3.3.1.min.js"></script>
        <script src="{{asset('/')}}admin/assets/js/main.js"></script>
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"81f572b0082778bb","b":1,"version":"2023.10.0","token":"cd0b4b3a733644fc843ef0b185f98241"}' crossorigin="anonymous"></script>



        <!-- Template  JS -->
        <script src="assets/js/maind134.js?v=3.4"></script>
        <script src="assets/js/shopd134.js?v=3.4"></script>

        <script src="{{asset('/') }}admin/js/vendor/modernizr-3.6.0.min.js"></script>
        <script src="{{asset('/') }}admin/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="{{asset('/') }}admin/js/vendor/jquery-migrate-3.3.0.min.js"></script>
        <script src="{{asset('/') }}admin/js/vendor/bootstrap.bundle.min.js"></script>
        <script src="{{asset('/') }}admin/js/plugins/slick.js"></script>
        <script src="{{asset('/') }}admin/js/plugins/jquery.syotimer.min.js"></script>
        <script src="{{asset('/') }}admin/js/plugins/wow.js"></script>
        <script src="{{asset('/') }}admin/js/plugins/jquery-ui.js"></script>
        <script src="{{asset('/') }}admin/js/plugins/perfect-scrollbar.js"></script>
        <script src="{{asset('/') }}admin/js/plugins/magnific-popup.js"></script>
        <script src="{{asset('/') }}admin/js/plugins/select2.min.js"></script>
        <script src="{{asset('/') }}admin/js/plugins/waypoints.js"></script>
        <script src="{{asset('/') }}admin/js/plugins/counterup.js"></script>
        <script src="{{asset('/') }}admin/js/plugins/jquery.countdown.min.js"></script>
        <script src="{{asset('/') }}admin/js/plugins/images-loaded.js"></script>
        <script src="{{asset('/') }}admin/js/plugins/isotope.js"></script>
        <script src="{{asset('/') }}admin/js/plugins/scrollup.js"></script>
        <script src="{{asset('/') }}admin/js/plugins/jquery.vticker-min.js"></script>
        <script src="{{asset('/') }}admin/js/plugins/jquery.theia.sticky.js"></script>
        <script src="{{asset('/') }}admin/js/plugins/jquery.elevatezoom.js"></script>
        <!-- Template  JS -->
        <script src="assets/js/maind134.js?v=3.4"></script>
        <script src="assets/js/shopd134.js?v=3.4"></script>
    </body>


<!-- Mirrored from laravel8.spruko.com/noa/login by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 May 2023 13:11:49 GMT -->
</html>
