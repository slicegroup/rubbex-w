<div class="publicidad container">

   <?php $args = array( 'post_type' => 'advertising'); ?>

   <?php $loop = new WP_Query( $args ); ?>
  <?php while ( $loop->have_posts() ) : $loop->the_post(); if ( get_field( 'horizontal_banner' ) == 1 ):  ?>

       <div class="publiciad-img" style="background:url(<?php the_field( 'banner_image' ); ?>)"></div>

 <?php endif; endwhile; ?>
  


</div>

<style>
.publiciad-img{
    background-size: 100%!important;
    width: 100%;
    height: 200px;
    background-position: center!important;
    object-fit: cover;
    background-repeat: no-repeat!important;
}
.space-s{
    margin: 50px 0 70px!important;
}
.space-new{
    margin: 50px 0!important;
}
</style>