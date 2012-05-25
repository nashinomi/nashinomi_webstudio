<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(); bloginfo(); ?></title>
<?php
	/* 要必要 */
	wp_head();
?>
<link rel="alternate" type="application/rss+xml" title="RSS フィード" href="<?php bloginfo('rss2_url'); ?>" />
<?php 
	/* jQuery使用の為の準備的な何か */
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js',array(), '1.7.1');
?>
<link rel="stylesheet" href="<?php bloginfo ('stylesheet_url'); ?>" type="text/css" />
<!-- js読み込み 
<script src=<?php //bloginfo ('template_directory'); ?>/test.js></script>
-->