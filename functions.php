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
