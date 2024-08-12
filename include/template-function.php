<?php

// tecHub_footer
function tecHub_footer()
{
    get_template_part('template-parts/footer/footer');
}

// tecHub_logo
function tecHub_logo()
{
    $tecHub_logo = get_theme_mod('logo_url', get_template_directory_uri() . '/assets/img/logo/logo.png');
?>
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url($tecHub_logo); ?>" alt="<?php echo bloginfo(); ?>">
    </a>
<?php
}
