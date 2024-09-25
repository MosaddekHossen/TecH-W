<?php

$url_format = get_field('video_url');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('tp-format-video tp-postbox-item mb-50'); ?>>
    <?php if (has_post_thumbnail()) : ?>
        <div class="tp-postbox-thumb p-relative">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
            </a>
            <div class="tp-postbox-date-text">
                <span><?php echo get_the_date('d'); ?><br><?php echo get_the_date('M'); ?></span>
            </div>
            <?php if (!empty($url_format)) : ?>
                <div class="tp-postbox-thumb-video">
                    <a class="popup-video" href="<?php echo esc_url($url_format); ?> "><i class="fa-regular fa-play"></i></a>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <div class="tp-postbox-content">
        <div class="tp-postbox-meta mb-35">
            <span class="mr-35"><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><i class="fa-light fa-circle-user"></i><?php the_author(); ?></a></span>
            <span><a href="#"><i class="fal fa-comments"></i> <?php comments_number(); ?></a></span>
        </div>
        <h3 class="tp-postbox-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
        </h3>
        <div class="tp-postbox-text">
            <?php the_excerpt(); ?>
        </div>
        <div class="tp-postbox-read">
            <a class="tp-btn" rel="noreferrer" href="<?php the_permalink(); ?>" target="_blank"><span>Read More</span></a>
        </div>
    </div>
</article>