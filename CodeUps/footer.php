
<footer class="l-fotter p-footer">
    <div class="p-footer__inner">
        <div class="p-footer__main">
            <div class="p-footer__logo">
                <a href="<?php echo esc_url(home_url()) ?>" class="p-footer__logo-link">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/common/logo-small.svg" alt="">
                </a>
            </div>
            <div class="p-footer__nav p-footer-nav">
                <ol class="p-footer-nav__lists">
                    <li class="p-footer-nav__list"><a href="<?php echo esc_url(home_url()) ?>"><span>トップ</span></a></li>
                    <li class="p-footer-nav__list"><a href="<?php echo esc_url(home_url('/news'))?>"><span>お知らせ</span></a></li>
                    <li class="p-footer-nav__list"><a href="<?php echo esc_url(home_url('/content')) ?>"><span>事業内容</span></a></li>
                    <li class="p-footer-nav__list"><a href="<?php echo esc_url(home_url('/works')) ?>"><span>制作実績</span></a></li>
                    <li class="p-footer-nav__list"><a href="<?php echo esc_url(home_url('/overview')) ?>"><span>企業概要</span></a></li>
                    <li class="p-footer-nav__list"><a href="<?php echo esc_url(home_url('/blog'))?>"><span>ブログ</span></a></li>
                    <li class="p-footer-nav__list"><a href="<?php echo esc_url(home_url('/contact')) ?>"><span>お問い合わせ</span></a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="p-footer__copyright ">
        <p>&copy; 2022 CodeUps Inc.</p>
    </div>
</footer>
<?php wp_footer() ?>
</body>

</html>