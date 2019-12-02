<section class="header-mobile mobile-show">
  <nav id="mobile-links" class="mobile-navigation" role="navigation">
    <?php 
      $args = [
        'theme_location'    =>    'main-menu'
          ];
          wp_nav_menu( $args );
    ?>
  </nav>
  <div id="menu-btn">
      <span id="first-span" class="menu-btn-span"></span>
      <span id="second-span" class="menu-btn-span"></span>
      <span id="last-span" class="menu-btn-span"></span>
  </div>
</section><!-- .Header bottom right  --> 