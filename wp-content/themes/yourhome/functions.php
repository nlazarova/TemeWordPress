<?php
//Sidebar Right
$args=[
	'name'          => __( 'Sidebar Right'),
	'id'            => 'right',
	'before_widget' => '<div>',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>'
];

register_sidebar($args);

//Sidebar bottom

$argb=[
	'name'          => __( 'Sidebar bottom'),
	'id'            => 'bottom',
	'before_widget' => '<div>',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>'
];

register_sidebar($argb);
//menu header
register_nav_menu('header', 'header menu');
//menu footer
register_nav_menu('footer', 'footer menu');


//enqueues our locally supplied font awesome stylesheet
function enqueue_our_required_stylesheets(){
	wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.css'); 
}
add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');

//of img
add_theme_support( 'post-thumbnails' ); 
