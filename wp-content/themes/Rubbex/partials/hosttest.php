
    <section class="hott-section space">
        <h1 class="titulos cssanimation leFadeIn sequence " data-wow-iteration="2">Sexiest Companions</h1>
        <div class="best">
            <div class="main container">
                <div class="active" id="prueba">

                   <div class="slider slider-for">
                    <!-- slider -->

                     <?php $args = array( 'post_type' => 'product'); ?>

                         <?php $loop = new WP_Query( $args ); ?>
                         <?php while ( $loop->have_posts() ) : $loop->the_post(); if ( get_field( 'hottest' ) == 1 ):global $product;  ?>
                    <div class="content-best">
                        <div class="row">
                           
                           
                            <div class="col-md-12  animated wow fadeInRight " data-wow-duration="3s">

                                <div class="img-best ml-md-auto" style="background:url(<?php echo get_the_post_thumbnail_url(); ?>); width: 100% !important; height: 253px; background-size: cover !important;"> </div>

                            </div>
                        </div>
                    </div>
                    <?php endif; endwhile; ?>
                </div>
            </div>
                <div class="slider slider-for">

                     <?php $args = array( 'post_type' => 'product'); ?>

                         <?php $loop = new WP_Query( $args ); ?>
                         <?php while ( $loop->have_posts() ) : $loop->the_post(); if ( get_field( 'hottest' ) == 1 ):global $product;  ?>
                    <div class="content-best">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="title-best animated wow fadInDown" data-wow-duration="2s">
                                    <div class="title-best ">
                                        
                                        <h3 class=""><?php the_field( 'greeting' ); ?></h3>
                                        <span><?php the_field( 'motto' ); ?></span>
                                        <p><?php the_field( 'biography' ); ?></p>
                                        <div class="btns animated wow fadeInUp " data-wow-duration="5s">
                                            <a class="btn-1" href="<?php the_permalink(); ?>">see more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            <div class="col-md-6 animated wow fadeInRight " data-wow-duration="3s">

                                <div class="img-best ml-md-auto" style="background:url(<?php echo get_the_post_thumbnail_url(); ?>)"> </div>

                            </div>
                        </div>
                    </div>
                    <?php endif; endwhile; ?>
                    

                </div>
                <div class="slider slider-nav animated wow fadeInLeft col-md-7" data-wow-duration="3.5s">
                    <!-- miiniaturas -->
                       <?php $args = array( 'post_type' => 'product');?>
                         <?php $loop = new WP_Query( $args ); ?>
                         <?php while ( $loop->have_posts() ) : $loop->the_post();  if ( get_field( 'hottest' ) == 1 ): global $product; ?>
                    <div class="content-mini">
                        <div class="miniaturas" style="background:url('<?php echo get_the_post_thumbnail_url(); ?>')"></div>
                    </div>
                         <?php endif; endwhile; ?>
                    

                </div>
            </div>
        </div>
    </section>

