<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...

// Register Custom Taxonomy
// function paw_ux_register_skill_type_taxonomy() {

// 	$labels = array(
// 		'name'                       => 'Skill Types',
// 		'singular_name'              => 'Skill Type',
// 		'menu_name'                  => 'Skill Type',
// 		'all_items'                  => 'All Skill Types',
// 		'parent_item'                => 'Parent Skill Type',
// 		'parent_item_colon'          => 'Parent Skill Type:',
// 		'new_item_name'              => 'New Skill Type Name',
// 		'add_new_item'               => 'Add New Skill Type',
// 		'edit_item'                  => 'Edit Skill Type',
// 		'update_item'                => 'Update Skill Type',
// 		'view_item'                  => 'View Skill Type',
// 		'separate_items_with_commas' => 'Separate skill types with commas',
// 		'add_or_remove_items'        => 'Add or remove skill yypes',
// 		'choose_from_most_used'      => 'Choose from the most used',
// 		'popular_items'              => 'Popular Skill Types',
// 		'search_items'               => 'Search Skill Types',
// 		'not_found'                  => 'Not Found',
// 	);
// 	$args = array(
// 		'labels'                     => $labels,
// 		'hierarchical'               => true,
// 		'public'                     => true,
// 		'show_ui'                    => true,
// 		'show_admin_column'          => true,
// 		'show_in_nav_menus'          => true,
// 		'show_tagcloud'              => false,
// 	);
// 	register_taxonomy( 'skill-type', array( 'project' ), $args );

// }
// add_action( 'init', 'paw_ux_register_skill_type_taxonomy', 0 );