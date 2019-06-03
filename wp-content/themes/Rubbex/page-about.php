<?php get_header(); ?>
  <div class="container" style="margin-top:110px">
  <h1 class="titulos cssanimation leFadeIn sequence " data-wow-iteration="2">About Us</h1>
<div class="row content-dolls">
  <div class="col-md-6">
    <div class="dolls" style="background:url(<?php echo get_template_directory_uri();?>/assets/img/doll.png)"></div>
  </div>
  <div class="col-md-6 content-p-dolls">
<div class="">
<p>We provide a range of exotic dolls for affordable prices at the highest quality. We also prioritize the privacy and security of all our customers. We ensure that we meet the demands and expectations of our clients. Your secret is safe with us ;)</p>
</div>
  </div>
</div>

  </div>
  <?php  get_template_part('partials/gallery'); ?>

  <style>
  .dolls{
    width: 100%;
    height: 330px;
    background-size: 64%!important;
    background-repeat: no-repeat!important;
    margin: 0 50px;
  }
  .content-dolls{
    box-shadow: 0px 4px 5px -2px rgba(0, 0, 0, 0.2), 0px 7px 10px 1px rgba(0, 0, 0, 0.14), 0px 2px 16px 1px rgba(0, 0, 0, 0.12);
    margin-bottom:50px;
    padding-top: 20px;
    border-radius: 10px;
  }
  .content-p-dolls{
    color: #602052;
    justify-content: center;
    align-items: center;
    display: flex;
    font-size:18px;
  }
  .
  </style>
<?php get_footer(); ?>
