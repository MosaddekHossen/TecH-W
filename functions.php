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

    register_nav_menus(
        array(
            'main-menu' => __('Main Menu', 'tecHub'),
            'side-menu' => __('Side Menu', 'tecHub'),
            'footer-menu' => __('Footer Menu', 'tecHub'),
        )
    );
}
add_action('after_setup_theme', 'theme_setup');

// tecHub_menu
function tecHub_menu()
{
    wp_nav_menu(
        array(
            'theme_location'  => 'main-menu',
            'menu_class'      => '',
            'container'       => 'false',
            'menu_id'         => '',
            'fallback_cb'     => 'TecHub_Walker_Nav_Menu::fallback',
            'walker'     => new TecHub_Walker_Nav_Menu,
        )
    );
}

function tecHub_header()
{
    get_template_part('template-parts/header/header-1');
}

// tecHub_footer
function tecHub_footer()
{
    get_template_part('template-parts/footer/footer');
}

// Kirki class condition
if (class_exists('Kirki')) {
    include_once("include/techub-kirki.php");
}

// nec files
include_once('include/common/scripts.php');
include_once('include/template-function.php');
include_once('include/nav-walker.php');
