<?php 
/*
	Template Name: Gallery
*/
?>
<?php get_header(); ?>
<!--==============================Content=================================-->
<div class="content">
  <div class="container_12">
    <div class="grid_9">
    	<h2>Gallery</h2>
    </div>
    <div class="clear"></div>
    <div class="gallery">

			<?php global $post; // required
			$args = array('category' => 15); // include category 9
			$custom_posts = get_posts($args);
			foreach($custom_posts as $post) : setup_postdata($post);

			// put here what you want to appear for each post like:
			//the title:
			?>
			<div class="grid_4">
			<a href="<?php the_permalink(); ?>" class="gal"> 
			<?php the_content(); ?></a>			
			</div><!-- end grid_4 -->
			<?php
			endforeach;
			?>
      
    </div><!-- end gallery -->
  </div>
</div>
<!--==============================footer=================================-->
<?php get_footer(); ?>