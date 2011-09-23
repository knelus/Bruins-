<?php
get_header(); ?>
<div id="block_content">
	<div id="content_area" class="block">
		<div class="block_inside">
			<!-- the loop to get all the page info you want to load -->
			<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile;?>
			<?php endif; ?>
		</div><!-- closing block_inside-->		
<?php get_footer(); ?>


