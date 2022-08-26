<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- meta情報 -->
    <!-- <title>CodeUps</title> -->
    <!-- <meta name="description" content="" /> -->
    <meta name="keywords" content="" />
    <!-- <meta name=”robots” content=”noindex”> -->
    <!-- ogp -->
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <!-- ファビコン -->
    <link rel="”icon”" href="">
    <!-- フォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <!-- css -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" /> -->
    <!-- <link rel="stylesheet" href="./css/styles.css"> -->
    <!-- JavaScript -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script> -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
    <!-- <script defer src="./js/script.js"></script> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="l-header p-header">
        <div class="p-header__inner">
            <h1 class="p-header__logo">
                <a href="<?php echo esc_url(home_url()) ?>" class="p-header__logo-link">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/logo-large.svg" alt="CodeUps" class="u-desktop">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/logo-small.svg" alt="CodeUps" class="u-mobile">
                </a>
            </h1>
            <nav class="p-header__nav p-header-nav">
                <ol class="p-header-nav__lists">
                    <li class="p-header-nav__list u-mobile"><a href="<?php echo esc_url(home_url('/')) ?>"><span>トップ</span></a></li>
                    <li class="p-header-nav__list"><a href="<?php echo esc_url(home_url('/news')) ?>"><span>お知らせ</span></a></li>
                    <li class="p-header-nav__list"><a href="<?php echo esc_url(home_url('/content')) ?>"><span>事業内容</span></a></li>
                    <li class="p-header-nav__list"><a href="<?php echo esc_url(home_url('/works')) ?>"><span>制作実績</span></a></li>
                    <li class="p-header-nav__list"><a href="<?php echo esc_url(home_url('/overview')) ?>"><span>企業概要</span></a></li>
                    <li class="p-header-nav__list"><a href="<?php echo esc_url(home_url('/blog')) ?>"><span>ブログ</span></a></li>
                    <li class="p-header-nav__list"><a href="<?php echo esc_url(home_url('/contact')) ?>">お問い合わせ</a></li>
                </ol>
            </nav>
            <button class="p-header__hamburger-menu p-hamburger-menu js-hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>
    <div class="p-hamburger-nav">
        <ol class="p-hamburger-nav__lists">
            <li class="p-hamburger-nav__list"><a href="<?php echo esc_url(home_url('/')) ?>">トップ</a></li>
            <li class="p-hamburger-nav__list"><a href="<?php echo esc_url(home_url('/news')) ?>">お知らせ</a></li>
            <li class="p-hamburger-nav__list"><a href="<?php echo esc_url(home_url('/content')) ?>">事業内容</a></li>
            <li class="p-hamburger-nav__list"><a href="<?php echo esc_url(home_url('/works')) ?>">制作実績</a></li>
            <li class="p-hamburger-nav__list"><a href="<?php echo esc_url(home_url('/overview')) ?>">企業概要</a></li>
            <li class="p-hamburger-nav__list"><a href="<?php echo esc_url(home_url('/blog')) ?>">ブログ</a></li>
            <li class="p-hamburger-nav__list"><a href="<?php echo esc_url(home_url('/contact')) ?>">お問い合わせ</a></li>
        </ol>
    </div>
    <div class="c-pagetop js-pagetop">
        <button class="c-pagetop__button "><span class="c-pagetop__button--up"></span></button>
    </div>

    <?php if (is_front_page()) : ?>

        <?php get_template_part('parts/mv') ?>

    <?php elseif (is_home() || is_category() || is_post_type_archive(['news','works'])|| is_page(['content','overview'])): ?>
        
        <?php get_template_part('parts/sub-mv') ?>

        <div class="l-breadcrumbs c-breadcrumbs l-inner">
            <div class="c-breadcrumbs_inner">
                <?php bcn_display(); ?>
            </div>
        </div>
        
    <?php else : ?>

        <div class="l-no-mv"></div>

    <?php endif; ?>