<?php
$count = 0;
get_header(); ?>
<div id="block_content">
	<div id="content_area" class="block">
	<div id="cat_sidebar">
	<?php echo wp_list_categories( 'echo=0&title_li=&hide_empty=0&exclude=1' ); ?>
	</div>

		<div class="block_inside">
			<!-- the loop to get all the page info you want to load -->
			<?php if(have_posts()) : while(have_posts()) : the_post();?>
			<?php if($count % 2 == 0) { ?>
				<span class="cat_post_left">
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</span>
			<?php } ?>
			<?php if($count % 2 == 1) { ?>
				<span class="cat_post_right">
					<h1><?php the_title();?></h1>				
					<?php the_content();?>
				</span>
			<?php } ?>
			<?php $count++;?>
			<?php endwhile;?>
			<?php endif; ?>
		</div><!-- closing block_inside-->	
	
<?php get_footer(); ?>
