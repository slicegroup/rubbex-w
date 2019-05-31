<?php 
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
function FAQ() {

	$labels = array(
		'name'                  => _x( 'FAQ', 'Post Type General Name', 'apk' ),
		'singular_name'         => _x( 'FAQ', 'Post Type Singular Name', 'apk' ),
		'menu_name'             => __( 'FAQ', 'apk' ),
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
		'label'                 => __( 'FAQ', 'apk' ),
		'description'           => __( 'Post Type Description', 'apk' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-comments',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'FAQ', $args );

}
add_action( 'init', 'FAQ', 0 );

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

// Register Custom Post Type
function banner_advertising() {

	$labels = array(
		'name'                  => _x( 'advertising', 'Post Type General Name', 'apk' ),
		'singular_name'         => _x( 'advertising', 'Post Type Singular Name', 'apk' ),
		'menu_name'             => __( 'Advertising', 'apk' ),
		'name_admin_bar'        => __( 'advertising', 'apk' ),
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
		'label'                 => __( 'advertising', 'apk' ),
		'description'           => __( 'Post Type Description', 'apk' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'taxonomies'            => array(  ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-images-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'advertising', $args );

}

//Compatibilidad con galerías a partir de WooCommerce 3.0>
add_action( 'after_setup_theme', 'yourtheme_setup' );

function yourtheme_setup() {


add_theme_support( 'wc-product-gallery-slider' );
}

// Función para obtener el precio de la variación por defecto (si existe)
function get_default_variation( $product ){
    $attributes_count = count($product->get_variation_attributes());
    $default_attributes = $product->get_default_attributes();
    // Si no hay variación por defecto salimos
    if( $attributes_count != count($default_attributes) )
        return false;

    // Loop por las variaciones disponibles
    foreach( $product->get_available_variations() as $variation ){
        $found = true;
        // Loop por los atributos de las variaciones
        foreach( $variation['attributes'] as $key => $value ){
            $taxonomy = str_replace( 'attribute_', '', $key );
            // Busqueda de una variación por defecto
            if( isset($default_attributes[$taxonomy]) && $default_attributes[$taxonomy] != $value ){
                $found = false;
                break;
            }
        }
        // Si tenemos variación por defecto
        if( $found ) {
            $default_variaton = $variation;
            break;
        }
        // Si no, continuamos
        else {
            continue;
        }
    }
    return isset($default_variaton) ? $default_variaton : false;
}

add_action( 'woocommerce_before_single_product', 'move_variations_single_price', 1 );
function move_variations_single_price(){
    global $product, $post;

    if ( $product->is_type( 'variable' ) ) {
        // quitando el precio de las variaciones en productos variables
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );

        // Cambiamos la ubicación y volvemos a insertar los precios de las variaciones
        add_action( 'woocommerce_single_product_summary', 'replace_variation_single_price', 10 );
    }
}

function replace_variation_single_price(){
    global $product;

    // Precio principal
    $prices = array( $product->get_variation_price( 'min', true ), $product->get_variation_price( 'max', true ) );
    $active_price = $prices[0] !== $prices[1] ? sprintf( __( 'Desde: %1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );

    // Precio rebajado
    $prices = array( $product->get_variation_regular_price( 'min', true ), $product->get_variation_regular_price( 'max', true ) );
    sort( $prices );
    $regular_price = $prices[0] !== $prices[1] ? sprintf( __( 'Desde: %1$s', 'woocommerce' ), wc_price( $prices[0] ) ) : wc_price( $prices[0] );

    if ( $active_price !== $regular_price && $product->is_on_sale() ) {
        $price = '<del>' . $regular_price . $product->get_price_suffix() . '</del> <ins>' . $active_price . $product->get_price_suffix() . '</ins>';
    } else {
        $price = $regular_price;
    }

    // Cuando hay variación por defecto
    if( get_default_variation( $product ) ) {
        $default_variaton = get_default_variation( $product );
        if( ! empty($default_variaton['price_html']) ){
            $price_html = $default_variaton['price_html'];
        } else {
            if ( ! $product->is_on_sale() )
                $price_html = $price = wc_price($default_variaton['display_price']);
            else
                $price_html = $price;
        }
        $availiability = $default_variaton['availability_html'];
    } else {
        $price_html = $price;
        $availiability = '';
    }
    // Estilos ?>
    <style>
        div.woocommerce-variation-price,
        div.woocommerce-variation-availability,
        div.hidden-variable-price {
            height: 0px !important;
            overflow:hidden;
            position:relative;
            line-height: 0px !important;
            font-size: 0% !important;
        }
    </style>
    <?php // Jquery ?>
    <script>
    jQuery(document).ready(function($) {
        var a = 'div.wc-availability', p = 'p.price';

        $('select').blur( function(){
            if( '' != $('input.variation_id').val() ){
                if($(a).html() != '' ) $(a).html('');
                $(p).html($('div.woocommerce-variation-price > span.price').html());
                $(a).html($('div.woocommerce-variation-availability').html());
            } else {
                if($(a).html() != '' ) $(a).html('');
                $(p).html($('div.hidden-variable-price').html());
            }
        });
    });
    </script>
    <?php

    echo '<p class="price">'.$price_html.'</p>
    <div class="wc-availability">'.$availiability.'</div>
    <div class="hidden-variable-price" >'.$price.'</div>';
}