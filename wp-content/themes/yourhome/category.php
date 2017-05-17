<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
get_header(); ?>

<div class="content">
  <div class="container_12">
    <div class="grid_9">

			<?php 
			 	if(have_posts()):
				while (have_posts()): the_post(); 
			?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		              
    		

	  	<!--table & post-->
	  	<div class="blog">
		<?php the_content(); ?>
	        <table>
	          <tbody>
	            <tr>
	              <td><time datetime="2014-01-01">
	                <span class="fa fa-calendar"></span>
	               <?php the_time('F jS, Y') ?>
	              </time> </td>
	              <td><a href="#"><div class="fa fa-user"></div> <?php the_author() ?></a></td>
	              <td><a href="#"><span class="fa fa-link"></span> <?php edit_post_link('Edit', '', ''); ?></a></td>
	            </tr>
	            <tr>
	              <td><div class="fa fa-bookmark"></div> <?php the_category(', ') ?> </td>
	              <td><div class="fa fa-tag"></div><?php the_tags('Tags: ', ', ', '<br />'); ?></td>
	              <td></td>
	            </tr>
	            <tr>
	              <td><div class="fa fa-comments"></div> <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?> </td>
	              <td><div class="fa fa-eye"></div>182
	              <div class="fa fa-thumbs-up"></div>0
	              <div class="fa fa-thumbs-down"></div>0</td>
	              <td></td>
	            </tr>
	          </tbody>
	        </table>
	    </div>
	    <!--end table & post-->

        

	</div>

				
		        <!--<div class="alright">
		          	<a href="#" class="btn">More</a>
		        </div>-->
				<?php get_template_part('content', get_post_format()); ?>

				<nav class="nav-single">
					<h3 class="assistive-text"><?php _e('Post navigation', 'twentytwelve'); ?></h3>
					<span class="nav-previous"><?php previous_post_link('%link', '<span class="meta-nav">' . _x('&larr;', 'Previous post link', 'twentytwelve') . '</span> %title'); ?></span>
					<span class="nav-next"><?php next_post_link('%link', '%title <span class="meta-nav">' . _x('&rarr;', 'Next post link', 'twentytwelve') . '</span>'); ?></span>
				</nav><!-- .nav-single -->

				<?php comments_template( '', true ); ?>

			<?php endwhile; endif; // end of the loop. ?>
			
		</div><!-- end grid_9 -->
		
	</div><!-- end container_12 -->

</div><!-- #primary -->


<?php get_footer(); ?>