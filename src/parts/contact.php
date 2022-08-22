<?php 
if (is_front_page()) :
    $class = "l-contact";
else :
    $class = "l-sub-contact";
endif;
?>

<section class="p-contact <?php echo $class ?>">
    <div class="p-contact__inner">
        <div class="c-section-title">
            <div class="c-section-title__main">
                <p class="c-section-title__en-title c-section-title__en-title--left c-section-title__en-title--contact">Contact</p>
                <h2 class="c-section-title__ja-title c-section-title__ja-title--contact">お問い合わせ</h2>
            </div>
        </div>
        <div class="p-contact__main">
            <p class="p-contact__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
        </div>
        <div class="p-contact__button">
            <a href="" class="c-button"><span>お問い合わせへ</span></a>
        </div>
    </div>
</section>