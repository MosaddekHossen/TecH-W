<?php

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

// tecHub_social
function tecHub_social()
{
    $tecHub_facebook = get_theme_mod('tecHub_facebook', __('#', 'tecHub'));
    $tecHub_instagram = get_theme_mod('tecHub_instagram', __('#', 'tecHub'));
    $tecHub_twitter = get_theme_mod('tecHub_twitter', __('#', 'tecHub'));
    $tecHub_pinterest = get_theme_mod('tecHub_pinterest', __('#', 'tecHub'));
    $tecHub_youtube = get_theme_mod('tecHub_youtube', __('', 'tecHub'));
    $tecHub_linkedin = get_theme_mod('tecHub_linkedin', __('', 'tecHub'));
    $tecHub_flickr = get_theme_mod('tecHub_flickr', __('', 'tecHub'));
    $tecHub_vimeo = get_theme_mod('tecHub_vimeo', __('', 'tecHub'));
    $tecHub_behance = get_theme_mod('tecHub_behance', __('', 'tecHub'));
?>
    <?php if (!empty($tecHub_facebook)) : ?>
        <a target="_blank" href="<?php echo esc_url($tecHub_facebook); ?>"><i class="fab fa-facebook-f"></i></a>
    <?php endif; ?>

    <?php if (!empty($tecHub_instagram)) : ?>
        <a target="_blank" href="<?php echo esc_url($tecHub_instagram); ?>"><i class="fab fa-instagram"></i></a>
    <?php endif; ?>

    <?php if (!empty($tecHub_twitter)) : ?>
        <a target="_blank" href="<?php echo esc_url($tecHub_twitter); ?>"><i class="fab fa-twitter"></i></a>
    <?php endif; ?>

    <?php if (!empty($tecHub_pinterest)) : ?>
        <a target="_blank" href="<?php echo esc_url($tecHub_pinterest); ?>"><i class="fab fa-pinterest-p"></i></a>
    <?php endif; ?>

    <?php if (!empty($tecHub_youtube)) : ?>
        <a target="_blank" href="<?php echo esc_url($tecHub_youtube); ?>"><i class="fab fa-youtube"></i></a>
    <?php endif; ?>

    <?php if (!empty($tecHub_linkedin)) : ?>
        <a target="_blank" href="<?php echo esc_url($tecHub_linkedin); ?>"><i class="fab fa-linkedin"></i></a>
    <?php endif; ?>

    <?php if (!empty($tecHub_flickr)) : ?>
        <a target="_blank" href="<?php echo esc_url($tecHub_flickr); ?>"><i class="fab fa-flickr"></i></a>
    <?php endif; ?>

    <?php if (!empty($tecHub_vimeo)) : ?>
        <a target="_blank" href="<?php echo esc_url($tecHub_vimeo); ?>"><i class="fab fa-vimeo"></i></a>
    <?php endif; ?>

    <?php if (!empty($tecHub_behance)) : ?>
        <a target="_blank" href="<?php echo esc_url($tecHub_behance); ?>"><i class="fab fa-behance"></i></a>
    <?php endif; ?>

<?php
}

// footer_copyright
function footer_copyright()
{
    $footer_copyright = get_theme_mod('tecHub_copyright_text', __('Full Copyright & Design By @ Theme pure - 2024', 'tecHub'));
?>
    <?php echo tecHub_kses($footer_copyright); ?>
<?php
}

/**
 * Sanitize SVG markup for front-end display.
 *
 * @param  string $svg SVG markup to sanitize.
 * @return string 	  Sanitized markup.
 */
function tecHub_kses($tecHub_custom_tag = '')
{
    $tecHub_allowed_html = [
        'svg'                       => [
            'class' => true,
            'aria-hidden' => true,
            'aria-labelledby' => true,
            'role' => true,
            'xmlns' => true,
            'width' => true,
            'height' => true,
            'viewbox' => true, // <= Must be lower case!
        ],
        'path'  => [
            'd' => true,
            'fill' => true,
            'stroke' => true,
            'stroke-width' => true,
            'stroke-linecap' => true,
            'stroke-linejoin' => true,
            'opacity' => true,
        ],
        'a'                         => [
            'class'     => [],
            'href'      => [],
            'title'     => [],
            'target'    => [],
            'rel'       => [],
        ],
        'b' => [],
        'blockquote'                  => [
            'cite'      => [],
        ],
        'cite'                        => [
            'title'     => [],
        ],
        'code'                => [],
        'del'                          => [
            'datetime'   => [],
            'title'      => [],
        ],
        'dd'                => [],
        'div'                           => [
            'class'      => [],
            'title'      => [],
            'style'      => [],
        ],
        'dl'                     => [],
        'dt'                     => [],
        'em'                     => [],
        'h1'                     => [],
        'h2'                     => [],
        'h3'                     => [],
        'h4'                     => [],
        'h5'                     => [],
        'h6'                     => [],
        'i'                              => [
            'class'       => [],
        ],
        'img'                            => [
            'alt'     => [],
            'class'   => [],
            'height'  => [],
            'src'     => [],
            'width'   => [],
        ],
        'li'                              => [
            'class'   => [],
        ],
        'ol'                              => [
            'class'   => [],
        ],
        'p'                               => [
            'class'   => [],
        ],
        'q'                               => [
            'cite'    => [],
            'title'   => [],
        ],
        'span'                            => [
            'class'   => [],
            'title'   => [],
            'style'   => [],
        ],
        'iframe'                          => [
            'width'         => [],
            'height'        => [],
            'scrolling'     => [],
            'frameborder'   => [],
            'allow'         => [],
            'src'           => [],
        ],
        'strike'                    => [],
        'br'                        => [],
        'strong'                    => [],
    ];

    return wp_kses($tecHub_custom_tag, $tecHub_allowed_html);
}
