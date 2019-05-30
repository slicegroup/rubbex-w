<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );
get_template_part('partials/header-2'); 
?>


<section class="shop-section">
        <h1 class="titulos cssanimation leFadeIn sequence" data-wow-iteration="5" data-wow-duration="0.15s">Most Requested Companions</h1>
        <div class="container">
            <div class="row">
                <?php $args = array( 'post_type' => 'product' ); ?>
                 <?php $loop = new WP_Query( $args ); ?>

                 <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                   
                <div class="col-lg-3 col-sm-6 animated wow fadeInLeft" data-wow-duration="3s">
                <a href="<?php the_permalink() ?>">
                    <div class="shop-item">
                        <div class="mask-shop"></div>
                        <!-- <i class='bx bxs-show'></i> -->
                        <?php the_post_thumbnail('medium'); ?>

                        <div class="content-doll add-card">
                            <p class="mr-auto"><?php the_title(); ?></p>
                         <div class="price-firts">
                         <p class="ml-auto"><?php echo $product->get_price_html(); ?></p>
                         </div>
                            <!-- <span>158 cm</span> -->
                        </div>

                    </div>
                    </a>
                </div>
            
                
                  <?php endwhile; ?>
              
            </div>

        </div>
    </section>

<?php get_footer(); ?>
