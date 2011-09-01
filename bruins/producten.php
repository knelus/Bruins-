<?php
/*
Template Name: Producten
*/
?>

<?php
get_header(); ?>
<div id="block_content">
	<div id="content_area" class="block">
	<div id="cat_sidebar">
	<?php echo wp_list_categories( 'echo=0&title_li=&depth=1&hide_empty=0' ); ?>
	</div>
	
		<div class="product">
				<div id="category_list">
			<?php 
						// Grab the categories - top level only (depth=1)
			 $get_cats = wp_list_categories( 'echo=0&title_li=&depth=1&hide_empty=0' );
			// Split into array items
			 $cat_array = explode('</li>',$get_cats);
			// Amount of categories (count of items in array)
			 $results_total = count($cat_array);
			// How many categories to show per list (round up total divided by 5)
			 //$cats_per_list = ceil($results_total / 5);
			 $cats_per_list =4;
			// Counter number for tagging onto each list
			 $list_number = 1;
			// Set the category result counter to zero
			 $result_number = 0;		
			 ?>
			 
			 <ul class="category_footer_post" id="cat-col-<?php echo $list_number; ?>">
			 
				<?php
					foreach($cat_array as $category) {
					$result_number++;
			 
					if($result_number % $cats_per_list == 0) {
					$list_number++;
					
					echo $category.'</li>
					</ul>
			 
					<ul class="category_footer_post" id="cat-col-'.$list_number.'">';			 
				}			 
				else {			 
					echo $category.'</li>';			 
					}			 
				} ?> 
				</ul>
		</div>
			
		</div><!-- closing block_inside -->		
<?php get_footer(); ?>

