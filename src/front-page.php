<?php get_header(); ?>

    <main>
        <div class="main-view">
            <div class="main-view__main">
                <h2 class="main-view__title">
                    メインタイトルが入ります
                </h2>
                <p class="main-view__subtitle">
                    サブタイトルが入ります
                </p>
            </div>
            <div class="main-view__swiper swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slide-img main-view__image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/mv1.jpg" alt="メインビュー1">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-img main-view__image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/mv2.jpg" alt="メインビュー2">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slide-img main-view__image">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/mv3.jpg" alt="メインビュー3">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="news-top top-news ">
            <div class="news-top__main inner">
                <div class="news-top__item news">
                    <div class="news__info">
                        <p class="news__time"><time datetime="2020-07-20">2020.07.20</time></p>
                        <p class="news__category">お知らせ</p>
                    </div>
                    <a href="" class="news__link">
                        <h3 class="news__title">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</h3>
                    </a>
                </div>
                <div class="news-top__button">
                    <a href="" class="button button--news-top"><span>すべて見る</span></a>
                </div>
            </div>
        </div>

        <div class="bg-line">
            <span class="bg-line__topleft-to-bottomright"></span>
        </div>

        <section class="content top-content">
            <div class="content__title section-title inner">
                <div class="sectin-title__main">
                    <p class="section-title__en-title section-title__en-title--left">Content</p>
                    <h2 class="section-title__ja-title">事業内容</h2>
                </div>
            </div>
            <div class="content__items">
                <div class="content__item">
                    <a href="" class="content__link">
                        <div class="content__img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/content1.jpg" alt="企業理念ページへ">
                        </div>
                        <p class="content__text">経営理念ページへ</p>
                    </a>
                </div>
                <div class="content__item">
                    <a href="" class="content__link">
                        <div class="content__img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/content2.jpg" alt="理念1へ">
                        </div>
                        <p class="content__text">理念1へ</p>
                    </a>
                </div>
                <div class="content__item">
                    <a href="" class="content__link">
                        <div class="content__img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/content3.jpg" alt="理念2へ">
                        </div>
                        <p class="content__text">理念2へ</p>
                    </a>
                </div>
                <div class="content__item">
                    <a href="" class="content__link">
                        <div class="content__img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/content4.jpg" alt="理念3へ">
                        </div>
                        <p class="content__text">理念3へ</p>
                    </a>
                </div>
            </div>
        </section>

        <div class="bg-line">
            <span class="bg-line__bottomleft-to-topright"></span>
        </div>

        <section class="works top-works">
            <div class="section-title works__title inner">
                <div class="sectin-title__main">
                    <p class="section-title__en-title section-title__en-title--right">Works</p>
                    <h2 class="section-title__ja-title">制作実績</h2>
                </div>
            </div>
            <div class="works__main top-card top-card--forward">
                <div class="top-card__inner ">
                    <div class="top-card__images">

                        <!-- Swiper -->
                        <div class="swiper js-works-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide top-card__image">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/works1.jpg" alt="制作実績1">
                                </div>
                                <div class="swiper-slide top-card__image">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/works2.jpg" alt="制作実績2">
                                </div>
                                <div class="swiper-slide top-card__image">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/works3.jpg" alt="制作実績3">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination js-workds-swiper-pagination"></div>
                    </div>
                    <div class="top-card__main">
                        <h3 class="top-card__title">メインタイトルが入ります。</h3>
                        <div class="top-card__text">
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        </div>
                        <div class="top-card__button">
                            <a href="" class="button button__right"><span>詳しく見る</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="overview top-overview">
            <div class="overview__title section-title inner">
                <div class="sectin-title__main">
                    <p class="section-title__en-title section-title__en-title--left">Overview</p>
                    <h2 class="section-title__ja-title">企業概要</h2>
                </div>
            </div>
            <div class="overview__main top-card top-card--reverse">
                <div class="top-card__inner ">
                    <div class="top-card__images">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/overview1.jpg" alt="制作実績1">
                    </div>
                    <div class="top-card__main">
                        <h3 class="top-card__title">メインタイトルが入ります。</h3>
                        <div class="top-card__text">
                            テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                        </div>
                        <div class="top-card__button">
                            <a href="" class="button button__right"><span>詳しく見る</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="blog top-blog">
            <div class="blog__inner inner">
                <div class="blog__title section-title ">
                    <div class="sectin-title__main">
                        <p class="section-title__en-title section-title__en-title--right">Blog</p>
                        <h2 class="section-title__ja-title">ブログ</h2>
                    </div>
                </div>
                <div class="blog__main">
                    <div class="blog__cards blog-cards">
                        <a href="" class="blog-card blog-cards__list blog-card--new">
                            <div class="blog-card__img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/blog1.jpg" alt="">
                            </div>
                            <div class="blog-card__inner">
                                <div class="blog-card__main-text">
                                    <h3 class="blog-card__title">タイトルが入ります。タイトルが入ります。</h3>
                                    <p class="blog-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</p>
                                </div>
                                <div class="blog-card__info">
                                    <p class="blog-card__category">カテゴリ</p>
                                    <p class="blog-card__time"><time datetime="2021-07-20">2021.07.20</time></p>
                                </div>
                            </div>
                        </a>
                        <a href="" class="blog-card blog-cards__list">
                            <div class="blog-card__img">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/images/blog2.jpg" alt="">
                            </div>
                            <div class="blog-card__inner">
                                <div class="blog-card__main-text">
                                    <h3 class="blog-card__title">タイトルが入ります。タイトルが入ります。</h3>
                                    <p class="blog-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</p>
                                </div>
                                <div class="blog-card__info">
                                    <p class="blog-card__category">カテゴリ</p>
                                    <p class="blog-card__time"><time datetime="2021-07-20">2021.07.20</time></p>
                                </div>
                            </div>
                        </a>
                        <a href="" class="blog-card blog-cards__list">
                            <div class="blog-card__img">
                                <img src="<?php  echo get_template_directory_uri() ?>/assets/images/blog3.jpg" alt="">
                            </div>
                            <div class="blog-card__inner">
                                <div class="blog-card__main-text">
                                    <h3 class="blog-card__title">タイトルが入ります。タイトルが入ります。</h3>
                                    <p class="blog-card__text">説明文が入ります。説明文が入ります。説明文が入ります。</p>
                                </div>
                                <div class="blog-card__info">
                                    <p class="blog-card__category">カテゴリ</p>
                                    <p class="blog-card__time"><time datetime="2021-07-20">2021.07.20</time></p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="blog__button">
                    <a href="./archive-blog.html" class="button"><span>詳しく見る</span></a>
                </div>
            </div>
        </section>

        <section class="contact top-contact">
            <div class="contact__inner">
                <div class="contact__title section-title">
                    <div class="sectin-title__main">
                        <p class="section-title__en-title section-title__en-title--left section-title__en-title--contact">Contact</p>
                        <h2 class="section-title__ja-title section-title__ja-title--contact">お問い合わせ</h2>
                    </div>
                </div>
                <div class="contact__main">
                    <p class="contact__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
                </div>
                <div class="contact__button">
                    <a href="" class="button"><span>お問い合わせへ</span></a>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer__inner">
            <div class="footer__main">
                <div class="footer__logo">
                    <a href="./index.html" class="footer__logo-link">
                        <img src="<?php  echo get_template_directory_uri() ?>/assets/images/common/logo-small.svg" alt="">
                    </a>
                </div>
                <div class="footer__nav footer-nav">
                    <ol class="footer__nav-lists footer-nav__lists">
                        <li class="footer-nav__list"><a href="./index.html"><span>トップ</span></a></li>
                        <li class="footer-nav__list"><a href="#"><span>お知らせ</span></a></li>
                        <li class="footer-nav__list"><a href="#"><span>事業内容</span></a></li>
                        <li class="footer-nav__list"><a href="#"><span>制作実績</span></a></li>
                        <li class="footer-nav__list"><a href="#"><span>企業概要</span></a></li>
                        <li class="footer-nav__list"><a href="./archive-blog.html"><span>ブログ</span></a></li>
                        <li class="footer-nav__list"><a href="#"><span>お問い合わせ</span></a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="footer__copyright footer__copyright-pagetop copyright">
            <p>&copy; 2021 CodeUps Inc.</p>
        </div>
    </footer>
    <?php get_footer(); ?>
</body>

</html>