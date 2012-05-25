<?php
	//ウィジェト
	register_sidebar();
	
	//アイキャッチ画像設定
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 200, 200, true );
	
	// 投稿ページでのキャプション自動挿入をOffにする
	define('CAPTIONS_OFF', true);
	add_filter('disable_captions', create_function('','return true;'));
?>