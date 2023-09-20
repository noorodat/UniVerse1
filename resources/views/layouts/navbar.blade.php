<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from eduvibe.html.devsvibe.com/index-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2023 08:16:33 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/remixicon.css">
    <link rel="stylesheet" href="assets/css/vendor/eduvibe-font.css">
    <link rel="stylesheet" href="assets/css/vendor/magnifypopup.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/odometer.css">
    <link rel="stylesheet" href="assets/css/vendor/lightbox.css">
    <link rel="stylesheet" href="assets/css/vendor/animation.css">
    <link rel="stylesheet" href="assets/css/vendor/jqueru-ui-min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">

        <header class="edu-header disable-transparent  header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-xl-2 col-md-6 col-6">
                        <div class="logo">
                            <a href="{{route('go-home')}}">
                                <img class="logo-light" src="assets/images/logo/logo.png" alt="Site Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 d-none d-xl-block">
                        <nav class="mainmenu-nav d-none d-lg-block">
                            <ul class="mainmenu">
                                <li class=""><a href="{{route('go-home')}}">Home</a>

                                </li>
                                <li class=""><a href="{{route('go-aboutus')}}">About</a>

                                </li>

                                <li class=""><a href="{{route('go-courses')}}">Courses</a>
                                </li>
                                <li class="has-droupdown"><a href="#">Pages</a>
                                    <ul class="submenu">
                                        <li class="has-droupdown"><a href="#">Event</a>
                                            <ul class="submenu">
                                                <li><a href="event-grid.html">Event Grid</a></li>
                                                <li><a href="event-list.html">Event List</a></li>
                                                <li><a href="event-carousel.html">Event Carousel</a></li>
                                                <li><a href="event-details.html">Event Details</a></li>
                                            </ul>
                                        </li>

                                        <li class="has-droupdown"><a href="#">Gallery</a>
                                            <ul class="submenu">
                                                <li><a href="gallery-grid.html">Gallery Grid</a></li>
                                                <li><a href="gallery-masonry.html">Gallery Masonry</a></li>
                                            </ul>
                                        </li>

                                        <li class="has-droupdown"><a href="#">Instructor</a>
                                            <ul class="submenu">
                                                <li><a href="instructor-one.html">Instructor 1</a></li>
                                                <li><a href="instructor-two.html">Instructor 2</a></li>
                                                <li><a href="instructor-three.html">Instructor 3</a></li>
                                                <li><a href="instructor-profile.html">Instructor Profile</a></li>
                                            </ul>
                                        </li>

                                        <li class="has-droupdown"><a href="#">Contact</a>
                                            <ul class="submenu">
                                                <li><a href="contact-us.html">Contact Us</a></li>
                                                <li><a href="contact-me.html">Contact Me</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="faq.html">FAQ Page</a></li>
                                        <li><a href="pricing.html">Pricing</a></li>
                                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                        <li><a href="purchase-guide.html">Purchase Guide</a></li>
                                        <li><a href="testimonial.html">Testimonial</a></li>
                                        <li><a href="coming-soon.html">Comming Soon</a></li>
                                        <li><a href="{{route('login')}}">Login/Register</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul>
                                </li>
                                <li class="has-droupdown"><a href="#">Blog</a>
                                    <ul class="submenu">
                                        <li class="has-droupdown"><a href="#">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog-grid-1.html">Blog Grid 1</a></li>
                                                <li><a href="blog-grid-2.html">Blog Grid 2</a></li>
                                                <li><a href="blog-grid-3.html">Blog Grid 3</a></li>
                                                <li><a href="blog-grid-sidebar.html">Blog Grid Sidebar</a></li>
                                                <li><a href="blog-standard.html">Blog Standard</a></li>
                                                <li><a href="blog-carousel.html">Blog Carousel</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-droupdown"><a href="#">Blog Details</a>
                                            <ul class="submenu">
                                                <li><a href="blog-details-left-sidebar.html">Blog Details 1</a></li>
                                                <li><a href="blog-details-right-sidebar.html">Blog Details 2</a></li>
                                                <li><a href="blog-details.html">Blog Details 3</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="has-droupdown"><a href="#">Shop</a>
                                    <ul class="submenu">
                                        <li><a href="shop.html">Shop Page</a></li>
                                        <li><a href="product-details.html">Product Details</a></li>
                                        <li><a href="cart.html">Cart Page</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-6 col-xl-2 col-md-6 col-6">
                        <div class="header-right d-flex justify-content-end">
                            <div class="header-quote">
                                <div class="quote-icon quote-search">
                                    <button class="search-trigger"><i class="ri-search-line"></i></button>
                                </div>
                                @if (Auth::id())
                                    <nav class="mainmenu-nav d-none d-lg-block">
                                        <ul class="mainmenu">
                                            <li class="has-droupdown">
                                                <a href="{{route('profile.edit')}}">
                                                    {{Auth::user()->name}}
                                                </a>
                                                <ul class="submenu">
                                                    <li>
                                                        <a href="{{route('profile.edit')}}">Profile</a>
                                                    </li>
                                                    <li>
                                                        <form action="{{route('logout')}}" method="POST">
                                                            @csrf
                                                            <a href="" style="text-align: left"><button class="logoutBtn w-100" type="submit">Logout</button></a>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                @else
                                    <div class="quote-icon quote-user">
                                        <a href="{{route('login')}}">Login</a>
                                        {{-- <i class="ri-user-line"></i> --}}
                                    </div>
                                @endif
                                <div class="hamberger quote-icon d-block d-xl-none">
                                    <button class="hamberger-button"><i class="ri-menu-line"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="popup-mobile-menu">
            <div class="inner">
                <div class="header-top">
                    <div class="logo">
                        <a href="index.html">
                            <img src="assets/images/logo/logo.png" alt="Site Logo">
                        </a>
                    </div>
                    <div class="close-menu">
                        <button class="close-button">
                            <i class="ri-close-line"></i>
                        </button>
                    </div>
                </div>
                <ul class="mainmenu">
                    <li class="has-droupdown"><a href="#">Home</a>
                        <ul class="submenu">
                            <li><a href="index-one.html">Home 1</a></li>
                            <li><a href="index-two.html">Home 2</a></li>
                            <li><a href="index-three.html">Home 3</a></li>
                            <li><a href="index-four.html">Home 4</a></li>
                            <li><a href="index-five.html">Home 5</a></li>
                            <li><a href="index.html">Landing Demo</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown"><a href="#">About</a>
                        <ul class="submenu">
                            <li><a href="about-us-1.html">About Us 1</a></li>
                            <li><a href="about-us-2.html">About Us 2</a></li>
                            <li><a href="about-us-3.html">About Us 3</a></li>
                        </ul>
                    </li>

                    <li class="has-droupdown"><a href="#">Courses</a>
                        <ul class="submenu">
                            <li><a href="course-style-1.html">Course Style 1</a></li>
                            <li><a href="course-style-2.html">Course Style 2</a></li>
                            <li><a href="course-style-3.html">Course Style 3</a></li>
                            <li><a href="course-style-4.html">Course Style 4</a></li>
                            <li><a href="course-style-5.html">Course Style 5</a></li>
                            <li><a href="course-filter.html">Course Filter</a></li>
                            <li><a href="course-carousel.html">Course Carousel</a></li>
                            <li><a href="course-sidebar.html">Course With Sidebar</a></li>
                            <li><a href="course-details.html">Course Details 1</a></li>
                            <li><a href="course-details-2.html">Course Details 2</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown"><a href="#">Pages</a>
                        <ul class="submenu">
                            <li class="has-droupdown"><a href="#">Event</a>
                                <ul class="submenu">
                                    <li><a href="event-grid.html">Event Grid</a></li>
                                    <li><a href="event-list.html">Event List</a></li>
                                    <li><a href="event-carousel.html">Event Carousel</a></li>
                                    <li><a href="event-details.html">Event Details</a></li>
                                </ul>
                            </li>

                            <li class="has-droupdown"><a href="#">Gallery</a>
                                <ul class="submenu">
                                    <li><a href="gallery-grid.html">Gallery Grid</a></li>
                                    <li><a href="gallery-masonry.html">Gallery Masonry</a></li>
                                </ul>
                            </li>

                            <li class="has-droupdown"><a href="#">Instructor</a>
                                <ul class="submenu">
                                    <li><a href="instructor-one.html">Instructor 1</a></li>
                                    <li><a href="instructor-two.html">Instructor 2</a></li>
                                    <li><a href="instructor-three.html">Instructor 3</a></li>
                                    <li><a href="instructor-profile.html">Instructor Profile</a></li>
                                </ul>
                            </li>

                            <li class="has-droupdown"><a href="#">Contact</a>
                                <ul class="submenu">
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    <li><a href="contact-me.html">Contact Me</a></li>
                                </ul>
                            </li>

                            <li><a href="faq.html">FAQ Page</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li><a href="purchase-guide.html">Purchase Guide</a></li>
                            <li><a href="testimonial.html">Testimonial</a></li>
                            <li><a href="coming-soon.html">Comming Soon</a></li>
                            <li><a href="login-register.html">Login/Register</a></li>
                            <li><a href="404.html">404 Error</a></li>
                        </ul>
                    </li>
                    <li class="has-droupdown"><a href="#">Blog</a>
                        <ul class="submenu">
                            <li class="has-droupdown"><a href="#">Blog</a>
                                <ul class="submenu">
                                    <li><a href="blog-grid-1.html">Blog Grid 1</a></li>
                                    <li><a href="blog-grid-2.html">Blog Grid 2</a></li>
                                    <li><a href="blog-grid-3.html">Blog Grid 3</a></li>
                                    <li><a href="blog-grid-sidebar.html">Blog Grid Sidebar</a></li>
                                    <li><a href="blog-standard.html">Blog Standard</a></li>
                                    <li><a href="blog-carousel.html">Blog Carousel</a></li>
                                </ul>
                            </li>
                            <li class="has-droupdown"><a href="#">Blog Details</a>
                                <ul class="submenu">
                                    <li><a href="blog-details-left-sidebar.html">Blog Details 1</a></li>
                                    <li><a href="blog-details-right-sidebar.html">Blog Details 2</a></li>
                                    <li><a href="blog-details.html">Blog Details 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="has-droupdown"><a href="#">Shop</a>
                        <ul class="submenu">
                            <li><a href="shop.html">Shop Page</a></li>
                            <li><a href="product-details.html">Product Details</a></li>
                            <li><a href="cart.html">Cart Page</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Start Search Popup  -->
        <div class="edu-search-popup">
            <div class="close-button">
                <button class="close-trigger"><i class="ri-close-line"></i></button>
            </div>
            <div class="inner">
                <form class="search-form" action="#">
                    <input type="text" class="eduvibe-search-popup-field" placeholder="Search Here...">
                    <button class="submit-button"><i class="icon-search-line"></i></button>
                </form>
            </div>
        </div>
        <!-- End Search Popup  -->