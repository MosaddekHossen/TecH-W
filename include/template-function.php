<?php

// tecHub_footer
function tecHub_footer()
{
    get_template_part('template-parts/footer/footer');
}

// harry_logo
function harry_logo()
{
    $harry_logo = get_theme_mod('harry_logo', get_template_directory_uri() . '/assets/img/logo/logo.png');
?>
    <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url($harry_logo); ?>" alt="<?php echo bloginfo(); ?>">
    </a>
<?php
}