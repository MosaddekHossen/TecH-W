<!doctype html>
<!-- <html class="no-js" lang="zxx"> -->
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
    <?php endif; ?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Techub – Technology & IT Solutions HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

    <!-- pre loader area start -->
    <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loder-section left-section"></div>
        <div class="loder-section right-section"></div>
        <div class="loader-brand-icon"><img src="assets/img/logo/preloder.png" alt=""></div>
    </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <div class="back-to-top-wrapper">
        <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
    </div>
    <!-- back to top end -->

    <!-- Start Search Popup Section -->
    <div class="search-popup">
        <button class="close-search style-two"><span class="flaticon-multiply"><i class="far fa-times-circle"></i></span></button>
        <button class="close-search"><i class="fa-light fa-arrow-up"></i></button>
        <form method="post" action="#">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="">
                <button type="submit"><i class="fal fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- Start Search Popup Section -->

    <!-- tp-offcanvus-area-start -->
    <div class="tpoffcanvas-area">
        <div class="tpoffcanvas">
            <div class="tpoffcanvas__close-btn">
                <button class="close-btn"><i class="fal fa-times"></i></button>
            </div>
            <div class="tpoffcanvas__logo">
                <a href="index.html">
                    <img src="assets/img/logo/logo.png" alt="">
                </a>
            </div>
            <div class="tpoffcanvas__title">
                <p>Techub is the partner of choice for many of the world’s leading enterprises. We help businesses development.</p>
            </div>
            <div class="tp-main-menu-mobile d-xl-none"></div>
            <div class="tpoffcanvas__contact-info">
                <div class="tpoffcanvas__contact-title">
                    <h5>Contact us</h5>
                </div>
                <ul>
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <a href="https://www.google.com/maps/@23.8223586,90.3661283,15z" target="_blank">Manchester 21, Zurich, CH</a>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:techubinfo@mail.com"><span class="__cf_email__">techubinfo@mail.com</span></a>
                    </li>
                    <li>
                        <i class="fa-solid fa-phone-flip"></i>
                        <a href="tel:+48555223224">(+00) 678 345 98568</a>
                    </li>
                </ul>
            </div>
            <div class="tpoffcanvas__social">
                <div class="social-icon">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
    <!-- tp-offcanvus-area-end -->

    <?php tecHub_header(); ?>
