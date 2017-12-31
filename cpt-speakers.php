<?php
/*
Plugin Name: Speakers CPT
Plugin URI: https://github.com/macgraphic/Speakers-cpt
Description: Create the Speakers Custom Post Type, and add it to the Rest API.
Version: 1.1.6
Author: Mark Smallman
Author URI: https://macgraphic.co.uk
License: GPLv2
*/

// Register Speakers Custom Post Type
function speakers() {
	$labels = array(
	'name'                  => _x( 'Speaker', 'Post Type General Name', 'text_domain' ),
	'singular_name'         => _x( 'Speaker', 'Post Type Singular Name', 'text_domain' ),
	'menu_name'             => __( 'Speakers', 'text_domain' ),
	'name_admin_bar'        => __( 'Speaker', 'text_domain' ),
	'archives'              => __( 'Speakers', 'text_domain' ),
	'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
	'all_items'             => __( 'All Speakers', 'text_domain' ),
	'add_new_item'          => __( 'Add New Speaker', 'text_domain' ),
	'add_new'               => __( 'Add New', 'text_domain' ),
	'new_item'              => __( 'New Speaker', 'text_domain' ),
	'edit_item'             => __( 'Edit Speaker', 'text_domain' ),
	'update_item'           => __( 'Update Speaker', 'text_domain' ),
	'view_item'             => __( 'View Speaker', 'text_domain' ),
	'search_items'          => __( 'Search Speakers', 'text_domain' ),
	'not_found'             => __( 'Not found', 'text_domain' ),
	'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
	'featured_image'        => __( 'Featured Image', 'text_domain' ),
	'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
	'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
	'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
	'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
	'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
	'items_list'            => __( 'Items list', 'text_domain' ),
	'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
	'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
	'label'                 => __( 'Speaker', 'text_domain' ),
	'description'           => __( 'Recent Speakers', 'text_domain' ),
	'labels'                => $labels,
	'supports'              => array( 'title', 'editor', 'revisions' ),
	'hierarchical'          => true,
	'public'                => true,
	'show_ui'               => true,
	'show_in_menu'          => true,
	'menu_icon'             => 'dashicons-id-alt',
	'show_in_admin_bar'     => true,
	'show_in_nav_menus'     => true,
	'can_export'            => true,
	'has_archive'           => 'speakers',
	'exclude_from_search'   => false,
	'publicly_queryable'    => true,
	'capability_type'       => 'post',
	'show_in_rest'			=> true,
	);
	register_post_type( 'speakers', $args );

}
			add_action( 'init', 'speakers', 0 );


function bdng_change_speakers_title( $title ) {
	$screen = get_current_screen();
	if ( 'speakers' == $screen->post_type ) {
		  $title = 'Speaker Name';
	}
	return $title;
}
			add_filter( 'enter_title_here', 'bdng_change_speakers_title' );
	// END Speakers CPT
