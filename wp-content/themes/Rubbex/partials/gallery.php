 <section class="space ">
        <h1 class="titulos cssanimation leFadeIn sequence" data-wow-iteration="5" data-wow-duration="0.15s">Build Your Perfect Companion</h1>
        <div class="portfolio-section">
            <div class="portfolio-gallery">
                <div class="portfolio-item set-bg animated wow fadeInLeft" data-wow-duration="2s" data-setbg="https://lumidolls.com/222-home_default/either-sexdoll.jpg">
                    <!-- <a href=""></a>loadmore</a> -->
                </div>
                <div class="portfolio-item --disable">
                </div>
                 <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 1, 'offset' => 0); ?>
                 <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                <div class="portfolio-item set-bg animated wow fadeInLeft" data-wow-duration="3s" data-setbg="<?php echo get_the_post_thumbnail_url(); ?>">
                    <!-- <a href="">loadmore</a> -->
                </div>
                <?php endwhile; ?>

               <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 1, 'offset' => 1); ?>
                 <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                <div class="portfolio-item --big set-bg animated wow fadeInLeft" data-wow-duration="2s" data-setbg="<?php echo get_the_post_thumbnail_url(); ?>">
                    <!-- <a href="">loadmore</a> -->
                </div>
                <?php endwhile; ?>

               <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 1, 'offset' => 2 ); ?>
                 <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                   
                <div class="portfolio-item  dialog set-bg" data-setbg="<?php echo get_the_post_thumbnail_url(); ?>">
                    <!-- <a href="">loadmore</a> -->
                </div>
                <?php endwhile; ?>

                  <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 1, 'offset' => 3 ); ?>
                 <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                <div class="portfolio-item set-bg animated wow fadeInRight" data-wow-duration="2s" data-setbg="<?php echo get_the_post_thumbnail_url(); ?>">
                    <!-- <a href="">loadmore</a> -->
                </div>
                 <?php endwhile; ?>

                  <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 1, 'offset' => 4 ); ?>
                 <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                <div class="portfolio-item set-bg animated wow fadeInRight" data-wow-duration="3s" data-setbg="<?php echo get_the_post_thumbnail_url(); ?>">
                    <!-- <a href="">loadmore</a> -->
                </div>
                 <?php endwhile; ?>

                  <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 1, 'offset' => 5 ); ?>
                 <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                   <div class="portfolio-item set-bg animated wow fadeInRight" data-wow-duration="3s" data-setbg="<?php echo get_the_post_thumbnail_url(); ?>">
                    <!-- <a href="">loadmore</a> -->
                </div>
                 <?php endwhile; ?>

                  <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 1, 'offset' => 6 ); ?>
                 <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                <div class="portfolio-item set-bg animated wow fadeInRight" data-wow-duration="2s" data-setbg="<?php echo get_the_post_thumbnail_url(); ?>">
                    <!-- <a href="">loadmore</a> -->
                </div>
                 <?php endwhile; ?>

                  <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 1, 'offset' => 7 ); ?>
                 <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                <div class="portfolio-item set-bg animated wow fadeInRight" data-wow-duration="3s" data-wow-duration="2s" data-setbg="<?php echo get_the_post_thumbnail_url(); ?>">
                    <!-- <a href="">loadmore</a> -->
                </div>
                 <?php endwhile; ?>

                  <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 1, 'offset' => 8 ); ?>
                 <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                <div class="portfolio-item set-bg animated wow fadeInLeft" data-wow-duration="2s" data-setbg="<?php echo get_the_post_thumbnail_url(); ?>">
                    <!-- <a href="">loadmore</a> -->
                </div>
                 <?php endwhile; ?>

                  <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 1, 'offset' => 9 ); ?>
                 <?php $loop = new WP_Query( $args ); ?>
                 <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                <div class="portfolio-item set-bg animated wow fadeInLeft" data-wow-duration="3s" data-setbg="<?php echo get_the_post_thumbnail_url(); ?>">
                    <!-- <a href="">loadmore</a> -->
                </div>
                 <?php endwhile; ?>
            </div>
        </div>
    </section>