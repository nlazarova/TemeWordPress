<?php
/*
* Template name: Page Category
*/
 get_header(); ?>
<div class="content">
  <div class="container_12">
    <div class="grid_12">
	    <h2>Services</h2>
	    We offer expertise with moving, event setup, large equipment deliveries and more at competitive prices. 
    </div>
    <div class="clear cl1"></div>
    <div class="serv">
    	


    <?php global $post; // required
$args = array('category' => 12); // include category 12
$custom_posts = get_posts($args);
foreach($custom_posts as $post) : setup_postdata($post);

// put here what you want to appear for each post like:
//the title:
?>
<div class="grid_4">
<div class="text1"> <?php the_title(); ?> </div>
<?php

// an excerpt:
the_content();

//and so on...    

?><div class="alright"><a href="#" class="btn">More</a></div>
</div><!-- end grid_4 -->
<?php
endforeach;
?>
				
    		
		</div><!-- end serv -->
		
	</div><!-- end container_12 -->

</div><!-- content -->
<?php get_footer(); ?>