<div class="header-bottom">
          <div class="container d-flex flex-between flex-center">
            <section class="header-bottom--left d-flex flex-center">
              <div class="branding d-flex flex-center">
                <div class="logo my-1 mr-1 d-flex flex-center"><?php the_custom_logo();?></div>
                <p class="site-title d-flex flex-center">
                  <a href="<?php echo esc_url(home_url('/'));?>" role="home">
                    <?php bloginfo('name') ;?>
                  </a>  
                </p>
              </div>
            </section><!-- .Header bottom left  -->
            <?php 
            if (is_active_sidebar('header_bottom_center')){
               dynamic_sidebar('header_bottom_center');
                };?>
            <section class="header-bottom--right d-flex flex-center">
              <nav id="site-navigation" class="main-navigation" role="navigation">
                <?php 
                  $args = [
                    'theme_location'    =>    'main-menu'
                  ];
                  wp_nav_menu( $args );
                  ?>
                  <div id="menu-btn">
                    <span id="first-span" class="menu-btn-span"></span>
                    <span id="second-span" class="menu-btn-span"></span>
                    <span id="last-span" class="menu-btn-span"></span>
                  </div>
                </nav>
            </section><!-- .Header bottom right  --> 
        </div><!-- .Container  -->
      </div><!-- .Header bottom  -->