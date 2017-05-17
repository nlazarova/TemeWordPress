<?php
/*
* Template name: Full Width
*/

 get_header();?>

<!--page1_block-->
<!--<div class="page1_block">-->
<div class="content">
  <div class="container_12">
    <div class="grid_9">
      
        <?php 
            if(have_posts()):
            while(have_posts()):
            the_post();
        ?>
        <h2><?php the_title() ;?></h2>
        <div class="blog"><?php the_content(); ?></div>
        <!--<div class="alright">
          <a href="#" class="btn">More</a>
        </div>-->
        <?php
            endwhile;
            endif;  
        ?> 
    </div>
  
 <!--end page1_block-->
<!--==============================Content=================================-->
<!--sidebar right-->
<!--end sidebar right-->
</div>
<!-- Services - sidebar-bottom -->
 
</div>
<!--=========================end Content==============================-->
<!--==============================footer=================================-->
<?php get_footer();?>

