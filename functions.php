<?php
function enqueue_custom_script()
{
	// custom-script.jsを読み込む
	wp_enqueue_script(
		'custom-script', // ハンドル名
		get_template_directory_uri() . '/assets/js/custom-script.js', // ファイルのパス
		array(), // 依存関係（今回はないので空の配列）
		null, // バージョン（指定しない場合はnull）
		true // フッターに読み込む（true: フッター, false: ヘッダー）
	);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_script');

function create_post_type_news()
{
	register_post_type(
		'news',
		array(
			'labels' => array(
				'name' => __('news'),
				'singular_name' => __('news')
			),
			'public' => true,
			'supports' => ['title', 'editor', 'thumbnail', 'custom-fields'],
			'has_archive' => true,
			'rewrite' => array('slug' => 'news', 'with_front' => false),
			'menu_position' => 3,
			'show_in_rest' => true // Gutenbergエディターを有効にする

			// その他のオプション
		)
	);
}
add_action('init', 'create_post_type_news');

add_theme_support('post-thumbnails'); // アイキャッチ画像（サムネイル）を有効にする
