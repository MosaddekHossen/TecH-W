<!-- Footer area start -->
<section class="tp-footer-area tp-footer-4-area  p-relative">
    <div class="tp-footer-4-bg-shape">
        <img src="http://127.0.0.1:5500/techub/wp-content/themes/techub/techub-template/assets/img/footer/footer-4-man-shape.png" alt="<?php echo bloginfo(); ?>">
    </div>
    <?php if (is_active_sidebar('footer-widget-01') or is_active_sidebar('footer-widget-02') or is_active_sidebar('footer-widget-03') or is_active_sidebar('footer-widget-04')) : ?>
        <div class="tp-footer-top pt-120 pb-55">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-6 mb-50">
                        <?php dynamic_sidebar('footer-widget-01'); ?>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 mb-50 ">
                        <?php dynamic_sidebar('footer-widget-02'); ?>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-50">
                        <?php dynamic_sidebar('footer-widget-03'); ?>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 mb-50">
                        <?php dynamic_sidebar('footer-widget-04'); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="tp-footer-bottom tp-footer-4-bottom pt-30 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="tp-footer-copy-right text-center wow fadeInUp">
                        <p class="tp-footer-copy-paragraph tp-footer-4-copy-paragraph"><?php footer_copyright(); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer area end -->