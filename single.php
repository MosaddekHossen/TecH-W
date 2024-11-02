<?php get_header(); ?>

<!-- postbox area start -->
<section class="tp-postbox-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-xl-8 col-lg-8">
                <div class="tp-postbox-wrapper">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                    ?>
                            <?php echo get_template_part('template-parts/content', get_post_format());  ?>
                    <?php
                        endwhile;
                    endif;
                    ?>

                    <div class="tp-postbox-details-share-wrapper">
                        <div class="row">
                            <div class="col-xl-5 col-lg-6 col-md-6">
                                <div class="tp-postbox-details-tag">
                                    <span>Tag:</span>
                                    <a href="#">Technology</a>
                                    <a href="#">Idea</a>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-6 col-md-6">
                                <div class="tp-postbox-details-share text-lg-end">
                                    <span>Share:</span>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                    <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-postbox-comment mb-50">
                        <h3 class="tp-postbox-comment-title">03 Comments</h3>
                        <ul>
                            <li>
                                <div class="tp-postbox-comment-box border-mr p-relative">
                                    <div class="tp-postbox-comment-box-inner d-flex">
                                        <div class="tp-postbox-comment-avater">
                                            <img src="assets/img/blog/blog-details-4.png" alt="">
                                        </div>
                                        <div class="tp-postbox-comment-content">
                                            <div class="tp-postbox-comment-author d-flex align-items-center">
                                                <h5 class="tp-postbox-comment-name">Mithcel Adnan</h5>
                                            </div>
                                            <p>Curabitur luctus nisl in justo maximus egestas. Curabitur sit amet sapien
                                                vel nunc molestie pulvinar at vitae quam. Aliquam lobortis nisi vitae
                                                congue consectetur. Aliquam et quam non metus </p>
                                            <div class="tp-postbox-comment-reply"><a href="#"><i class="fa-light fa-reply"></i>REPLY</a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="children">
                                <div class="tp-postbox-comment-box border-mr p-relative">
                                    <div class="tp-postbox-comment-box-inner d-flex">
                                        <div class="tp-postbox-comment-avater">
                                            <img src="assets/img/blog/blog-details-5.png" alt="">
                                        </div>
                                        <div class="tp-postbox-comment-content">
                                            <div class="tp-postbox-comment-author d-flex align-items-center">
                                                <h5 class="tp-postbox-comment-name">Mahmia Minu</h5>
                                            </div>
                                            <p>Curabitur luctus nisl in justo maximus egestas. Curabitur sit amet sapien
                                                vel nunc molestie pulvinar at vitae quam. Aliquam lobortis nisi vitae
                                                congue consectetur</p>
                                            <div class="tp-postbox-comment-reply"><a href="#"><i class="fa-light fa-reply"></i>REPLY</a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="tp-postbox-comment-box border-mr p-relative">
                                    <div class="tp-postbox-comment-box-inner d-flex">
                                        <div class="tp-postbox-comment-avater">
                                            <img src="assets/img/blog/blog-details-6.png" alt="">
                                        </div>
                                        <div class="tp-postbox-comment-content">
                                            <div class="tp-postbox-comment-author d-flex align-items-center">
                                                <h5 class="tp-postbox-comment-name">Belal Mamhmud</h5>
                                            </div>
                                            <p>Curabitur luctus nisl in justo maximus egestas. Curabitur sit amet sapien
                                                vel nunc molestie pulvinar at vitae quam. Aliquam lobortis nisi vitae
                                                congue consectetur. Aliquam et quam non metus </p>
                                            <div class="tp-postbox-comment-reply"><a href="#"><i class="fa-light fa-reply"></i>REPLY</a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tp-postbox-contact-reply">
                        <h3 class="tp-postbox-contact-title">Leave Your Comment</h3>
                        <p class="tp-postbox-contact-pagagraph">Your email address will not be published. Required fields are marked *</p>
                        <form id="tp-postbox-contact-form" action="assets/mail.php" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="tp-postbox-contact-input">
                                        <input name="name" type="text" placeholder="Your Name*">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="tp-postbox-contact-input">
                                        <input name="email" type="email" placeholder="Your E-mail*">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="tp-postbox-contact-input">
                                        <textarea placeholder="Write Your Comment*"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="tp-postbox-contact-input-btn">
                                        <button class="tp-btn" type="submit"><span>Post Comment</span></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 mb-50">
                <div class="sidebar__wrapper">
                    <div class="sidebar__widget sidebar__widget-theme-bg mb-30">
                        <div class="sidebar__widget-content">
                            <div class="sidebar__search">
                                <form action="#">
                                    <div class="sidebar__search-input-2">
                                        <input type="text" placeholder="Search here">
                                        <button type="submit"><i class="far fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__widget mb-30">
                        <h3 class="sidebar__widget-title">Our Latest Post</h3>
                        <div class="sidebar__widget-content">
                            <div class="sidebar__post">
                                <div class="rc__post mb-25 d-flex align-items-center">
                                    <div class="rc__post-thumb mr-20">
                                        <a href="blog-details.html"><img src="assets/img/blog/details-sm-1-1.jpg" alt=""></a>
                                    </div>
                                    <div class="rc__post-content">
                                        <div class="rc__meta">
                                            <span><i class="fa-thin fa-comments"></i>
                                                02 Comments </span>
                                        </div>
                                        <h3 class="rc__post-title">
                                            <a href="blog-details.html">It’s easy to buildup
                                                business with us</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="rc__post mb-25 d-flex align-items-center active">
                                    <div class="rc__post-thumb mr-20">
                                        <a href="blog-details.html"><img src="assets/img/blog/details-sm-1-2.jpg" alt=""></a>
                                    </div>
                                    <div class="rc__post-content">
                                        <div class="rc__meta">
                                            <span><i class="fa-thin fa-comments"></i>
                                                02 Comments </span>
                                        </div>
                                        <h3 class="rc__post-title">
                                            <a href="blog-details.html">Make your life easy
                                                with rambo banking</a>
                                        </h3>
                                    </div>
                                </div>
                                <div class="rc__post d-flex align-items-center">
                                    <div class="rc__post-thumb mr-20">
                                        <a href="blog-details.html"><img src="assets/img/blog/details-sm-1-3.jpg" alt=""></a>
                                    </div>
                                    <div class="rc__post-content">
                                        <div class="rc__meta">
                                            <span><i class="fa-thin fa-comments"></i>
                                                02 Comments </span>
                                        </div>
                                        <h3 class="rc__post-title">
                                            <a href="blog-details.html">Strategy for norway
                                                peion fund global</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar__widget mb-30">
                        <h3 class="sidebar__widget-title">Catagories</h3>
                        <div class="sidebar__widget-content">
                            <ul>
                                <li><a href="blog-details.html">Artificial intelligence<span><i class="fa-sharp fa-solid fa-arrow-right"></i></span></a></li>
                                <li class="active"><a href="blog-details.html">Cloud service<span><i class="fa-sharp fa-solid fa-arrow-right"></i></span></a></li>
                                <li><a href="blog-details.html">Business<span><i class="fa-sharp fa-solid fa-arrow-right"></i></span></a></li>
                                <li><a href="blog-details.html">Cyber data<span><i class="fa-sharp fa-solid fa-arrow-right"></i></span></a></li>
                                <li><a href="blog-details.html">Technolgy service<span><i class="fa-sharp fa-solid fa-arrow-right"></i></span></a></li>
                                <li><a href="blog-details.html">Web development<span><i class="fa-sharp fa-solid fa-arrow-right"></i></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar__widget sidebar__widget-last mb-30">
                        <h3 class="sidebar__widget-title">Tags</h3>
                        <div class="sidebar__widget-content">
                            <div class="tagcloud">
                                <a href="#">Loans</a>
                                <a href="#">Financial</a>
                                <br>
                                <a href="#">Standards</a>
                                <a href="#">Bangking</a>
                                <a href="#">Agent</a>
                                <a href="#">Economy</a>
                                <a href="#">Marketing</a>
                                <a href="#">Debit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- postbox area end -->

<?php get_footer(); ?>