<?php get_header() ?>
	<div id="block_content">
		<div id="content_area" class="block">
			<div class="block_inside">
				<div id="news">
						<?php if(function_exists('dynamic_sidebar') && dynamic_sidebar(2)) : else : ?>
						<?php endif; ?>   
				</div>
				<div id="one_pixel_line">
				</div>
				<div id="pictures">
						<?php if(function_exists('dynamic_sidebar') && dynamic_sidebar(1)) : else : ?>
						<?php endif; ?>   
				</div>
				<!-- the loop to get all the page info you want to load -->
				<?php if(have_posts()) : while(have_posts()) : the_post(); 
					the_content();						
				endwhile;
				endif; ?>

			</div><!-- closing block_inside -->		
<?php get_footer(); ?>

	

