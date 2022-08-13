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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- <link rel="stylesheet" href="./css/styles.css"> -->
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <!-- <script defer src="./js/script.js"></script> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>


<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">
                <a href="./index.html" class="header__logo-link">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/logo-large.svg" alt="CodeUps" class="u-desktop">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/logo-small.svg" alt="CodeUps" class="u-mobile">
                </a>
            </h1>
            <nav class="header__nav header-nav">
                <ol class="header-nav__lists">
                    <li class="header-nav__list u-mobile"><a href="./index.html"><span>トップ</span></a></li>
                    <li class="header-nav__list"><a href=""><span>お知らせ</span></a></li>
                    <li class="header-nav__list"><a href=""><span>事業内容</span></a></li>
                    <li class="header-nav__list"><a href=""><span>制作実績</span></a></li>
                    <li class="header-nav__list"><a href=""><span>企業概要</span></a></li>
                    <li class="header-nav__list"><a href="./archive-blog.html"><span>ブログ</span></a></li>
                    <li class="header-nav__list"><a href="">お問い合わせ</a></li>
                </ol>
            </nav>
            <button class="header__hamburger-menu hamburger-menu js-hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>
    <div class="hamburger-nav">
        <ol class="hamburger-nav__lists">
            <li class="hamburger-nav__list"><a href="./index.html">トップ</a></li>
            <li class="hamburger-nav__list"><a href="">お知らせ</a></li>
            <li class="hamburger-nav__list"><a href="">事業内容</a></li>
            <li class="hamburger-nav__list"><a href="">制作実績</a></li>
            <li class="hamburger-nav__list"><a href="">企業概要</a></li>
            <li class="hamburger-nav__list"><a href="./archive-blog.html">ブログ</a></li>
            <li class="hamburger-nav__list"><a href="">お問い合わせ</a></li>
        </ol>
    </div>
    <div class="pagetop js-pagetop">
        <button class="pagetop__button "><span class="pagetop__button--up"></span></button>
    </div>
