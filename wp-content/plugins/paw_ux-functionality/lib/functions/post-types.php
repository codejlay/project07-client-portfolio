<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

function paw_ux_cpt_projects() {

	$labels = array(
		'name'                => _x( 'Projects', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Project', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Projects', 'text_domain' ),
		'name_admin_bar'      => __( 'Projects', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Project:', 'text_domain' ),
		'all_items'           => __( 'All Projects', 'text_domain' ),
		'add_new_item'        => __( 'Add New Project', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Project', 'text_domain' ),
		'edit_item'           => __( 'Edit Project', 'text_domain' ),
		'update_item'         => __( 'Update Project', 'text_domain' ),
		'view_item'           => __( 'View Project', 'text_domain' ),
		'search_items'        => __( 'Search Project', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Project', 'text_domain' ),
		'description'         => __( 'Create a new project', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'			  => 'dashicons-format-aside',	
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'project', $args );

}
add_action( 'init', 'paw_ux_cpt_projects', 0 );


function paw_ux_cpt_skills() {

	$labels = array(
		'name'                => _x( 'Skills', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Skill', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Skills', 'text_domain' ),
		'name_admin_bar'      => __( 'Skills', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Skill:', 'text_domain' ),
		'all_items'           => __( 'All Skills', 'text_domain' ),
		'add_new_item'        => __( 'Add New Skill', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Skill', 'text_domain' ),
		'edit_item'           => __( 'Edit Skill', 'text_domain' ),
		'update_item'         => __( 'Update Skill', 'text_domain' ),
		'view_item'           => __( 'View Skill', 'text_domain' ),
		'search_items'        => __( 'Search Skill', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Skill', 'text_domain' ),
		'description'         => __( 'Create a new project', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'			  => 'dashicons-admin-customizer',	
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'skill', $args );

}
add_action( 'init', 'paw_ux_cpt_skills', 0 );