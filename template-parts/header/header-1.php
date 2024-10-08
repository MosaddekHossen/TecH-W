<?php
$header_email = get_theme_mod('header_email', __('techubinfo@mail.com', 'tecHub'));
$header_location = get_theme_mod('header_location', __('Manchester 21, Zurich, CH', 'tecHub'));

$header_option_01 = get_theme_mod('header_page_1', __('Faq / ', 'tecHub'));
$header_option_02 = get_theme_mod('header_page_2', __('Service / ', 'tecHub'));
$header_option_03 = get_theme_mod('header_page_3', __('Contact', 'tecHub'));
$header_page_01_url = get_theme_mod('header_page_01_url', __('#', 'tecHub'));
$header_page_02_url = get_theme_mod('header_page_02_url', __('#', 'tecHub'));
$header_page_03_url = get_theme_mod('header_page_03_url', __('#', 'tecHub'));

$button_text = get_theme_mod('button_text', __('Get a Quete', 'tecHub'));
$button_url = get_theme_mod('button_url', __('#', 'tecHub'));

?>
<!-- header area start -->
<header class="tp-header-height">
    <div class="tp-header-top tp-header-5-top pt-10 pb-10 pl-110 pr-110 d-none d-xl-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6">
                    <div class="tp-header-top-address tp-header-5-top-address">
                        <?php if (!empty($header_location)): ?>
                            <span><i class="fa-thin fa-location-dot"></i><a href="https://www.google.com/maps/@41.6758525,-86.2531698,18.17z"><?php echo esc_html($header_location); ?> </a></span>
                        <?php endif; ?>
                        <?php if (!empty($header_email)): ?>
                            <span><i class="fa-light fa-envelope"></i> <a href="mailto:techubinfo@mail.com"><?php echo esc_html($header_email); ?> </a></span>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="tp-header-top-right d-flex justify-content-end">
                        <div class="tp-header-top-menu">
                            <ul>
                                <!-- <li><a href="faq.html">Faq <span>/</span></a></li>
                                <li><a href="service.html">Service <span>/</span></a></li>
                                <li><a href="contact.html">Contact</a></li> -->
                                <?php if (!empty($header_option_01)): ?>
                                    <li><a href="<?php echo esc_url($header_page_01_url); ?> "><?php echo esc_html($header_option_01); ?> </a></li>
                                <?php endif; ?>
                                <?php if (!empty($header_option_02)): ?>
                                    <li><a href="<?php echo esc_url($header_page_02_url); ?> "><?php echo esc_html($header_option_02); ?></a></li>
                                <?php endif; ?>
                                <?php if (!empty($header_option_03)): ?>
                                    <li><a href="<?php echo esc_url($header_page_03_url); ?> "><?php echo esc_html($header_option_03); ?></a></li>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="tp-header-top-social">
                            <!-- <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-pinterest"></i></a> -->
                            <?php tecHub_social(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="header-sticky" class="tp-header-bottom">
        <div class="tp-header-area">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-4 col-md-4 col-6">
                        <div class="logo">
                            <!-- <a href="index.html"><img src="<?php // echo get_template_directory_uri(); 
                                                                ?>/assets/img/logo/logo.png" alt=""></a> -->
                            <?php tecHub_logo(); ?>
                        </div>
                    </div>
                    <div class="col-xl-6 d-none d-xl-block">
                        <div class="main-menu main-menu-5">
                            <nav class="tp-main-menu-content">
                                <!-- <ul>
                                    <li class="has-dropdown"><a class="color-active" href="index.html">Home</a></li>
                                    <li class="has-dropdown"><a href="#">Pages</a>
                                        <ul class="submenu tp-submenu">
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="team.html">Our Team</a></li>
                                            <li><a href="team-details.html">Team Details</a></li>
                                            <li><a href="portfolio.html">Our Portfolio</a></li>
                                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                            <li><a href="error.html">Error</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="portfolio.html">Portfolio</a></li>
                                    <li class="has-dropdown"><a href="service.html">Services</a>
                                        <ul class="submenu tp-submenu">
                                            <li><a href="service.html">Our Service</a></li>
                                            <li><a href="service-details.html">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown"><a href="blog.html">Blog</a>
                                        <ul class="submenu tp-submenu">
                                            <li><a href="blog-sideber.html">Blog Sidebar</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul> -->
                                <?php tecHub_menu(); ?>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-8 col-md-8 col-6">
                        <div class="tp-header-right d-flex justify-content-end align-items-center">

                            <!-- header search button -->
                            <div class="tp-header-search search-box-outer d-none d-md-block">
                                <button><i class="flaticon-search"></i></button>
                            </div>

                            <!-- header button -->
                            <?php if (!empty($button_text)): ?>
                                <div class="tp-header-button d-none d-lg-block">
                                    <a class="tp-header-btn" rel="noreferrer" href="<?php echo esc_url($button_url); ?>"><span><?php echo esc_html($button_text); ?> </span></a>
                                </div>
                            <?php endif; ?>

                            <!-- header mobile menu ber -->
                            <div class="tp-header-menu-ber">
                                <button class="d-xl-none tp-header-5-bar tp-menu-bar"><i class="fa-solid fa-bars"></i></button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->