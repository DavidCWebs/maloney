<?php
namespace Carawebs\Maloney\RegisterProduct;
/**
 * Register Products
 *
 * Lifted from woocommerce.
 */

 function setup() {

   $labels = [
     'name'                  => __( 'Products', 'carawebs' ),
     'singular_name'         => __( 'Product', 'carawebs' ),
     'menu_name'             => _x( 'Products', 'Admin menu name', 'carawebs' ),
     'add_new'               => __( 'Add Product', 'carawebs' ),
     'add_new_item'          => __( 'Add New Product', 'carawebs' ),
     'edit'                  => __( 'Edit', 'carawebs' ),
     'edit_item'             => __( 'Edit Product', 'carawebs' ),
     'new_item'              => __( 'New Product', 'carawebs' ),
     'view'                  => __( 'View Product', 'carawebs' ),
     'view_item'             => __( 'View Product', 'carawebs' ),
     'search_items'          => __( 'Search Products', 'carawebs' ),
     'not_found'             => __( 'No Products found', 'carawebs' ),
     'not_found_in_trash'    => __( 'No Products found in trash', 'carawebs' ),
     'parent'                => __( 'Parent Product', 'carawebs' ),
     'featured_image'        => __( 'Product Image', 'carawebs' ),
     'set_featured_image'    => __( 'Set product image', 'carawebs' ),
     'remove_featured_image' => __( 'Remove product image', 'carawebs' ),
     'use_featured_image'    => __( 'Use as product image', 'carawebs' )
   ];

   register_post_type( 'product', [
     //apply_filters( 'carawebs_register_post_type_product', [

         'labels'              => $labels,
         'description'         => __( 'This is where you can add new products.', 'carawebs' ),
         'public'              => true,
         'show_ui'             => true,
         //'capability_type'     => 'product',
         //'map_meta_cap'        => true,
         'publicly_queryable'  => true,
         'exclude_from_search' => false,
         'hierarchical'        => false, // Hierarchical causes memory issues - WP loads all records!
         //'rewrite'             => $product_permalink ? array( 'slug' => untrailingslashit( $product_permalink ), 'with_front' => false, 'feeds' => true ) : false,
         'query_var'           => true,
         'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments', 'page-attributes', 'publicize', 'wpcom-markdown' ),
         'has_archive'         => false,
         'show_in_nav_menus'   => true

       ]

      //)

   );

 }

add_action( 'init', __NAMESPACE__ . '\\setup' );

function service_updated_messages( $messages ) {

	global $post;

	$permalink = get_permalink( $post );

	$messages['service'] = array(
		0 => '', // Unused. Messages start at index 1.
		1 => sprintf( __('Product updated. <a target="_blank" href="%s">View service</a>', 'carawebs'), esc_url( $permalink ) ),
		2 => __('Custom field updated.', 'carawebs'),
		3 => __('Custom field deleted.', 'carawebs'),
		4 => __('Product updated.', 'carawebs'),
		/* translators: %s: date and time of the revision */
		5 => isset($_GET['revision']) ? sprintf( __('Product restored to revision from %s', 'carawebs'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
		6 => sprintf( __('Product published. <a href="%s">View service</a>', 'carawebs'), esc_url( $permalink ) ),
		7 => __('Product saved.', 'carawebs'),
		8 => sprintf( __('Product submitted. <a target="_blank" href="%s">Preview service</a>', 'carawebs'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		9 => sprintf( __('Product scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview service</a>', 'carawebs'),
		// translators: Publish box date format, see http://php.net/date
		date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		10 => sprintf( __('Product draft updated. <a target="_blank" href="%s">Preview service</a>', 'carawebs'), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	);

	return $messages;
}

add_filter( 'post_updated_messages', __NAMESPACE__ . '\\service_updated_messages' );

function product_category_init() {

  register_taxonomy( 'product-category', ['product'], [

    'hierarchical'      => true,
    'public'            => true,
    'show_ui'           => true,
    'show_admin_column' => true,
    'show_in_nav_menus' => true,
    'show_tagcloud'     => false,
    'query_var'         => true,
    'rewrite'           => true,
    'capabilities'      => [
      'manage_terms'  => 'edit_posts',
      'edit_terms'    => 'edit_posts',
      'delete_terms'  => 'edit_posts',
      'assign_terms'  => 'edit_posts'
      ],
      'labels'  => [
        'name'                       => __( 'Product categories', 'carawebs-cpt' ),
        'singular_name'              => _x( 'Product category', 'taxonomy general name', 'carawebs-cpt' ),
        'search_items'               => __( 'Search product categories', 'carawebs-cpt' ),
        'popular_items'              => __( 'Popular product categories', 'carawebs-cpt' ),
        'all_items'                  => __( 'All product categories', 'carawebs-cpt' ),
        'parent_item'                => __( 'Parent product category', 'carawebs-cpt' ),
        'parent_item_colon'          => __( 'Parent product category:', 'carawebs-cpt' ),
        'edit_item'                  => __( 'Edit product category', 'carawebs-cpt' ),
        'update_item'                => __( 'Update product category', 'carawebs-cpt' ),
        'add_new_item'               => __( 'New product category', 'carawebs-cpt' ),
        'new_item_name'              => __( 'New product category', 'carawebs-cpt' ),
        'separate_items_with_commas' => __( 'Product categories separated by comma', 'carawebs-cpt' ),
        'add_or_remove_items'        => __( 'Add or remove product categories', 'carawebs-cpt' ),
        'choose_from_most_used'      => __( 'Choose from the most used product categories', 'carawebs-cpt' ),
        'menu_name'                  => __( 'Product categories', 'carawebs-cpt' ),
        ],
      ]

    );

  }

  add_action( 'init', __NAMESPACE__ . '\\product_category_init' );
