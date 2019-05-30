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
<style>
	.flex-control-nav img{
		width: 100px;
		height: 50px;
		margin-top: 20px;

	}
	.flex-control-nav li{
		display: inline !important;
	}
</style>

<div class="row info-doll">

      <div class="col-md-6">
          <?php
	/**
	 * Hook: woocommerce_before_single_product_summary.
	 *
	 * @hooked woocommerce_show_product_sale_flash - 10
	 * @hooked woocommerce_show_product_images - 20
	 */
	do_action( 'woocommerce_before_single_product_summary' );
	?>

          <div class="flex-control-thumbs"></div>
      </div>
      <!--col2-->
      <div class="col-md-6">
        <div>
				<h2><?php the_title(); ?></h2>
        <div class="price-detail">
        <p class="">	<?php echo $product->get_price_html(); ?></p>
          <div class="btns animated wow fadeInUp ml-auto" data-wow-duration="5s">
            <a class="btn-1" href="#">Put me to your liking</a>
          </div>
        </div>
        <!-- contemnt tkee contenido doll -->
        <div class="take">
          <p>
           		<p><?php the_content(); ?></p>
          </p>

          <!-- btn -->
          <div class="content-btn-detail">
            <div class="btns animated wow fadeInUp btn-buy buy" data-wow-duration="5s">
              <a class="btn-1 " href="<?php echo bloginfo('url');?>/?add-to-cart=<?php echo get_the_ID (); ?>">Take me home</a>
            </div>
          </div>
          <!-- bnt  -->
        </div>
        <!-- content tae-->
        </div>
     
      </div>
        <!-- tabs -->
				<section>
	
			</section>
        <!-- end tabs -->
    </div> <!--row-->
  </div>
















