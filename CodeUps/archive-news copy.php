<?php get_header(); ?>

<main>
    <div class="l-news p-news ">
        <div class="p-news__main l-inner">
            <div class="p-news__item c-news">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="c-news__list">
                    <div class="c-news__info">
                        <p class="c-news__time"><time datetime="<?php the_time('Y-m-d') ?>"><?php the_time(get_option('date_format')); ?></time></p>
                        <?php
                        $categories = get_the_terms($post->ID, 'news-category' );
                        if ($categories) : ?>
                            <p class="c-news__category"><?php echo $categories[0]->name ?></p>
                        <?php else : ?>
                            <p class="c-news__category"><?php echo $categories[0]->name ?></p>
                        <?php endif; ?>

                    </div>
                    <a href="<?php the_permalink() ?>" class="c-news__link">
                        <h3 class="c-news__title"><?php the_title() ?></h3>
                    </a>
                </div>
                
                <?php endwhile;
                endif; ?>

            </div>
        </div>
    </div>

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