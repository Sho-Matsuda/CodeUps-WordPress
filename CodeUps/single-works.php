<?php get_header(); ?>
<div class="l-breadcrumbs c-breadcrumbs l-inner">
    <div class="c-breadcrumbs_inner">
        <?php bcn_display(); ?>
    </div>
</div>
<main>


    <?php
    if (have_posts()) :
        $company = SCF::get('company');
        $create_point = SCF::get('create_point');
        $design_point = SCF::get('design_point');
        $other = SCF::get('other');
    ?>
        <div class="l-work-intro p-work-intro">
            <div class="p-work-intro__inner">
                <h2 class="p-work-intro__company"><?php echo $company ?> 制作実績</h2>

                <div class="p-works-intro__images">
                    <div class="p-works-intro__single">
                        <div class="swiper js-works-single-swiper" style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff">
                            <div class="swiper-wrapper">

                                <div class="p-works-intro__image swiper-slide">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/sub-mv/blog-pc.jpg" alt="">
                                </div>
                                <div class="p-works-intro__image swiper-slide">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/tmp/sub-works2.jpg" alt="">
                                </div>
                                <div class="p-works-intro__image swiper-slide">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/tmp/sub-works3.jpg" alt="">
                                </div>
                                <div class="p-works-intro__image swiper-slide">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/tmp/sub-works4.jpg" alt="">
                                </div>
                                <div class="p-works-intro__image swiper-slide">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/tmp/sub-works5.jpg" alt="">
                                </div>
                                <div class="p-works-intro__image swiper-slide">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/tmp/sub-works6.jpg" alt="">
                                </div>
                                <div class="p-works-intro__image swiper-slide">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/tmp/sub-blog1.jpg" alt="">
                                </div>
                            </div>

                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>

                    <div class="p-works-intro__thumb">
                        <div thumbsSlider="" class="p-works-intro__thumbs-images swiper js-works-single-thumb-swiper">
                            <div class="swiper-wrapper">
                                <div class="p-works-intro__thumbs-image swiper-slide">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/sub-mv/blog-pc.jpg" alt="">
                                </div>
                                <div class="p-works-intro__thumbs-image swiper-slide">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/tmp/sub-works2.jpg" alt="">
                                </div>
                                <div class="p-works-intro__thumbs-image swiper-slide">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/tmp/sub-works3.jpg" alt="">
                                </div>
                                <div class="p-works-intro__thumbs-image swiper-slide">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/tmp/sub-works4.jpg" alt="">
                                </div>
                                <div class="p-works-intro__thumbs-image swiper-slide">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/tmp/sub-works5.jpg" alt="">
                                </div>
                                <div class="p-works-intro__thumbs-image swiper-slide">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/tmp/sub-works6.jpg" alt="">
                                </div>
                                <div class="p-works-intro__thumbs-image swiper-slide">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/tmp/sub-blog1.jpg" alt="">
                                    
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php
                    /*<img class="p-works-intro__image" src="<?php echo get_template_directory_uri() ?>/assets/images/tmp/sub-works1.jpg" alt="">
                    */
                    ?>
                </div>

                <div class="p-work-intro__info c-info">
                    <p class="c-info__time"><time datetime="<?php the_time('c') ?>"><?php the_time(get_option('date_format')); ?></time></p>

                    <?php
                    $categories = get_the_terms($post->ID, 'works-category');
                    if ($categories) : ?>
                        <p class="c-info__category"><?php echo $categories[0]->name ?></p>
                    <?php endif; ?>
                </div>

                <div class="p-work-intro__main">

                    <?php if ($create_point) : ?>
                        <div class="p-work-intro__box">
                            <p class="p-work-intro__text-title">制作のポイント</p>
                            <p class="p-work-intro__text">
                                <?php echo $create_point ?>
                            </p>
                        </div>
                    <?php endif; ?>

                    <?php if ($design_point) : ?>
                        <div class="p-work-intro__box">
                            <p class="p-work-intro__text-title">デザインのポイント</p>
                            <p class="p-work-intro__text">
                                <?php echo $design_point ?>
                            </p>
                        </div>
                    <?php endif; ?>

                    <?php if ($other) : ?>
                        <div class="p-work-intro__box">
                            <p class="p-work-intro__text-title">その他</p>
                            <p class="p-work-intro__text">
                                <?php echo $other ?>
                            </p>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    <?php

    endif;
    ?>



    <div class=" l-pagination c-pagination">
        <?php
        if (function_exists('wp_pagenavi')) :
            wp_pagenavi();
        ?>
        <?php endif; ?>
    </div>
</main>



<?php get_template_part('parts/contact') ?>

<?php get_footer(); ?>