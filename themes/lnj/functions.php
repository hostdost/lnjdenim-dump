<?php
include_once("include/themes-option.php");

function lnj_Setup()
{

	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(100, 150, true);

	add_theme_support('html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));
}
add_action('after_setup_theme', 'lnj_Setup');


function register_my_menus()
{
	register_nav_menus(array(
		'header-menu' => __('Top Bar Menu'),
		'secondary-menu' => __('Bottom Bar Menu'),

	));
}
add_action('init', 'register_my_menus');

function _get_posts($post_type)
{

	$args = array(
		'post_type' => $post_type,
		'posts_per_page' => -1,
		'post_status' => 'publish',
		'order'	=> 'ASC',
		'orderby'	=> 'menu_order'
	);

	$query = new WP_Query($args);

	return $query;
}

function number_to_string($index)
{

	$args = array(
		1 => 'one',
		2 => 'two',
		3 => 'three',
		4 => 'four',
		5 => 'five',
		6 => 'six',
		7 => 'seven',
		8 => 'eight',
		9 => 'nine',
		10 => 'ten',
	);

	return $args[$index];
}
