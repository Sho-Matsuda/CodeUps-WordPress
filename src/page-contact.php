<?php get_header(); ?>
<main>

    <div class="l-contact-form p-contact-form">
        <div class="p-contact-form__inner">
            <div class="p-contact-form__main">
                <?php the_content(); ?>
            </div>
        </div>
    </div>

</main>

<?php get_template_part('parts/contact') ?>

<?php get_footer(); ?>