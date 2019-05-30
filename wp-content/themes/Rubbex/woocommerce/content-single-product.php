<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */

get_template_part('partials/header-2'); 
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<div class="container">

<div class="row info-doll">
      <div class="col-md-6">
          <div class="content-img" style="background:url(https://lumidolls.com/222-home_default/either-sexdoll.jpg)">
          </div>
      </div>
      <div class="col-md-6">
          <h2>SUZANNE - SexDoll</h2>
          <div class="price">
						<p class="">	£500.00 </p>
						<p class="">	£300.00</p>

						<div class="btns animated wow fadeInUp " data-wow-duration="5s">
                <a class="btn-1" href="#">Put me to your liking</a>
             </div>
					</div>
					<p>Hi, boys! My name is Suzanne and I’m from Martinique, an amazing island in the Caribbean Sea. I was born surrounded by palm trees and easy going people. We can say that despite moving to L.A. I kept much from my genuine personality.
					Now, I live in the heart of this unbelievable city, where most of the world’s movies are made. As you can see in my pic, I like fantasy and Marvel heroes, above all, Wonder Woman. I have played a role in the movie; I can say one of my biggest dreams has come true. Can you say the same?</p>
				
      </div>
    </div>
</div>
</div>


<div  id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>

	<?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

	<div class="summary entry-summary">
		<?php
		/**
		 * Hook: woocommerce_single_product_summary.
		 *
		 * @hooked woocommerce_template_single_title - 5
		 * @hooked woocommerce_template_single_rating - 10
		 * @hooked woocommerce_template_single_price - 10
		 * @hooked woocommerce_template_single_excerpt - 20
		 * @hooked woocommerce_template_single_add_to_cart - 30
		 * @hooked woocommerce_template_single_meta - 40
		 * @hooked woocommerce_template_single_sharing - 50
		 * @hooked WC_Structured_Data::generate_product_data() - 60
		 */
		do_action( 'woocommerce_single_product_summary' );
		?>
	</div>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
