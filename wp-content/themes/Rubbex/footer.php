
    <!-- Footer section -->

    <footer class="footer-section">
        <div>
            <img class="wave" src="img/wave1.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img style="    margin-bottom: 50px;" src="<?php echo get_template_directory_uri();?>/assets/img/logos/byr.svg" width="70%" alt="">
                    <ul class="term">
                        <li>
                            <a href="#">Terms and Conditions</a>
                        </li>
                        <li>
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#">Shipping Policy</a>
                        </li>
                        <li>
                            <a href="#">Help & Info</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h2>Contact Us</h2>
                    <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 5, 'title' => false, 'description' => false ) ); ?>
                    <!-- <form>
                        <div class="group">
                            <input type="text" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Name*</label>
                        </div>
                        <div class="group">
                            <input type="text" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Email*</label>
                        </div>
                        <div class="group">
                            <input type="text" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Mesaage*</label>
                        </div>
                        <div class="btns animated wow fadeInUp " data-wow-duration="5s">
                            <a class="btn-1" href="#">Send</a>
                        </div>
                    </form> -->
                </div>
                <div class="col-md-4">
                    <h2>Follow us on instagram</h2>
                    <div class="elfsight-app-11f11be6-22d6-4f36-9c00-215724662142"></div>
                </div>

                <div class="copy">
                    <p>Copyright Rubbex 2019 | Powered by Slice Group</p>
                </div>

            </div>

    </footer>
    <!-- Footer section end -->


    <!-- Search model -->
    <!-- <div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div> -->
    <!-- Search model end -->


    <!--====== Javascripts & Jquery ======-->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.2.1.min.js"></script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/offcanvas.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/isotope.pkgd.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/circle-progress.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js">
    <!-- <script src="https://s.codepen.io/assets/libs/modernizr.js"></script> -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/cssanimation-gsap.min.js"></script>
    <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <script>
        new WOW().init();
        
                setTimeout(function () {
          $('#eapps-instagram-feed').find('a').last().css('display', 'none')
        }, 1500)
    </script>
    <?php wp_footer(); ?>
</body>

</html>