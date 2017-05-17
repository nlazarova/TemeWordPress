
<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Home</title>
     <meta charset="utf-8">
     <meta name = "format-detection" content = "telephone=no" />
     <link href="https://fonts.googleapis.com/css?family=Dorsa" rel="stylesheet">
     <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">     
     <script src="<?php echo get_template_directory_uri() ?>/js/jquery.js"></script>
     <script src="<?php echo get_template_directory_uri() ?>/js/jquery-migrate-1.2.1.js"></script>
     <script src="<?php echo get_template_directory_uri() ?>/js/script.js"></script> 
     <script src="<?php echo get_template_directory_uri() ?>/js/superfish.js"></script>
     <script src="<?php echo get_template_directory_uri() ?>/js/jquery.ui.totop.js"></script>
     <script src="<?php echo get_template_directory_uri() ?>/js/jquery.equalheights.js"></script>
     <script src="<?php echo get_template_directory_uri() ?>/js/jquery.mobilemenu.js"></script>
     <script src="<?php echo get_template_directory_uri() ?>/js/jquery.easing.1.3.js"></script>
      <script src="<?php echo get_template_directory_uri() ?>/js/jquery.tooltipster.js"></script>
     <script src="<?php echo get_template_directory_uri() ?>/js/camera.js"></script>
     <!--[if (gt IE 9)|!(IE)]><!-->
     <script src="<?php echo get_template_directory_uri() ?>/js/jquery.mobile.customized.min.js"></script>
     <!--<![endif]-->
    <script src="<?php echo get_template_directory_uri() ?>/js/modernizr.custom.js"></script>
     <script>
       $(document).ready(function(){
        jQuery('#camera_wrap').camera({
            loader: 'pie',
            pagination: true ,
            minHeight: '200',
            thumbnails: true,
            height: '40.85106382978723%',
            caption: true,
            navigation: true,
            fx: 'mosaic'
          });
        $().UItoTop({ easingType: 'easeOutQuart' });
               $('.tooltip').tooltipster();

        });
     </script>

    <!--[if lt IE 9]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="<?php echo get_template_directory_uri() ?>/http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
         </a>
      </div>
      <script src="<?php echo get_template_directory_uri() ?>/js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">


    <![endif]-->
     <?php wp_head(); ?> 
     </head>
     
     <body class="page1" id="top">
     
<!--==============================header=================================--> 
<!--container_12-index-->
<header>  
  <div class="container_12">
    <div class="grid_12">
        <h1>
        <a href="#">
          <img src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="Your Happy Family">
        </a>
      </h1>
        <div class="menu_block">
          <nav class="horizontal-nav full-width horizontalNav-notprocessed">
          <?php
             if (has_nav_menu('header')) :
             wp_nav_menu(array(
            'theme_location' => 'header',
             'menu_class' => 'sf-menu',
             'container_class' => 'horizontal-nav full-width horizontalNav-notprocessed',
            ));
             else:
          ?>
            <ul class="sf-menu">
                 <li class="current"><a href="index.html">Home</a></li>
                 <li><a href="index-1.html">Services</a></li>
                 <li><a href="index-2.html">Gallery</a></li>
                 <li><a href="index-3.html">Blog</a></li>
                 <li><a href="index-4.html">Contacts</a></li>
               </ul>
            <?php
            endif; 
            ?>
            </nav>
           <div class="clear"></div>
        </div>
      </div>      
   </div>
</header>
