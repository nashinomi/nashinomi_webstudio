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
    	<?php if(have_posts()): ?>
		<div id="nav">
			<a href="#head" class="head">▲</a>
			<a href="#fotter" class="bottom">▼</a>
        </div>
    	<!-- 背景グりットカラム -->
        <div id="colum_back"></div>
    	<div id="colum_lines">
        	<li class="left"></li>
        	<?php for($i=1; $i<12; $i++): ?>
            <li style="left:<?php echo 10+(($i-1)*20)+(60*$i); ?>px;"></li>
            <?php endfor; ?>
            <li class="right"></li>
            <!-- カラムの間に線を引く -->
            <!--
            <li class="line1"></li>
            <li class="line2"></li>
            -->
        </div>
    	<div class="post_collums">
    <?php
		$count=1;
		//wordpressループ 
		while(have_posts()): the_post();
	?>	
    	<?php if($count>3): $count=1; ?>
        </div>
        <div class="post_collums">
        <?php endif; ?>
            <div class="post_one_col <?php if($count==3){echo 'post_col_right';} ?> ">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php if(has_post_thumbnail()): ?>
				<a href="<?php the_permalink(); ?>" class="cathcimage">
					<?php the_post_thumbnail(array(240, 240)); ?>
                </a>
				<?php endif;
               		the_content();
                ?>
                <span class="data">
                    <?php echo get_the_date('Y年Fd日 l'); the_time(); ?>
                </span>
            </div>
    <?php
		$count++;
      	//while_end
		endwhile;
		//div補完
		if($count/3!=0)echo '</div>';
	?>
	<?php else: ?>
		<div id="colum_lines">
        	<li class="left"></li>
            <li class="right"></li>
        </div>
		<h2 class="notpage">ページが見つかりません。</h2>
	<?php endif; ?>
	
    	</div>
    <div id="contentmargin"></div>
    <div id="footer">
    	<a name="fotter"></a>
    	<?php get_footer(); ?>
    </div>
</body>
</html>