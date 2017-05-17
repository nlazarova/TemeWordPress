<footer>   
    <div class="container_12">
      
      <div class="grid_12">
      <div class="socials">
      <?php
             if (has_nav_menu('footer')) :
             wp_nav_menu(array(
            'theme_location' => 'footer',
            'menu_class' => 'facebook',
             'menu_class' => 'tooltip',
             'container_class' => 'socials',
            ));
             else:
          ?>
        <section id="facebook">
        <a href="#" target="_blank"><span id="fackbook" class="tooltip" title="Link us on Facebook">f</span></a>
        </section>
        <section id="twitter">
        <a href="#" target="_blank"><span id="twitter-default" class="tooltip" title="Follow us on Twitter">t</span></a>
        </section>      
        <section id="google">
        <a href="#" target="_blank"><span id="google-default" class="tooltip" title="Follow us on Google Plus">g<span>+</span></span></a>
        </section>        
        <section id="rss">
        <a href="#" target="_blank"><span id="rss-default" class="tooltip" title="Follow us on Dribble">d</span></a>
        </section>  
        <?php
            endif; 
            ?>    
        </div>
        <div class="copy">
        YourHome &copy; 2014  |  <a href="#">Privacy Policy</a> <br> Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com  </a>
        </div>
         
      </div>
    </div>  
</footer>
    <script src="<?php echo get_template_directory_uri() ?>/js/classie.js"></script>

    <script src="<?php echo get_template_directory_uri() ?>/js/thumbnailGridEffects.js"></script>
     <?php wp_footer(); ?> 
</body>
</html>