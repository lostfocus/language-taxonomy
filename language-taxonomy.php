<?php
/*
Plugin Name: Language Taxonomy
Plugin URI: http://www.lostfocus.de/language-taxonomy/
Description: Adds a language taxonomy to posts, pages and other items.
Version: 0.2
Author: Dominik Schwind
Author URI: http://www.lostfocus.de/
*/
function create_language_taxonomies() 
{
	$labels = array(
		'name' => _x( 'Language', 'taxonomy general name' ),
		'singular_name' => _x( 'Language', 'taxonomy singular name' ),
		'search_items' =>  __( 'Search Languages' ),
		'popular_items' => __( 'Popular Languagess' ),
		'all_items' => __( 'All Languages' ),
		'parent_item' => null,
		'parent_item_colon' => null,
		'edit_item' => __( 'Edit Language' ), 
		'update_item' => __( 'Update Language' ),
		'add_new_item' => __( 'Add New Language' ),
		'new_item_name' => __( 'New Language' ),
		'separate_items_with_commas' => __( 'Separate languages with commas' ),
		'add_or_remove_items' => __( 'Add or remove languages' ),
		'choose_from_most_used' => __( 'Choose from the most used languages' )
		); 

	register_taxonomy('language', array('post','page'), array(
		'hierarchical' => false,
		'labels' => $labels,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'lang' ),
		));

}

function lt_the_language($id){
	the_terms($id,'language');
}

add_action( 'init', 'create_language_taxonomies', 0 );