<?php

function harry_breadcrumb()
{
    global $post;
    $breadcrumb_class = '';
    $breadcrumb_show = 1;

    if (is_front_page() && is_home()) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Front page / home', 'tecHub'));
        $breadcrumb_class = 'home_front_page';
    } elseif (is_front_page()) {
        $title = get_theme_mod('breadcrumb_blog_title', __('Front page', 'tecHub'));
        $breadcrumb_show = 0;
    } elseif (is_home()) {
        if (get_option('page_for_posts')) {
            $title = get_the_title(get_option('page_for_posts'));
        }
    } elseif (is_single() && 'post' == get_post_type()) {
        $title = get_the_title();
    } elseif (is_single() && 'service' == get_post_type()) {
        $title = get_the_title();
    } elseif (is_single() && 'product' == get_post_type()) {
        $title = get_theme_mod('breadcrumb_product_details', __('Shop', 'tecHub'));
    } elseif (is_search()) {
        $title = esc_html__('Search Results for : ', 'tecHub') . get_search_query();
    } elseif (is_404()) {
        $title = esc_html__('Page not Found', 'tecHub');
    } elseif (is_archive()) {
        $title = get_the_archive_title();
    } else {
        $title = get_the_title();
    }

    $breadcrumb_bg_img = get_theme_mod('harry_breadcrumb_bg');
    // $breadcrumb_switch = function_exists('get_field') ? get_field('breadcrumb_on_off') : null;
    // var_dump($breadcrumb_bg_img);
?>

    <!-- portfolio area start -->
    <section class="tp-blog-breadcrumb-area" data-background="<?php echo esc_url($breadcrumb_bg_img); ?> ">
        <div class="container">
            <div class="row">
                <div class="tp-portfolio-breadcrumb-content text-center">
                    <h2 class="tp-portfolio-breadcrumb-title"><?php echo esc_html($title); ?> </h2>
                    <p class="tp-portfolio-breadcrumb-body tp-blog-sideber-breadcrumb-body">
                        <?php bcn_display(); ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- portfolio area end -->

<?php
}
