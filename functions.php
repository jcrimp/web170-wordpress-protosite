<?php

/*
Theme Name: Seven Star Wordpress Theme
Theme URI: 
Author: Jenny Crimp
Author URI: http://madebyjennycrimp.com/
Description: This is a theme created for Seven Star Women's Kung Fu.
Version: 1.0
*/

//Register my menus
register_nav_menus( array(
	'main-menu' => __('Main'), 
	'mobile-menu' => __('Mobile'), 
	'footer-menu' => __('Footer'), 
));
//end Register my menus


//Register sidebar
register_sidebar( array(
	'name' => __('donatesidebar'), 
	'before_title' => '<h4>', 
	'after_title' => '</h4>', 
	'before_widget' => '<section class="widget">',
	'after_widget' => '</section>'
));
//end register sidebar

//Enable featured images and post thumbnails
add_theme_support('post-thumbnails');

//Enable excerpts on Pages
add_post_type_support('page', 'excerpt');

//Get my badass SEO title tag
function get_my_title_tag() {
	
	global $post;
	
	if (is_front_page()) {//the front page
		bloginfo('description');
	}
	
	elseif(is_page() || is_single()) {//pages and postings
		the_title();//the title of the destination page or posting
	}
	
	else{
		bloginfo('description');
	}
	
	if($post->post_parent) {
		echo ' | ';
		echo get_the_title($post->post_parent);
	}
	 
	 echo ' | ';
	 bloginfo('name'); //site (business) name
	 echo ' | ';
	 echo 'Seattle, WA';//write out the city and state
}

?>