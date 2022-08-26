<?php

//css js読み込み
function enqueue_scripts()
{
	/******** CSS ********/
	//Main CSS
	$path = '/assets/css/style.css'; //ファイル場所 テーマからのパスを指定
	wp_enqueue_style(
		'main-css', //名前
		get_stylesheet_directory_uri() . $path, //ファイル場所
		array('swiper-css'), //これより先に読み込みたいファイル
		filemtime(get_stylesheet_directory() . $path), //バージョン（更新日時） キャッシュ対策
	);
	// Swiper CSS
	$path = 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css'; //ファイル場所 テーマからのパスを指定
	wp_enqueue_style(
		'swiper-css', //名前
		$path, //ファイル場所
		array(), //これより先に読み込みたいファイル
		// filemtime(''), //バージョン（更新日時） キャッシュ対策
	);

	/******** JS ********/
	// Main JS
	$path = '/assets/js/script.js'; //ファイル場所 テーマからのパスを指定
	wp_enqueue_script(
		'main-js', //名前
		get_stylesheet_directory_uri() . $path, //ファイル場所
		array('jquery-js'), //これより先に読み込みたいファイル
		filemtime(get_stylesheet_directory() . $path), //バージョン（更新日時） キャッシュ対策
	);
	// Jquery JS
	$path = 'https://code.jquery.com/jquery-3.6.0.js'; //ファイル場所 テーマからのパスを指定
	wp_enqueue_script(
		'jquery-js', //名前
		$path, //ファイル場所
		array('swiper-js'), //これより先に読み込みたいファイル
		// filemtime(''), //バージョン（更新日時） キャッシュ対策
	);	
	// Swiper JS
	$path = 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js'; //ファイル場所 テーマからのパスを指定
	wp_enqueue_script(
		'swiper-js', //名前
		$path, //ファイル場所
		array(), //これより先に読み込みたいファイル
		// filemtime(''), //バージョン（更新日時） キャッシュ対策
	);
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');


// 投稿アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');



// カスタム投稿タイプ【お知らせ】
function cpt_register_news()
{
	$args = [
		'label' => 'お知らせ',
		'labels' => [
			'singular_name' => 'お知らせ',
			'edit_item' => 'コースを編集',
			'add_new_item' => '新規コースを追加'
		],
		'public' => true, //カスタム投稿タイプを一般に公開するかどうか
		'show_in_rest' => true, //REST APIにカスタム投稿タイプを含めるかどうか → カスタム投稿タイプでブロックエディタを使うならtrue
		'has_archive' => true, //アーカイブページを持つかどうか
		'delete_with_user' => false, //ユーザーを削除した後、コンテンツも削除するかどうか
		'exclude_from_search' => false, //検索から除外するかどうか
		'hierarchical' => false, //階層化するかどうか
		'query_var' => true, //クエリパラメーターを使えるようにする → プレビュー画面を使うためにはtrue
		'menu_position' => 5, //管理画面に表示するメニューの位置
		'supports' => [
			'title', 'editor', 'thumbnail', 'custom-fields','excerpt'
		], //カスタム投稿タイプがサポートする機能
	];
	register_post_type('news', $args);
}
add_action('init', 'cpt_register_news');

// カスタム投稿タイプ【お知らせ】 タクソノミー追加
function tax_register_news()
{
	$args = [
		'label' => 'カテゴリー',
		'labels' => [
			'singular_name' => 'カテゴリー',
			// 'edit_item' => '学年を編集',
			// 'add_new_item' => '新規学年を追加'
		],
		'hierarchical' => true, //階層化するかどうか（カテゴリー的に使うならtrue、タグ的に使うならfalse）
		'query_var' => true, //クエリパラメーターを使えるようにする
		'show_in_rest' => true //REST APIにカスタムタクソノミーを含めるかどうか、グーテンベルクのブロックエディターで分類を使用するにはtrue
	];
	register_taxonomy('news-category', 'news', $args);
}
add_action('init', 'tax_register_news');

// カスタム投稿タイプ：アーカイブページ表示件数設定
function change_set_news($query)
{
	if (is_admin() || !$query->is_main_query()) {
		return;
	}
	if ($query->is_post_type_archive('news')) {
		$query->set('posts_per_page', '10'); // 全件：-1
		return;
	} elseif ($query->is_post_type_archive('works')) {
		$query->set('posts_per_page', '6'); // 全件：-1
		return;
	}
}
add_action('pre_get_posts', 'change_set_news');



// カスタム投稿タイプ【お知らせ】
function cpt_register_works()
{
	$args = [
		'label' => '制作実績',
		'labels' => [
			'singular_name' => '制作実績',
			'edit_item' => '制作実績を編集',
			'add_new_item' => '制作実績を追加'
		],
		'public' => true, //カスタム投稿タイプを一般に公開するかどうか
		'show_in_rest' => true, //REST APIにカスタム投稿タイプを含めるかどうか → カスタム投稿タイプでブロックエディタを使うならtrue
		'has_archive' => true, //アーカイブページを持つかどうか
		'delete_with_user' => false, //ユーザーを削除した後、コンテンツも削除するかどうか
		'exclude_from_search' => false, //検索から除外するかどうか
		'hierarchical' => false, //階層化するかどうか
		'query_var' => true, //クエリパラメーターを使えるようにする → プレビュー画面を使うためにはtrue
		'menu_position' => 5, //管理画面に表示するメニューの位置
		'supports' => [
			'title', 'editor', 'thumbnail', 'custom-fields'
		], //カスタム投稿タイプがサポートする機能
	];
	register_post_type('works', $args);
}
add_action('init', 'cpt_register_works');

// カスタム投稿タイプ【お知らせ】 タクソノミー追加
function tax_register_works()
{
	$args = [
		'label' => 'カテゴリー',
		'labels' => [
			'singular_name' => 'カテゴリー',
			// 'edit_item' => '学年を編集',
			// 'add_new_item' => '新規学年を追加'
		],
		'hierarchical' => true, //階層化するかどうか（カテゴリー的に使うならtrue、タグ的に使うならfalse）
		'query_var' => true, //クエリパラメーターを使えるようにする
		'show_in_rest' => true //REST APIにカスタムタクソノミーを含めるかどうか、グーテンベルクのブロックエディターで分類を使用するにはtrue
	];
	register_taxonomy('works-category', 'works', $args);
}
add_action('init', 'tax_register_works');
