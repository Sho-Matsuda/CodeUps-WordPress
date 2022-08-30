<?php
//初期値
$title = 'ブログ';
$class = 'p-sub-mv__image--blog';

if (is_post_type_archive('news')) :
    $title = 'お知らせ';
    $class = 'p-sub-mv__image--news';
elseif (is_post_type_archive('works')) :
    $title = '制作実績';
    $class = 'p-sub-mv__image--works';
elseif (is_page('content')) :
    $title = '事業内容';
    $class = 'p-sub-mv__image--content';
elseif (is_page('overview')) :
    $title = '企業概要';
    $class = 'p-sub-mv__image--overview';
else :
    $title = 'ブログ';
    $class = 'p-sub-mv__image--blog';
endif;
?>

<div class="p-sub-mv">
    <div class="p-sub-mv__main">
        <h1 class="p-sub-mv__title"><?php echo $title ?></h1>
    </div>
    <div class="p-sub-mv__ratio">
        <div class="p-sub-mv__image <?php echo $class ?>"></div>
    </div>
</div>