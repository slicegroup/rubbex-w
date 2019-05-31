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
        <p class=""> <?php echo $product->get_price_html(); ?></p>
        <div class="btns animated wow fadeInUp ml-auto" data-wow-duration="5s">
          <a href="#tabs" class="btn-1" href="#">Put me to your liking</a>
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
            <a class="btn-1 " href="<?php echo bloginfo('url');?>/?add-to-cart=<?php echo get_the_ID (); ?>">Take me
              home</a>
          </div>
        </div>
        <!-- bnt  -->
      </div>
      <!-- content tae-->
    </div>

  </div>
  <!-- Tabs -->
  <section id="tabs">
    <div class="container">
      <!-- <h6 class="section-title h1">Tabs</h6> -->
      <div class="row">
        <div class="col-xs-12 ">
          <nav>


            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
		


              <a class="nav-item nav-link active" id="nav-skin-tab" data-toggle="tab" href="#nav-skin" role="tab"
                aria-controls="nav-skin" aria-selected="true">Skin tone</a>
              <a class="nav-item nav-link" id="nav-face-tab" data-toggle="tab" href="#nav-face" role="tab"
                aria-controls="nav-face" aria-selected="false">Face</a>
              <a class="nav-item nav-link" id="nav-hair-tab" data-toggle="tab" href="#nav-hair" role="tab"
                aria-controls="nav-hair" aria-selected="false">Hair</a>
              <a class="nav-item nav-link" id="nav-eye-tab" data-toggle="tab" href="#nav-eye" role="tab"
                aria-controls="nav-eye" aria-selected="false">Eye Colour</a>

              <a class="nav-item nav-link" id="nav-vagina-tab" data-toggle="tab" href="#nav-vagina" role="tab"
                aria-controls="nav-vagina" aria-selected="false">Removable Vagina</a>
              <a class="nav-item nav-link" id="nav-stand-tab" data-toggle="tab" href="#nav-stand" role="tab"
                aria-controls="nav-stand" aria-selected="false">Stand Feet </a>

              <a class="nav-item nav-link" id="nav-voice-tab" data-toggle="tab" href="#nav-voice" role="tab"
                aria-controls="nav-voice" aria-selected="false">Voice System </a>



            </div>
          </nav>
          <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-skin" role="tabpanel" aria-labelledby="nav-skin-tab">

              <input type="checkbox" class="check" name="check1" id="check1">
              <label class="layout" for="check1"></label>

              <input type="checkbox" class="check" name="check2" id="check2">
              <label class="layout" for="check2"></label>

              <input type="checkbox" class="check" name="check3" id="check3">
              <label class="layout" for="check3"></label>


              <div class="tab-pane fade" id="nav-face" role="tabpanel" aria-labelledby="nav-face-tab">
              2
            </div>



              <div class="content-img-tab">
  <?php
                      /**
                      * woocommerce_single_product_summary hook.
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
            <div class="tab-pane fade" id="nav-face" role="tabpanel" aria-labelledby="nav-face-tab">
              2
            </div>
            <div class="tab-pane fade" id="nav-hair" role="tabpanel" aria-labelledby="nav-hair-tab">
              3
            </div>
            <div class="tab-pane fade" id="nav-eye" role="tabpanel" aria-labelledby="nav-eye-tab">
              4
            </div>
          </div><!-- end1tabs-->

          <div class="tab-pane fade" id="nav-face" role="tabpanel" aria-labelledby="nav-face-tab">
            2
          </div>
          <div class="tab-pane fade" id="nav-hair" role="tabpanel" aria-labelledby="nav-hair-tab">
            3
          </div>
          <div class="tab-pane fade" id="nav-eye" role="tabpanel" aria-labelledby="nav-eye-tab">
            4
          </div>

          <div class="tab-pane fade" id="nav-vagina" role="tabpanel" aria-labelledby="nav-vagina-tab">
            5
          </div>

          <div class="tab-pane fade" id="nav-stand" role="tabpanel" aria-labelledby="nav-stand-tab">
            6
          </div>
          <div class="tab-pane fade" id="nav-voice" role="tabpanel" aria-labelledby="nav-voice-tab">
            7
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!--row-->
</div>
<div>