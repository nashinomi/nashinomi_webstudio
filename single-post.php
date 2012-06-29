<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php get_header();  ?>
</head>
<body>
	<a name="head"></a>
    <div id="header">
        <h1><a href="<?php echo home_url(); ?>"><?php echo bloginfo('name'); ?></a></h1>
    </div>
    <div id="headmargin"></div>
    <div id="content">
    	<?php if(have_posts()): the_post(); 
    		/*
				get_the_content()の文字列編集
			*/
			$content=get_the_content();
			preg_match_all('|<a name="\d+">(.*)</a>|',$content,$match);
			//print_r($match);
			
		?>
		<!--
    	<div id="nav">
			<a href="#head" title="このページの一番上にジャンプします" class="nav_head">▲</a>
			<?php
				// リンク表示
				foreach ($match[1] as $key => $value) {
					strip_tags($value, '<a>');
					?>
					<a href="#<?php echo ++$key; ?>" title="<?php echo $value; ?>" class="nav_content">#<?php echo $key; ?></a>
					<?php
				}
			?>
			<a href="#fotter" class="nav_bottom">▼</a>
        </div>
        -->
        
	    <div id="colum_back"></div>
        <div id="colum_lines">
        	<li class="left"></li>
            <li class="right"></li>
        </div>
        <div class="post">
	    	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	    	<?php the_content(); ?>
	    	<p class="data"><?php echo get_the_date('Y年Fd日 l'); the_time(); ?></p>
    	</div>
    	<?php endif; ?>
   	</div>
    <div id="contentmargin"></div>
    <div id="footer">
    	<a name="fotter"></a>
    	<?php get_footer(); ?>
    </div>
</body>
</html>