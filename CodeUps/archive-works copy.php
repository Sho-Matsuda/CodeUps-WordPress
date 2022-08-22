<?php get_header(); ?>

<main>
    <div class="l-select-cat c-select-cat  l-inner">
        <div class="c-select-cat__inner ">
            <ol class="c-select-cat__lists">
                <li class="c-select-cat__list c-select-cat__list--current"><a href="">ALL</a></li>
                <?php
                $categories = get_the_terms($post->ID, 'works-category');
                if ($categories) :
                    foreach ($categories as $category) : ?>
                        <li class="c-select-cat__list">
                            <a href="<?php echo get_category_link($category->term_id) ?>">
                                <?php echo $category->name; ?>
                            </a>
                        </li>
                <?php
                    endforeach;
                endif;
                ?>
            </ol>
        </div>
    </div>

    <section class="l-sub-works p-sub-works">
        <div class="p-sub-works__inner ">
            <?php
            if (have_posts()) : while (have_posts()) : the_post();
                    $image_id = SCF::get('archive_image');
                    $company = SCF::get('company');
            ?>
                    <a href="<?php the_permalink() ?>" class="p-sub-works__list">
                        <div class="p-sub-works__images">
                            <div class="p-sub-works__image">
                                <?php if ($image_id) : ?>
                                    <img src="<?php echo wp_get_attachment_image($image_id, 'large'); ?>" alt="制作実績1">
                                <?php else : ?>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/no-image.jpeg" alt="">
                                <?php endif; ?>

                            </div>
                        </div>
                        <div class="p-sub-works__body">
                            <h3 class="p-sub-works__company"><?php echo $company; ?></h3>
                        </div>
                    </a>
            <?php
                endwhile;
            endif;
            ?>

        </div>
    </section>

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