<?php get_header(); ?>

<main>
    <div class="l-news p-news ">
        <div class="p-news__main l-inner">
            <div class="p-news__item c-news">

                <?php
                $args = array(
                    'post_type' => 'news', //カスタム投稿タイプ名
                    'posts_per_page' => 1 //取得する投稿の件数
                );
                $sub_query = new WP_Query($args);
                ?>
                <?php if ($sub_query->have_posts()) : while ($sub_query->have_posts()) : $sub_query->the_post();
                        $categories = get_the_terms($post->ID, 'news-category');
                ?>
                        <div class="c-news__list">
                            <div class="c-news__info">
                                <p class="c-news__time"><time datetime="<?php the_time('c') ?>"><?php the_time(get_option('date_format')); ?></time></p>
                                <p class="c-news__category"><?php echo $categories[0]->name ?></p>
                            </div>
                            <a href="" class="c-news__link">
                                <h3 class="c-news__title"><?php the_excerpt() ?></h3>
                            </a>
                            <div class="p-news__button">
                                <a href="<?php echo esc_url(home_url('/news')) ?>" class="c-button c-button--news-top"><span>すべて見る</span></a>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>

    <div class="l-bg-line c-bg-line">
        <span class="c-bg-line__topleft-to-bottomright"></span>
    </div>

    <section class="l-content p-content">
        <div class="p-content__title c-section-title l-inner">
            <div class="c-section-title__main">
                <p class="c-section-title__en-title c-section-title__en-title--left">Content</p>
                <h2 class="c-section-title__ja-title">事業内容</h2>
            </div>
        </div>
        <div class="p-content__items">
            <div class="p-content__item">
                <a href="<?php echo esc_url(home_url('/content')) ?>" class="p-content__link">
                    <div class="p-content__img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/content1.jpg" alt="企業理念ページへ">
                    </div>
                    <p class="p-content__text">経営理念ページへ</p>
                </a>
            </div>
            <div class="p-content__item">
                <a href="<?php echo esc_url(home_url('/content?ver=anchor1')) ?>" class="p-content__link">
                    <div class="p-content__img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/content2.jpg" alt="理念1へ">
                    </div>
                    <p class="p-content__text">理念1へ</p>
                </a>
            </div>
            <div class="p-content__item">
                <a href="<?php echo esc_url(home_url('/content?ver=anchor2')) ?>" class="p-content__link">
                    <div class="p-content__img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/content3.jpg" alt="理念2へ">
                    </div>
                    <p class="p-content__text">理念2へ</p>
                </a>
            </div>
            <div class="p-content__item">
                <a href="<?php echo esc_url(home_url('/content?ver=anchor3')) ?>" class="p-content__link">
                    <div class="p-content__img">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/content4.jpg" alt="理念3へ">
                    </div>
                    <p class="p-content__text">理念3へ</p>
                </a>
            </div>
        </div>
    </section>

    <div class="l-bg-line c-bg-line">
        <span class="c-bg-line__bottomleft-to-topright"></span>
    </div>

    <section class="l-works p-works">
        <div class="p-works__title c-section-title l-inner">
            <div class="c-section-title__main">
                <p class="c-section-title__en-title c-section-title__en-title--right">Works</p>
                <h2 class="c-section-title__ja-title">制作実績</h2>
            </div>
        </div>
        <div class="p-works__main c-top-card c-top-card--forward">
            <div class="c-top-card__inner ">
                <div class="c-top-card__images">
                    <!-- Swiper -->
                    <div class="swiper js-works-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide c-top-card__image">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/works1.jpg" alt="制作実績1">
                            </div>
                            <div class="swiper-slide c-top-card__image">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/works2.jpg" alt="制作実績2">
                            </div>
                            <div class="swiper-slide c-top-card__image">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/works3.jpg" alt="制作実績3">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination js-workds-swiper-pagination"></div>
                </div>

                <div class="c-top-card__main">
                    <h3 class="c-top-card__title">メインタイトルが入ります。</h3>
                    <div class="c-top-card__text">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </div>
                    <div class="c-top-card__button">
                        <a href="<?php echo esc_url(home_url('/works')) ?>" class="c-button"><span>詳しく見る</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="l-overview p-overview">
        <div class="p-overview__title c-section-title l-inner">
            <div class="c-section-title__main">
                <p class="c-section-title__en-title c-section-title__en-title--left">Overview</p>
                <h2 class="c-section-title__ja-title">企業概要</h2>
            </div>
        </div>
        <div class="p-overview__main c-top-card c-top-card--reverse">
            <div class="c-top-card__inner ">
                <div class="c-top-card__images">
                    <div class="c-top-card__image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/overview1.jpg" alt="制作実績1">
                    </div>
                </div>
                <div class="c-top-card__main">
                    <h3 class="c-top-card__title">メインタイトルが入ります。</h3>
                    <div class="c-top-card__text">
                        テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    </div>
                    <div class="c-top-card__button">
                        <a href="<?php echo esc_url(home_url('/overview')) ?>" class="c-button"><span>詳しく見る</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="l-blog p-blog ">
        <div class="p-blog__inner l-inner">
            <div class="p-blog__title c-section-title ">
                <div class="c-section-title__main">
                    <p class="c-section-title__en-title c-section-title__en-title--right">Blog</p>
                    <h2 class="c-section-title__ja-title">ブログ</h2>
                </div>
            </div>
            <div class="p-blog__main">
                <div class="p-blog__cards c-blog-cards">
                    <?php
                    $args = array(
                        'post_type' => 'post', //カスタム投稿タイプ名
                        'posts_per_page' => 3 //取得する投稿の件数
                    );
                    $sub_query = new WP_Query($args);
                    ?>
                    <?php if ($sub_query->have_posts()) : while ($sub_query->have_posts()) : $sub_query->the_post();
                            $categories = get_the_terms($post->ID, 'category');
                    ?>
                            <a href="<?php the_permalink() ?>" class="c-blog-card c-blog-cards__list">
                                <div class="c-blog-card__img">
                                    <img src="<?php the_post_thumbnail(); ?>" alt="">
                                </div>
                                <div class="c-blog-card__inner">
                                    <div class="c-blog-card__main-text">
                                        <h3 class="c-blog-card__title"><?php the_title() ?></h3>
                                        <p class="c-blog-card__text"><?php the_excerpt() ?></p>
                                    </div>
                                    <div class="c-blog-card__info">
                                        <p class="c-blog-card__category"><?php echo $categories[0]->name ?></p>
                                        <p class="c-blog-card__time"><time datetime="<?php the_time('c') ?>"><?php the_time(get_option('date_format')); ?></time></p>
                                    </div>
                                </div>
                            </a>
                    <?php
                        endwhile;
                    endif;
                    ?>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
            <div class="p-blog__button">
                <a href="<?php echo esc_url(home_url('/blog')) ?>" class="button"><span>詳しく見る</span></a>
            </div>
        </div>
    </section>

    <?php get_template_part('parts/contact') ?>

</main>

<?php get_footer(); ?>