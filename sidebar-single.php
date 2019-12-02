<?php 
  if (is_active_sidebar( 'single-sidebar' )){;?>
    <aside class="widget-area sidebar single-sidebar flex-1">
      <?php dynamic_sidebar( 'single-sidebar' );?>
   </aside><!-- .single-sidebar -->
   <?php
  }
;?>
