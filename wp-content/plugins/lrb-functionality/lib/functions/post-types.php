<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
function lrb_register_product() {

	$labels = array(
		'name'                => 'Products',
		'singular_name'       => 'Product',
		'menu_name'           => 'Products',
		'name_admin_bar'      => 'lrb post type',
		'parent_item_colon'   => 'Parent Product:',
		'all_items'           => 'All Products',
		'add_new_item'        => 'Add New Product',
		'add_new'             => 'New Product',
		'new_item'            => 'New Item',
		'edit_item'           => 'Edit Product',
		'update_item'         => 'Update Product',
		'view_item'           => 'View Product',
		'search_items'        => 'Search products',
		'not_found'           => 'No products found',
		'not_found_in_trash'  => 'No products found in Trash',
	);
	$args = array(
		'label'               => 'Product',
		'description'         => 'Post type descrption',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'comments', 'custom-fields', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'products', $args );

}
add_action( 'init', 'lrb_register_product', 0 );