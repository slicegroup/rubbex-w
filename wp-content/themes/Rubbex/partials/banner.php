<?php $args = array( 'post_type' => 'banner', 'posts_per_page' => 1); ?>   
<?php $loop = new WP_Query( $args ); ?>
 <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <section class="banner">
        <div class="mask"> </div>
        <!-- <div class="video" style="background: url(img/doll.jpg)"> -->
        <img class="video" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">

        <div class="titulo container">
            <h1 class="cssanimation leFadeIn sequence "><?php the_title(); ?></h1>
            <h3 class=""><?php the_title(); ?></h3>
        </div>
        </div>
        <img class="wave" src="<?php echo get_template_directory_uri();?>/assets/img/wave.svg" alt="">
    </section>
 <?php endwhile; ?>