<?php

function enqueue_scripts()
{
    // CSS
    wp_enqueue_style('main-css', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all');

    // JS
    wp_enqueue_script('index-js', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), '', true);
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

// function add_stylesheet()
// {
//     wp_enqueue_style(
//         'main', // mainという名前を設定
//         get_template_directory_uri() . '/assets/css/style.css', // パス
//         array(), // style.cssより先に読み込むCSSは無いので配列は空
//     );
// }
// add_action('wp_enqueue_scripts', 'add_stylesheet');
//     // wp_enqueue_scriptsフックにadd_stylesheet関数を登録