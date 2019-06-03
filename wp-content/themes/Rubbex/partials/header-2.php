<!-- <div class="container">
        <header class="header-sen">
            <nav class="navbar navbar-expand-lg fixed-top header-2" style=" box-shadow: 0px 0px 9px #00000012!important;">
                <a href="<?php bloginfo('url'); ?>" id="change" class="site-logo">
								<img src="<?php echo get_template_directory_uri();?>/assets/img/logos/logo-p.svg"  class="logo-w" alt="" >
								<img src="<?php echo get_template_directory_uri();?>/assets/img/logos/logo-p.svg" class=" two" alt="">
							</a>
                <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                       
						  <span class="navbar-toggler-icon bx bx-menu-alt-right"></span>
						</button>
                <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php bloginfo('url'); ?>">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Dolls</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Help & Info</a>
                        </li>
                        <li class="nav-item" style="margin-left: 20px;">
                            <a class="nav-link damn-search 
                            " href="#">
                            <form action="<?php echo esc_url( $action_link ) ?>" id="frm_search_form" method="get" class="searchform">                
                            <div id="custom-search">
                                    <input type="text" name="s" class="search-query" placeholder="Search" />
                                    <button type="button">
                                            <i class='bx bx-search-alt'></i>
                                    </button>
                                    <input type="submit" value="<?php echo esc_attr( FrmAppHelper::get_param( 'frm_search', '', 'get', 'sanitize_text_field' ) ); ?>" style="display: none;">
                                </div>
                                  </form> 
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php bloginfo('url') ?>/my-account"><i class='bx bx-user'  ></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php bloginfo('url') ?>/cart">	<i class='bx bx-cart' '  ></i></a>
                        </li>
                        <!-- <li class="nav-item dropdown">
							  <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Settings</a>
							  <div class="dropdown-menu" aria-labelledby="dropdown01">
								<a class="dropdown-item" href="#">Action</a>
								<a class="dropdown-item" href="#">Another action</a>
								<a class="dropdown-item" href="#">Something else here</a>
							  </div>
							</li> 
                    </ul>

                </div>
            </nav>

            <!--	<div class="search-switch">
				<img src="img/search-icon.png" alt="">
			</div>
        </header>
    </div> -->