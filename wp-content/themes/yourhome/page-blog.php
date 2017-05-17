<?php 
/*
	Template Name: Blog
*/
?>
<?php get_header(); ?>
<div class="content">
  <div class="container_12">
    <div class="grid_9">
    <h2>Blog</h2>
    <!-- ========================= -->
		<article>

			<?php // Display blog posts on any page @ https://m0n.co/l
			$temp = $wp_query; $wp_query= null;

			$wp_query = new WP_Query(); $wp_query->query('posts_per_page=5&offset=8' . '&paged='.$paged);
			while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

			<div class="blog">
			<div class="text1"><a href="<?php the_permalink(); ?>" title="Read more"><?php the_title(); ?></a></div>
			<div class="alright">
          			<a href="<?php the_permalink(); ?>" class="btn">More</a>
        		</div>
			<!--table & post-->
		  	
		  	
			<?php if ( is_category() || is_archive() ) {
			    the_excerpt();
			} else {
			    the_content();
			} ?>
				
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



			<?php endwhile; ?>

			<?php if ($paged > 1) { ?>

			<nav id="nav-posts">
				<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
				<div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
			</nav>

			<?php } else { ?>

			<nav id="nav-posts">
				<div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
			</nav>

			<?php } ?>

			<?php wp_reset_postdata(); ?>

		</article>
	 <!-- ========================= -->
		</div><!-- end grid_9 -->
		<?php get_sidebar('right')?>
	</div><!-- end container_12 -->

</div><!-- #primary -->
<?php get_footer(); ?>