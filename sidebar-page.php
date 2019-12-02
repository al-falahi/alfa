<?php 
  if (is_active_sidebar( 'page-sidebar' )){;?>
    <aside class="widget-area sidebar page-sidebar flex-1">
      <?php dynamic_sidebar( 'page-sidebar' );?>
  </aside><!-- .page-sidebar -->
   <?php
  }
;?>