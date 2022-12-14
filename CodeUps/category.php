<?php get_header(); ?>

<main>
    <div class="l-select-cat c-select-cat  l-inner">
        <div class="c-select-cat__inner ">
            <ol class="c-select-cat__lists">
                <li class="c-select-cat__list"><a href="/blog">ALL</a></li>

                <?php
                $categories = get_categories();
                if ($categories) :
                    foreach ($categories as $category) : ?>
                        <?php if ($category->name == single_cat_title('', false)) : ?>
                            <li class="c-select-cat__list c-select-cat__list--current">
                                <a href="<?php echo get_category_link($category->term_id) ?>">
                                    <?php echo $category->name; ?>
                                </a>
                            </li>
                        <?php else : ?>
                            <li class="c-select-cat__list">
                                <a href="<?php echo get_category_link($category->term_id) ?>">
                                    <?php echo $category->name; ?>
                                </a>
                            </li>
                        <?php endif; ?>
                <?php
                    endforeach;
                endif;
                ?>
            </ol>
        </div>
    </div>

    <section class="l-blog-archive p-blog">
        <div class="p-blog__inner l-inner">
            <div class="p-blog__main">
                <div class="p-blog__sub-cards c-blog-cards">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <a href="<?php the_permalink() ?>" class="c-blog-card c-blog-cards__list">
                                <div class="c-blog-card__img">
                                    <?php
                                    if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail('full'); ?>" alt="">
                                    <?php else : ?>
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/no-image.jpeg" alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="c-blog-card__inner">
                                    <div class="c-blog-card__main-text">
                                        <h3 class="c-blog-card__title"><?php the_title() ?></h3>
                                        <p class="c-blog-card__text"><?php the_excerpt() ?></p>
                                    </div>
                                    <div class="c-blog-card__info">
                                        <?php
                                        $categories = get_the_category();
                                        if ($categories) : ?>
                                            <p class="c-blog-card__category"><?php echo $categories[0]->name ?> </p>
                                        <?php else : ?>

                                        <?php endif; ?>
                                        <p class="c-blog-card__time"><time datetime="<?php the_time('c') ?>"><?php the_time(get_option('date_format')); ?></time></p>
                                    </div>
                                </div>
                            </a>
                    <?php endwhile;
                    endif; ?>
                </div>
            </div>
        </div>
    </section>

    <div class=" l-pagination c-pagination">
        <?php
        if (function_exists('wp_pagenavi')) :
            wp_pagenavi();
        ?>
        <?php endif; ?>

        <!-- <div class="wp-pagenavi">
            <a class="previouspostslink" href="">PREV</a>
            <span class="current">1</span>
            <a class="page larger" href="">2</a>
            <a class="page larger" href="">3</a>
            <a class="page larger" href="">4</a>
            <a class="nextpostslink" href="">NEXT</a>
        </div> -->
    </div>

    <section class="p-contact l-sub-contact">
        <div class="p-contact__inner">
            <div class="c-section-title">
                <div class="c-section-title__main">
                    <p class="c-section-title__en-title c-section-title__en-title--left c-section-title__en-title--contact">Contact</p>
                    <h2 class="c-section-title__ja-title c-section-title__ja-title--contact">??????????????????</h2>
                </div>
            </div>
            <div class="p-contact__main">
                <p class="p-contact__text">????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????</p>
            </div>
            <div class="p-contact__button">
                <a href="" class="c-button"><span>?????????????????????</span></a>
            </div>
        </div>
    </section>
</main>


<?php get_footer(); ?>