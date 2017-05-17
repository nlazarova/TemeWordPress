<?php
/*
* Template name: Img Sidebar Bottom
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
        <h2><?php the_title(); ?></h2>
        <?php the_post_thumbnail(); ?>
        <div class="blog">
        <?php 
        if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
          the_post_thumbnail();
        } 
        ?>        
        <?php the_content(); ?>            
        </div>
        <div class="alright">
          <a href="#" class="btn">More</a>
        </div>
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
  <?php get_sidebar('bottom')?>

</div>
<!--=========================end Content==============================-->
<!--==============================footer=================================-->
<?php get_footer();?>

