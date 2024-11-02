<?php if (is_single()) : ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('tp-format-standard aaa3'); ?>>
        <article class="tp-postbox-item">
            <div class="tp-postbox-thumb p-relative">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="tp-postbox-content">
                <div class="tp-postbox-meta mb-35">
                    <span class="mr-35"><a href="#"><i class="fa-light fa-circle-user"></i>By Bulbul</a></span>
                    <span><a href="#"><i class="fal fa-comments"></i> 02 Comments</a></span>
                </div>
                <h3 class="tp-postbox-title">
                    IT solutions, transforming challenges into
                </h3>
                <div class="tp-postbox-details-text">
                    <p>Curabitur luctus euismod metus, eu pellentesque mauris tempus sit amet. Proin ante odio, posuere id lacus auctor, elementum tempor tellus. Integer mattis justo eu enim tempus lacinia. Fusce vitae enim diam. Ut commodo viverra magna non egestas. Integer sodales massa at odio tristique volutpat. Proin posuere odio maximus, eleifend felis sed, ultrices turpis. Proin ultricies sodales nisl vel euismod. Praesent vestibulum sem lorem, eget fermentum justo iaculis et</p>

                    <p>vitae lobortis eros purus non augue. Nullam molestie augue diam, scelerisque porta dolor mollis a. Cras condimentum elementum eros at finibus. pharetra condimentum sagittis. Donec consequat velit et nisi scelerisque, quis iaculis felis tincidunt. In faucibus sapien ut elit hendrerit, et tristique mauris lacinia. Phasellus tincidunt scelerisque lectus sed scelerisque. Donec at enim facilisis, tempus nisi quis, pharetra enim</p>

                </div>
            </div>
        </article>
        <div class="tp-postbox-details-blockquote p-relative">
            <blockquote class="d-flex">
                <div class="tp-postbox-details-blockquote-icon">
                    <img src="assets/img/blog/quote.png" alt="">
                </div>
                <div class="tp-postbox-details-blockquote-content">
                    <h4>The new common language will be more simple than the <br>
                        existing European languages. It will be as </h4>
                    <p>Nelson Adam</p>
                </div>
            </blockquote>
        </div>
        <div class="tp-postbox-list mb-55">
            <h3 class="tp-postbox-list-title">The desire to make a difference</h3>
            <div class="row">
                <div class="col-xl-5 col-lg-12">
                    <div class="tp-postbox-list-img">
                        <img src="assets/img/blog/blog-details-list.jpg" alt="">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-12">
                    <div class="tp-postbox-list-content ml-20">
                        <ul>
                            <li><i class="flaticon-check-2"></i> Sed ut perspiciatis unde iste natus</li>
                            <li><i class="flaticon-check-2"></i> Maecenas tempor velit sit amet euismod</li>
                            <li><i class="flaticon-check-2"></i> Nulla egestas iaculis metus, id tempor massa</li>
                            <li><i class="flaticon-check-2"></i> Sed ut perspiciatis unde iste natus</li>
                            <li><i class="flaticon-check-2"></i> Maecenas tempor velit sit amet euismod</li>
                        </ul>
                    </div>
                </div>
            </div>
            <p class="tp-postbox-list-paragraph">vitae lobortis eros purus non augue. Nullam molestie augue diam, scelerisque porta dolor mollis a. Cras condimentum elementum eros at finibus. pharetra condimentum sagittis. Donec</p>
        </div>
    </article>
<?php else: ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('tp-format-standard tp-postbox-item mb-50'); ?>>
        <?php if (has_post_thumbnail()) : ?>
            <div class="tp-postbox-thumb p-relative">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
                <div class="tp-postbox-date-text">
                    <span><?php echo get_the_date('d'); ?><br><?php echo get_the_date('M'); ?></span>
                </div>
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

<?php endif; ?>