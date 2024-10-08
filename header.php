<!doctype html>
<!-- <html class="no-js" lang="zxx"> -->
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
    <?php endif; ?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
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
        <div class="loader-brand-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/preloder.png" alt=""></div>
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
        <form action="/" method="get">
            <div class="form-group">
                <input type="search" name="s" value="<?php the_search_query(); ?>" placeholder=" <?php echo esc_attr__('Search Here', 'tecHub'); ?>" required="">
                <button type="submit"><i class="fal fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- Start Search Popup Section -->

    <?php get_template_part('/template-parts/header/side-info'); ?>

    <!-- Header part -->
    <?php tecHub_header(); ?>
    <?php harry_breadcrumb(); ?>

    <!-- slider area start -->
    <!-- <section class="tp-slider-5-area p-relative z-index-1 fix">
        <div class="tp-slider-5-height">
            <div class="tp-slider-5-bg" data-background="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slider-5-bg-1.png"></div>
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-6 col-lg-6">
                        <div class="tp-slider-5-content p-relative z-index-11">
                            <div class="tp-slider-5-title-box mb-50 wow fadeInUp" data-wow-delay=".3s" data-wow-duration="1s">
                                <span class="tp-slider-sub-title tp-slider-sub-title-5">5m people trust us</span>
                                <h1 class="tp-slider-title tp-slider-title-5">Affrodable Big
                                    <span>Technology</span>
                                    Solution.
                                </h1>
                                <p class="tp-slider-5-paragraph">Eqipped with human like intelligence, our chatbeats established <br>
                                    fluent and interactive design quality dialouges</p>
                            </div>
                            <div class="tp-slider-5-btn-box d-inline-flex wow fadeInUp" data-wow-delay=".5s" data-wow-duration="1s">
                                <a class="tp-btn" rel="noreferrer" href="contact.html" target="_blank"><span>Get Started</span></a>
                                <a class="tp-btn tp-btn-white" rel="noreferrer" href="contact.html" target="_blank"><span>Contact Us</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="tp-slider-5-thumb p-relative z-index-1">
                            <img class="tp-slider-5-main-img" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/shape/slider-5-man1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tp-slider-5-bg-shape">
            <img class="tp-slider-5-bg-shape1" src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/shape/slider-5-shape2.png" alt="">
        </div>
    </section> -->
    <!-- slider area end -->