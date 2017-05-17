<?php get_header();?>
<!--container_12- slider-->
<div class="container_12">
  <div class="grid_12">
    <div class="slider_wrapper ">
       <div class="camera_wrap" id="camera_wrap">
            <div data-thumb="images/thumb.png" data-src="<?php echo get_template_directory_uri() ?>/images/slide.jpg">
                <div class="caption fadeFromBottom">
                    Clever interior projects for your home
                </div>
            </div>
            <div data-thumb="images/thumb1.jpg" data-src="<?php echo get_template_directory_uri() ?>/images/slide1.jpg">
                <div class="caption fadeFromBottom">
                    Home improvement ideas for you
                </div>
            </div>
            <div data-thumb="images/thumb2.png" data-src="<?php echo get_template_directory_uri() ?>/images/slide2.jpg">
                <div class="caption fadeFromBottom">
                    Premium design tips
                </div>
            </div>
            <div data-thumb="images/thumb3.png" data-src="<?php echo get_template_directory_uri() ?>/images/slide3.jpg">
                <div class="caption fadeFromBottom">
                  Only creative ideas
                </div>
            </div>           
        </div>
    </div>
  </div>
</div><!--end container_12- slider-->
<!--page1_block-->
<div class="page1_block">
  <div class="container_12">
    <div class="grid_12">
      <div class="center">
        <h2>Welcome!</h2>
        Our company offers you the best design solutions to make your home interior unique and stylish
        <div class="alright">
          <a href="#" class="btn">More</a>
        </div>
      </div>
    </div>
  </div>
</div> <!--end page1_block-->
<!--==============================Content=================================-->
<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - March 10, 2014!</div>
  <div class="container_12">
    <div class="grid_12 center">
      <h3>Featured Works</h3>
      <section class="tt-grid-wrapper">
        <ul class="tt-grid tt-effect-stackback tt-effect-delay">
          
          <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/feat1.jpg" alt="img01"></a></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/feat2.jpg" alt="img02"></a></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/feat3.jpg" alt="img03"></a></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/feat4.jpg" alt="img04"></a></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/feat5.jpg" alt="img05"></a></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/images/feat6.jpg" alt="img06"></a></li>
        </ul>
        <nav>
          <a class="tt-current"></a><a></a><a></a><a></a>
        </nav>
      </section>
      <div class="clear"></div>
      <div class="alright">
      <a href="#" class="btn">More</a>
      </div>
    </div>
  </div>
  <!-- Services - sidebar-bottom -->
  <?php get_sidebar('bottom')?>
  
  <!-- end Services -->
</div>
<!--==============================footer=================================-->
<?php get_footer();?>

