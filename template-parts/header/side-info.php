<?php
$header_email = get_theme_mod('header_email', __('techubinfo@mail.com', 'tecHub'));
$header_location = get_theme_mod('header_location', __('Manchester 21, Zurich, CH', 'tecHub'));
$header_phone = get_theme_mod('header_phone', __('(+00) 678 345 98568', 'tecHub'));
?>
<!-- tp-offcanvus-area-start -->
<div class="tpoffcanvas-area">
    <div class="tpoffcanvas">
        <div class="tpoffcanvas__close-btn">
            <button class="close-btn"><i class="fal fa-times"></i></button>
        </div>
        <div class="tpoffcanvas__logo">
            <a href="index.html">
                <!-- <img src="<?php // echo get_template_directory_uri(); 
                                ?>/assets/img/logo/logo.png" alt=""> -->
                <?php tecHub_logo(); ?>
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
                <?php if (!empty($header_location)): ?>
                    <li>
                        <i class="fa-solid fa-location-dot"></i>
                        <a href="https://www.google.com/maps/@23.8223586,90.3661283,15z" target="_blank"><?php echo $header_location; ?></a>
                    </li>
                <?php endif; ?>
                <?php if (!empty($header_email)): ?>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:techubinfo@mail.com"><span class="__cf_email__"><?php echo $header_email; ?></span></a>
                    </li>
                <?php endif; ?>
                <?php if (!empty($header_phone)): ?>
                    <li>
                        <i class="fa-solid fa-phone-flip"></i>
                        <a href="tel:+48555223224"><?php echo $header_phone; ?></a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="tpoffcanvas__social">
            <div class="social-icon">
                <!-- <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
                <?php tecHub_social(); ?>
            </div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>
<!-- tp-offcanvus-area-end -->