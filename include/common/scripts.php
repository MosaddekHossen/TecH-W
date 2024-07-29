<?php

function add_theme_scripts()
{
    wp_enqueue_style('fonts', tecHub_fonts_url(), array(), '1.1', 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.1', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '1.1', 'all');
    wp_enqueue_style('flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), '1.1', 'all');
    wp_enqueue_style('awesome', get_template_directory_uri() . '/assets/css/font-awesome-pro.css', array(), '1.1', 'all');
    wp_enqueue_style('magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.1', 'all');
    wp_enqueue_style('map', get_template_directory_uri() . '/assets/css/main.css.map', array(), '1.1', 'all');
    wp_enqueue_style('slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.1', 'all');
    wp_enqueue_style('spacing', get_template_directory_uri() . '/assets/css/spacing.css', array(), '1.1', 'all');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), '1.1', 'all');
    wp_enqueue_style('tecHub-main', get_template_directory_uri() . './assets/css/main.css', array(), '1.1', 'all');
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('ajax', get_template_directory_uri() . '/assets/js/ajax-form.js', array('jquery'), 1.1, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap-bundle.js', array(), 1.1, true);
    wp_enqueue_script('countdown', get_template_directory_uri() . '/assets/js/countdown.js', array(), 1.1, true);
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded-pkgd.js', array(), 1.1, true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope-pkgd.js', array(), 1.1, true);
    wp_enqueue_script('counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array(), 1.1, true);
    wp_enqueue_script('magnific', get_template_directory_uri() . '/assets/js/magnific-popup.js', array(), 1.1, true);
    wp_enqueue_script('meanmenu', get_template_directory_uri() . '/assets/js/meanmenu.js', array(), 1.1, true);
    wp_enqueue_script('nice-select', get_template_directory_uri() . '/assets/js/nice-select.js', array(), 1.1, true);
    wp_enqueue_script('parallax', get_template_directory_uri() . '/assets/js/parallax.js', array(), 1.1, true);
    wp_enqueue_script('purecounter', get_template_directory_uri() . '/assets/js/purecounter.js', array(), 1.1, true);
    wp_enqueue_script('range-slider', get_template_directory_uri() . '/assets/js/range-slider.js', array(), 1.1, true);
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.js', array(), 1.1, true);
    wp_enqueue_script('swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array(), 1.1, true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . '/assets/js/waypoints.js', array(), 1.1, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.js', array(), 1.1, true);
    wp_enqueue_script('tecHub-main', get_template_directory_uri() . '/assets/js/main.js', array(), 1.1, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'add_theme_scripts');

// tecHub_fonts_url
function tecHub_fonts_url()
{
    $font_url = '';
    /*
    Translators: If there are characters in your language that are not supported
    by the chosen font(s), translate this to 'off'. Do not translate into your language.
     */
    if ('off' !== _x('on', 'Google font: on or off', 'harry')) {
        $font_url = 'https://fonts.googleapis.com/css2?' . urlencode('family=DM+Sans:opsz,wght@9..40,200;9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800;9..40,900;9..40,1000&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap');
    }
    return $font_url;
}
