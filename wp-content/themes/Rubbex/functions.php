<?php 
/*
function adp_load_styles_scripts() {
  //JS
  wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery-3.2.1.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'offcanvas', get_template_directory_uri() . '/assets/js/offcanvas.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array ( 'jquery' ), 1.1, true);
}
add_action('wp_enqueue_scripts', 'adp_load_styles_scripts');*/
// Sustituimos la versión de jQuery local por la del CDN de Google
add_action('wp_enqueue_scripts', 'mitema_enqueue_scripts');
function mitema_enqueue_scripts() {
    wp_deregister_script('jquery');
    wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"), false, '1.7.1');
    wp_enqueue_script('jquery');
    }


the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

the_post_thumbnail( array(100,100) ); 



function my_theme_setup() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );


// Register Custom Post Type
function Banner() {

	$labels = array(
		'name'                  => _x( 'Banner', 'Post Type General Name', 'apk' ),
		'singular_name'         => _x( 'Banner', 'Post Type Singular Name', 'apk' ),
		'menu_name'             => __( 'Banner', 'apk' ),
		'name_admin_bar'        => __( 'Post Type', 'apk' ),
		'archives'              => __( 'Item Archives', 'apk' ),
		'attributes'            => __( 'Item Attributes', 'apk' ),
		'parent_item_colon'     => __( 'Parent Item:', 'apk' ),
		'all_items'             => __( 'All Items', 'apk' ),
		'add_new_item'          => __( 'Add New Item', 'apk' ),
		'add_new'               => __( 'Add New', 'apk' ),
		'new_item'              => __( 'New Item', 'apk' ),
		'edit_item'             => __( 'Edit Item', 'apk' ),
		'update_item'           => __( 'Update Item', 'apk' ),
		'view_item'             => __( 'View Item', 'apk' ),
		'view_items'            => __( 'View Items', 'apk' ),
		'search_items'          => __( 'Search Item', 'apk' ),
		'not_found'             => __( 'Not found', 'apk' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'apk' ),
		'featured_image'        => __( 'Featured Image', 'apk' ),
		'set_featured_image'    => __( 'Set featured image', 'apk' ),
		'remove_featured_image' => __( 'Remove featured image', 'apk' ),
		'use_featured_image'    => __( 'Use as featured image', 'apk' ),
		'insert_into_item'      => __( 'Insert into item', 'apk' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'apk' ),
		'items_list'            => __( 'Items list', 'apk' ),
		'items_list_navigation' => __( 'Items list navigation', 'apk' ),
		'filter_items_list'     => __( 'Filter items list', 'apk' ),
	);
	$args = array(
		'label'                 => __( 'Banner', 'apk' ),
		'description'           => __( 'Post Type Description', 'apk' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-image',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Banner', $args );

}
add_action( 'init', 'Banner', 0 );