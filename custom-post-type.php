<?php

/**
 * Plugin Name:     Artcloud Brochure App
 * Plugin URI:      http://artcloud.fi
 * Description:     This plugin to create custom brochure.
 * Version:         1.0.0
 * Author:          Artcloud
 * Author URI:      http://artcloud.fi
 * Text Domain:     artcloud-app-brochure
 * License:         GPL-3.0
 * License URI:     http://www.gnu.org/licenses/gpl-3.0.txt
 * Domain Path:     /languages
 * Requires PHP:    7.4
 */

// If this file is called directly, abort.
if ( !defined( 'ABSPATH' ) ) {
	die( 'We\'re sorry, but you can not directly access this file.' );
}

/**
 * Register a custom post type called "brochure".
 *
 * @see get_post_type_labels() for label keys.
 */

 // Register Custom Post Type
 function artcloud_register_brochures() {

	$labels = [
		"name" => __( "Brochures", "artcloud-app-brochure" ),
		"singular_name" => __( "Brochure", "artcloud-app-brochure" ),
		"menu_name" => __( "Brochures", "artcloud-app-brochure" ),
        'add_new' => __( 'Add New brochure', 'artcloud-app-brochure' ),
        'add_new_item' => __( 'Add New brochure', 'artcloud-app-brochure' ),
        'edit_item' => __( 'Edit brochure', 'artcloud-app-brochure' ),
        'new_item' => __( 'New brochure', 'artcloud-app-brochure' ),
        'all_items' => __( 'All brochures', 'artcloud-app-brochure' ),
        'view_item' => __( 'View brochure', 'artcloud-app-brochure' ),
        'search_items' => __( 'Search brochures', 'artcloud-app-brochure' ),
        'not_found' =>  __( 'No brochures Found', 'artcloud-app-brochure' ),
        'not_found_in_trash' => __( 'No brochures found in Trash', 'artcloud-app-brochure' ),
        'parent_item_colon' => '',
	];

	$args = [
		"label" => __( "Brochures", "artcloud-app-brochure" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "brochures", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail","custom-fields","revisions" ],
        'menu_icon' => 'dashicons-randomize',
        'menu_position' => 5,
	];

	register_post_type( "brochures", $args );
}

add_action( 'init', 'artcloud_register_brochures' );
