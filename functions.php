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

    remove_theme_support('widgets-block-editor');
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

// tecHub_widgets
function tecHub_widgets()
{
    register_sidebar(array(
        'name'          => __('Footer Widget 01', 'tecHub'),
        'id'            => 'footer-widget-01',
        'description'   => __('Widgets in this area will be shown footer.', 'tecHub'),
        'before_widget' => '<div id="%1$s" class="tp-footer-widget footer-cols-1 pr-75 tp-footer-widget-cutm-pdg-4 wow fadeInUp %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 02', 'tecHub'),
        'id'            => 'footer-widget-02',
        'description'   => __('Widgets in this area will be shown footer.', 'tecHub'),
        'before_widget' => '<div id="%1$s" class="tp-footer-widget tp-footer-4-widget footer-cols-2 wow fadeInUp %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="tp-footer-title tp-footer-4-title">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 03', 'tecHub'),
        'id'            => 'footer-widget-03',
        'description'   => __('Widgets in this area will be shown footer.', 'tecHub'),
        'before_widget' => '<div id="%1$s" class="tp-footer-widget tp-footer-4-widget footer-cols-3 pl-50 tp-footer-widget-cutm-pdg-3 wow fadeInUp %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="tp-footer-title tp-footer-4-title">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => __('Footer Widget 04', 'tecHub'),
        'id'            => 'footer-widget-04',
        'description'   => __('Widgets in this area will be shown footer.', 'tecHub'),
        'before_widget' => '<div id="%1$s" class="tp-footer-widget footer-cols-4 wow fadeInUp %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="tp-footer-title tp-footer-4-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'tecHub_widgets');

// tecHub_header
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
