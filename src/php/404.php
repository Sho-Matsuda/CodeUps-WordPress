<?php get_header(); ?>
<main>
    <div class="l-error p-error">
        <p class="p-error__title">404 Not Found</p>
        <p class="p-error__text">
            お探しのページは<br class="u-mobile">
            見つかりませんでした
        </p>
        <div class="p-error__button">
            <a href="<?php echo esc_url(home_url('')) ?>" class="c-button c-button--lerge"><span>TOPへ</span></a>
        </div>
    </div>
</main>
<?php get_footer(); ?>