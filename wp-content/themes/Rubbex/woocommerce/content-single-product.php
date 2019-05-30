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
      <!--col2-->
      <div class="col-md-6">
        <div>
            <h2>SUZANNE - SexDoll</h2>
        <div class="price-detail">
          <p class=""> £500.00 </p>
          <p class=""> £300.00</p>
          <div class="btns animated wow fadeInUp ml-auto" data-wow-duration="5s">
            <a class="btn-1" href="#">Put me to your liking</a>
          </div>
        </div>
        <!-- contemnt tkee contenido doll -->
        <div class="take">
          <p>
            Hello guys! I am a 23 year old Colombian girl. My friends call me Reyna because I am the queen of their
            hearts. I was born in stunning Colombia full of colours and music. I am from the Pacific coast. We feel
            thankful just to be alive and enjoy the sun and the sea every day. Would you like to become part of me?
            I am very friendly, love to go out and dance and drink some cocktails; besides I like to be silent and
            contemplate a nice view. I have time for party but I also need to be on my own. Are you a guy that wants to
            be all the time with people? Would you be able to be just with me and enjoy it?
          </p>

          <!-- btn -->
          <div class="content-btn-detail">
            <div class="btns animated wow fadeInUp btn-buy" data-wow-duration="5s">
              <a class="btn-1 " href="#">Take me home</a>
            </div>
          </div>
          <!-- bnt  -->
        </div>
        <!-- content tae-->
        </div>
     
      </div>
        <!-- tabs -->
				<section>
				<div class="tabs tabs-style-underline">
					<nav>
						<ul>
							<li><a href="#section-underline-1" class="icon icon-home"><span>Home</span></a></li>
							<li><a href="#section-underline-2" class="icon icon-gift"><span>Deals</span></a></li>
							<li><a href="#section-underline-3" class="icon icon-upload"><span>Upload</span></a></li>
							<li><a href="#section-underline-4" class="icon icon-coffee"><span>Work</span></a></li>
							<li><a href="#section-underline-5" class="icon icon-config"><span>Settings</span></a></li>
						</ul>
					</nav>
					<div class="content-wrap">
						<section id="section-underline-1"><p>1</p></section>
						<section id="section-underline-2"><p>2</p></section>
						<section id="section-underline-3"><p>3</p></section>
						<section id="section-underline-4"><p>4</p></section>
						<section id="section-underline-5"><p>5</p></section>
					</div><!-- /content -->
				</div><!-- /tabs -->
			</section>
        <!-- end tabs -->
    </div> <!--row-->
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
