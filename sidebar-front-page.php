<?php 
  if (is_active_sidebar( 'front-page-sidebar' )){;?>
    <aside class="widget-area sidebar page-sidebar flex-1">
      <?php dynamic_sidebar( 'front-page-sidebar' );?>
  </aside><!-- .front page-sidebar -->
   <?php
  }
;?>