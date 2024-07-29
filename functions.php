<?php

/**
 * Essential theme supports
 * */
function theme_setup()
{
    /** automatic feed link*/
    add_theme_support('automatic-feed-links');

    /** tag-title **/
    add_theme_support('title-tag');

    /** post formats */
    $post_formats = array('aside', 'image', 'gallery', 'video', 'audio', 'link', 'quote', 'status');
    add_theme_support('post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support('post-thumbnails');

    /** HTML5 support **/
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

    /** refresh widgest **/
    add_theme_support('customize-selective-refresh-widgets');

    /** custom background **/
    $bg_defaults = array(
        'default-image'          => '',
        'default-preset'         => 'default',
        'default-size'           => 'cover',
        'default-repeat'         => 'no-repeat',
        'default-attachment'     => 'scroll',
    );
    add_theme_support('custom-background', $bg_defaults);

    /** custom header **/
    $header_defaults = array(
        'default-image'          => '',
        'width'                  => 300,
        'height'                 => 60,
        'flex-height'            => true,
        'flex-width'             => true,
        'default-text-color'     => '',
        'header-text'            => true,
        'uploads'                => true,
    );
    add_theme_support('custom-header', $header_defaults);

    /** custom log **/
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    ));
}
add_action('after_setup_theme', 'theme_setup');

function add_theme_scripts()
{
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
