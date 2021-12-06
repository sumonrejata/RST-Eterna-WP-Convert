<?php 

/***

Business functions and definitions
***/

// them setup function

function eterna_theme_setup(){

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
}

register_nav_menus(
	array(
		'header_menu' => 'Header Menu',
	)
);



add_action('after_setup_theme', 'eterna_theme_setup');








