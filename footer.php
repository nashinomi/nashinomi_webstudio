<?php wp_footer(); ?>
<div id="footer_content">
	 <?php dynamic_sidebar(); ?>
<div/>
<script type="text/javascript">
	//カラム背景の高さ設定
	var h=document.getElementById("content").offsetHeight
	document.getElementById("colum_lines").style.height=h+'px';
	document.getElementById("colum_back").style.height=h+'px';
	
	//競合を避ける処理?
	//jQueryを使用する場所で読み込む必要あり(要検討) 
	var j=jQuery.noConflict(); 
	
	// fixed高さ調整
	var nav=j('#nav');
	//document.write(h);
	offset = nav.offset();
	var content_h=h-offset.top;
	//alert(content_h);
	//document.write(j(window).scrollTop());
	//document.write(offset.top);
	j(window).scroll(function () {
	  if(j(window).scrollTop() > content_h){
		document.getElementById("nav").style.position='absolute';
		document.getElementById("nav").style.top=content_h+'px';
		//alert(content_h);
		//alert(j(window).scrollTop());
		//alert(offset.top);
	  } else {
		document.getElementById("nav").style.position='fixed';
		document.getElementById("nav").style.top=offset.top+'px';
	  }
	});
</script>